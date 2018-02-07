<?php 
namespace Admin\Controller;
use Think\Controller;

class LinkController extends Controller{
	public function lst(){
		$link = D('link');
		$count = $link->count();// 查询满足要求的总记录数
		$Page = new \Think\Page($count,8);// 实例化分页类 传入总记录数和每页显示的记录数
		$Page -> setConfig('header','共%TOTAL_ROW%条');	
		$Page -> setConfig('prev','上一页');
		$Page -> setConfig('next','下一页');
		$Page -> setConfig('theme','%HEADER% %FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%');
		$show = $Page->show();// 分页显示输出

		$links = $link->limit($Page->firstRow.','.$Page->listRows)->order('sort asc')->select();
		$this->assign('page',$show);// 赋值分页输出
		$this->assign('links',$links);
		$this->display();
	}


	public function add(){
		if(IS_POST){
			$data['linkname'] = I('linkname');
			$data['linkurl'] = I('linkurl');

			if(D('link')->add($data)){
				$this->success('新增友情链接成功',U('lst'));
			}else{
				$this->error('新增友情链接失败');
			}

			return;
		}
		$this->display();
	}


	public function edit($id){
		$link = D('link');
		if(IS_POST){
			$data['id'] = I('id');
			$data['linkname'] = I('linkname');
			$data['linkurl'] = I('linkurl');

			if(D('link')->save($data) !== false){
				$this->success('修改友情链接成功',U('lst'));
			}else{
				$this->error('修改友情链接失败');
			}

			return;
		}
		$links = $link->find($id);
		$this->assign('links',$links);
		$this->display();
	}


	public function del($id){
		if(D('link')->delete($id)){
			$this->success('删除友情链接成功',U('lst'));
		}else{
			$this->error('删除友情链接失败');
		}

	}


	public function link_sort(){
		$link = D('link');
		foreach($_POST as $id=>$sort){
			//修改某一个字段的值:setField()
			$link->where(array('id'=>$id))->setField('sort',$sort);

		}

		$this->success('更新排序成功',U('lst'));
	}
}