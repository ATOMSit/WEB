<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="bootstrap admin template">
    <meta name="author" content="">

    <title>
        Login V2 | Remark Admin Template
    </title>

    <link rel="apple-touch-icon" href="{{asset('admin/assets/images/apple-touch-icon.png')}}">
    <link rel="shortcut icon" href="{{asset('admin/assets/images/favicon.ico')}}">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{asset('admin/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/css/bootstrap-extend.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/css/site.min.css')}}">

    <!-- Plugins -->
    <link rel="stylesheet" href="{{asset('admin/vendor/animsition/animsition.css')}}">
    <link rel="stylesheet" href="{{asset('admin/vendor/asscrollable/asScrollable.css')}}">
    <link rel="stylesheet" href="{{asset('admin/vendor/switchery/switchery.css')}}">
    <link rel="stylesheet" href="{{asset('admin/vendor/slidepanel/slidePanel.css')}}">
    <link rel="stylesheet" href="{{asset('admin/vendor/flag-icon-css/flag-icon.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/examples/css/pages/login-v2.css')}}">


    <!-- Fonts -->
    <link rel="stylesheet" href="{{asset('admin/fonts/web-icons/web-icons.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/fonts/brand-icons/brand-icons.min.css')}}">
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>

    <!--[if lt IE 9]>
    <script src="{{asset('admin/vendor/html5shiv/html5shiv.min.js')}}"></script>
    <![endif]-->

    <!--[if lt IE 10]>
    <script src="{{asset('admin/vendor/media-match/media.match.min.js')}}"></script>
    <script src="{{asset('admin/vendor/respond/respond.min.js')}}"></script>
    <![endif]-->

    <!-- Scripts -->
    <script src="{{asset('admin/vendor/breakpoints/breakpoints.js')}}"></script>
    <script>
        Breakpoints();
    </script>
</head>
<body class="animsition page-login-v2 layout-full page-dark">
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<!-- Page -->
<div class="page" data-animsition-in="fade-in" data-animsition-out="fade-out">
    <div class="page-content">
        <div class="page-brand-info">
            <div class="brand">
                <img class="brand-img" src="{{asset('admin/assets/images/logo@2x.png')}}" alt="...">
                <h2 class="brand-text font-size-40">
                    @lang('visual.global.app')
                </h2>
            </div>
            <p class="font-size-20">
                @lang('visual.login.description')
            </p>
        </div>
        <div class="page-login-main animation-slide-right animation-duration-1">
            <div class="brand hidden-md-up">
                <img class="brand-img" src="{{asset('admin/assets/images/logo-colored@2x.png')}}" alt="...">
                <h3 class="brand-text font-size-40">
                    @lang('visual.global.app')
                </h3>
            </div>
            @yield('content')
            <footer class="page-copyright">
                <p>ATOMSit</p>
                <p>© 2019 All RIGHT RESERVED.</p>
                <div class="social">
                    <a class="btn btn-icon btn-round social-linkedin mx-5" href="{{route('oauth.login',['provider'=>'linkedin'])}}">
                        <i class="icon bd-linkedin" aria-hidden="true"></i>
                    </a>
                    <a class="btn btn-icon btn-round social-google-plus mx-5" href="{{route('oauth.login',['provider'=>'google'])}}">
                        <i class="icon bd-google-plus" aria-hidden="true"></i>
                    </a>
                    <a class="btn btn-icon btn-round social-facebook mx-5" href="{{route('oauth.login',['provider'=>'facebook'])}}">
                        <i class="icon bd-facebook" aria-hidden="true"></i>
                    </a>
                    <a class="btn btn-icon btn-round social-github mx-5" href="{{route('oauth.login',['provider'=>'github'])}}">
                        <i class="icon bd-github" aria-hidden="true"></i>
                    </a>
                </div>
            </footer>
        </div>
    </div>
</div>

<!-- Core  -->
<script src="{{asset('admin/vendor/babel-external-helpers/babel-external-helpers.js')}}"></script>
<script src="{{asset('admin/vendor/jquery/jquery.js')}}"></script>
<script src="{{asset('admin/vendor/popper-js/umd/popper.min.js')}}"></script>
<script src="{{asset('admin/vendor/bootstrap/bootstrap.js')}}"></script>
<script src="{{asset('admin/vendor/animsition/animsition.js')}}"></script>
<script src="{{asset('admin/vendor/mousewheel/jquery.mousewheel.js')}}"></script>
<script src="{{asset('admin/vendor/asscrollbar/jquery-asScrollbar.js')}}"></script>
<script src="{{asset('admin/vendor/asscrollable/jquery-asScrollable.js')}}"></script>
<script src="{{asset('admin/vendor/ashoverscroll/jquery-asHoverScroll.js')}}"></script>

<!-- Plugins -->
<script src="{{asset('admin/vendor/switchery/switchery.js')}}"></script>
<script src="{{asset('admin/vendor/screenfull/screenfull.js')}}"></script>
<script src="{{asset('admin/vendor/slidepanel/jquery-slidePanel.js')}}"></script>
<script src="{{asset('admin/vendor/jquery-placeholder/jquery.placeholder.js')}}"></script>

<!-- Scripts -->
<script src="{{asset('admin/js/Component.js')}}"></script>
<script src="{{asset('admin/js/Plugin.js')}}"></script>
<script src="{{asset('admin/js/Base.js')}}"></script>
<script src="{{asset('admin/js/Config.js')}}"></script>

<script src="{{asset('admin/assets/js/Section/Menubar.js')}}"></script>
<script src="{{asset('admin/assets/js/Section/Sidebar.js')}}"></script>
<script src="{{asset('admin/assets/js/Section/PageAside.js')}}"></script>
<script src="{{asset('admin/assets/js/Plugin/menu.js')}}"></script>

<!-- Config -->
<script src="{{asset('admin/js/config/colors.js')}}"></script>
<script src="{{asset('admin/assets/js/config/tour.js')}}"></script>

<!-- Page -->
<script src="{{asset('admin/assets/js/Site.js')}}"></script>
<script src="{{asset('admin/js/Plugin/asscrollable.js')}}"></script>
<script src="{{asset('admin/js/Plugin/slidepanel.js')}}"></script>
<script src="{{asset('admin/js/Plugin/switchery.js')}}"></script>
<script src="{{asset('admin/js/Plugin/jquery-placeholder.js')}}"></script>

<script>
    (function (document, window, $) {
        'use strict';

        var Site = window.Site;
        $(document).ready(function () {
            Site.run();
        });
    })(document, window, jQuery);
</script>
</body>
</html>
