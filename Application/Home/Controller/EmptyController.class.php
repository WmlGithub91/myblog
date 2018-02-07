<?php
namespace Home\Controller;
use Think\Controller;

class EmptyController extends Controller{
	public function _empty(){
        		// $src = 'http://127.0.0.1/myblog/Static/404/404.jpg';
        		// echo "<img src=".$src.">";
        		 $this->display('Error/404');//在Home/view中Error文件夹中
    	}
}