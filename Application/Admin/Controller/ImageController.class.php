<?php
namespace Admin\Controller;
use Think\Controller;

class ImageController extends CommonController{
	public function index(){
		$img = D('image');
		$where = 1;
		// 根据关键词查
		if($keywords = trim(I('keywords'))){
			$where .= ' AND title LIKE "%'.$keywords.'%"';
		}
		// 加上栏目分类搜索
		if($artid = I('artid')){
			$where .= ' AND artid='.$artid; 
		}
		$count = $img->where($where)->count();// 查询满足要求的总记录数
		$Page = new \Think\Page($count,10);// 实例化分页类 传入总记录数和每页显示的记录数
		$Page -> setConfig('header','共%TOTAL_ROW%条');	
		$Page -> setConfig('prev','上一页');
		$Page -> setConfig('next','下一页');
		$Page -> setConfig('theme','%HEADER% %FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%');
		$show = $Page->show();// 分页显示输出

		$imgs = $img->field('a.*,b.title titles')->alias('a')->join('LEFT JOIN article b ON a.artid=b.id')->where($where)->limit($Page->firstRow.','.$Page->listRows)->order('a.id asc')->select();

		$arts = D('article')->order('id desc')->select();
		$this->assign('page',$show);// 赋值分页输出
		$this->assign('imgs',$imgs);
		$this->assign('arts',$arts);
		$this->display();
	}



	public function add(){
		$img = D('image');
		if(IS_POST){
			$data['title'] = trim(I('title'));

			$data['des'] = trim(I('des'));
			$data['artid'] = I('artid');
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

			if($img->add($data)){
				$this->success('新增图片成功!',U('index'));
			}else{
				$this->error('新增图片失败!');
			}

			return;
		}

		$this->display();
	}



	public function edit($id){
		$img = D('image');
		if(IS_POST){
			$data['id'] = I('id');
			$data['title'] = trim(I('title'));

			$data['des'] = trim(I('des'));
			$data['artid'] = I('artid');



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

			if($img->save($data) !==false){
				$this->success('修改图片成功!',U('index'));
			}else{
				$this->error('修改图片失败!');
			}

			return;
		}

		$imgs = $img->find($id);
		$arts = D('article')->order('id desc')->select();
		$this->assign('arts',$arts);
		$this->assign('imgs',$imgs);
		$this->display();
	}



	// 单条删除
	public function del($id){
		$img = D('image')->find($id);
		$pic = $img['pic'];
		unlink('./Public'.$pic);

		if(D('image')->delete($id)){
			$this->success('删除图片成功!',U('index'));
		}else{
			$this->error('删除图片失败!');
		}
	}



}