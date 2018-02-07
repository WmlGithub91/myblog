<?php
namespace Home\Controller;
use Think\Controller;
class CommonController extends Controller {
    public function __construct(){
    	parent::__construct();
    	$this->nav();
      $this->curr();
      $this->banner();
      $this->tuijian();
      $this->tag_cloud();
    	$this->link();
      $cateid = I('cateid');
      $this->assign('cateid',$cateid);
      $this->assign('mbx',array_reverse($this->mbx($cateid)),true);

    }
    // 获取头部导航信息
    public function nav(){
                  $cate = D('cate');
                  $cates = $cate->field('id,catename,type,keywords')->where('parentid>0')->select(); 

                  $this->assign('cates',$cates);

    }


    // 栏目高亮显示
  	public function curr(){
  		$on = I('cateid');
  		$this->assign('on',$on);
  	}

          // 面包屑
          public function mbx($cateid){
              $row = D('cate')->find($cateid);
              $tree[] = $row;
              while($row['parentid']>0){
                  $row = D('cate')->find($row['parentid']);
                  $tree[] = $row;
              }

              return $tree;
          }


          public function banner(){

                // banner下的文章和图片
                  $art = D('article')->where('rem=5')->order('id desc')->find();
                  $imgs = D('image')->where('artid='.$art['id'])->select();

                  $this->assign('art',$art);
                  $this->assign('imgs',$imgs);
          }


          //推荐文章
          public function tuijian(){

                   $art = D('article');
                   $tuijian = $art->field('a.*,b.catename catename')->alias('a')->join('LEFT JOIN cate b ON a.cateid=b.id')->where('rem=1')->limit(5)->order('a.id desc')->select();

                   $this->assign('tuijian',$tuijian);
          }


          // tag cloud 标签云
          public function tag_cloud(){
                  $art = D('article');
                  $arts = $art->field('keywords')->select();
                  $arr = array();
                  foreach ($arts as $k => $v) {
                            $arr[] = $v['keywords'];
                  }
                  $arr = array_unique($arr);

                  $this->assign('arr',$arr);

          }


          public function link(){
                $links = D('link')->select();
                $this->assign('links',$links);
          }

}