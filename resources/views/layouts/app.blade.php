<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="bootstrap admin template">
    <meta name="author" content="">

    <title>Dashboard | Remark Admin Template</title>

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
    <link rel="stylesheet" href="{{asset('admin/vendor/intro-js/introjs.css')}}">
    <link rel="stylesheet" href="{{asset('admin/vendor/slidepanel/slidePanel.css')}}">
    <link rel="stylesheet" href="{{asset('admin/vendor/flag-icon-css/flag-icon.css')}}">
    <link rel="stylesheet" href="{{asset('admin/vendor/chartist/chartist.css')}}">
    <link rel="stylesheet" href="{{asset('admin/vendor/jvectormap/jquery-jvectormap.css')}}">
    <link rel="stylesheet" href="{{asset('admin/vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.css')}}">
@stack('styles')

    <!-- Fonts -->
    <link rel="stylesheet" href="{{asset('admin/fonts/weather-icons/weather-icons.css')}}">
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
<body class="animsition page-profile-v2">
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

@include('layouts.header')

@include('layouts.nav')

<!-- Page -->
<div class="page">
    <div class="page-content container-fluid">
            @yield('content')
    </div>
</div>
<!-- End Page -->


<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    {{ csrf_field() }}
</form>
@include('layouts.footer')

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
<script src="{{asset('admin/vendor/intro-js/intro.js')}}"></script>
<script src="{{asset('admin/vendor/screenfull/screenfull.js')}}"></script>
<script src="{{asset('admin/vendor/slidepanel/jquery-slidePanel.js')}}"></script>
<script src="{{asset('admin/vendor/skycons/skycons.js')}}"></script>
<script src="{{asset('admin/vendor/chartist/chartist.min.js')}}"></script>
<script src="{{asset('admin/vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.js')}}"></script>
<script src="{{asset('admin/vendor/aspieprogress/jquery-asPieProgress.min.js')}}"></script>
<script src="{{asset('admin/vendor/jvectormap/jquery-jvectormap.min.js')}}"></script>
<script src="{{asset('admin/vendor/jvectormap/maps/jquery-jvectormap-au-mill-en.js')}}"></script>
<script src="{{asset('admin/vendor/matchheight/jquery.matchHeight-min.js')}}"></script>

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
<script src="{{asset('admin/js/Plugin/matchheight.js')}}"></script>
<script src="{{asset('admin/js/Plugin/jvectormap.js')}}"></script>

@stack('scripts')
</body>
</html>
