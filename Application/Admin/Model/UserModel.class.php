<?php
namespace Admin\Model;
use Think\Model;

class UserModel extends Model{
	protected $_validate = array(
		array('username','require','管理员名称不能为空',1,'regex',3),
		array('username','3,12','管理员名称必须3到12位',1,'length',3),
		array('realname','require','管理员名称不能为空',1,'regex',3),

		array('password','require','管理员密码不能为空.',1,'regex',1),

		array('username','','管理员名称不能重复',1,'unique',1),
		// 4->修改密码时验证




		// callback 方法验证，定义的验证规则是当前模型类的一个方法
		// array('verify','verify','验证码错误!',1,'callback',4),
	);
}