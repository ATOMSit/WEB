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

    <link rel="apple-touch-icon" href="../../assets/images/apple-touch-icon.png">
    <link rel="shortcut icon" href="../../assets/images/favicon.ico">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="../../../global/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../../global/css/bootstrap-extend.min.css">
    <link rel="stylesheet" href="../../assets/css/site.min.css">

    <!-- Plugins -->
    <link rel="stylesheet" href="../../../global/vendor/animsition/animsition.css">
    <link rel="stylesheet" href="../../../global/vendor/asscrollable/asScrollable.css">
    <link rel="stylesheet" href="../../../global/vendor/switchery/switchery.css">
    <link rel="stylesheet" href="../../../global/vendor/intro-js/introjs.css">
    <link rel="stylesheet" href="../../../global/vendor/slidepanel/slidePanel.css">
    <link rel="stylesheet" href="../../../global/vendor/flag-icon-css/flag-icon.css">
    <link rel="stylesheet" href="../../assets/examples/css/pages/login-v2.css">


    <!-- Fonts -->
    <link rel="stylesheet" href="../../../global/fonts/web-icons/web-icons.min.css">
    <link rel="stylesheet" href="../../../global/fonts/brand-icons/brand-icons.min.css">
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>

    <!--[if lt IE 9]>
    <script src="../../../global/vendor/html5shiv/html5shiv.min.js"></script>
    <![endif]-->

    <!--[if lt IE 10]>
    <script src="../../../global/vendor/media-match/media.match.min.js"></script>
    <script src="../../../global/vendor/respond/respond.min.js"></script>
    <![endif]-->

    <!-- Scripts -->
    <script src="../../../global/vendor/breakpoints/breakpoints.js"></script>
    <script>
        Breakpoints();
    </script>
</head>
<body class="animsition page-login-v2 layout-full page-dark">
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->


<style>
    body {
        background: transparent;
    }
</style>
<!-- Page -->
<div class="page" data-animsition-in="fade-in" data-animsition-out="fade-out">
    <div class="page-content">
        <div class="page-brand-info">
            <div class="brand">
                <img class="brand-img" src="../../assets/images/logo@2x.png" alt="...">
                <h2 class="brand-text font-size-40">Remark</h2>
            </div>
            <p class="font-size-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>

        <div class="page-login-main animation-slide-right animation-duration-1">
            <div class="brand hidden-md-up">
                <img class="brand-img" src="../../assets/images/logo-colored@2x.png" alt="...">
                <h3 class="brand-text font-size-40">Remark</h3>
            </div>
            <h3 class="font-size-24">Sign In</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>

            <form method="post" action="login-v2.html">
                <div class="form-group">
                    <label class="sr-only" for="inputEmail">Email</label>
                    <input type="email" class="form-control" id="inputEmail" name="email" placeholder="Email">
                </div>
                <div class="form-group">
                    <label class="sr-only" for="inputPassword">Password</label>
                    <input type="password" class="form-control" id="inputPassword" name="password"
                           placeholder="Password">
                </div>
                <div class="form-group clearfix">
                    <div class="checkbox-custom checkbox-inline checkbox-primary float-left">
                        <input type="checkbox" id="rememberMe" name="rememberMe">
                        <label for="rememberMe">Remember me</label>
                    </div>
                    <a class="float-right" href="forgot-password.html">Forgot password?</a>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Sign in</button>
            </form>

            <p>No account? <a href="register-v2.html">Sign Up</a></p>

            <footer class="page-copyright">
                <p>WEBSITE BY Creation Studio</p>
                <p>© 2018. All RIGHT RESERVED.</p>
                <div class="social">
                    <a class="btn btn-icon btn-round social-twitter mx-5" href="javascript:void(0)">
                        <i class="icon bd-twitter" aria-hidden="true"></i>
                    </a>
                    <a class="btn btn-icon btn-round social-facebook mx-5" href="javascript:void(0)">
                        <i class="icon bd-facebook" aria-hidden="true"></i>
                    </a>
                    <a class="btn btn-icon btn-round social-google-plus mx-5" href="javascript:void(0)">
                        <i class="icon bd-google-plus" aria-hidden="true"></i>
                    </a>
                </div>
            </footer>
        </div>

    </div>
</div>
<!-- End Page -->


<!-- Core  -->
<script src="../../../global/vendor/babel-external-helpers/babel-external-helpers.js"></script>
<script src="../../../global/vendor/jquery/jquery.js"></script>
<script src="../../../global/vendor/popper-js/umd/popper.min.js"></script>
<script src="../../../global/vendor/bootstrap/bootstrap.js"></script>
<script src="../../../global/vendor/animsition/animsition.js"></script>
<script src="../../../global/vendor/mousewheel/jquery.mousewheel.js"></script>
<script src="../../../global/vendor/asscrollbar/jquery-asScrollbar.js"></script>
<script src="../../../global/vendor/asscrollable/jquery-asScrollable.js"></script>
<script src="../../../global/vendor/ashoverscroll/jquery-asHoverScroll.js"></script>

<!-- Plugins -->
<script src="../../../global/vendor/switchery/switchery.js"></script>
<script src="../../../global/vendor/intro-js/intro.js"></script>
<script src="../../../global/vendor/screenfull/screenfull.js"></script>
<script src="../../../global/vendor/slidepanel/jquery-slidePanel.js"></script>
<script src="../../../global/vendor/jquery-placeholder/jquery.placeholder.js"></script>

<!-- Scripts -->
<script src="../../../global/js/Component.js"></script>
<script src="../../../global/js/Plugin.js"></script>
<script src="../../../global/js/Base.js"></script>
<script src="../../../global/js/Config.js"></script>

<script src="../../assets/js/Section/Menubar.js"></script>
<script src="../../assets/js/Section/Sidebar.js"></script>
<script src="../../assets/js/Section/PageAside.js"></script>
<script src="../../assets/js/Plugin/menu.js"></script>

<!-- Config -->
<script src="../../../global/js/config/colors.js"></script>
<script src="../../assets/js/config/tour.js"></script>
<script>Config.set('assets', '../../assets');</script>

<!-- Page -->
<script src="../../assets/js/Site.js"></script>
<script src="../../../global/js/Plugin/asscrollable.js"></script>
<script src="../../../global/js/Plugin/slidepanel.js"></script>
<script src="../../../global/js/Plugin/switchery.js"></script>
<script src="../../../global/js/Plugin/jquery-placeholder.js"></script>

<script>
    (function(document, window, $){
        'use strict';

        var Site = window.Site;
        $(document).ready(function(){
            Site.run();
        });
    })(document, window, jQuery);
</script>
</body>
</html>

<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="bootstrap admin template">
    <meta name="author" content="">

    <title>Login V2 | Remark Admin Template</title>

    <link rel="apple-touch-icon" href="../../assets/images/apple-touch-icon.png">
    <link rel="shortcut icon" href="../../assets/images/favicon.ico">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="../../../global/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../../global/css/bootstrap-extend.min.css">
    <link rel="stylesheet" href="../../assets/css/site.min.css">

    <!-- Plugins -->
    <link rel="stylesheet" href="../../../global/vendor/animsition/animsition.css">
    <link rel="stylesheet" href="../../../global/vendor/asscrollable/asScrollable.css">
    <link rel="stylesheet" href="../../../global/vendor/switchery/switchery.css">
    <link rel="stylesheet" href="../../../global/vendor/intro-js/introjs.css">
    <link rel="stylesheet" href="../../../global/vendor/slidepanel/slidePanel.css">
    <link rel="stylesheet" href="../../../global/vendor/flag-icon-css/flag-icon.css">
    <link rel="stylesheet" href="../../assets/examples/css/pages/login-v2.css">


    <!-- Fonts -->
    <link rel="stylesheet" href="../../../global/fonts/web-icons/web-icons.min.css">
    <link rel="stylesheet" href="../../../global/fonts/brand-icons/brand-icons.min.css">
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>

    <!--[if lt IE 9]>
    <script src="../../../global/vendor/html5shiv/html5shiv.min.js"></script>
    <![endif]-->

    <!--[if lt IE 10]>
    <script src="../../../global/vendor/media-match/media.match.min.js"></script>
    <script src="../../../global/vendor/respond/respond.min.js"></script>
    <![endif]-->

    <!-- Scripts -->
    <script src="../../../global/vendor/breakpoints/breakpoints.js"></script>
    <script>
        Breakpoints();
    </script>
</head>
<body class="animsition page-login-v2 layout-full page-dark">
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->


<style>
    body {
        background: transparent;
    }
</style>
<!-- Page -->
<div class="page" data-animsition-in="fade-in" data-animsition-out="fade-out">
    <div class="page-content">
        <div class="page-brand-info">
            <div class="brand">
                <img class="brand-img" src="../../assets/images/logo@2x.png" alt="...">
                <h2 class="brand-text font-size-40">Remark</h2>
            </div>
            <p class="font-size-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>

        <div class="page-login-main animation-slide-right animation-duration-1">
            <div class="brand hidden-md-up">
                <img class="brand-img" src="../../assets/images/logo-colored@2x.png" alt="...">
                <h3 class="brand-text font-size-40">Remark</h3>
            </div>
            <h3 class="font-size-24">Sign In</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>

            <form method="post" action="login-v2.html">
                <div class="form-group">
                    <label class="sr-only" for="inputEmail">Email</label>
                    <input type="email" class="form-control" id="inputEmail" name="email" placeholder="Email">
                </div>
                <div class="form-group">
                    <label class="sr-only" for="inputPassword">Password</label>
                    <input type="password" class="form-control" id="inputPassword" name="password"
                           placeholder="Password">
                </div>
                <div class="form-group clearfix">
                    <div class="checkbox-custom checkbox-inline checkbox-primary float-left">
                        <input type="checkbox" id="rememberMe" name="rememberMe">
                        <label for="rememberMe">Remember me</label>
                    </div>
                    <a class="float-right" href="forgot-password.html">Forgot password?</a>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Sign in</button>
            </form>

            <p>No account? <a href="register-v2.html">Sign Up</a></p>

            <footer class="page-copyright">
                <p>WEBSITE BY Creation Studio</p>
                <p>© 2018. All RIGHT RESERVED.</p>
                <div class="social">
                    <a class="btn btn-icon btn-round social-twitter mx-5" href="javascript:void(0)">
                        <i class="icon bd-twitter" aria-hidden="true"></i>
                    </a>
                    <a class="btn btn-icon btn-round social-facebook mx-5" href="javascript:void(0)">
                        <i class="icon bd-facebook" aria-hidden="true"></i>
                    </a>
                    <a class="btn btn-icon btn-round social-google-plus mx-5" href="javascript:void(0)">
                        <i class="icon bd-google-plus" aria-hidden="true"></i>
                    </a>
                </div>
            </footer>
        </div>

    </div>
</div>
<!-- End Page -->


<!-- Core  -->
<script src="../../../global/vendor/babel-external-helpers/babel-external-helpers.js"></script>
<script src="../../../global/vendor/jquery/jquery.js"></script>
<script src="../../../global/vendor/popper-js/umd/popper.min.js"></script>
<script src="../../../global/vendor/bootstrap/bootstrap.js"></script>
<script src="../../../global/vendor/animsition/animsition.js"></script>
<script src="../../../global/vendor/mousewheel/jquery.mousewheel.js"></script>
<script src="../../../global/vendor/asscrollbar/jquery-asScrollbar.js"></script>
<script src="../../../global/vendor/asscrollable/jquery-asScrollable.js"></script>
<script src="../../../global/vendor/ashoverscroll/jquery-asHoverScroll.js"></script>

<!-- Plugins -->
<script src="../../../global/vendor/switchery/switchery.js"></script>
<script src="../../../global/vendor/intro-js/intro.js"></script>
<script src="../../../global/vendor/screenfull/screenfull.js"></script>
<script src="../../../global/vendor/slidepanel/jquery-slidePanel.js"></script>
<script src="../../../global/vendor/jquery-placeholder/jquery.placeholder.js"></script>

<!-- Scripts -->
<script src="../../../global/js/Component.js"></script>
<script src="../../../global/js/Plugin.js"></script>
<script src="../../../global/js/Base.js"></script>
<script src="../../../global/js/Config.js"></script>

<script src="../../assets/js/Section/Menubar.js"></script>
<script src="../../assets/js/Section/Sidebar.js"></script>
<script src="../../assets/js/Section/PageAside.js"></script>
<script src="../../assets/js/Plugin/menu.js"></script>

<!-- Config -->
<script src="../../../global/js/config/colors.js"></script>
<script src="../../assets/js/config/tour.js"></script>
<script>Config.set('assets', '../../assets');</script>

<!-- Page -->
<script src="../../assets/js/Site.js"></script>
<script src="../../../global/js/Plugin/asscrollable.js"></script>
<script src="../../../global/js/Plugin/slidepanel.js"></script>
<script src="../../../global/js/Plugin/switchery.js"></script>
<script src="../../../global/js/Plugin/jquery-placeholder.js"></script>

<script>
    (function(document, window, $){
        'use strict';

        var Site = window.Site;
        $(document).ready(function(){
            Site.run();
        });
    })(document, window, jQuery);
</script>
</body>
</html>
