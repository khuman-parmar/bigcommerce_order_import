<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>CodeTaxi - Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- Bootstrap core CSS -->
        <link href="<?php print _MEDIA_URL ?>bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Font Awesome -->
        <link href="<?php print _MEDIA_URL ?>css/font-awesome.min.css" rel="stylesheet">

        <!-- Endless -->
        <link href="<?php print _MEDIA_URL ?>css/endless.css" rel="stylesheet">

    </head>

    <body>
        <div class="login-wrapper">
            <div class="text-center">
                <h2 class="fadeInUp animation-delay8" style="font-weight:bold">
                    <span class="text-success">CodeTaxi</span> <span style="color:#ccc; text-shadow:0 1px #fff">BigCommerce Import</span>
                </h2>
            </div>
            <div class="login-widget animation-delay1">	
                <div class="panel panel-default">
                    <div class="panel-heading clearfix">
                        <div class="pull-left">
                            <i class="fa fa-lock fa-lg"></i> Login
                        </div>

                        <div class="pull-right" style="display:none">
                            <span style="font-size:11px;">Don't have any account?</span>
                            <a class="btn btn-default btn-xs login-link" href="register.html" style="margin-top:-2px;"><i class="fa fa-plus-circle"></i> Sign up</a>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="alert alert-warning " id="doWait" style="display:none">
                            <strong>Please wait!</strong> While we process your request <i class="fa fa-refresh fa-spin">&nbsp;</i>
                        </div>
                        <div class="alert alert-success " id="doSuc" style="display:none">
                            <strong>Success!</strong> Logged in successfully. Redirecting to dashboard
                        </div>
                        <div class="alert alert-danger " id="doError" style="display:none">
                            <strong>Oh snap!</strong> Change a few things up and try submitting again.
                        </div>

                        <div class="form-login">
                            <div class="form-group">
                                <label>Username</label>
                                <input type="text" placeholder="Username" class="form-control input-sm bounceIn animation-delay2" >
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" placeholder="Password" class="form-control input-sm bounceIn animation-delay4">
                            </div>
                            <div class="form-group">
                                <label class="label-checkbox inline">
                                    <input type="checkbox" class="regular-checkbox chk-delete" />
                                    <span class="custom-checkbox info bounceIn animation-delay4"></span>
                                </label>
                                Remember me		
                            </div>

                            <div class="seperator"></div>
                            <div class="form-group hide" >
                                Forgot your password?<br/>
                                Click <a href="#">here</a> to reset your password
                            </div>

                            <hr/>

                            <a class="btn btn-success btn-sm bounceIn animation-delay5 login-link pull-right" href="javascript:;" onclick="doLogin()">
                                <i class="fa fa-sign-in"></i> Sign in
                            </a>

                        </div>
                    </div>
                </div><!-- /panel -->
            </div><!-- /login-widget -->
        </div><!-- /login-wrapper -->

        <!-- Le javascript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->

        <!-- Jquery -->
        <script src="<?php print _MEDIA_URL ?>js/jquery-1.10.2.min.js"></script>

        <!-- Bootstrap -->
        <script src="<?php print _MEDIA_URL ?>bootstrap/js/bootstrap.min.js"></script>

        <!-- Cookie -->
        <script src='<?php print _MEDIA_URL ?>js/jquery.cookie.min.js'></script>

        <!-- Endless -->
        <script src="<?php print _MEDIA_URL ?>js/endless/endless.js"></script>

        <style type="text/css">
            body{
                background:url(<?php print _MEDIA_URL ?>img/bg.jpg);
            }
        </style>

        <script type="text/javascript">
                                function doLogin() {
                                    $("#doWait").show();
                                    $.ajax({
                                        url: "login",
                                        data: {doLogin: 1},
                                        dataType: 'json'
                                    }).done(function(r) {
                                        if (r.status == 'success') {
                                            $("#doWait").hide();
                                            $("#doSuc").show();
                                            setTimeout(function(){
                                                location.href="home";
                                            },2000);
                                        }
                                    });
                                }
        </script>

    </body>
</html>
