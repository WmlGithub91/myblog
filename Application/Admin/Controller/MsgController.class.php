<?php
namespace Admin\Controller;
use Think\Controller;

class MsgController extends CommonController{
	public function index(){
		$msg = D('msg');
		$where = 1;

		$count = $msg->count();// 查询满足要求的总记录数
		$Page = new \Think\Page($count,8);// 实例化分页类 传入总记录数和每页显示的记录数
		$Page -> setConfig('header','共%TOTAL_ROW%条');	
		$Page -> setConfig('prev','上一页');
		$Page -> setConfig('next','下一页');
		$Page -> setConfig('theme','%HEADER% %FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%');
		$show = $Page->show();// 分页显示输出

		$msgs = $msg->limit($Page->firstRow.','.$Page->listRows)->order('id desc')->select();

		$this->assign('page',$show);// 赋值分页输出
		$this->assign('msgs',$msgs);

		$this->display();
	}



	// 单条删除
	public function del($id){
		$msg = D('msg')->find($id);
		$pic = $msg['pic'];
		unlink('./Public'.$pic);

		if(D('article')->delete($id)){
			$this->success('单条删除评论成功!',U('lst'));
		}else{
			$this->error('单条删除评论失败!');
		}
	}


	// 多条删除
	public function bdel(){
		$id = I('ids');
		$msg = D('msg');
		foreach($id as $v){
			
			$msgs = $msg->find($v);
			$pic = $msgs['pic'];
			unlink('./Public'.$pic);

		}
		$ids = implode(',',$id);

		if($ids){
			if($msg->delete($ids)){
				$this->success('删除多个评论成功!',U('lst'));
			}else{
				$this->error('删除多个评论失败!');
			}
		}else{
			$this->error('未选中任何评论!');
		}
		
	}
}