<?php
namespace Home\Model;
use Think\Model;

class CateModel extends Model{
	protected $cate = array();

	public function __construct(){
		parent::__construct();
		$this->cate = $this->order('sort asc')->select();
	}

	public function get_tree($parentid=0,$lev=0){
		$tree = array();
		foreach($this->cate as $c){
			if($c['parentid'] == $parentid){
				$c['lev'] = $lev;
				$tree[] = $c;
				$tree = array_merge($tree,$this->get_tree($c['id'],$lev+1));

			}
		}
		return $tree;
	}



	    /*
	    _before_delete钩子函数:删除该栏目下的子栏目
	    当删除上级栏目时,子栏目在展示列表页也消失了没人一种子栏目也删除了的错觉,其实子栏目在数据库还存在
	    我们需要用到ThinkPHP内置在Model里的钩子函数:在删除之前需要做某些操作的函数
	    $options是你要删除的数据,分析:
	        1.如果得到的内容下的数组where下的id是一个数组的话就是批量删除
	        2.如果是一个字符串或intval转为的整型的话就是单个删除
	     */
	    
	    public function _before_delete($options){
	        // var_dump($options);die; //这里是单个删除
	        // 1.调用方法,找到该栏目下的子栏目的id
	        $childrenids = $this->childids($options['where']['id']);
	        // 2.通过调用方法已经得到了子栏目的id的数组$tre,即$childrenids
	        // 3.将数组转化为字符串
	        $childrenids = implode(',',$childrenids);
	        // 4.通过子栏目的id来删除子栏目
	        if($childrenids){
	            // 这里不能用delete方法了,不然会死循环
	            // execute方法可执行指定sql语句
	            $this->execute("delete from cate where id in($childrenids)");
	        }
	    }

	    public function childids($cateid){
	        $data = $this->select(); // Model自身调用select方法查出对应表里所有的数据
	        return $this->getchildids($data,$cateid); //调用方法,传递数据
	    }

	    public function getchildids($data,$parentid){ //这里的parentid是传过来的cateid
	        static $tre = array();
	        foreach($data as $v){ // 因为不知道要删除的栏目下好有多少子栏目,所以要用循环
	            if($v['parentid']==$parentid){ // 通过传过来的id判断是否有子栏目
	                $tre[] = $v['id']; // 找到子栏目放入数组
	                $this->getchildids($data,$v['id']); // 如果子栏目下好友子栏目的话,就会再次调用
	            }

	        }
	        return $tre;
	    }

}