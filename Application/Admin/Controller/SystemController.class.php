<?php
namespace Admin\Controller;
use Think\Controller;

class SystemController extends CommonController{
	public function index(){
		if(IS_POST){
			// 1.找到配置文件---------tp定义当前目录在根目录下
			// $config = include './Application/Common/Conf/config.php';
			// 2.路径赋值
			$file = './Application/Common/Conf/config.php';
			// 3.合并数组 并且将要提交的数组的值转化为大写后再合并
			$config = array_merge(include $file,array_change_key_case($_POST,CASE_UPPER));
			// var_dump($config);die;
			// 4.将数组写入文件之前先转化为字符串形式的数组,注意拼接
			/*[导读] var_export -- 输出或返回一个变量的字符串表示描述mixed var_export ( mixed expression [, bool return])此函数返回关于传递给该函数的变量的结构信息，它和 var_dump() 类似，不同的是其返回的表示是合法的 PHP 代码。*/
			$str = "<?php\nreturn ".var_export($config,true)."; ?>";
			// var_dump($str);die;
			// 5.将转化的字符串写入文件
			if(file_put_contents($file,$str)){
				$this->success('修改配置成功',U('index'));
			}else{
				$this->error('失败');
			}
			return;
			
		}

		$this->display();
	}
}