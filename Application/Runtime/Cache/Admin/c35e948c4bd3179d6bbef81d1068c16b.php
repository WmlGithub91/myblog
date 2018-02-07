<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title>如影随形 - 后台管理</title>
    
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	
    <!-- bootstrap -->
    <link href="/myblog/Public/Admin/css/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="/myblog/Public/Admin/css/bootstrap/bootstrap-responsive.css" rel="stylesheet" />
    <link href="/myblog/Public/Admin/css/bootstrap/bootstrap-overrides.css" type="text/css" rel="stylesheet" />

    <!-- global styles -->
    <link rel="stylesheet" type="text/css" href="/myblog/Public/Admin/css/layout.css" />
    <link rel="stylesheet" type="text/css" href="/myblog/Public/Admin/css/elements.css" />
    <link rel="stylesheet" type="text/css" href="/myblog/Public/Admin/css/icons.css" />
    <link rel="stylesheet" type="text/css" href="/myblog/Public/Admin/css/page.css" />

    <!-- libraries -->
    <link href="/myblog/Public/Admin/css/lib/font-awesome.css" type="text/css" rel="stylesheet" />
    
    <!-- this page specific styles -->
    <link rel="stylesheet" href="/myblog/Public/Admin/css/compiled/gallery.css" type="text/css" media="screen" />

    <!-- open sans font -->
    <!-- <link href='http://fonts.useso.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css' /> -->

    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>
<body>

    <!-- navbar -->
    <div class="navbar navbar-inverse">
        <div class="navbar-inner">
            <button type="button" class="btn btn-navbar visible-phone" id="menu-toggler">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            
            <a class="brand" href="index.html" style="font-weight:700;font-family:Microsoft Yahei">如影随形 - 后台管理</a>

            <ul class="nav pull-right">                
                <li class="hidden-phone">
               
                </li>
                <li class="notification-dropdown hidden-phone">
                    <a href="#" class="trigger">
                        <i class="icon-warning-sign"></i>
                        <span class="count">6</span>
                    </a>
                    <div class="pop-dialog">
                        <div class="pointer right">
                            <div class="arrow"></div>
                            <div class="arrow_border"></div>
                        </div>
                        <div class="body">
                            <a href="#" class="close-icon"><i class="icon-remove-sign"></i></a>
                            <div class="notifications">
                                <h3>你有 6 个新通知</h3>
                                <a href="#" class="item">
                                    <i class="icon-signin"></i> 新用户注册
                                    <span class="time"><i class="icon-time"></i> 13 分钟前.</span>
                                </a>
                                <a href="#" class="item">
                                    <i class="icon-signin"></i> 新用户注册
                                    <span class="time"><i class="icon-time"></i> 18 分钟前.</span>
                                </a>
                                <a href="#" class="item">
                                    <i class="icon-signin"></i> 新用户注册
                                    <span class="time"><i class="icon-time"></i> 49 分钟前.</span>
                                </a>
                                <a href="#" class="item">
                                    <i class="icon-download-alt"></i> 新订单
                                    <span class="time"><i class="icon-time"></i> 1 天前.</span>
                                </a>
                                <div class="footer">
                                    <a href="#" class="logout">查看所有通知</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                
                <li class="notification-dropdown hidden-phone">
                    <a href="<?php echo U('Home/Index/index');?>" target="_blank">
                        <i class="icon-desktop"></i>
                    </a>

                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle hidden-phone" data-toggle="dropdown">
                        账户管理
                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="/myblog/Admin/User/user_edit/id/<?php echo (session('id')); ?>">个人信息管理</a></li>
                        <li><a href="<?php echo U('User/pwd_edit');?>">修改密码</a></li>
                        <!-- <li><a href="#">订单管理</a></li> -->
                    </ul>
                </li>
                <li class="settings hidden-phone">
                    <a href="<?php echo U('System/index');?>" role="button">
                        <i class="icon-cog"></i>
                    </a>
                </li>
                <li class="settings hidden-phone">
                    <a href="<?php echo U('User/logout');?>" role="button">
                        <i class="icon-signout"></i>
                    </a>
                </li>
            </ul>            
        </div>
    </div>
    <!-- end navbar -->

    <!-- sidebar -->
    <div id="sidebar-nav">
        <ul id="dashboard-menu">
<!--
<?php $menu=session('menu'); foreach ($menu as $k=>$v): ?>
             <li <?php if($Think.CONTROLLER_NAME == 'Cate'){ echo 'class="active"';} ; ?>>
                <a class="dropdown-toggle" href="#">
                    <i class="icon-bar-chart"></i>
                    <span><?php echo $v['pri_name'];?></span>
                    <i class="icon-chevron-down"></i>
                </a>
                <ul class="submenu" <?php if($Think.CONTROLLER_NAME == 'Cate'){ echo 'style="display: block;"';} ; ?>>
                <?php foreach($v['sub'] as $k1=>$v1):?>
                    <li><a href="<?php echo U($v1['mname'].'/'.$v1['cname'].'/'.$v1['aname']);?>"><?php echo $v1['pri_name']; ?></a></li>
                <?php endforeach;?>  
                </ul>
            </li>
<?php endforeach;?>  
-->          

            <li  <?php if($Think.CONTROLLER_NAME == 'Index'){ echo 'class="active"';} ; ?> >
                <div class="pointer">
                    <div class="arrow"></div>
                    <div class="arrow_border"></div>
                </div>
                <a href="<?php echo U('Index/index');?>">
                    <i class="icon-home"></i>
                    <span>后台首页</span>
                </a>
            </li>            
            <li <?php if($Think.CONTROLLER_NAME == 'Cate'){ echo 'class="active"';} ; ?>>
                <a class="dropdown-toggle" href="#">
                    <i class="icon-bar-chart"></i>
                    <span>栏目管理</span>
                    <i class="icon-chevron-down"></i>
                </a>
                <ul class="submenu" <?php if($Think.CONTROLLER_NAME == 'Cate'){ echo 'style="display: block;"';} ; ?>>
                    <li><a href="<?php echo U('Cate/lst');?>">栏目列表</a></li>
                    <li><a href="<?php echo U('Cate/add');?>">添加新栏目</a></li>
                    <!-- <li><a href="user-profile.html">用户信息</a></li> -->
                </ul>
            </li>


           <li <?php if($Think.CONTROLLER_NAME == 'Article'){ echo 'class="active"';} ; ?>>
                <a class="dropdown-toggle" href="#">
                    <i class="icon-edit"></i>
                    <span>文章管理</span>
                    <i class="icon-chevron-down"></i>
                </a>
                <ul class="submenu" <?php if($Think.CONTROLLER_NAME == 'Article'){ echo 'style="display: block;"';} ; ?>>
                    <li><a href="<?php echo U('Article/lst');?>">文章列表</a></li>
                    <li><a href="<?php echo U('Article/add');?>">添加新文章</a></li>
                </ul>
            </li>
            <li  <?php if($Think.CONTROLLER_NAME == 'User' || $Think.CONTROLLER_NAME == 'Role' || $Think.CONTROLLER_NAME == 'Privilege' ){ echo 'class="active"';} ; ?>>
                <a class="dropdown-toggle" href="#">
                    <i class="icon-group"></i>
                    <span>用户管理</span>
                    <i class="icon-chevron-down"></i>
                </a>
                <ul class="submenu" <?php if($Think.CONTROLLER_NAME == 'User' || $Think.CONTROLLER_NAME == 'Role' || $Think.CONTROLLER_NAME == 'Privilege' ){ echo 'style="display: block;"';} ; ?>>
                    <li><a href="<?php echo U('User/user_list');?>">用户列表</a></li>
                    <li><a href="<?php echo U('Role/lst');?>">角色管理</a></li>
                    <li><a href="<?php echo U('Privilege/lst');?>">权限管理</a></li>
                </ul>
            </li>

              <li  <?php if($Think.CONTROLLER_NAME == 'Link' ){ echo 'class="active"';} ; ?>>
                <a class="dropdown-toggle" href="#">
                    <i class="icon-move"></i>
                    <span>友情链接</span>
                    <i class="icon-chevron-down"></i>
                </a>
                <ul class="submenu" <?php if($Think.CONTROLLER_NAME == 'Link' ){ echo 'style="display: block;"';} ; ?>>
                    <li><a href="<?php echo U('Link/lst');?>">友情链接列表</a></li>
                    <li><a href="<?php echo U('Link/add');?>">新增友情链接</a></li>

                </ul>
            </li>
            <li <?php if($Think.CONTROLLER_NAME == 'Log'){ echo 'class="active"';} ; ?> >
                <a href="<?php echo U('Log/login_log');?>">
                    <i class="icon-book"></i>
                    <span>登录日志</span>
                </a>

            </li>
            <li>
                <a href="<?php echo U('Image/index');?>">
                    <i class="icon-picture"></i>
                    <span>相册管理</span>
                </a>
            </li>          

            
            <li>
                <a href="<?php echo U('System/index');?>">
                    <i class="icon-cog"></i>
                    <span>网站设置</span>
                </a>
            </li>    

              <li>
                <a href="<?php echo U('Msg/index');?>">
                    <i class="icon-comments"></i>
                    <span>评论管理</span>
                </a>
            </li>
            
        </ul>
    </div>
    <!-- end sidebar -->


	<!-- main container -->
    <div class="content">

        
        <div class="container-fluid">
            <div id="pad-wrapper" class="gallery">
                <div class="row-fluid header">
                    <h3>Gallery</h3>                    
                </div>
                          <form action="<?php echo U('Admin/Image/index');?>" method="get"> 
                                <div class="ui-dropdown">
                                                <select name="artid">
                                                    <option name="" value="" />文章分类搜索
                                                <?php if(is_array($arts)): foreach($arts as $key=>$v): ?><option name="" value="<?php echo ($v['id']); ?>" /><?php echo ($v['title']); endforeach; endif; ?>
                                                </select>
                                </div>
                                 <!-- <input type="text" class="span5" name="keywords" placeholder="根据图片标题搜索" /> -->
                                <input type="submit" value="查询" style="margin-bottom: 10px; font-size: 12px;padding: 0.2px 3px; border-radius:5px; color:rgb(105, 109, 115);">

                          </form>


                <!-- gallery wrapper -->
                <div class="gallery-wrapper">
                    <div class="row gallery-row">


                        <!-- single image -->
                        <div class="span3 img-container">
                            <div class="img-box">
                        <h5>Gallery</h5> 
                                <span class="icon edit">
                                    <i class="gallery-edit"></i>
                                </span>
                                <span class="icon trash">
                                    <i class="gallery-trash"></i>
                                </span>
                                <img src="/myblog/Public/Admin/img/gallery1.jpg" />
                                <p class="title">
                                    Beach pic title 3  【图片标题】
                                </p>
                            </div>
                        </div>

                        <!-- single image -->
                        <div class="span3 img-container">
                            <div class="img-box">
                        <h5>Gallery</h5> 
                                <span class="icon edit">
                                    <i class="gallery-edit"></i>
                                </span>
                                <span class="icon trash">
                                    <i class="gallery-trash"></i>
                                </span>
                                <img src="/myblog/Public/Admin/img/gallery1.jpg" />
                                <p class="title">
                                    Beach pic title 3  【图片标题】
                                </p>
                            </div>
                        </div>


<!-- single image -->
                        <div class="span3 img-container">
                            <div class="img-box">
                        <h5>Gallery</h5> 
                                <span class="icon edit">
                                    <i class="gallery-edit"></i>
                                </span>
                                <span class="icon trash">
                                    <i class="gallery-trash"></i>
                                </span>
                                <img src="/myblog/Public/Admin/img/gallery1.jpg" />
                                <p class="title">
                                    Beach pic title 3  【图片标题】
                                </p>
                            </div>
                        </div>


<!-- single image -->
                        <div class="span3 img-container">
                            <div class="img-box">
                        <h5>Gallery</h5> 
                                <span class="icon edit">
                                    <i class="gallery-edit"></i>
                                </span>
                                <span class="icon trash">
                                    <i class="gallery-trash"></i>
                                </span>
                                <img src="/myblog/Public/Admin/img/gallery1.jpg" />
                                <p class="title">
                                    Beach pic title 3  【图片标题】
                                </p>
                            </div>
                        </div>


<!-- single image -->
                        <div class="span3 img-container">
                            <div class="img-box">
                        <h5>Gallery</h5> 
                                <span class="icon edit">
                                    <i class="gallery-edit"></i>
                                </span>
                                <span class="icon trash">
                                    <i class="gallery-trash"></i>
                                </span>
                                <img src="/myblog/Public/Admin/img/gallery1.jpg" />
                                <p class="title">
                                    Beach pic title 3  【图片标题】
                                </p>
                            </div>
                        </div>


<!-- single image -->
<?php if(is_array($imgs)): foreach($imgs as $key=>$s): ?><div class="span3 img-container">
                            <div class="img-box">
                        <h5><?php echo ($s['titles']); ?></h5> 
                                <span class="icon edit">
                                <a href="<?php echo U('edit',array('id'=>$s['id']));?>"><i class="gallery-edit"></i></a>
                                  
                                    
                                </span>
                                <span class="icon trash">
                                  <a href="<?php echo U('del',array('id'=>$s['id']));?>" onclick="return confirm('确定删除该图片吗?');">  <i class="gallery-trash"></i></a>
                                  
                                </span>
                                <img width="230px;" height="230px;" src="/myblog/Public<?php echo ($s['pic']); ?>" />
                                <p class="title">
                                   <?php echo ($s['title']); ?>
                                </p>
                            </div>
                        </div><?php endforeach; endif; ?>


                        <!-- new image button -->
                        <div class="span3 new-img">
                         <h5>文章标题</h5> 
                            <img id="new_img" src="/myblog/Public/Admin/img/new-gallery-img.png" />
                        </div>


<!--                          <a href="#" id="new_img" class="btn-flat success pull-right">
                            <span>&#43;</span>
                            新增
                        </a> -->

                        <!-- edit image pop up -->
<!--                         <div id="edit_img" class="popup" style="display: none;">
                            <div class="pointer">
                                <div class="arrow"></div>
                                <div class="arrow_border"></div>
                            </div>
                            <i class="close-pop table-delete"></i>
                            <h5>Edit Image</h5>
                            <div class="thumb">
                                <img src="/myblog/Public/Admin/img/gallery-preview.jpg" />
                            </div>
                            <div class="title">
                                <input type="text" class="inline-input" placeholder="Title" />
                                <div class="ui-select">
                                    <select>
                                      <option />Category
                                      <option />Mountains
                                      <option />Lake and rivers
                                    </select>
                                </div>
                            </div>
                            <div class="description">
                                <h6>Description</h6>
                                <textarea></textarea>
                                <input type="submit" value="Save" class="btn-glow primary" />
                            </div>
                        </div> -->

                        <!-- add image pop up -->
                    <form action="<?php echo U('Admin/Image/add');?>" method="post" enctype="multipart/form-data">
                        <div id="add_img" class="popup" style="display: none;">
                            <div class="pointer">
                                <div class="arrow"></div>
                                <div class="arrow_border"></div>
                            </div>
                            <i id="close" class="close-pop table-delete"></i>
                            <h5>Add Image</h5>
                            <div class="thumb">
                                <img src="/myblog/Public/Admin/img/gallery-preview.jpg" />

                            </div>
                            <div class="title">
                                <input type="text" name="title" class="inline-input" placeholder="Title" />
                                <div class="ui-select">
                                    <select name="artid">
                                    <option name="" value="" />文章分类搜索
                                    <?php if(is_array($arts)): foreach($arts as $key=>$v): ?><option value="<?php echo ($v['id']); ?>" /><?php echo ($v['title']); endforeach; endif; ?>
                                    </select>
                                </div>

                                <input type="file" name="pic" value="" placeholder="">
                            </div>
                            <div class="description">
                                <h6>Description</h6>
                                <textarea name="des"></textarea>
                                <input type="submit" value="Add" class="btn-glow primary" />
                            </div>
                        </div>
                    </form>

                    </div>
<div>
    <?php echo ($page); ?>
</div>
                </div>
                <!-- end gallery wrapper -->

                <!-- blank state -->
<!--                  <div class="no-gallery">
                    <div class="row-fluid header">
                        <h3>Gallery Blank State</h3>
                    </div>
                    <div class="center">
                        <img src="/myblog/Public/Admin/img/no-img-gallery.png" />
                        <h6>You don't have any images</h6>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form</p>
                        <a class="btn-glow primary">Add new image</a>
                    </div>
                </div> -->
                <!-- end blank state -->
            </div>
        </div>
    </div>
    <!-- end main container -->


	<!-- this page scripts -->
    <script src="/myblog/Public/Admin/js/jquery-latest.js"></script>
    <script src="/myblog/Public/Admin/js/bootstrap.min.js"></script>
    <script src="/myblog/Public/Admin/js/theme.js"></script>


<script type="text/javascript">
    $("#new_img").click(function(){
        $("#add_img").css("display","block");
    })

    $("#close").click(function(){
         $("#add_img").css("display","none");
    })
</script>

</body>
</html>