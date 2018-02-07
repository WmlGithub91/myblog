<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="<?php echo (C("DES")); ?>">
  <meta name="keywords" content="<?php echo (C("KEYWORDS")); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <title><?php echo (C("TITLE")); ?></title>
  <meta name="renderer" content="webkit">
  <meta http-equiv="Cache-Control" content="no-siteapp"/>
  <link rel="icon" type="image/png" href="/myblog/Public/Home/assets/i/favicon.ico">
  <meta name="mobile-web-app-capable" content="yes">
  <link rel="icon" sizes="192x192" href="/myblog/Public/Home/assets/i/app-icon72x72@2x.png">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">
  <meta name="apple-mobile-web-app-title" content="Amaze UI"/>
  <link rel="apple-touch-icon-precomposed" href="/myblog/Public/Home/assets/i/app-icon72x72@2x.png">
  <meta name="msapplication-TileImage" content="/myblog/Public/Home/assets/i/app-icon72x72@2x.png">
  <meta name="msapplication-TileColor" content="#0e90d2">
  <link rel="stylesheet" href="/myblog/Public/Home/assets/css/amazeui.min.css">
  <link rel="stylesheet" href="/myblog/Public/Home/assets/css/app.css">
</head>

<body id="blog-article-sidebar">
<!-- header start -->
<header class="am-g am-g-fixed blog-fixed blog-text-center blog-header">
    <div class="am-u-sm-8 am-u-sm-centered">
        <img width="200" src="/myblog/Public/Home/assets/i/amazeui-b.png" alt="Amaze UI Logo"/>
        <h2 class="am-hide-sm-only">-----------从你的世界路过</h2>
    </div>
</header>

<hr>
<nav class="am-g am-g-fixed blog-fixed blog-nav">
<button class="am-topbar-btn am-topbar-toggle am-btn am-btn-sm am-btn-success am-show-sm-only blog-button" data-am-collapse="{target: '#blog-collapse'}" ><span class="am-sr-only">导航切换</span> <span class="am-icon-bars"></span></button>

  <div class="am-collapse am-topbar-collapse" id="blog-collapse">
    <ul class="am-nav am-nav-pills am-topbar-nav">

      <li class="<?php if($on == '' ): ?>am-active<?php endif; ?>"><a href="/">首页</a></li>

      <li class="am-dropdown " data-am-dropdown>
        <a class="am-dropdown-toggle" data-am-dropdown-toggle href="javascript:;">
          学无止境 <span class="am-icon-caret-down"></span>
        </a>
        <ul class="am-dropdown-content">
        <?php if(is_array($cates)): foreach($cates as $key=>$v): ?><li><a href="/myblog/Home/Study/index/cateid/<?php echo ($v['id']); ?>"><?php echo ($v['catename']); ?></li><?php endforeach; endif; ?>
        </ul>
      </li>

      <li class="<?php if($on == '8' ): ?>am-active<?php endif; ?>"><a href="<?php echo U('Home/Riji/index/cateid/8');?>">随笔</a></li>     
      <li class="<?php if($on == '9' ): ?>am-active<?php endif; ?>"><a href="<?php echo U('Home/Img/index/cateid/9');?>">图片库</a></li>
      <li class="<?php if($on == '10' ): ?>am-active<?php endif; ?>"><a href="<?php echo U('Home/Timeline/index/cateid/10');?>">存档</a></li>

    </ul>

    <form class="am-topbar-form am-topbar-right am-form-inline" role="search" action="<?php echo U('Home/Index/index');?>" method="get"> 
      <div class="am-form-group">
        <input type="text" name="keywords" class="am-form-field am-input-sm" placeholder="输入关键词" value="<?php echo ($k); ?>" style="border-radius:5px;">
        <input type="submit" value="全文搜索" style=" font-size: 16px;padding: 0.2px 3px; border-radius:5px; color:rgb(105, 109, 115);">
      </div>
    </form>
  </div>
</nav>

<hr>
<br>
<nav class="am-g am-g-fixed blog-fixed blog-nav">


  <div class="am-collapse am-topbar-collapse" id="blog-collapse">

      当前位置:&nbsp;<a href="/myblog">首页</a>
<?php if(is_array($mbx)): foreach($mbx as $key=>$x): ?>&gt;<a href="/myblog/Home/<?php if($x['type'] == 1): ?>Study<?php elseif($x['type'] == 2): ?>Riji<?php elseif($x['type'] == 3): ?>Img<?php elseif($x['type'] == 4): ?>Timeline<?php endif; ?>/index/cateid/<?php echo ($x['id']); ?>"><?php echo ($x['catename']); ?></a><?php endforeach; endif; ?>



  </div>

</nav>




<!-- content srart -->
<div class="am-g am-g-fixed blog-fixed blog-content">
    <div class="am-u-sm-12">
        <h1 class="blog-text-center">-- 存档 --</h1>

<?php if(is_array($data)): foreach($data as $k=>$v): ?><div class="timeline-year">
            <h1><?php echo ($k); ?></h1>
            <hr>

            
                      <?php if(is_array($v)): foreach($v as $k1=>$v1): ?><ul>           
                                 <h3><?php echo ($k1); ?>月</h3>
                                  <hr>


                                                              <?php if(is_array($v1)): foreach($v1 as $k2=>$v2): ?><li>
                                                                      <span class="am-u-sm-4 am-u-md-2 timeline-span"><?php echo date('Y-m-d H:i:s',$v2['subtime']); ?></span>
                                                                      <span class="am-u-sm-8 am-u-md-6"><a href="/myblog/Home/Article/index/cateid/<?php echo ($v2['cateid']); ?>/artid/<?php echo ($v2['id']); ?>"><?php echo ($v2['title']); ?></a></span>
                                                                      <span class="am-u-sm-4 am-u-md-2 am-hide-sm-only"><?php echo ($v2['catename']); ?></span>
                                                                      <span class="am-u-sm-4 am-u-md-2 am-hide-sm-only"><?php echo ($v2['keywords']); ?></span>
                                                                  </li><?php endforeach; endif; ?>
                                  </ul><?php endforeach; endif; ?>
  
        </div><?php endforeach; endif; ?>


        

        <hr>
    </div>


</div>
<!-- content end -->

<footer class="blog-footer">
    <div class="am-g am-g-fixed blog-fixed am-u-sm-centered blog-footer-padding">
        <div class="am-u-sm-12 am-u-md-4- am-u-lg-4">
            <h3>网站介绍</h3>
            <p class="am-text-sm">
            我们可以耐心等，幸福可以来的慢一些，只要它是真的。<br> 
            人生的路，走走停停是一种闲适， <br> 
            边走边看是一种优雅，<br>
            边走边忘是一种豁达。<br><br>
            没有不会谢的花，没有不会退的浪，没有不会暗的光，<br> 
            没有不会好的伤，没有不会停下来的绝望。<br><br>
            -----------------------------等你，一起。
            </p>
        </div>
        <div class="am-u-sm-12 am-u-md-4- am-u-lg-4">
            <h3>社交账号</h3>
            <p>
                <a href="javascript:;"><span class="am-icon-qq am-icon-fw am-primary blog-icon blog-icon"></span></a>
                <a href="javascript:;"><span class="am-icon-github am-icon-fw blog-icon blog-icon"></span></a>
                <a href="javascript:;"><span class="am-icon-weibo am-icon-fw blog-icon blog-icon"></span></a>
                <a href="javascript:;"><span class="am-icon-reddit am-icon-fw blog-icon blog-icon"></span></a>
                <a href="javascript:;"><span class="am-icon-weixin am-icon-fw blog-icon blog-icon"></span></a>
            </p>
            <h3>友情链接</h3>
            <p>
            <ul>
                <?php if($links == null ): ?><li><a href="javascript:;">等待中...</a></li>
                <?php else: ?>
                <?php if(is_array($links)): foreach($links as $key=>$v): ?><li><a href="<?php echo ($v['linkurl']); ?>"><?php echo ($v['linkname']); ?></a></li><?php endforeach; endif; endif; ?>
                </ul>
            </p>          
        </div>
        <div class="am-u-sm-12 am-u-md-4- am-u-lg-4">
              <h1><a href="/">我们站在巨人的肩膀上</a></h1>
             <h3>Heroes</h3>
            <p>
                <ul>
                <?php if(is_array($cates)): foreach($cates as $key=>$v): ?><li><a href="/myblog/Home/Study/index/cateid/<?php echo ($v['id']); ?>"><?php echo ($v['catename']); ?></a></li><?php endforeach; endif; ?>
                </ul>
            </p>
        </div>
    </div>    
    <div class="blog-text-center"><?php echo (C("BANQUAN")); ?>&nbsp;&nbsp;备案号:&nbsp;<a href="http://www.miitbeian.gov.cn/" target="_blank"><?php echo (C("BEIAN")); ?></a> &nbsp;</div>    
  </footer>



<!--[if (gte IE 9)|!(IE)]><!-->
<script src="/myblog/Public/Home/assets/js/jquery.min.js"></script>
<!--<![endif]-->
<!--[if lte IE 8 ]>
<script src="http://libs.baidu.com/jquery/1.11.3/jquery.min.js"></script>
<script src="http://cdn.staticfile.org/modernizr/2.8.3/modernizr.js"></script>
<script src="/myblog/Public/Home/assets/js/amazeui.ie8polyfill.min.js"></script>
<![endif]-->
<script src="/myblog/Public/Home/assets/js/amazeui.min.js"></script>
<!-- <script src="/myblog/Public/Home/assets/js/app.js"></script> -->
</body>
</html>