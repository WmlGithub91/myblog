<?php
namespace Home\Controller;
use Think\Controller;

class StudyController extends CommonController{
	public function index(){
		$art = D('article');
		$where = 1;
		$cateid = I('cateid');
		if($cateid){			
			$where = 'cateid='.$cateid;
			if($cateid==1){
				$this->error('请指定【学无止境】下的具体栏目',U('Index/index'));
			}
		}else{
			$this->error('操作异常!');

		}

		

		$perpage = 10;  // 首次展示几篇文章
		$arts = $art->field('a.*,b.catename catename')->alias('a')->join('LEFT JOIN cate b ON a.cateid=b.id')->where($where)->limit($perpage)->order('a.id desc')->select();

		$this->assign('arts',$arts);
		$this->display();
	}


	public function getlist($p,$cateid){
		$art = D('article');
		$where = 'cateid='.$cateid;
   		$perpage = 10;  // 每次查看几条
   		$offset = ($p-1)*$perpage;
   		$data = $art->field('a.*,b.catename catename,b.id cateid')->alias('a')->join('LEFT JOIN cate b ON a.cateid=b.id')->where($where)->limit($offset.','.$perpage)->order('a.id desc')->select();

   		echo json_encode($data);
	}
}