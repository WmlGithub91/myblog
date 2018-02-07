<?php
namespace Home\Controller;
use Think\Controller;

class ImgController extends CommonController{
	public function index(){
		$imgs = D('article')->field('pic,keywords')->order('id desc')->select();

		$this->assign('imgs',$imgs);
		$this->display();
	}
}