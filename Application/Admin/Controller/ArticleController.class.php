<?php
namespace Admin\Controller;
use Think\Controller;

class ArticleController extends CommonController{
	public function lst(){
		$art = D('article');
		$where = 1;
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
		$this->display();
	}



	public function add(){
		$art = D('article');
		if(IS_POST){
			$data['title'] = trim(I('title'));
			$data['keywords'] = trim(I('keywords'));
			$data['author'] = trim(I('author'));
			$data['des'] = trim(I('des'));
			$data['content'] = I('content');
			$data['url'] = trim(I('url'));
			$data['num'] = trim(I('num'));
			$data['rem'] = I('rem');
			$data['cateid'] = I('cateid');
			$data['subtime'] = time();



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

			if($art->add($data)){
				$this->success('新增文章成功!',U('lst'));
			}else{
				$this->error('新增文章失败!');
			}

			return;
		}
		$cates = D('cate')->get_tree();
		$this->assign('cates',$cates);
		$this->display();
	}



	public function edit($id){
		$art = D('article');
		if(IS_POST){
			$data['id'] = I('id');
			$data['title'] = trim(I('title'));
			$data['keywords'] = trim(I('keywords'));
			$data['author'] = trim(I('author'));
			$data['des'] = trim(I('des'));
			$data['content'] = I('content');
			$data['url'] = trim(I('url'));
			$data['num'] = trim(I('num'));
			$data['rem'] = I('rem');
			$data['cateid'] = I('cateid');



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

			if($art->save($data) !==false){
				$this->success('修改文章成功!',U('lst'));
			}else{
				$this->error('修改文章失败!');
			}

			return;
		}

		$arts = $art->find($id);
		$cates = D('cate')->get_tree();
		$this->assign('cates',$cates);
		$this->assign('arts',$arts);
		$this->display();
	}



	// 单条删除
	public function del($id){
		$art = D('article')->find($id);
		$pic = $art['pic'];
		unlink('./Public'.$pic);

		if(D('article')->delete($id)){
			$this->success('单条删除文章成功!',U('lst'));
		}else{
			$this->error('单条删除文章失败!');
		}
	}


	// 多条删除
	public function bdel(){
		$id = I('ids');
		$art = D('article');
		foreach($id as $v){
			
			$arts = $art->find($v);
			$pic = $arts['pic'];
			unlink('./Public'.$pic);

		}
		$ids = implode(',',$id);

		if($ids){
			if($art->delete($ids)){
				$this->success('删除多个文章成功!',U('lst'));
			}else{
				$this->error('删除多个文章失败!');
			}
		}else{
			$this->error('未选中任何文章!');
		}
		
	}



}