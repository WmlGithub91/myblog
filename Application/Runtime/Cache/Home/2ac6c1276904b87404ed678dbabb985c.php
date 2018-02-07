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
    <div class="am-u-md-8 am-u-sm-12">

      <article class="am-article blog-article-p">
        <div class="am-article-hd">
          <h1 class="am-article-title blog-text-center"><?php echo ($info['title']); ?></h1>
          <p class="am-article-meta blog-text-center">
              <span><a href="#" class="blog-color"><?php echo ($info['catename']); ?> &nbsp;</a></span>-
              <span><a href="#">@<?php echo ($info['author']); ?> &nbsp;</a></span>-
              <span><a href="#"><?php echo date('Y/m/d',$info['subtime']);?></a></span>
          </p>
        </div> 

        <div class="am-article-bd">
        <img width="765px;" height="430px;" src="/myblog/Public<?php echo ($info['pic']); ?>" alt="" class="blog-entry-img blog-article-margin">          
        <p class="class="am-article-lead"">
<!-- 内容开始 -->
 <?php echo htmlspecialchars_decode($info['content']);?>
<!-- 内容结束 -->
        </p>
        </div>
        <div>
          来源:&nbsp;
          <?php if($info['url'] == '' ): ?><a href="<?php echo $_SERVER['REQUEST_SCHEME'].'://'.$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'] ;?>"><?php echo $_SERVER['REQUEST_SCHEME'].'://'.$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'] ;?></a>
          <?php else: ?>
          <a href="<?php echo ($info['url']); ?>"><?php echo ($info['url']); ?></a><?php endif; ?>
        </div>
      </article>
        
        <div class="am-g blog-article-widget blog-article-margin">
          <div class="am-u-lg-4 am-u-md-5 am-u-sm-7 am-u-sm-centered blog-text-center">
            <span class="am-icon-tags"> &nbsp;</span> <a href="/myblog/Home/Index/index/keywords/<?php echo ($info['keywords']); ?>"><?php echo ($info['keywords']); ?></a> 
            <hr>
            <a href=""><span class="am-icon-qq am-icon-fw am-primary blog-icon"></span></a>
            <a href=""><span class="am-icon-wechat am-icon-fw blog-icon"></span></a>
            <a href=""><span class="am-icon-weibo am-icon-fw blog-icon"></span></a>
          </div>
        </div>

        <ul class="am-pagination blog-article-margin">
              <li class="am-pagination-prev">
                  <?php if($prev['title'] == '' ): ?><a href="javascript:;">&laquo;没有了</a>
                  <?php else: ?>
                        <a href="/myblog/Home/Article/index/cateid/<?php echo ($info['cateid']); ?>/artid/<?php echo ($prev['id']); ?>" class="">&laquo;<?php echo ($prev['title']); ?></a><?php endif; ?>
              </li>

              <li class="am-pagination-next">
                  <?php if($next['title'] == '' ): ?><a href="javascript:;">没有了&raquo;</a>
                  <?php else: ?>
                        <a href="/myblog/Home/Article/index/cateid/<?php echo ($info['cateid']); ?>/artid/<?php echo ($next['id']); ?>"><?php echo ($next['title']); ?> &raquo;</a><?php endif; ?>
              </li>
        </ul>

        <hr>
<!-- 评论开始 -->
<?php if(is_array($msgs)): foreach($msgs as $key=>$m): ?><div class="am-g blog-author blog-article-margin">
          <div class="am-u-sm-3 am-u-md-3 am-u-lg-2">
            <img src="<?php if($m['pic'] == '' ): ?>/myblog/Public/Home/assets/i/avatar.jpg<?php else: ?>/myblog/Public<?php echo ($m['pic']); endif; ?>" alt="" class="blog-author-img am-circle">
          </div>
          <div class="am-u-sm-9 am-u-md-9 am-u-lg-10">
          <h3><span>昵称 &nbsp;: &nbsp;</span><span class="blog-color"><?php echo ($m['name']); ?></span>&nbsp;&nbsp;<span>----------<?php echo date('Y-m-d H:i:s',$m['time']);?></span></h3>
            <p><?php echo ($m['content']); ?></p>
          </div>
        </div>
        <hr><?php endforeach; endif; ?>
<!-- 评论结束 -->


        
        <hr>

        <form class="am-form am-g" action="<?php echo U('Article/msg_add');?>" method="post" enctype="multipart/form-data" >
            <h3 class="blog-comment">评论</h3>
          <fieldset>
          <input type="hidden" name="artid" value="<?php echo ($info['id']); ?>">
          <input type="hidden" name="cateid" value="<?php echo ($info['cateid']); ?>">
            <div class="am-form-group am-u-sm-4 blog-clear-left">
              <input type="text" name="name" class="" placeholder="昵称">
            </div>
            <div class="am-form-group am-u-sm-4">
              <input type="email" name="email" class="" placeholder="邮箱">
            </div>

  
            <div class="am-form-group">
            <span>上传头像:</span><input type="file" name="pic" class="" >
            </div>

        
            <div class="am-form-group">
              <textarea name="content" class="" rows="5" placeholder="一字千金"></textarea>
            </div>
        
            <p><button type="submit" class="am-btn am-btn-default">发表评论</button></p>
          </fieldset>
        </form>

        <hr>
    </div>

   <div class="am-u-md-4 am-u-sm-12 blog-sidebar">
        <div class="blog-sidebar-widget blog-bor">
            <h2 class="blog-text-center blog-title"><span>About ME</span></h2>
            <img src="/myblog/Public/Home/assets/i/f14.jpg" alt="about me" class="blog-entry-img" >
            <p>PHP</p>
            <p>
        中国首个开源 HTML5 跨屏前端框架
        </p><p>我不想成为一个庸俗的人。十年百年后，当我们死去，质疑我们的人同样死去，后人看到的是裹足不前、原地打转的你，还是一直奔跑、走到远方的我？</p>
        </div>
        <div class="blog-sidebar-widget blog-bor">
            <h2 class="blog-text-center blog-title"><span>Contact ME</span></h2>
            <p>
                <a href="javascript:;"><span class="am-icon-qq am-icon-fw am-primary blog-icon"></span></a>
                <a href="javascript:;"><span class="am-icon-github am-icon-fw blog-icon"></span></a>
                <a href="javascript:;"><span class="am-icon-weibo am-icon-fw blog-icon"></span></a>
                <a href="javascript:;"><span class="am-icon-reddit am-icon-fw blog-icon"></span></a>
                <a href="javascript:;"><span class="am-icon-weixin am-icon-fw blog-icon"></span></a>
            </p>
        </div>
                <div class="blog-sidebar-widget blog-bor">
            <h2 class="blog-title"><span>学无止境</span></h2>
            <ul class="am-list">
<?php if(is_array($cates)): foreach($cates as $key=>$v): ?><li><a href="/myblog/Home/Study/index/cateid/<?php echo ($v['id']); ?>"><?php echo ($v['catename']); ?></a></li><?php endforeach; endif; ?>
            </ul>
        </div>
        <div class="blog-clear-margin blog-sidebar-widget blog-bor am-g ">
            <h2 class="blog-title"><span>TAG cloud</span></h2>
            <div class="am-u-sm-12 blog-clear-padding">
<?php if(is_array($arr)): foreach($arr as $key=>$v): ?><a href="/myblog/Home/Index/index/keywords/<?php echo ($v); ?>" class="blog-tag" id="blog-tag"><?php echo ($v); ?></a><?php endforeach; endif; ?>
            </div>
        </div>

        <div class="blog-sidebar-widget blog-bor">
            <h2 class="blog-title"><span>推荐文章</span></h2>
            <ul class="am-list">
<?php if(is_array($tuijian)): foreach($tuijian as $key=>$t): ?><li><a href="/myblog/Home/Article/index/cateid/<?php echo ($t['cateid']); ?>/artid/<?php echo ($t['id']); ?>"><?php echo (mb_substr($t['title'],0,20,'utf-8')); ?>...</a></li><?php endforeach; endif; ?>

            </ul>
        </div>

</div>




</div>
<!-- content end -->


<link rel="stylesheet" type="text/css" href="/myblog/Public/Home/assets/css/fhdb.css">
  <div class="guide">
    <div class="guide-wrap">

        <a href="javascript:window.scrollTo(0,0)" class="top" title="回顶部"><span>回顶部</span></a>
    </div>
</div>
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