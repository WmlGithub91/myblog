<?php
namespace Home\Controller;
use Think\Controller;
class ArticleController extends CommonController {

    // 获取头部导航信息
    	public function index(){
    		$art = D('article');
    		$id = I('artid');
   		$where = 'a.id='.$id;
    		$info = $art->field('a.*,b.catename catename,b.id cateid')->alias('a')->join('LEFT JOIN cate b ON a.cateid=b.id')->where($where)->find();
    	
    		if($info){
	    		// 评论展示
	    		$msgs = D('msg')->where('artid='.$id)->order('id desc')->select();
	    		// 上一页,下一页方法调用
	            	$this->page($id,$info['cateid']);
	            	// 文章阅读量,每次加1
	            	$art->where(array('id'=>$id))->setInc('num'); 			
			$this->assign('info',$info);
			$this->assign('msgs',$msgs);
	            	$this->display();
    		}else{
    			$this->display('Error/404');
    		}
   	}


   	public function msg_add(){
   		$msg = D('msg');

   		if(IS_POST){
   			$cateid = I('cateid');
   			$artid = I('artid');
   			$data['name'] = I('name');
   			$data['email'] = I('email');
			$data['content'] = I('content');
			$data['artid'] = $artid;
			$data['time'] = time();



			if($_FILES['pic']['tmp_name'] != ''){
				   $upload = new \Think\Upload();// 实例化上传类
			                $upload->maxSize = 3145728 ;// 设置附件上传大小
			                $upload->exts = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
			                $upload->rootPath = './Public'; // 设置附件上传根目录
			                $upload->savePath = '/Uploads/'; // 设置附件上传（子）目录
			                
			                // 上传单个文件
			                $info = $upload->uploadOne($_FILES['pic']);
			                if(!$info) {// 上传错误提示错误信息
			                    	$this->error($upload->getError());
			                }else{// 上传成功 获取上传文件信息
			                   	 $data['pic'] =  $info['savepath'].$info['savename'];
			                }
			}

			if($msg->add($data)){
				$this->success('评论成功!',U("Home/Article/index/cateid/".$cateid."/artid/".$artid));
			}else{
				$this->error('评论失败!');
			}

			return;
   		}
   	}



   	// 上一页,下一页
	    public function page($id,$cateid){ // $cateid代表该栏目下的上一页和下一页
		        $art = D('article');
		        // 下一页
		        $where = array(
		            'id' => array('gt',$id),
		            'cateid' => array('eq',$cateid),
		        );
		        $next = $art->where($where)->order('id asc')->limit(1)->select();
		        if($next){
		            $next = $next[0];
		        }else{
		            $next = null;
		        }

		        // 上一页
		        $where = array(
		            'id' => array('lt',$id),
		            'cateid' => array('eq',$cateid),
		        );
		        $prev = $art->where($where)->order('id desc')->limit(1)->select();
		        if($prev){
		            $prev = $prev[0];
		        }else{
		            $prev = null;
		        }

		        // 分配模板
		        $this->assign('next',$next);
		        $this->assign('prev',$prev);
	    }


}