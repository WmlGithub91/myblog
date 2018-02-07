<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends CommonController {
	public function index(){
		$ins = D('content_logo')->find();
		$realip = $this->GetIp();

		// 首页文章轮播文章操作
		$art = D('article');
		$where = 'rem=5';
		// 根据关键词查
		if($keywords = trim(I('keywords'))){
			$where .= ' AND title LIKE "%'.$keywords.'%"';
		}
		// 加上栏目分类搜索
		if($cateid = I('cateid')){
			$where .= ' AND cateid='.$cateid; 
		}
		$count = $art->where($where)->count();// 查询满足要求的总记录数
		$Page = new \Think\Page($count,8);// 实例化分页类 传入总记录数和每页显示的记录数
		$Page -> setConfig('header','共%TOTAL_ROW%条');	
		$Page -> setConfig('prev','上一页');
		$Page -> setConfig('next','下一页');
		$Page -> setConfig('theme','%HEADER% %FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%');
		$show = $Page->show();// 分页显示输出

		$arts = $art->field('a.*,b.catename catename')->alias('a')->join('LEFT JOIN cate b ON a.cateid=b.id')->where($where)->limit($Page->firstRow.','.$Page->listRows)->order('a.id desc')->select();
		$cates = D('cate')->get_tree();
		$this->assign('page',$show);// 赋值分页输出
		$this->assign('arts',$arts);
		$this->assign('cates',$cates);

		$this->assign('realip',$realip);
		$this->assign('ins',$ins);
		$this->display();

	}


	// 网站后台介绍和logo修改
	public function edit(){
		if(IS_POST){
			$data['id'] = I('id');
			//去掉标签
 			$content = I('content');
 			$data['content']=strip_tags($content);

			if($_FILES['logo_pic']['tmp_name'] != ''){
				   $upload = new \Think\Upload();// 实例化上传类
			                $upload->maxSize = 3145728 ;// 设置附件上传大小
			                $upload->exts = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
			                $upload->rootPath = './Public'; // 设置附件上传根目录
			                $upload->savePath = '/Uploads/'; // 设置附件上传（子）目录
			                
			                // 上传单个文件
			                $info = $upload->uploadOne($_FILES['logo_pic']);
			                if(!$info) {// 上传错误提示错误信息
			                    	$this->error($upload->getError());
			                }else{// 上传成功 获取上传文件信息
			                   	 $data['logo_pic'] =  $info['savepath'].$info['savename'];
			                }
			}

			if(D('content_logo')->save($data) !==false){
				$this->success('修改成功!',U('index'));
			}else{
				$this->error('修改失败!');
			}

			return;
		}
		$ins = D('content_logo')->find();
		$this->assign('ins',$ins);
		$this->display();
	}


	// 获取真实IP
	public function GetIp(){
		        $realip = '';  
		        $unknown = 'unknown';  
		        if (isset($_SERVER)){  
		            if(isset($_SERVER['HTTP_X_FORWARDED_FOR']) && !empty($_SERVER['HTTP_X_FORWARDED_FOR']) && strcasecmp($_SERVER['HTTP_X_FORWARDED_FOR'], $unknown)){  
		                $arr = explode(',', $_SERVER['HTTP_X_FORWARDED_FOR']);  
		                foreach($arr as $ip){  
		                    $ip = trim($ip);  
		                    if ($ip != 'unknown'){
		                        $realip = $ip;  
		                        break;  
		                    }  
		                }  
		            }else if(isset($_SERVER['HTTP_CLIENT_IP']) && !empty($_SERVER['HTTP_CLIENT_IP']) && strcasecmp($_SERVER['HTTP_CLIENT_IP'], $unknown)){  
		                $realip = $_SERVER['HTTP_CLIENT_IP'];  
		            }else if(isset($_SERVER['REMOTE_ADDR']) && !empty($_SERVER['REMOTE_ADDR']) && strcasecmp($_SERVER['REMOTE_ADDR'], $unknown)){  
		                $realip = $_SERVER['REMOTE_ADDR'];  
		            }else{  
		                $realip = $unknown;  
		            }  
		        }else{  
		            if(getenv('HTTP_X_FORWARDED_FOR') && strcasecmp(getenv('HTTP_X_FORWARDED_FOR'), $unknown)){  
		                $realip = getenv("HTTP_X_FORWARDED_FOR");  
		            }else if(getenv('HTTP_CLIENT_IP') && strcasecmp(getenv('HTTP_CLIENT_IP'), $unknown)){  
		                $realip = getenv("HTTP_CLIENT_IP");  
		            }else if(getenv('REMOTE_ADDR') && strcasecmp(getenv('REMOTE_ADDR'), $unknown)){  
		                $realip = getenv("REMOTE_ADDR");  
		            }else{  
		                $realip = $unknown;  
		            }  
		        }  
		        $realip = preg_match("/[\d\.]{7,15}/", $realip, $matches) ? $matches[0] : $unknown;  
		        return $realip;  
	}


	


}