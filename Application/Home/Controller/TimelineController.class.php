<?php
namespace Home\Controller;
use Think\Controller;

class TimelineController extends CommonController{
	public function index(){
		$arts = D('article')->field('a.*,b.catename catename')->alias('a')->join('LEFT JOIN cate b ON a.cateid=b.id')->order('subtime desc')->select();

		// echo strtotime('2017-12-31 23:59:59');

		// $data = array();
		// foreach ($arts as $k => $v) {
		// 	if($v['subtime'] > 1483200000 && $v['subtime'] <= 1514735999){
		// 		$data[] = $v;
		// 	}
		// }
		// var_dump($arts);
		
		$data = array();
		foreach ($arts as $k => $v) {
			$year = date('Y',$v['subtime']);
			$yue = date('m',$v['subtime']);

			if($year==2018){
				if($yue==1){
					$data['2018']['1'][] = $v;
				}
				if($yue==2){
					$data['2018']['2'][] = $v;
				}
				if($yue==3){
					$data['2018']['3'][] = $v;
				}
				if($yue==4){
					$data['2018']['4'][] = $v;
				}
				if($yue==5){
					$data['2018']['5'][] = $v;
				}
				if($yue==6){
					$data['2018']['6'][] = $v;
				}
				if($yue==7){
					$data['2018']['7'][] = $v;
				}
				if($yue==8){
					$data['2018']['8'][] = $v;
				}
				if($yue==9){
					$data['2018']['9'][] = $v;
				}
				if($yue==10){
					$data['2018']['10'][] = $v;
				}
				if($yue==11){
					$data['2018']['11'][] = $v;
				}
				if($yue==12){
					$data['2018']['12'][] = $v;
				}
			}
			if($year==2017){
				if($yue==1){
					$data['2017']['1'][] = $v;
				}
				if($yue==2){
					$data['2017']['2'][] = $v;
				}
				if($yue==3){
					$data['2017']['3'][] = $v;
				}
				if($yue==4){
					$data['2017']['4'][] = $v;
				}
				if($yue==5){
					$data['2017']['5'][] = $v;
				}
				if($yue==6){
					$data['2017']['6'][] = $v;
				}
				if($yue==7){
					$data['2017']['7'][] = $v;
				}
				if($yue==8){
					$data['2017']['8'][] = $v;
				}
				if($yue==9){
					$data['2017']['9'][] = $v;
				}
				if($yue==10){
					$data['2017']['10'][] = $v;
				}
				if($yue==11){
					$data['2017']['11'][] = $v;
				}
				if($yue==12){
					$data['2017']['12'][] = $v;
				}
			}
			if($year==2016){
				if($yue==1){
					$data['2016']['1'][] = $v;
				}
				if($yue==2){
					$data['2016']['2'][] = $v;
				}
				if($yue==3){
					$data['2016']['3'][] = $v;
				}
				if($yue==4){
					$data['2016']['4'][] = $v;
				}
				if($yue==5){
					$data['2016']['5'][] = $v;
				}
				if($yue==6){
					$data['2016']['6'][] = $v;
				}
				if($yue==7){
					$data['2016']['7'][] = $v;
				}
				if($yue==8){
					$data['2016']['8'][] = $v;
				}
				if($yue==9){
					$data['2016']['9'][] = $v;
				}
				if($yue==10){
					$data['2016']['10'][] = $v;
				}
				if($yue==11){
					$data['2016']['11'][] = $v;
				}
				if($yue==12){
					$data['2016']['12'][] = $v;
				}
			}

		}
		// var_dump($data);// 四维数组
		$this->assign('data',$data);
		$this->display();
	}
}