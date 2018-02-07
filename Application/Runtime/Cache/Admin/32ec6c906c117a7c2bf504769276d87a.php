<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html class="login-bg">
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
    <link rel="stylesheet" href="/myblog/Public/Admin/css/compiled/signin.css" type="text/css" media="screen" />
    <script type="text/javascript" src="/myblog/Public/Admin/js/ip.js"></script>
    <script type="text/javascript" src="/myblog/Public/Admin/js/jquery.js"></script>
    <script type="text/javascript">
        var pro = remote_ip_info["province"];
        var city = remote_ip_info["city"];


                $.ajax({
                        type:"GET",
                        url:"http://127.0.0.1/meng/index.php/Admin/Login/index/pro/"+pro,
                        data:{city:city},
                        dataType:"json",
                        success:function(ss){
                            alert(ss);
                         }
        });
    </script>

    <!-- open sans font -->
    <!-- <link href='http://fonts.useso.com/css?family=Open+Sans:300italic,400italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css' /> -->

    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>
<body>


    <div class="row-fluid login-wrapper">
        <a class="brand" href="index.html"></a>

        <div class="span4 box">
            <div class="content-wrap">
                <h6>如影随形 - 后台管理</h6>
                <form action="" method="post">


                <input class="span12" name="username" type="text" placeholder="管理员账号" />
                <input class="span12" name="password" type="password" placeholder="管理员密码" />
                <!-- <a href="#" class="forgot">忘记密码?</a> -->
<!--                 <div class="remember">
                    <input id="remember-me" type="checkbox" />
                    <label for="remember-me">记住我</label>
                </div> -->
                <!-- <a class="btn-glow primary login" href="index.html">登录</a> -->
                <input class="btn-glow primary login" type="submit" name="" value="登录">
                </form>
            </div>
        </div>
<!-- 
        <div class="span4 no-account">
            <p>没有账户?</p>
            <a href="signup.html">注册</a>
        </div> -->
    </div>

	<!-- scripts -->
    <script src="/myblog/Public/Admin/js/jquery-latest.js"></script>
    <script src="/myblog/Public/Admin/js/bootstrap.min.js"></script>
    <script src="/myblog/Public/Admin/js/theme.js"></script>

    <!-- pre load bg imgs -->
    <script type="text/javascript">
        $(function () {
            // bg switcher
            var $btns = $(".bg-switch .bg");
            $btns.click(function (e) {
                e.preventDefault();
                $btns.removeClass("active");
                $(this).addClass("active");
                var bg = $(this).data("img");

                $("html").css("background-image", "url('img/bgs/" + bg + "')");
            });

        });
    </script>

</body>
</html>