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

    <!-- libraries -->
    <link rel="stylesheet" type="text/css" href="/myblog/Public/Admin/css/lib/font-awesome.css" />
    
    <!-- this page specific styles -->
    <link rel="stylesheet" href="/myblog/Public/Admin/css/compiled/new-user.css" type="text/css" media="screen" />

    <!-- open sans font -->
    <!-- <link href='http://fonts.useso.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css' /> -->

    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <style>
            .state1{
                color:#aaa;
            }
            .state2{
                color:#000;
            }
            .state3{
                color:red;
            }
            .state4{
                color:green;
            }
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
            <div id="pad-wrapper" class="new-user">
                <div class="row-fluid header">
                    <h3>新增管理员</h3>
                    <div class="span10 pull-right">
                        <!-- <input type="text" class="span5 search" placeholder="Type a user's name..." /> -->
                        
                        <a href="<?php echo U('lst');?>" class="btn-flat success pull-right">
                            <span>&#43;</span>
                           返回管理员列表
                        </a>
                    </div>
                </div>


                <div class="row-fluid form-wrapper">
                    <!-- left column -->
                    <div class="span9 with-sidebar">
                        <div class="container">
                            <form class="new_user_form inline-input" action="" method="post" enctype="multipart/form-data" />
                                <div class="span12 field-box">
                                    <label>UserName:</label>
                                    <input name="username" class="span9" type="text" /><span class='state1'>请输入用户名</span>
                                </div>
                                <div class="span12 field-box">
                                    <label>RealName:</label>
                                    <input name="realname" class="span9" type="text" /><span class='state1'>请输入真实姓名</span>
                                </div>
                                <div class="span12 field-box">
                                    <label>Email:</label>
                                    <input name="email" class="span9" type="text" /><span class='state1'>请输入邮箱</span>
                                </div>
                                <div class="span12 field-box">
                                    <label>Phone:</label>
                                    <input name="phone" class="span9" type="text" /><span class='state1'>请输入手机号</span>
                                </div>
                                <div class="span12 field-box">
                                    <label>Password:</label>
                                    <input name="password" class="span9" type="text" /><span class='state1'>请输入密码</span>
                                </div>
                                   <div class="span12 field-box">
                                    <label>Role:</label>
                                    <div class="ui-select span5">
                                        <select name="roleid">
                                        <?php if(is_array($roles)): foreach($roles as $key=>$v): ?><option value="<?php echo ($v['id']); ?>" /><?php echo ($v['rolename']); endforeach; endif; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="span12 field-box">
                                    <label>Head portrait:</label>
                                    <input name="head_pic" type="file" />
                                </div>
                                <div class="span11 field-box actions">
                                    <input class="submit" type="submit" class="btn-glow primary" value="Create user" />
                                </div>
                            </form>
                        </div>
                    </div>


	<!-- scripts -->
    <script src="/myblog/Public/Admin/js/jquery-latest.js"></script>
    <script src="/myblog/Public/Admin/js/bootstrap.min.js"></script>
    <script src="/myblog/Public/Admin/js/theme.js"></script>
    <script src="/myblog/Public/Admin/js/jquery.js"></script>

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

      <script>
            $(function(){
 
                var ok1=false;
                var ok2=false;
                var ok3=false;
                var ok4=false;
                var ok5=false;

                // 验证用户名
                $('input[name="username"]').focus(function(){
                    $(this).next().text('用户名应该为3-12位之间').removeClass('state1').addClass('state2');
                }).blur(function(){
                    if($(this).val().length >= 3 && $(this).val().length <=12 && $(this).val()!=''){
                        $(this).next().text('输入成功').removeClass('state1').addClass('state4');
                        ok1=true;
                    }else{
                        $(this).next().text('用户名应该为3-12位之间').removeClass('state1').addClass('state3');
                    }
                     
                });


                // 验证真实姓名
                $('input[name="realname"]').focus(function(){
                    $(this).next().text('真实姓名应该为3-12位之间').removeClass('state1').addClass('state2');
                }).blur(function(){
                    if($(this).val().length >= 3 && $(this).val().length <=12 && $(this).val()!=''){
                        $(this).next().text('输入成功').removeClass('state1').addClass('state4');
                        ok2=true;
                    }else{
                        $(this).next().text('真实姓名应该为3-12位之间').removeClass('state1').addClass('state3');
                    }
                     
                });

 
                //验证密码
                $('input[name="password"]').focus(function(){
                    $(this).next().text('密码应该为6-20位之间').removeClass('state1').addClass('state2');
                }).blur(function(){
                    if($(this).val().length >= 6 && $(this).val().length <=20 && $(this).val()!=''){
                        $(this).next().text('输入成功').removeClass('state1').addClass('state4');
                        ok3=true;
                    }else{
                        $(this).next().text('密码应该为6-20位之间').removeClass('state1').addClass('state3');
                    }
                     
                });

 
                //验证确认密码
                //     $('input[name="repass"]').focus(function(){
                //     $(this).next().text('输入的确认密码要和上面的密码一致,规则也要相同').removeClass('state1').addClass('state2');
                // }).blur(function(){
                //     if($(this).val().length >= 6 && $(this).val().length <=20 && $(this).val()!='' && $(this).val() == $('input[name="password"]').val()){
                //         $(this).next().text('输入成功').removeClass('state1').addClass('state4');
                //         ok3=true;
                //     }else{
                //         $(this).next().text('输入的确认密码要和上面的密码一致,规则也要相同').removeClass('state1').addClass('state3');
                //     }
                     
                // });
 
                //验证邮箱
                $('input[name="email"]').focus(function(){
                    $(this).next().text('请输入正确的EMAIL格式').removeClass('state1').addClass('state2');
                }).blur(function(){
                    if($(this).val().search(/\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*/)==-1){
                        $(this).next().text('请输入正确的EMAIL格式').removeClass('state1').addClass('state3');
                    }else{                  
                        $(this).next().text('输入成功').removeClass('state1').addClass('state4');
                        ok4=true;
                    }
                     
                });


                //验证手机号
                $('input[name="phone"]').focus(function(){
                    $(this).next().text('请输入正确的手机号格式').removeClass('state1').addClass('state2');
                }).blur(function(){
                    if($(this).val().search(/^0{0,1}(13[4-9]|15[7-9]|15[0-2]|18[7-8])[0-9]{8}$/)==-1){
                        $(this).next().text('请输入正确的手机号格式').removeClass('state1').addClass('state3');
                    }else{                  
                        $(this).next().text('输入成功').removeClass('state1').addClass('state4');
                        ok5=true;
                    }
                     
                });

 
                //提交按钮,所有验证通过方可提交
 
                $('.submit').click(function(){
                    if(ok1 && ok2 && ok3 && ok4 && ok5){
                        $('form').submit();
                    }else{
                        return false;
                    }
                });
                 
            });
        </script>
</body>
</html>