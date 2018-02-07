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
    <link href="/myblog/Public/Admin/css/lib/bootstrap-wysihtml5.css" type="text/css" rel="stylesheet" />
    <link href="/myblog/Public/Admin/css/lib/uniform.default.css" type="text/css" rel="stylesheet" />
    <link href="/myblog/Public/Admin/css/lib/select2.css" type="text/css" rel="stylesheet" />
    <link href="/myblog/Public/Admin/css/lib/bootstrap.datepicker.css" type="text/css" rel="stylesheet" />
    <link href="/myblog/Public/Admin/css/lib/font-awesome.css" type="text/css" rel="stylesheet" />

    <!-- global styles -->
    <link rel="stylesheet" type="text/css" href="/myblog/Public/Admin/css/layout.css" />
    <link rel="stylesheet" type="text/css" href="/myblog/Public/Admin/css/elements.css" />
    <link rel="stylesheet" type="text/css" href="/myblog/Public/Admin/css/icons.css" />
    
    <!-- this page specific styles -->
    <link rel="stylesheet" href="/myblog/Public/Admin/css/compiled/form-showcase.css" type="text/css" media="screen" />
    <script type="text/javascript" charset="utf-8" src="/myblog/Public/ueditor/ueditor.config.js"></script>
    <script type="text/javascript" charset="utf-8" src="/myblog/Public/ueditor/ueditor.all.min.js"></script>
    <script type="text/javascript" charset="utf-8" src="/myblog/Public/ueditor/lang/zh-cn/zh-cn.js"></script>

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
            <div id="pad-wrapper" class="form-page">
                <div class="row-fluid form-wrapper">
    
                            <div class="row-fluid header">
                    <h3>文章修改</h3>
                    <div class="span10 pull-right">
                        <!-- <input type="text" class="span5 search" placeholder="Type a user's name..." /> -->
                        
                        <a href="<?php echo U('lst');?>" class="btn-flat success pull-right">
                            <span>&#43;</span>
                           返回文章列表
                        </a>
                    </div>
                </div>

                    <!-- left column -->
                    <div class="span8 column">
                        <form action="" method="post" class="new_user_form inline-input" enctype="multipart/form-data" />
                          <input type="hidden" name="id" value="<?php echo ($arts['id']); ?>">
                            <div class="field-box">
                                <label>栏目标题:</label>
                                <input class="span8 inline-input" name="title" type="text" value="<?php echo ($arts['title']); ?>" />
                            </div> 
                            <div class="field-box">
                                <label>所属栏目:</label>
                                <div class="ui-select">
                                    <select name="cateid">
       
                           <?php if(is_array($cates)): foreach($cates as $key=>$v): ?><option <?php if($arts['cateid'] == $v['id']): ?>selected="selected"<?php endif; ?> value="<?php echo ($v['id']); ?>" /> <?php  echo str_repeat('-',$v['lev']*8); echo ($v['catename']); endforeach; endif; ?>
                                    </select>
                                </div>
                            </div>                           
                            <div class="field-box">
                                <label>文章关键词:</label>
                                <input class="span8 inline-input" name="keywords" type="text" value="<?php echo ($arts['keywords']); ?>" />
                            </div>
                            <div class="field-box">
                                <label>来源url:</label>
                                <input class="span8 inline-input" name="url" type="text" value="<?php echo ($arts['url']); ?>" />
                            </div>
                            <div class="field-box">
                                <label>阅读量:</label>
                                <input class="span8 inline-input" name="num" type="text" value="<?php echo ($arts['num']); ?>" />
                            </div>                     
                             <div class="field-box">
                                <label>文章作者:</label>
                                <input class="span8 inline-input" name="author" type="text" value="<?php echo ($arts['author']); ?>" />
                            </div>                                


                            <div class="field-box">
                                <label>文章推荐:</label>
                                <div class="span8">
                                    <label class="radio">
                                        <input type="radio" name="rem" id="optionsRadios1" value="0" <?php if($arts['rem'] == 0): ?>checked="checked"<?php endif; ?> />
                                       不推荐
                                    </label>
                                    <label class="radio">
                                        <input type="radio" name="rem" id="optionsRadios1" value="1" <?php if($arts['rem'] == 1): ?>checked="checked"<?php endif; ?> />
                                       一级推荐
                                    </label>
                                    <label class="radio">
                                        <input type="radio" name="rem" id="optionsRadios2" value="2" <?php if($arts['rem'] == 2): ?>checked="checked"<?php endif; ?> />
                                        二级推荐
                                    </label>
                                    <label class="radio">
                                        <input type="radio" name="rem" id="optionsRadios1" value="3" <?php if($arts['rem'] == 3): ?>checked="checked"<?php endif; ?>  />
                                       三级推荐
                                    </label>
                                    <label class="radio">
                                        <input type="radio" name="rem" id="optionsRadios2" value="4" <?php if($arts['rem'] == 4): ?>checked="checked"<?php endif; ?> />
                                        四级推荐
                                    </label>
                                    <label class="radio">
                                        <input type="radio" name="rem" id="optionsRadios2" value="5" <?php if($arts['rem'] == 5): ?>checked="checked"<?php endif; ?> />
                                        轮播图推荐
                                    </label>
                                </div>                                
                            </div>
                            <div class="field-box">
                                <label>文章描述:</label>
                                <textarea name="des" class="span8" rows="4"><?php echo ($arts['des']); ?></textarea>
                            </div>
                            <div class="field-box">
                                <label>缩略图:</label>
                                <input type="file" name="pic" value="" placeholder="">
                                <?php if($arts['pic'] == '' ): ?><span style="color: red;">暂无缩略图</span>
                                <?php else: ?>
                                <img width="150px;" height="150px;" src="/myblog/Public<?php echo ($arts['pic']); ?>" alt=""><?php endif; ?>
                            </div>
                            <div class="field-box">
                                <label>文章内容:</label>
                                <textarea id="content" name="content" class="span8" rows="4" style="margin-left: 0px;"><?php echo ($arts['content']); ?></textarea>
                            </div>                    
                                <div class="span11 field-box actions" style="margin-left: 700px;">
                                    <input type="submit" class="btn-glow primary" value="修改文章" />
                                </div>
                        </form>
                    </div>

                    <!-- right column -->

    <!-- end main container -->

	<!-- scripts for this page -->
    <script src="/myblog/Public/Admin/js/wysihtml5-0.3.0.js"></script>
    <script src="/myblog/Public/Admin/js/jquery-latest.js"></script>
    <script src="/myblog/Public/Admin/js/bootstrap.min.js"></script>
    <script src="/myblog/Public/Admin/js/bootstrap-wysihtml5-0.0.2.js"></script>
    <script src="/myblog/Public/Admin/js/bootstrap.datepicker.js"></script>
    <script src="/myblog/Public/Admin/js/jquery.uniform.min.js"></script>
    <script src="/myblog/Public/Admin/js/select2.min.js"></script>
    <script src="/myblog/Public/Admin/js/theme.js"></script>

    <!-- call this page plugins -->
    <script type="text/javascript">
        $(function () {

            // add uniform plugin styles to html elements
            $("input:checkbox, input:radio").uniform();

            // select2 plugin for select elements
            $(".select2").select2({
                placeholder: "Select a State"
            });

            // datepicker plugin
            $('.datepicker').datepicker().on('changeDate', function (ev) {
                $(this).datepicker('hide');
            });

            // wysihtml5 plugin on textarea
            $(".wysihtml5").wysihtml5({
                "font-styles": false
            });
        });
    </script>

    <script type="text/javascript">
    UE.getEditor('content',{initialFrameWidth:900,initialFrameHeight:400,});
</script>

</body>
</html>