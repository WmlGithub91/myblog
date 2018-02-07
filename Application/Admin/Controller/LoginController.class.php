<?php
namespace Admin\Controller;
use Think\Controller;

class LoginController extends Controller{
	
	public function index(){
		// 获取用户地址
		if(IS_AJAX){
			$city = I('city');
			$pro = I('pro');

			session('city',$city);
			session('pro',$pro);

		}
		// 登录
		if(IS_POST){
			$username = trim(I('username'));
			$password = trim(I('password'));
			$where  = array('username'=>$username);
			$users = D('user')->where($where)->find();
			if(md5($password) == $users['password']){
				

				//登录成功后,存session
				session('id',$users['id']);
				session('username',$username);

				// 权限验证 , 获取当前管理员所属角色拥有的权限
				$pris = $this->getpri($users['roleid']);



				// 登陆成功后,添加日志
				$ip = $this->GetIp(); // 获取用户真实ip

				$data['username'] = $users['username'];
				$data['realname'] = $users['realname'];
				$data['head_pic'] = $users['head_pic'];
				$data['ip'] = $ip;
				$data['address'] = session('pro').session('city');
				$data['time'] = time();

				$login_log = D('login_log');
				if($login_log->add($data)){
					$this->success('登陆成功!',U('Index/index'));
				}else{
					$this->error('登录失败!');
				}


			}else{
				$this->error('用户名或者密码错误!');
			}
			return;
		}
		$this->display();
	}


	// 权限验证 , 获取当前管理员所属角色拥有的权限的方法
	public function getpri($roleid){
		$role = D('role');
		$pri = D('privilege');
		$role->find($roleid);
		session('rolename',$role->rolename);

		if($role->pri_id_list == '*'){
			session('privilege','*');   //将超级管理员权限写入session

			// [2]找出所有的顶级的权限 , 根据顶级权限找出所有的子级权限  (超级管理员所拥有的权限,用于在左侧菜单栏显示)
			$menu = $pri->where("parentid=0")->select();
			foreach ($menu as $k => $v) {
				$menu[$k]['sub'] = $pri->where('parentid='.$v['id'])->select(); // 四维数组
			}

			session('menu',$menu);
		}else{
			// 通过pri_id_list找到对应的权限的mname,cname,aname,转化成  Admin/Article/add  的形式			

			// $pris = $pri->field('mname,cname,aname')->where('id IN({$role->pri_id_list})')->select();  // 这一步需要联合字段,并用'/'来分隔
			$pris = $pri->field('id,parentid,pri_name,mname,cname,aname,CONCAT(mname,"/",cname,"/",aname) url')->where("id IN({$role->pri_id_list})")->select();
			var_dump($pris);exit;
			// [2]不是超级管理员 (左侧菜单栏显示)  $pris是所有的权限,再取出顶级权限和子权限
			$menu = array();
			
			//将二维数组转化成一维数组
			$_pris = array();
			foreach($pris as $k=>$v){
				$_pris[] = $v['url'];
				// [2]查找一级权限
				if($v['parentid']==0){
					$menu[] = $v; //二位数组
				}
			}
			// print_r($_pris);die; 
			// 打印结果  Array ( [0] => Admin/Article/lst [1] => Admin/Article/edit [2] => Admin/Article/add [3] => Admin/Article/del )
			session('privilege',$_pris);   //写入session之后,访问控制器方法时就可以判断,该用户是否有权限访问  在common控制器里判断

			// [2]通过顶级权限找子级权限
			foreach ($menu as $k => $v) {
				foreach ($pris as $k1 => $v1) {
					if($v1['parentid'] == $v['id']){
						$menu[$k]['sub'][] = $v1;
						
					}
				}
			}

			session('menu',$menu);
			
		}
	}







	// 获取真实IP
	public function GetIp(){
		$realip = '';  
		$unknown = 'unknown';  
		if (isset($_SERVER)){  
			if(isset($_SERVER['HTTP_X_FORWARDED_FOR']) && !empty($_SERVER['HTTP_X_FORWARDED_FOR']) && strcasecmp($_SERVER['HTTP_X_FORWARDED_FOR'], $unknown)){  
				$arr = explode(',', $_SERVER['HTTP_X_FORWARDED_FOR']);  
				foreach($arr as $ip){  
					$ip = trim($ip);  
					if ($ip != 'unknown'){
						$realip = $ip;  
						break;  
					}  
				}  
			}else if(isset($_SERVER['HTTP_CLIENT_IP']) && !empty($_SERVER['HTTP_CLIENT_IP']) && strcasecmp($_SERVER['HTTP_CLIENT_IP'], $unknown)){  
				$realip = $_SERVER['HTTP_CLIENT_IP'];  
			}else if(isset($_SERVER['REMOTE_ADDR']) && !empty($_SERVER['REMOTE_ADDR']) && strcasecmp($_SERVER['REMOTE_ADDR'], $unknown)){  
				$realip = $_SERVER['REMOTE_ADDR'];  
			}else{  
				$realip = $unknown;  
			}  
		}else{  
			if(getenv('HTTP_X_FORWARDED_FOR') && strcasecmp(getenv('HTTP_X_FORWARDED_FOR'), $unknown)){  
				$realip = getenv("HTTP_X_FORWARDED_FOR");  
			}else if(getenv('HTTP_CLIENT_IP') && strcasecmp(getenv('HTTP_CLIENT_IP'), $unknown)){  
				$realip = getenv("HTTP_CLIENT_IP");  
			}else if(getenv('REMOTE_ADDR') && strcasecmp(getenv('REMOTE_ADDR'), $unknown)){  
				$realip = getenv("REMOTE_ADDR");  
			}else{  
				$realip = $unknown;  
			}  
		}  
		$realip = preg_match("/[\d\.]{7,15}/", $realip, $matches) ? $matches[0] : $unknown;  
		return $realip;  
	}
}