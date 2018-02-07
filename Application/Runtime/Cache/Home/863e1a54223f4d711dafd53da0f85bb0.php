<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title><?php echo ($info['title']); ?></title>
<meta name="keywords" content="<?php echo ($info['keywords']); ?>" />
<meta name="description" content="<?php echo ($info['des']); ?>" />
<meta http-equiv="Cache-Control" content="no-transform" />
<meta http-equiv="Cache-Control" content="no-siteapp" />

<link rel="stylesheet" type="text/css" href="/xingxiu/Public/Home/Content/global.css"/>
<script src="/xingxiu/Public/Home/Scripts/jquery.min.js" type="text/javascript" charset="utf-8"></script>
<!-- <script src="/xingxiu/Public/Home/Scripts/main.js" type="text/javascript" charset="utf-8"></script> -->
<script src="/xingxiu/Public/Home/Scripts/ny.js" type="text/javascript" charset="utf-8"></script>

<script src="/xingxiu/Public/Home/Scripts/redirect.js" type="text/javascript" charset="utf-8"></script>


</head>
<body>

<!--头部和导航-->
<div class="header">
	<div class="container">
		<div class="top clearfix">
			<div class="logo"><a href="/">星宿传媒</a></h1></div>
			<div class="logo-tail">星宿传媒</div>
			<!-- 搜索 -->
				<form action="<?php if($cateid == '' ): ?>/xingxiu/index.php/Home/Index/index<?php else: ?>/xingxiu/index.php/Home/Page/index/cateid/<?php echo ($cateid); endif; ?>" method="get">
					<div class="search-wrap" action="" method="post">
						<input type="text" name="keywords" id="search" value="" placeholder="输入关键字"/>
						
						<div id="btn-search"><input type="submit" name="" value="搜索" style="width: 45px;height: 30px;"></div>
					</div>
				</form>
		</div>
		<ul id="nav" class="nav clearfix">
			<li class="<?php if($on == '' ): ?>on<?php endif; ?>"><a href="/">首页</a></li>
<?php if(is_array($cates)): foreach($cates as $key=>$c): ?><li class="<?php if($on == $c['id']): ?>on<?php endif; ?>"><a href="/xingxiu/index.php/Home/Page/index/cateid/<?php echo ($c['id']); ?>"><?php echo ($c['catename']); ?></a></li><?php endforeach; endif; ?>			
		</ul>
	</div>

	<ul id="subnav" class="subnav">
	<li></li>
<?php if(is_array($arr)): foreach($arr as $key=>$v): ?><li class="subnav-xw">
	<?php if(is_array($v)): foreach($v as $key=>$v1): ?><a href="/xingxiu/index.php/Home/Page/index/cateid/<?php echo ($v1['id']); ?>" ><?php echo ($v1['catename']); ?><i></i></a><?php endforeach; endif; ?>
	</li><?php endforeach; endif; ?>


</ul>

</div>



<!-- 面包屑导航 -->
<div class="container">
	<div class="crumbs-nav">
		<div class="i-home"></div>
		<div class="crumbs">当前位置：<a href="/">首页</a>
		<?php if(is_array($mbx)): foreach($mbx as $key=>$x): ?>&gt;<a href="/xingxiu/index.php/Home/Page/index/cateid/<?php echo ($x['id']); ?>"><?php echo ($x['catename']); ?></a><?php endforeach; endif; ?>
		</div>
	</div>
</div>

<div class="container clearfix">
	<!-- 文章内容 -->
	<div id="pic-body-wrap">
		<h1><?php echo ($info['title']); ?></h1>
		<p class="articleInfo">
		<span><?php echo ($info['catename']); ?></span>&nbsp;&nbsp;丨&nbsp;&nbsp;编辑:&nbsp;&nbsp;<span><?php echo ($info['author']); ?></span><span class="articleTime"><?php echo date('Y-m-d',$info['subtime']);?></span><span class="articleOrigin">来源:&nbsp;&nbsp;星宿传媒</span><span class="articleShare">分享</span><a href="" style="margin-right: 300px;"></a><a href=""></a></p>
		<div class="picOperateInfo">
			<a id="fullScreen" href="javascript:void(0);">全屏观看</a><span>支持<i style="color:#000;"> ← → </i>键翻阅图片丨</span>
		</div>
		<div id="picContent">
			
			<!-- 图片 -->
			<div class="picViewArea"> 
				<div id="picPrevBtn">
					<a href="javascript:void(0);" class="arrowBtn arrowPrev"></a>
				</div>
				<div id="picNextBtn">
					<a href="javascript:void(0);" class="arrowBtn arrowNext"></a>
				</div>
				<img id='bigImg' style="display: block; margin-left: auto; margin-right: auto;" src="/xingxiu/Public<?php echo ($info['pic']); ?>"  _src="/xingxiu/Public<?php echo ($info['pic']); ?>" alt="" width="300" height="846" />				<span></span>
			</div>

			<div class="picInfoCont clearfix">
				<div id="infoNum" class="infoNum">
					<span id="curNum" class="curNum">1</span><span> &#47; </span><span id="tatolNum" class="tatolNum"><?php echo ($num); ?></span>
				</div>

				<div id="infoSlider" class="picInfoBox">
					<div id="infoWrap" class="picInfoTxt">
 <?php echo htmlspecialchars_decode($info['content']);?>
					<div id="scLineTu" class="scoLineTu"><div id="scBtnTu" class="scoBtnTu">&nbsp;</div></div>
				</div>
			</div>
		

			<div id="closeFullScreen">关闭</div>
			
			
		</div>

		<!-- 轮播导航 -->
		 <div id="picSwiper" class="picSwiperNav clearfix">
		 	<div class="picNavUl-box">
		 	<ul id="picNavUl" class="picNavUl">
		 		<?php if(is_array($imgs)): foreach($imgs as $key=>$g): ?><li><a href="javascript:void(0);"><img style="display: block; margin-left: auto; margin-right: auto;" src=""  _src="/xingxiu/Public<?php echo ($g['pic']); ?>" alt="" width="600" height="846" /></a></li><?php endforeach; endif; ?>
		 	</ul>
		 	</div>
		 	<div class="picPrev"></div>
		 	<div class="picNext"></div>
		 </div>
		 
		<!-- 上下一篇 -->
		<ul class="pn-link">
			<li>上一篇：<?php if($prev['title'] == null): ?>没有了!<?php else: ?><a href="/xingxiu/index.php/Home/Image/index/artid/<?php echo ($prev['id']); ?>"><?php echo ($prev['title']); ?></a><?php endif; ?></li>

			<li>下一篇：<?php if($next['title'] == null): ?>没有了!<?php else: ?><a href="/xingxiu/index.php/Home/Image/index/artid/<?php echo ($next['id']); ?>"><?php echo ($next['title']); ?></a><?php endif; ?></li>
		</ul>
		
	</div>




</div>
<!--底部-->
<div class="footer2">
	<div class="container">
		<!-- <div class="aboutLink"><a href="/about/guanyu.html" target="_blank">关于我们</a><a href="/about/mianze.html" target="_blank">免责申明</a><a href="/about/lianxi.html" target="_blank">联系我们</a><a href="/about/pingzhi.html" target="_blank">品质保证</a><a href="/about/tougao.html" target="_blank">我要投稿</a></div> -->

		<div class="copyright2"><?php echo (C("BANQUAN")); ?>&nbsp;&nbsp;备案号:&nbsp;<a href="http://www.miitbeian.gov.cn/" target="_blank"><?php echo (C("BEIAN")); ?></a> &nbsp;</div>
	</div>
</div>




<script src="/xingxiu/Public/Home/Scripts/pic.js" type="text/javascript" charset="utf-8"></script>

</body>
</html>