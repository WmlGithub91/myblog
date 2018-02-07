<?php
namespace Admin\Controller;
use Think\Controller;

class RoleController extends CommonController{
	public function lst(){
		$role = D('role');
		$count = $role->count();// 查询满足要求的总记录数
		$Page = new \Think\Page($count,8);// 实例化分页类 传入总记录数和每页显示的记录数
		$Page -> setConfig('header','共%TOTAL_ROW%条');	
		$Page -> setConfig('prev','上一页');
		$Page -> setConfig('next','下一页');
		$Page -> setConfig('theme','%HEADER% %FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%');
		$show = $Page->show();// 分页显示输出
		 /* 
		        数据库知识:显示权限名称
		        group_concat():会计算哪些行属于同一组，将属于同一组的列显示出来。要返回哪些列，由函数参数(就是字段名)决定。
		        FIND_IN_SET(str,strlist)函数:查询字段(strlist)中包含(str)的结果，返回结果为null或记录,使用find_in_set函数一次返回多条记录

		        SELECT a.*,GROUP_CONCAT(b.pri_name) FROM role a LEFT JOIN privilege b ON FIND_IN_SET(b.id,a.pri_id_list) GROUP BY a.id;
		 */
		$roles = $role->field('a.*,GROUP_CONCAT(b.pri_name) pri_name')->alias('a')->join('LEFT JOIN privilege b ON FIND_IN_SET(b.id,a.pri_id_list)')->group('a.id')->limit($Page->firstRow.','.$Page->listRows)->select();

		$this->assign('roles',$roles);
		$this->assign('page',$show);// 赋值分页输出
		$this->display();
	}


	public function add(){
		$role = D('role');
		if(IS_POST){
			$data['rolename'] = trim(I('rolename'));
			$data['pri_id_list'] = implode(',',I('pri_id_list'));
			if($role->add($data)){
				$this->success('添加角色成功!',U('lst'));
			}else{
				$this->error('添加角色失败!');
			}

			return;
		}
		$pris = D('privilege')->get_tree();
		$this->assign('pris',$pris);
		$this->display();
	}



	public function edit($id){
		$role = D('role');
		if(IS_POST){
			$data['id'] = trim(I('id'));
			$data['rolename'] = trim(I('rolename'));
			$data['pri_id_list'] = implode(',',I('pri_id_list'));
			if($role->save($data)!==false){
				$this->success('修改角色成功!',U('lst'));
			}else{
				$this->error('修改角色失败!');
			}

			return;
		}
		$roles = $role->find($id);
		$arr = explode(',',$roles['pri_id_list']);

		$pris = D('privilege')->get_tree();
		$this->assign('pris',$pris);
		$this->assign('roles',$roles);
		$this->assign('arr',$arr);
		$this->display();
	}


	public function del($id){
		if(D('role')->delete($id)){
			$this->success('删除角色成功!',U('lst'));
		}else{
			$this->error('删除角色成功!');
		}
	}
}