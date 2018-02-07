<?php
namespace Admin\Controller;
use Think\Controller;

class CommonController extends Controller{
	public function __construct(){
		parent::__construct();

                    // 执行留言提醒方法
                    $this->msg_warning();

		if(!session('id')){
    			$this->error('请先登录!',U('Login/index'));
    		}


    		//  当前管理员正在访问的方法    MODULE_NAME.'/'.CONTROLLER_NAME.'/'.ACTION_NAME

    		// 任何管理员都拥有访问首页,和退出的权限
    		if(MODULE_NAME=='Admin' && CONTROLLER_NAME=='Index'){
    			return true;
    		}
    		if(MODULE_NAME=='Admin' && CONTROLLER_NAME=='User' && ACTION_NAME=='logout'){
    			return;
    		}

    		// 如果不是超级管理员, 并且访问的方法不在session里
    		if(session('privilege') !='*' && !in_array(MODULE_NAME.'/'.CONTROLLER_NAME.'/'.ACTION_NAME,session('privilege'))){
    			$this->error('您没有权限访问该功能,请联系管理员!');
    		}

	}


           // 评论提醒
           public function msg_warning(){
                     $msg = D('msg');
                     // 根据最近的一个月来留言来查
                     $msgs = $msg->select();
                     $arr = array();
                     foreach ($msgs as $k => $v) {
                                if($v['time']>(time()-30*24*60*60)){
                                           $arr[] = $v;
                                }
                     }
                     // var_dump($arr);
                     $num = count($arr);
                     $this->assign('arr',$arr);
                     $this->assign('num',$num);
           }

}