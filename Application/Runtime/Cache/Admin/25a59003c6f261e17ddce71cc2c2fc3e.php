<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title>慕课商城 - 后台管理</title>
    
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	
    <!-- bootstrap -->
    <link href="/xingxiu/Public/Admin/css/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="/xingxiu/Public/Admin/css/bootstrap/bootstrap-responsive.css" rel="stylesheet" />
    <link href="/xingxiu/Public/Admin/css/bootstrap/bootstrap-overrides.css" type="text/css" rel="stylesheet" />

    <!-- libraries -->
    <link href="/xingxiu/Public/Admin/css/lib/bootstrap-wysihtml5.css" type="text/css" rel="stylesheet" />
    <link href="/xingxiu/Public/Admin/css/lib/uniform.default.css" type="text/css" rel="stylesheet" />
    <link href="/xingxiu/Public/Admin/css/lib/select2.css" type="text/css" rel="stylesheet" />
    <link href="/xingxiu/Public/Admin/css/lib/bootstrap.datepicker.css" type="text/css" rel="stylesheet" />
    <link href="/xingxiu/Public/Admin/css/lib/font-awesome.css" type="text/css" rel="stylesheet" />

    <!-- global styles -->
    <link rel="stylesheet" type="text/css" href="/xingxiu/Public/Admin/css/layout.css" />
    <link rel="stylesheet" type="text/css" href="/xingxiu/Public/Admin/css/elements.css" />
    <link rel="stylesheet" type="text/css" href="/xingxiu/Public/Admin/css/icons.css" />
    
    <!-- this page specific styles -->
    <link rel="stylesheet" href="/xingxiu/Public/Admin/css/compiled/form-showcase.css" type="text/css" media="screen" />

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
                        <li><a href="/xingxiu/index.php/Admin/User/user_edit/id/<?php echo (session('id')); ?>">个人信息管理</a></li>
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
            
        </ul>
    </div>
    <!-- end sidebar -->


	<!-- main container -->
    <div class="content">
        
        <div class="container-fluid">
            <div id="pad-wrapper" class="form-page">
                <div class="row-fluid form-wrapper">
    
                            <div class="row-fluid header">
                    <h3>图片修改</h3>

                </div>

                    <!-- left column -->
                    <div class="span8 column">
                        <form action="" method="post" class="new_user_form inline-input" enctype="multipart/form-data" />
                        <input type="hidden" name="id" value="<?php echo ($imgs['id']); ?>">
                            <div class="field-box">
                                <label>图片标题:</label>
                                <input class="span8 inline-input" name="title" type="text" value="<?php echo ($imgs['title']); ?>" />
                            </div>

                            <div class="field-box">
                                <label>所属栏目:</label>
                                <div class="ui-select">
                                    <select name="artid">
                                       
                           <?php if(is_array($arts)): foreach($arts as $key=>$v): ?><option value="<?php echo ($v['id']); ?>" <?php if($imgs['artid'] == $v['id']): ?>selected<?php endif; ?> /> <?php echo ($v['title']); endforeach; endif; ?>
                                    </select>
                                </div>
                            </div>                           
                 
                            



                            <div class="field-box">
                                <label>描述:</label>
                                <textarea name="des" class="span8" rows="4"><?php echo ($imgs['des']); ?></textarea>
                            </div>
                            <div class="field-box">
                                <label>缩略图:</label>
                                <input type="file" name="pic" value="" placeholder="">
                                <img width="200px;" height="200px;" src="/xingxiu/Public<?php echo ($imgs['pic']); ?>" alt="">
                            </div>

                                <div class="span11 field-box actions" style="margin-left: 700px;">
                                    <input type="submit" class="btn-glow primary" value="新增栏目" />
                                </div>
                        </form>
                    </div>

                    <!-- right column -->

                     <!--
                    <div class="span4 column pull-right">
                        <form />
                            <div class="field-box">
                                <label>Select:</label>
                                <div class="ui-select">
                                    <select>
                                        <option selected="" />Dropdown
                                        <option />Custom selects
                                        <option />Pure css styles
                                    </select>
                                </div>
                            </div>
                            <div class="field-box">
                                <label>Select2 plugin styled:</label>
                                <select style="width:250px" class="select2">
                                    <option />
                                    <option value="AK" />Alaska
                                    <option value="HI" />Hawaii
                                    <option value="CA" />California
                                    <option value="NV" />Nevada
                                    <option value="OR" />Oregon
                                    <option value="WA" />Washington
                                    <option value="AZ" />Arizona
                                    <option value="CO" />Colorado
                                    <option value="ID" />Idaho
                                    <option value="MT" />Montana
                                    <option value="NE" />Nebraska
                                    <option value="NM" />New Mexico
                                    <option value="ND" />North Dakota
                                    <option value="UT" />Utah
                                    <option value="WY" />Wyoming
                                    <option value="AL" />Alabama
                                    <option value="AR" />Arkansas
                                    <option value="IL" />Illinois
                                    <option value="IA" />Iowa
                                    <option value="KS" />Kansas
                                    <option value="KY" />Kentucky
                                    <option value="LA" />Louisiana
                                    <option value="MN" />Minnesota
                                    <option value="MS" />Mississippi
                                    <option value="MO" />Missouri
                                    <option value="OK" />Oklahoma
                                    <option value="SD" />South Dakota
                                    <option value="TX" />Texas
                                    <option value="TN" />Tennessee
                                    <option value="WI" />Wisconsin
                                    <option value="CT" />Connecticut
                                    <option value="DE" />Delaware
                                    <option value="FL" />Florida
                                    <option value="GA" />Georgia
                                    <option value="IN" />Indiana
                                    <option value="ME" />Maine
                                    <option value="MD" />Maryland
                                    <option value="MA" />Massachusetts
                                    <option value="MI" />Michigan
                                    <option value="NH" />New Hampshire
                                    <option value="NJ" />New Jersey
                                    <option value="NY" />New York
                                    <option value="NC" />North Carolina
                                    <option value="OH" />Ohio
                                    <option value="PA" />Pennsylvania
                                    <option value="RI" />Rhode Island
                                    <option value="SC" />South Carolina
                                    <option value="VT" />Vermont
                                    <option value="VA" />Virginia
                                    <option value="WV" />West Virginia
                                </select>
                            </div>
                            <div class="field-box">
                                <label>Select2 multiselect:</label>
                                <select style="width:250px" multiple="" class="select2">
                                    <option />
                                    <option value="AK" />Alaska
                                    <option value="HI" selected="" />Hawaii
                                    <option value="CA" />California
                                    <option value="NV" />Nevada
                                    <option value="OR" />Oregon
                                    <option value="WA" />Washington
                                    <option value="AZ" />Arizona
                                    <option value="CO" />Colorado
                                    <option value="ID" />Idaho
                                    <option value="MT" />Montana
                                    <option value="NE" />Nebraska
                                    <option value="NM" />New Mexico
                                    <option value="ND" />North Dakota
                                    <option value="UT" />Utah
                                    <option value="WY" />Wyoming
                                    <option value="AL" />Alabama
                                    <option value="AR" />Arkansas
                                    <option value="IL" />Illinois
                                    <option value="IA" />Iowa
                                    <option value="KS" />Kansas
                                    <option value="KY" />Kentucky
                                    <option value="LA" />Louisiana
                                    <option value="MN" />Minnesota
                                    <option value="MS" />Mississippi
                                    <option value="MO" />Missouri
                                    <option value="OK" />Oklahoma
                                    <option value="SD" />South Dakota
                                    <option value="TX" />Texas
                                    <option value="TN" />Tennessee
                                    <option value="WI" />Wisconsin
                                    <option value="CT" />Connecticut
                                    <option value="DE" />Delaware
                                    <option value="FL" />Florida
                                    <option value="GA" />Georgia
                                    <option value="IN" />Indiana
                                    <option value="ME" />Maine
                                    <option value="MD" />Maryland
                                    <option value="MA" />Massachusetts
                                    <option value="MI" />Michigan
                                    <option value="NH" />New Hampshire
                                    <option value="NJ" />New Jersey
                                    <option value="NY" />New York
                                    <option value="NC" />North Carolina
                                    <option value="OH" />Ohio
                                    <option value="PA" />Pennsylvania
                                    <option value="RI" />Rhode Island
                                    <option value="SC" />South Carolina
                                    <option value="VT" />Vermont
                                    <option value="VA" />Virginia
                                    <option value="WV" />West Virginia
                                </select>
                            </div>
                            <div class="field-box">
                                <label>Input prepend & append:</label>
                                <div class="input-prepend">
                                    <span class="add-on">@</span>
                                    <input class="input-large" type="text" />
                                </div>
                                <div class="input-append">
                                    <input class="input-large" type="text" />
                                    <span class="add-on">.00</span>
                                </div>
                            </div>
                            <div class="field-box">
                                <label>Datepicker:</label>
                                <input type="text" value="03/29/2014" class="input-large datepicker" />
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    -->
    <!-- end main container -->

	<!-- scripts for this page -->
    <script src="/xingxiu/Public/Admin/js/wysihtml5-0.3.0.js"></script>
    <script src="/xingxiu/Public/Admin/js/jquery-latest.js"></script>
    <script src="/xingxiu/Public/Admin/js/bootstrap.min.js"></script>
    <script src="/xingxiu/Public/Admin/js/bootstrap-wysihtml5-0.0.2.js"></script>
    <script src="/xingxiu/Public/Admin/js/bootstrap.datepicker.js"></script>
    <script src="/xingxiu/Public/Admin/js/jquery.uniform.min.js"></script>
    <script src="/xingxiu/Public/Admin/js/select2.min.js"></script>
    <script src="/xingxiu/Public/Admin/js/theme.js"></script>

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

</body>
</html>