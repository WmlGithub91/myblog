<?php
namespace Admin\Controller;
use Think\Controller;

class CateController extends CommonController{

	public function lst(){
		$cates = D('cate')->get_tree();
		$this->assign('cates',$cates);
		$this->display();
	}


	public function add(){
		$cate = D('cate');
		if(IS_POST){
			$data['catename'] =  trim(I('catename'));
			$data['keywords'] =  trim(I('keywords'));
			$data['des'] =  trim(I('des'));
			$data['type'] =  I('type');
			$data['nav_show'] = I('nav_show');
			$data['parentid'] = I('parentid');


			// 文件上传
    			if($_FILES['cate_pic']['tmp_name'] != ''){
			                $upload = new \Think\Upload();// 实例化上传类
			                $upload->maxSize = 3145728 ;// 设置附件上传大小
			                $upload->exts = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
			                $upload->rootPath = './Public'; // 设置附件上传根目录
			                $upload->savePath = '/Uploads/'; // 设置附件上传（子）目录
			                
			                // 上传单个文件
			                $info = $upload->uploadOne($_FILES['cate_pic']);
			                if(!$info) {// 上传错误提示错误信息
			                    	$this->error($upload->getError());
			                }else{// 上传成功 获取上传文件信息
			                   	 $data['cate_pic'] =  $info['savepath'].$info['savename'];
			                }
		            }

		            if($cate->add($data)){
		            		$this->success('新增栏目成功!',U('lst'));
		            }else{
		            		$this->error('新增栏目失败!');
		            }



			return;
		}
		$cates = $cate->get_tree();
		$this->assign('cates',$cates);
		$this->display();

	}


	public function edit($id){
		$cate = D('cate');
		if(IS_POST){
			$data['id'] = I('id');
			$data['catename'] =  trim(I('catename'));
			$data['keywords'] =  trim(I('keywords'));
			$data['des'] =  trim(I('des'));
			$data['type'] =  I('type');
			$data['nav_show'] = I('nav_show');
			$data['parentid'] = I('parentid');

			// 文件上传
    			if($_FILES['cate_pic']['tmp_name'] != ''){
			                $upload = new \Think\Upload();// 实例化上传类
			                $upload->maxSize = 3145728 ;// 设置附件上传大小
			                $upload->exts = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
			                $upload->rootPath = './Public'; // 设置附件上传根目录
			                $upload->savePath = '/Uploads/'; // 设置附件上传（子）目录
			                
			                // 上传单个文件
			                $info = $upload->uploadOne($_FILES['cate_pic']);
			                if(!$info) {// 上传错误提示错误信息
			                    	$this->error($upload->getError());
			                }else{// 上传成功 获取上传文件信息
			                   	 $data['cate_pic'] =  $info['savepath'].$info['savename'];
			                }
		            }


		            if($cate->save($data) !== false){
		            		$this->success('修改栏目成功!',U('lst'));
		            }else{
		            		$this->error('修改栏目失败!');
		            }

			return;
		}
		$cate_one = $cate->find($id);
		$cates = $cate->get_tree();
		$this->assign('cates',$cates);
		$this->assign('cate_one',$cate_one);
		$this->display();
	}


	public function del($id){
		$one = D('cate')->find($id);
		$pic = $one['cate_pic'];
		unlink('./Public'.$pic);
		if(D('cate')->delete($id)){
			$this->success('删除栏目成功!',U('lst'));
		}else{
			$this->error('删除栏目失败!');
		}
	}


	// 栏目排序
	public function cate_sort(){
		$cate = D('cate');

		foreach($_POST as $id=>$sort){
			//修改某一个字段的值:setField()
			$cate->where(array('id'=>$id))->setField('sort',$sort);

		}

		$this->success('更新排序成功',U('lst'));
	}

}