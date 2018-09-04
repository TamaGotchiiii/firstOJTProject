<!-- header -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{asset('bootstrap/assets/ico/apple-touch-icon-144-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{asset('bootstrap/assets/ico/apple-touch-icon-114-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{asset('bootstrap/assets/ico/apple-touch-icon-72-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" href="{{asset('bootstrap/assets/ico/apple-touch-icon-57-precomposed.png')}}">
    <link rel="shortcut icon" href="{{asset('bootstrap/assets/ico/favicon.png')}}">
    <title>BOOTCLASIFIED - Responsive Classified Theme</title>
    <!-- Bootstrap core CSS -->
    <link href="{{asset('bootstrap/assets/bootstrap/css/bootstrap.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{asset('bootstrap/assets/css/style.css')}}" rel="stylesheet">

    <!-- styles needed for carousel slider -->
    <link href="{{asset('bootstrap/assets/css/owl.carousel.css')}}" rel="stylesheet">
    <link href="{{asset('bootstrap/assets/css/owl.theme.css')}}" rel="stylesheet">

    <!-- Just for debugging purposes. -->
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <!-- include pace script for automatic web page progress bar  -->

    <script>
        paceOptions = {
            elements: true
        };
    </script>
    <script src="{{asset('bootstrap/assets/js/pace.min.js')}}"></script>
</head>
<body>
<div id="wrapper">
    <div class="header">
        <nav class="navbar   navbar-site navbar-default" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
                        <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span
                            class="icon-bar"></span> <span class="icon-bar"></span></button>
                    <a href="index.html" class="navbar-brand logo logo-title">
                        <!-- Original Logo will be placed here  -->
                        <span class="logo-icon"><i class="icon icon-home-1 ln-shadow-logo shape-0"></i> </span>
                        Tok<span>Boot </span> </a></div>
                <div class="navbar-collapse collapse">

                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="login.html">Masuk</a></li>
                        <li><a href="signup.html">Daftar</a></li>
                        <li class="postadd"><a style="width: 50px; padding: 0; padding-top: 12px;" class="btn btn-block  btn-border btn-post btn-primary"
                                               href="post-ads.html">0 <i class="fa fa-shopping-cart"></i></a></li>
                        <li><a href="" class="btn btn-block btn-wish btn-border btn-danger" style="color: white; width: 50px;">0 <i class="glyphicon glyphicon-list-alt"></i></a></li>
                    </ul>
                </div>
                <!--/.nav-collapse -->
            </div>
            <!-- /.container-fluid -->
        </nav>
    </div>

    @yield('searchbar')
<!-- content -->
    @yield('content')
<!-- footer -->
<div class="footer" id="footer">
        <div class="container">
            <ul class=" pull-left navbar-link footer-nav">
                <li><a href="index.html"> Home </a> <a href="about-us.html"> About us </a> <a href="terms-conditions.html"> Terms and
                    Conditions </a> <a href="#"> Privacy Policy </a> <a href="contact.html"> Contact us </a> <a
                        href="faq.html"> FAQ </a>
            </ul>
            <ul class=" pull-right navbar-link footer-nav">
                <li> &copy; 2018 ThorTech</li>
            </ul>
        </div>

    </div>
    <!-- /.footer -->
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<script src="{{asset('bootstrap/assets/bootstrap/js/bootstrap.min.js')}}"></script>

<!-- include carousel slider plugin  -->
<script src="{{asset('bootstrap/assets/js/owl.carousel.min.js')}}"></script>

<!-- include equal height plugin  -->
<script src="{{asset('bootstrap/assets/js/jquery.matchHeight-min.js')}}"></script>

<!-- include jquery list shorting plugin plugin  -->
<script src="{{asset('bootstrap/assets/js/hideMaxListItem.js')}}"></script>

<!-- include jquery.fs plugin for custom scroller and selecter  -->
<script src="{{asset('bootstrap/assets/plugins/jquery.fs.scroller/jquery.fs.scroller.js')}}"></script>
<script src="{{asset('bootstrap/assets/plugins/jquery.fs.selecter/jquery.fs.selecter.js')}}"></script>
<!-- include custom script for site  -->
<script src="{{asset('bootstrap/assets/js/script.js')}}"></script>
</body>
</html>