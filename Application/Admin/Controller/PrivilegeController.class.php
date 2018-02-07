<?php
namespace Admin\Controller;
use Think\Controller;

class PrivilegeController extends CommonController{
	public function lst(){
		$pris = D('privilege')->get_tree();
		$this->assign('pris',$pris);
		$this->display();
	}


	// 添加权限
	public function add(){
		$pri = D('privilege');
		if(IS_POST){
			$data['pri_name'] = trim(I('pri_name'));
			$data['mname'] = trim(I('mname'));
			$data['cname'] = trim(I('cname'));
			$data['aname'] = trim(I('aname'));
			$data['parentid'] = trim(I('parentid'));
			if($pri->add($data)){
				$this->success('添加权限成功!',U('lst'));
			}else{
				$this->error('添加权限失败!');
			}

			return;
		}
		$pris = $pri->get_tree();
		$this->assign('pris',$pris);
		$this->display();
	}



	public function edit($id){
		$pri =  D('privilege');
		if(IS_POST){
			$data['id'] = I('id');
			$data['pri_name'] = trim(I('pri_name'));
			$data['mname'] = trim(I('mname'));
			$data['cname'] = trim(I('cname'));
			$data['aname'] = trim(I('aname'));
			$data['parentid'] = trim(I('parentid'));
			if($pri->save($data)!==false){
				$this->success('修改权限成功!',U('lst'));
			}else{
				$this->error('修改权限失败!');
			}

			return;
		}

		$pri_n = $pri->find($id);  // 查处权限的单条信息
		$pris = $pri->get_tree();  //查出所有权限名
		$this->assign('pris',$pris);
		$this->assign('pri_n',$pri_n);
		$this->display();
	}


	public function del($id){
		if(D('privilege')->delete($id)){
			$this->success('删除权限成功!',U('lst'));
		}else{
			$this->error('删除权限失败!');
		}
	}
}