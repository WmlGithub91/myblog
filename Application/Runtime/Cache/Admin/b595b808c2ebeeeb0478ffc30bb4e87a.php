<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title>如影随形 - 后台管理</title>
    
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	
    <!-- bootstrap -->
    <link href="/myblog/Public/Admin/css/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="/myblog/Public/Admin/css/bootstrap/bootstrap-responsive.css" rel="stylesheet" />
    <link href="/myblog/Public/Admin/css/bootstrap/bootstrap-overrides.css" type="text/css" rel="stylesheet" />

    <!-- libraries -->
    <link href="/myblog/Public/Admin/css/lib/jquery-ui-1.10.2.custom.css" rel="stylesheet" type="text/css" />
    <link href="/myblog/Public/Admin/css/lib/font-awesome.css" type="text/css" rel="stylesheet" />

    <!-- global styles -->
    <link rel="stylesheet" type="text/css" href="/myblog/Public/Admin/css/layout.css" />
    <link rel="stylesheet" type="text/css" href="/myblog/Public/Admin/css/elements.css" />
    <link rel="stylesheet" type="text/css" href="/myblog/Public/Admin/css/icons.css" />
    <link rel="stylesheet" type="text/css" href="/myblog/Public/Admin/css/page.css" />

    <!-- this page specific styles -->
    <link rel="stylesheet" href="/myblog/Public/Admin/css/compiled/index.css" type="text/css" media="screen" />    
    <script type="text/javascript" src="/myblog/Public/Admin/js/ip.js"></script>
    <script type="text/javascript" src="/myblog/Public/Admin/js/jquery.js"></script>
    <script type="text/javascript">
        var pro = remote_ip_info["province"];
        var city = remote_ip_info["city"];
    </script>


    <!-- open sans font -->
    <!-- <link href='http://fonts.useso.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css' /> -->

    <!-- lato font -->
    <!-- <link href='http://fonts.useso.com/css?family=Lato:300,400,700,900,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css' /> -->

    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style>  
textarea{ resize:none; width:60%; height:200px;}
</style>
</head>
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
                        <span class="count"> <?php echo ($num); ?></span>
                    </a>

                    <div class="pop-dialog">
                        <div class="pointer right">
                            <div class="arrow"></div>
                            <div class="arrow_border"></div>
                        </div>
                        <div class="body">
                            <a href="#" class="close-icon"><i class="icon-remove-sign"></i></a>
                            <div class="notifications">
                                <h3>您本月有 <?php echo ($num); ?> 条留言</h3>
                        <?php if(is_array($arr)): foreach($arr as $key=>$v): ?><a href="#" class="item">
                                    <i class="icon-comments-alt"></i><?php echo (mb_substr($v['content'],0,15,'utf-8')); ?>
                                    <span class="time"><i class="icon-user"></i> <?php echo ($v['name']); ?>.</span>
                                </a><?php endforeach; endif; ?>
                                <div class="footer">
                                    <a href="<?php echo U('Admin/Msg/index');?>" class="logout">查看所有通知</a>
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

            <!-- upper main stats -->
            <div id="main-stats">
                <div class="row-fluid stats-row">
                    <div class="span3 stat">
                        <div class="data">
                        <?php echo (session('rolename')); ?>
                            <span class="number"><?php echo (session('username')); ?></span>
                            
                        </div>
                        <span class="date">today</span>
                    </div>
                    <div class="span3 stat">
                        <div class="data">
                            登陆地址
                            <span class="number"><script type="text/javascript">document.write(pro)</script>-<script type="text/javascript">document.write(city)</script></span>
                        </div>
                        <span class="date"><?php echo date('Y-m-d');?></span>
                    </div>
                    <div class="span3 stat">
                        <div class="data">
                            登录IP
                            <span class="number"><?php echo ($realip); ?></span>
                        </div>
                        <span class="date"><?php echo date('H:i:s');?></span>
                    </div>
                   <div class="span3 stat last">
                        <div class="data">
                         <iframe width="370" scrolling="no" height="15" frameborder="0" allowtransparency="true" src="http://i.tianqi.com/index.php?c=code&id=11&bgc=%23FFFFFF&icon=1"></iframe>
                        </div>
                        <span class="date">天气.预报</span>
                    </div> 
                </div>
            </div>
            <!-- end upper main stats -->

            <div id="pad-wrapper">

                <!-- statistics chart built with jQuery Flot -->
                <div class="row-fluid chart">
                    <h4>
                        网站介绍&nbsp;:
                         <div class="btn-group pull-right">

                        </div>
                    </h4>
                    <div class="span12" style="font-size:16px;padding-right: 100px;padding-top: 30px;">
                        <!-- <div id="statsChart"></div> -->
<div style="width:1200px;height:300px;">

<div style="float: left;width:800px;height:300px;">
<?php echo htmlspecialchars_decode($ins['content']);?>

</div>


<div style="float: right;width:300px;height:300px;">
      <img src="/myblog/Public<?php echo ($ins['logo_pic']); ?>" alt=""  ></div>

 </div>                     

                        <p style="margin-left: 56%">
                            
<a href="<?php echo U('edit');?>"  class="btn-flat new-product">修改</a>

                        </p>
                    </div>
                </div>
                <!-- end statistics chart -->

                <!-- table sample -->
                <!-- the script for the toggle all checkboxes from header is located in js/theme.js -->
                <!--
                <div class="table-products section">
                    <div class="row-fluid head">
                        <div class="span12">
                            <h4>轮播文章列表</h4>
                        </div>
                    </div>

                    <div class="row-fluid filter-block">
                        <div class="pull-right">

                        <form action="<?php echo U('Admin/Index/index');?>" method="get"> 
                                <div class="ui-dropdown">
                                                <select name="cateid">
                                                    <option name="" value="" />栏目分类搜索
                                                <?php if(is_array($cates)): foreach($cates as $key=>$v): ?><option name="" value="<?php echo ($v['id']); ?>" /><?php echo str_repeat('-',$v['lev']*8); echo ($v['catename']); endforeach; endif; ?>
                                                </select>
                                </div>
                                 <input type="text" class="span5" name="keywords" placeholder="根据文章标题搜索" />
                                <input type="submit" value="查询" style="margin-bottom: 10px; font-size: 12px;padding: 0.2px 3px; border-radius:5px; color:rgb(105, 109, 115);">

                        </form>

                        </div>
         
                    </div>

                <form name="myform" id="myform" method="post">
<input form="myform" formaction="<?php echo U('Admin/Article/bdel');?>" class="btn-flat new-product" type="submit" onclick="return confirm('你确定要批量删除吗!')" value="批量删除">
                   <a href="<?php echo U('Article/add');?>" class="btn-flat new-product">+ 添加文章</a>
                    <div class="row-fluid">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th class="span3">
                                        <input type="checkbox" />
                                        文章标题
                                    </th>
                                    <th class="span3">
                                        <span class="line"></span>文章关键字
                                    </th>                                    
                                    <th class="span3">
                                        <span class="line"></span>所属栏目
                                    </th>
                                    <th class="span3">
                                        <span class="line"></span>发布时间
                                    </th>
                                    <th class="span3">
                                        <span class="line"></span>文章状态
                                    </th>

                                </tr>
                            </thead>
                            <tbody>
                              
<?php if(is_array($arts)): foreach($arts as $key=>$v): ?><tr class="first">
                                    <td>
                                       <input name="ids[]" value="<?php echo ($v['id']); ?>" class="check" type="checkbox">
                                        <div class="img">
                                            <?php if($v['pic'] == '' ): ?><img src="/myblog/Public/Admin/img/table-img.png" />
                                            <?php else: ?>
                                            <img width="28px;" height="28px;" src="/myblog/Public<?php echo ($v['pic']); ?>" /><?php endif; ?>
                                        </div>
                                        <a href="#"><?php echo ($v['title']); ?> </a>
                                    </td>
                                    <td class="description">
                                        <?php echo ($v['keywords']); ?>
                                    </td>   
                                    <td class="description">
                                        <span class="label label-success">  <?php echo ($v['catename']); ?></span>
                                    </td>
                                    <td class="description">
                                       <?php echo date('Y-m-d H:i:s',$v['subtime']);?>
                                    </td>
                                    <td>
                                        <span class="label label-success">轮播推荐</span>
                                        <ul class="actions">
                                            <li><a href="<?php echo U('Article/edit',array('id'=>$v['id']));?>"><i class="table-edit"></i></a></li>
                                            <li class="last"><a href="<?php echo U('Article/del',array('id'=>$v['id']));?>" onclick="return confirm('确定删除该文章吗?');"><i class="table-delete"></i></a></li>
                                        </ul>
                                    </td>
                                </tr><?php endforeach; endif; ?>

                            </tbody>
                        </table>
                    </div>
                     </form>
                     <?php echo ($page); ?>


                    
                </div>
                -->
                <!-- end table sample -->
            </div>
        </div>
    </div>


	<!-- scripts -->
    <script src="/myblog/Public/Admin/js/jquery-latest.js"></script>
    <script src="/myblog/Public/Admin/js/bootstrap.min.js"></script>
    <script src="/myblog/Public/Admin/js/jquery-ui-1.10.2.custom.min.js"></script>
    <!-- knob -->
    <!-- <script src="/myblog/Public/Admin/js/jquery.knob.js"></script> -->
    <!-- flot charts -->
<!--     <script src="/myblog/Public/Admin/js/jquery.flot.js"></script>
    <script src="/myblog/Public/Admin/js/jquery.flot.stack.js"></script>
    <script src="/myblog/Public/Admin/js/jquery.flot.resize.js"></script> -->
    <script src="/myblog/Public/Admin/js/theme.js"></script>

    <script type="text/javascript">
        $(function () {

            // toggle form between inline and normal inputs
            var $buttons = $(".toggle-inputs button");
            var $form = $("form.new_user_form");

            $buttons.click(function () {
                var mode = $(this).data("input");
                $buttons.removeClass("active");
                $(this).addClass("active");

                if (mode === "inline") {
                    $form.addClass("inline-input");
                } else {
                    $form.removeClass("inline-input");
                }
            });
        });
    </script>

</body>
</html>