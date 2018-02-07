<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends CommonController {

    // 获取头部导航信息
    	public function index(){
    		$k = $_GET['keywords'];

    		$art = D('article');
    		$where = 1;
		// 根据关键词查
		if($keywords = trim(I('keywords'))){
			$where .= ' AND title LIKE "%'.$keywords.'%"';
		}

		$perpage = 10;   // 首次查看几条

		$arts = $art->field('a.*,b.catename catename,b.id cateid')->alias('a')->join('LEFT JOIN cate b ON a.cateid=b.id')->where($where)->limit($perpage)->order('a.id desc')->select();

		$this->assign('arts',$arts);
		$this->assign('k',$k);

            		$this->display();
   	}

   	// 查看更多
   	public function getlist($p){
   		$art = D('article');
   		$perpage = 10;  // 每次查看几条
   		$offset = ($p-1)*$perpage;
   		$data = $art->field('a.*,b.catename catename,b.id cateid')->alias('a')->join('LEFT JOIN cate b ON a.cateid=b.id')->where($where)->limit($offset.','.$perpage)->order('a.id desc')->select();

   		echo json_encode($data);
   	}


}