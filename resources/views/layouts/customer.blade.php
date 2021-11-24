<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Free HTML5 Website Template by freehtml5.co" />
        <meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
        <meta name="author" content="freehtml5.co" />
        <meta property="og:title" content=""/>
        <meta property="og:image" content=""/>
        <meta property="og:url" content=""/>
        <meta property="og:site_name" content=""/>
        <meta property="og:description" content=""/>
        <meta name="twitter:title" content="" />
        <meta name="twitter:image" content="" />
        <meta name="twitter:url" content="" />
        <meta name="twitter:card" content="" />

        <title>Learning Platform</title>

        <link rel="stylesheet" href="{{secure_asset('css/bootstrap.css')}}">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,700,800" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
        <link rel="stylesheet" href="{{secure_asset('css/animate.css')}}">
        <link rel="stylesheet" href="{{secure_asset('css/icomoon.css')}}">
        <link rel="stylesheet" href="{{secure_asset('css/magnific-popup.css')}}">
        <link rel="stylesheet" href="{{secure_asset('css/owl.carousel.min.css')}}">
        <link rel="stylesheet" href="{{secure_asset('css/owl.theme.default.min.css')}}">
        <link rel="stylesheet" href="{{secure_asset('css/style.css')}}">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <script src="{{secure_asset('js/modernizr-2.6.2.min.js')}}"></script>
        <script src="{{secure_asset('js/respond.min.js')}}"></script>
        {{--<script src="{{secure_asset('js/jquery.min.js')}}"></script>--}}
        <script src="{{secure_asset('js/jquery.easing.1.3.js')}}"></script>
        {{--<script src="{{secure_asset('js/bootstrap.min.js')}}"></script>--}}
        <script src="{{secure_asset('js/jquery.waypoints.min.js')}}"></script>
        <script src="{{secure_asset('js/jquery.stellar.min.js')}}"></script>
        <script src="{{secure_asset('js/owl.carousel.min.js')}}"></script>
        <script src="{{secure_asset('js/jquery.countTo.js')}}"></script>
       <script src="{{secure_asset('js/jquery.magnific-popup.min.js')}}"></script>
        <script src="{{secure_asset('js/magnific-popup-options.js')}}"></script>
        <script src="{{secure_asset('js/main.js')}}"></script>
        <script src="{{secure_asset('js/extention/choices.js')}}"></script>
        <script>
            const choices = new Choices('[data-trigger]',
                {
                    searchEnabled: false
                });

        </script>
    </head>
    <style>
        #right_placeholder::placeholder {
            text-align: right;
        }
    </style>
    <body style="background: linear-gradient( rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4) ), url({{secure_asset('images/man_using_laptop.jpg')}});
            background-repeat: no-repeat; background-size: cover">
        <nav class="fh5co-nav" role="navigation">
            <div class="top">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 text-right">
                            <p class="num">هاتف : +01 123 456 7890</p>
                            <ul class="fh5co-social">
                                <li><a href="#"><i class="icon-twitter"></i></a></li>
                                <li><a href="#"><i class="icon-dribbble"></i></a></li>
                                <li><a href="#"><i class="icon-github"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="top-menu">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-1">
                            <div id="fh5co-logo"><a href="/">LearningPlatform<span>.</span></a></div>
                        </div>
                        <div class="col-xs-11 text-right menu-1">
                            <div class="row">
                                <div class="col-md-3 col-md-offset-2 text-right menu-1">
                                    <form action="#">
                                        <input id="right_placeholder" type="text" style="width: 80%" placeholder="إبحث من هنا" />
                                        <button class="btn-search" type="submit"><i class="fas fa-search"></i></button>
                                    </form>
                                </div>
                                <div class="col-md-7 text-right menu-1">
                                    <ul>
                                        /* <li><a href="/contact">تواصل معنا</a></li> */
                                        <li><a href="/about">عن الموقع</a></li>
                                        <li><a href="/courses">الكورسات</a></li>
                                        <li class="active"><a href="/">الصفحة الرئيسية</a></li>
                                        <li class="btn-cta"><a href="/login"><span>تسجيل الدخول</span></a></li>
                                        <li class="btn-cta"><a href="/register"><span>إنشاء حساب</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </nav>
        <main class="py-4">
            @yield('content')
        </main>
        <footer id="fh5co-footer" role="contentinfo">
            <div class="container">
                <div class="fh5co-widget">
                    <ol class="address"><h3 style="color: darkgrey; text-align: center">198 West 21th Street, Suite 721 New York NY 10016</h3></ol><br>
                </div>

                <div class="row">
                    <div class="col-md-4 fh5co-widget">
                        <ol class="url"><a href="http://gettemplates.co">gettemplates.co : الموقع الرسمي</a></ol>
                    </div>

                    <div class="col-md-4 fh5co-widget">
                        <ol class="email"><a href="mailto:info@yoursite.com">info@yoursite.com : البريد الإلكتروني</a></ol>
                    </div>

                    <div class="col-md-4 fh5co-widget">
                        <ol class="phone"><a href="tel://1234567920">هاتف / إتصال - واتساب : + 1235 2355 98</a></ol>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 text-center">
                        <p>
                            <small class="block">&copy; 2021 Web development. All Rights Reserved.</small>
                            <small class="block">Designed by <a href="#" target="_blank">Eng. Sara Elajab</a> Electronics/Software Engineer <a href="#" target="_blank">Unsplash</a></small>
                        </p>
                        <p>
                        <ul class="fh5co-social-icons">
                            <li><a href="#"><i class="icon-twitter"></i></a></li>
                            <li><a href="#"><i class="icon-facebook"></i></a></li>
                            <li><a href="#"><i class="icon-linkedin"></i></a></li>
                            <li><a href="#"><i class="icon-dribbble"></i></a></li>
                        </ul>
                        </p>
                    </div>
                </div>

            </div>
        </footer>
    </body>
</html>