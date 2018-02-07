<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title><?php echo (C("TITLE")); ?></title>
<meta name="keywords" content="<?php echo (C("KEYWORDS")); ?>." />
<meta name="description" content="<?php echo (C("DES")); ?>." />
<meta http-equiv="Cache-Control" content="no-transform" />
<meta http-equiv="Cache-Control" content="no-siteapp" />

<link rel="stylesheet" type="text/css" href="/myblog/Public/Home/Content/global.css"/>
<link rel="stylesheet" type="text/css" href="/myblog/Public/Home/Content/page.css"/>

<script src="/myblog/Public/Home/Scripts/jquery.min.js" type="text/javascript" charset="utf-8"></script>
<script src="/myblog/Public/Home/Scripts/main.js" type="text/javascript" charset="utf-8"></script>






</head>
<body>
<!--头部和导航-->
<header class="am-g am-g-fixed blog-fixed blog-text-center blog-header">
    <div class="am-u-sm-8 am-u-sm-centered">
        <img width="200" src="http://s.amazeui.org/media/i/brand/amazeui-b.png" alt="Amaze UI Logo"/>
        <h2 class="am-hide-sm-only">-------从你的世界路过</h2>
    </div>
</header>

<hr>
<nav class="am-g am-g-fixed blog-fixed blog-nav">
<button class="am-topbar-btn am-topbar-toggle am-btn am-btn-sm am-btn-success am-show-sm-only blog-button" data-am-collapse="{target: '#blog-collapse'}" ><span class="am-sr-only">导航切换</span> <span class="am-icon-bars"></span></button>

  <div class="am-collapse am-topbar-collapse" id="blog-collapse">
    <ul class="am-nav am-nav-pills am-topbar-nav">

      <li class="<?php if($on == '' ): ?>am-active<?php endif; ?>"><a href="/myblog">首页</a></li>

      <li class="am-dropdown <?php if($on == '2' || $on == '3' || $on == '4' || $on == '5' || $on == '6' || $on == '7' ): ?>am-active<?php endif; ?>" data-am-dropdown>
        <a class="am-dropdown-toggle" data-am-dropdown-toggle href="javascript:;">
          学无止境 <span class="am-icon-caret-down"></span>
        </a>
        <ul class="am-dropdown-content">
        <?php if(is_array($cates)): foreach($cates as $key=>$v): ?><li class="<?php if($on == $v['id'] ): ?>am-active<?php endif; ?>"><a href="/myblog/index.php/Home/Study/index/cateid/<?php echo ($v['id']); ?>"><?php echo ($v['catename']); ?></li><?php endforeach; endif; ?>
        </ul>
      </li>

      <li class="<?php if($on == '8' ): ?>am-active<?php endif; ?>"><a href="<?php echo U('Home/Riji/index/cateid/8');?>">随笔</a></li>     
      <li class="<?php if($on == '9' ): ?>am-active<?php endif; ?>"><a href="<?php echo U('Home/Img/index/cateid/9');?>">图片库</a></li>
      <li class="<?php if($on == '10' ): ?>am-active<?php endif; ?>"><a href="<?php echo U('Home/Timeline/index/cateid/10');?>">存档</a></li>

    </ul>

    <form class="am-topbar-form am-topbar-right am-form-inline" role="search">
      <div class="am-form-group">
        <input type="text" class="am-form-field am-input-sm" placeholder="输入关键词" style="border-radius:5px;">
        <input type="submit" value="搜索" style=" font-size: 16px;padding: 0.2px 3px; border-radius:5px; color:rgb(105, 109, 115);">
      </div>
    </form>
  </div>
</nav>

<hr>
<br>
<nav class="am-g am-g-fixed blog-fixed blog-nav">


  <div class="am-collapse am-topbar-collapse" id="blog-collapse">

      当前位置:&nbsp;<a href="/myblog">首页</a>
<?php if(is_array($mbx)): foreach($mbx as $key=>$x): ?>&gt;<a href="/myblog/index.php/Home/Page/index/cateid/<?php echo ($x['id']); ?>"><?php echo ($x['catename']); ?></a><?php endforeach; endif; ?>



  </div>

</nav>



<div class="container clearfix pic02Box">
	<!-- 文章块 4X5 -->	
	<?php if(is_array($arts)): foreach($arts as $key=>$v): ?><section class="articleBox">
		<div class="articleImgBox">
			<a href="/myblog/index.php/Home/Image/index/cateid/<?php echo ($v['cateid']); ?>/artid/<?php echo ($v['id']); ?>" ><img width="280px;" height="200px;" src="/myblog/Public<?php echo ($v['pic']); ?>" alt="<?php echo ($v['title']); ?>"></a>
			<!-- <span class="imgNum">5图</span> -->
		</div>
		<p class="articleTitle"><a href="/myblog/index.php/Home/Image/index/cateid/<?php echo ($v['cateid']); ?>/artid/<?php echo ($v['id']); ?>"><?php echo ($v['title']); ?></a></p>
		<div class="ssrd-tag"><i class="i-time"></i><?php echo date('Y-m-d',$v['subtime']);?>&nbsp;&nbsp;&nbsp;<?php echo ($v['catename']); ?> &nbsp;&nbsp;&nbsp;<a href="<?php echo ($v['url']); ?>" target="_blank"><span style="color:red;font-size: 14px;">模板演示</span></a></div>
	
		</section><?php endforeach; endif; ?>



</div>
<!-- 分页 -->
<div class="picFenyeBox clearfix">
	<?php echo ($page); ?>


	</div>
<!--底部-->
<footer class="blog-footer">
    <div class="am-g am-g-fixed blog-fixed am-u-sm-centered blog-footer-padding">
        <div class="am-u-sm-12 am-u-md-4- am-u-lg-4">
            <h3>模板简介</h3>
            <p class="am-text-sm">这是一个使用amazeUI做的简单的前端模板。<br> 博客/ 资讯类 前端模板 <br> 支持响应式，多种布局，包括主页、文章页、媒体页、分类页等<br>嗯嗯嗯，不知道说啥了。外面的世界真精彩<br><br>
            Amaze UI 使用 MIT 许可证发布，用户可以自由使用、复制、修改、合并、出版发行、散布、再授权及贩售 Amaze UI 及其副本。</p>
        </div>
        <div class="am-u-sm-12 am-u-md-4- am-u-lg-4">
            <h3>社交账号</h3>
            <p>
                <a href=""><span class="am-icon-qq am-icon-fw am-primary blog-icon blog-icon"></span></a>
                <a href=""><span class="am-icon-github am-icon-fw blog-icon blog-icon"></span></a>
                <a href=""><span class="am-icon-weibo am-icon-fw blog-icon blog-icon"></span></a>
                <a href=""><span class="am-icon-reddit am-icon-fw blog-icon blog-icon"></span></a>
                <a href=""><span class="am-icon-weixin am-icon-fw blog-icon blog-icon"></span></a>
            </p>
            <h3>Credits</h3>
            <p>我们追求卓越，然时间、经验、能力有限。Amaze UI 有很多不足的地方，希望大家包容、不吝赐教，给我们提意见、建议。感谢你们！</p>          
        </div>
        <div class="am-u-sm-12 am-u-md-4- am-u-lg-4">
              <h1>我们站在巨人的肩膀上</h1>
             <h3>Heroes</h3>
            <p>
                <ul>
                    <li>jQuery</li>
                    <li>Zepto.js</li>
                    <li>Seajs</li>
                    <li>LESS</li>
                    <li>...</li>
                </ul>
            </p>
        </div>
    </div>    
    <div class="blog-text-center">© 2015 AllMobilize, Inc. Licensed under MIT license. Made with love By LWXYFER</div>    
  </footer>

<!-- <script src="/myblog/Public/Home/Scripts/search.js"></script> -->
</body>
</html>