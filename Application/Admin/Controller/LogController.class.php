<?php
namespace Admin\Controller;
use Think\Controller;

class LogController extends CommonController{
	public function login_log(){
		$log = D('login_log');
		$where = 1;
		if($keywords = I('keywords')){
			
			$where .= ' AND username LIKE "%'.$keywords.'%" ';
		}

		$count = $log->where($where)->count();// 查询满足要求的总记录数
		$Page = new \Think\Page($count,8);// 实例化分页类 传入总记录数和每页显示的记录数
		$Page -> setConfig('header','共%TOTAL_ROW%条');	
		$Page -> setConfig('prev','上一页');
		$Page -> setConfig('next','下一页');
		$Page -> setConfig('theme','%HEADER% %FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%');
		$show = $Page->show();// 分页显示输出
		//进行分页数据查询 注意limit方法的参数要使用Page类的属性
		$info = $log->where($where)->limit($Page->firstRow.','.$Page->listRows)->order('id desc')->select();

		$this->assign('page',$show);// 赋值分页输出
		$this->assign('info',$info);
		$this->display();
	}


}