<?php
namespace Admin\Controller;
use Think\Controller;
class UserController extends CommonController {

	// 管理员列表
	public function user_list(){
		$user = D('user');
		$users = $user->select();
		$roles = D('role')->select();
		$this->assign('roles',$roles);
		$this->assign('users',$users);
	    	$this->display();
	}

	// 管理员添加
	public function user_add(){
		$user = D('user');

		if(IS_POST){
			$data['username'] = trim(I('username'));
			$data['realname'] = trim(I('realname'));
			$data['email'] = trim(I('email'));
			$data['phone'] = trim(I('phone'));
			$data['roleid'] = trim(I('roleid'));
			$data['reg_time'] = time();
			$data['password'] = md5(trim(I('password')));

			// 防止空密码被md5加密
			if(!I('password')){
    				$this->error('管理员密码不能为空');
    			}

    			// 文件上传
    			if($_FILES['head_pic']['tmp_name'] != ''){
			                $upload = new \Think\Upload();// 实例化上传类
			                $upload->maxSize = 3145728 ;// 设置附件上传大小
			                $upload->exts = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
			                $upload->rootPath = './Public'; // 设置附件上传根目录
			                $upload->savePath = '/Uploads/'; // 设置附件上传（子）目录
			                
			                // 上传单个文件
			                $info = $upload->uploadOne($_FILES['head_pic']);
			                if(!$info) {// 上传错误提示错误信息
			                    	$this->error($upload->getError());
			                }else{// 上传成功 获取上传文件信息
			                   	 $data['head_pic'] =  $info['savepath'].$info['savename'];
			                }
		            }

		            // 自动验证, 添加
			if($user->create($data)){
				if($user->add()){
					$this->success('新增管理员成功!',U('User/user_list'));
				}else{
					$this->error('新增管理员失败!');
				}
			}else{
				$this->error($user->getError());
			}

			return;
		}

		$roles = D('role')->select();
		$this->assign('roles',$roles);
	    	$this->display();
	}


	// 管理员修改
	public function user_edit($id){
		$user = D('user');
		if(IS_POST){
			$data['id'] = (I('id'));
			$data['username'] = trim(I('username'));
			$data['realname'] = trim(I('realname'));
			$data['email'] = trim(I('email'));
			$data['phone'] = trim(I('phone'));
			$data['roleid'] = trim(I('roleid'));

    			// 文件上传
    			if($_FILES['head_pic']['tmp_name'] != ''){
			                $upload = new \Think\Upload();// 实例化上传类
			                $upload->maxSize = 3145728 ;// 设置附件上传大小
			                $upload->exts = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
			                $upload->rootPath = './Public'; // 设置附件上传根目录
			                $upload->savePath = '/Uploads/'; // 设置附件上传（子）目录
			                
			                // 上传单个文件
			                $info = $upload->uploadOne($_FILES['head_pic']);
			                if(!$info) {// 上传错误提示错误信息
			                    	$this->error($upload->getError());
			                }else{// 上传成功 获取上传文件信息
			                   	 $data['head_pic'] =  $info['savepath'].$info['savename'];
			                }


		            }

		            // 自动验证, 添加
			if($user->create($data)){
				if($user->save()!==false){
					$this->success('修改管理员成功!',U('User/user_list'));
				}else{
					$this->error('修改管理员失败!');
				}
			}else{
				$this->error($user->getError());
			}

			return;
		}

		$roles = D('role')->select();
		$this->assign('roles',$roles);
		$info = $user->find($id);
		$this->assign('info',$info);
	    	$this->display();
	}

	// 管理员删除
	public function user_del($id){
		$user = D('user');
		$pic = $user->find($id);
		$url = $pic['head_pic'];
		unlink('./Public'.$url);
		if($user->delete($id)){
    			$this->success('管理员删除成功',U('user_list'));
	    	}else{
	    		$this->error('管理员删除失败',U('user_list'));
	    	}
	}


	// 密码修改
	public function pwd_edit(){
		$user = D('user');
		if(IS_POST){
			$data['id'] = I('id');
			$data['password'] = md5(trim(I('password')));
			$pwd = I('password');
			if(empty($pwd)){
				$this->success('密码未修改!',U('Index/index'));
			}else{
				if($user->save($data)){
					// $this->success('密码修改成功!');
					// 密码修改成功后,退出重新登录
					session(null); // 清空当前的session
	    				$this->success('密码修改成功!',U('Login/index'));
				}else{
					$this->error('密码修改失败!');
				}
			}



			return;
		}
		$id = session('id');
		$info = $user->find($id);
		$this->assign('info',$info);
	    	$this->display();
	}


	// 登录日志
	public function login_log(){
	    	$this->display();
	}


	public function reg_role(){
	    	$this->display();
	}


	public function role_add(){
	    	$this->display();
	}


	public function user_pri(){
	    $this->display();
	}



	// 退出
	public function logout(){
		session(null); // 清空当前的session
        		$this->success('退出成功,正在跳转...',U('Login/index'));
	}
}