<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>{{$website_data->name}}</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="name" content="{{$website_data->name}}" />
        <meta name="description" content="{{$website_data->description}}"/>
        <meta name="address" content="{{$website_data->address}}"/>
        <meta name="keywords" content="{{$website_data->keywords}}"/>

        <!-- Facebook and Twitter integration -->
        <meta property="og:title" content=""/>
        <meta property="og:image" content=""/>
        <meta property="og:url" content=""/>
        <meta property="og:site_name" content=""/>
        <meta property="og:description" content=""/>
        <meta name="twitter:title" content="" />
        <meta name="twitter:image" content="" />
        <meta name="twitter:url" content="" />
        <meta name="twitter:card" content="" />

        <link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,700,800" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />

        <!-- Animate.css -->
        <link rel="stylesheet" href="{{asset('css/animate.css')}}">
        <!-- Icomoon Icon Fonts-->
        <link rel="stylesheet" href="{{asset('css/icomoon.css')}}">
        <!-- Bootstrap  -->
        <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">

        <!-- Magnific Popup -->
        <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">

        <!-- Owl Carousel  -->
        <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">

        <!-- Theme style  -->
        <link rel="stylesheet" href="{{asset('css/style.css')}}">

        <!-- Modernizr JS -->
        <script src="{{asset('js/modernizr-2.6.2.min.js')}}"></script>
        <!-- FOR IE9 below -->
        <!--[if lt IE 9]>
        <script src="{{asset('js/respond.min.js')}}"></script>
        <![endif]-->

    </head>
    <style>
        #right_placeholder::placeholder {
            text-align: right;
        }
        
        .badge {
            position: absolute;
            top: 0;
            right: 15px;
            display:inline-block;
            min-width:8px;
            padding:4px 4px;
            font-size:10px;
            font-weight:700;
            line-height:1;
            color:#fff;
            text-align:center;
            white-space:nowrap;
            vertical-align:baseline;
            background-color:orange;
            border-radius:8px;
        }
        #paragraph img {
            width: 50%;
            height: 250px;
            margin-top: 10px;
        }
        #paragraph p {
            color: black;
            font-size: 20px;
            font-family : Areeq Al-Gafelh;
            text-align: center;
            margin-top: 10px;
        }
        #paragraph iframe{
            width: 80%;
            height: 250px;
            margin-top: 10px;
        }
    </style>
    <body>
        <div class="fh5co-loader"></div>

        <div id="page">
            <nav class="fh5co-nav" role="navigation">
                <div class="top">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 text-right">
                                <p class="num">هاتف : {{$website_data->phone}}</p>
                                <ul class="fh5co-social">
                                    <li><a href="{{$website_data->twitter_link}}"><i class="icon-twitter"></i></a></li>
                                    <li><a href="{{$website_data->facebook_link}}"><i class="icon-facebook"></i></a></li>
                                    <li><a href="{{$website_data->linkedin_link}}"><i class="icon-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="top-menu">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-2">
                                <div id="fh5co-logo"><a href="/">{{$website_data->name}}<span>.</span></a></div>
                            </div>
                            <div class="col-xs-10 text-right menu-1">
                                <div class="row">
                                    <!--<div class="col-md-3 col-md-offset-2 text-right menu-1">-->
                                    <!--    <form action="#">-->
                                    <!--        <input id="right_placeholder" type="text" style="width: 80%" placeholder="إبحث من هنا" />-->
                                    <!--        <button class="btn-search" type="submit"><i class="fas fa-search"></i></button>-->
                                    <!--    </form>-->
                                    <!--</div>-->
                                    <div class="col-md-8 col-md-offset-4 text-right menu-1">
                                        <ul>
                                            <li><a href="/">الصفحة الرئيسية</a></li>
                                            <li><a href="/courses">الكورسات</a></li>
                                            <li><a href="/request_service">طلب خدمة</a></li>
                                            <li><a href="/about">عن الموقع</a></li>
                                            {{--<li><a href="/contact">تواصل معنا</a></li>--}}
                                            @if(Auth::user())
                                                <!-- Notifications Dropdown Menu -->
                                                <li class="nav-item dropdown">
                                                    <a class="nav-link" data-toggle="dropdown" href="#">
                                                        <i class="far fa-bell fa-lg"></i>
                                                        @if(count($rejected_requests) > 0)
                                                                <span class="badge badge-warning">{{count($rejected_requests)}}</span>
                                                        @endif
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-md dropdown-menu-right" style="width: auto; height: auto">
                                                        @if(count($rejected_requests) > 0)
                                                                <div class="dropdown-item" style="height: auto">
                                                                    <span class="dropdown-item dropdown-header">
                                                                        <hr><a href="/edit_service/{{$rejected_requests[0]->id}}" style="color: orange; font-size: 20px">تم رفض الطلب ، إضغط لمراجعته</a><hr>
                                                                    </span>
                                                                </div>
                                                        @else
                                                            <h3 style="color: orange; text-align: center">لا توجد اشعارات جديدة</h3>
                                                        @endif
                                                    </div>
                                                </li>
                                                <li class="btn-cta">
                                                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><span>تسجيل الخروج</span
                                                    ></a>
                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                        @csrf
                                                    </form>
                                                </li>
                                            @else
                                                <li class="btn-cta"><a href="/login"><span>تسجيل الدخول</span></a></li>
                                                <li class="btn-cta"><a href="/register"><span>إنشاء حساب</span></a></li>
                                            @endif
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </nav>

            <header id="fh5co-header" class="fh5co-cover" role="banner" style="background-image:url({{asset('images/man_using_laptop.jpg')}}); height: auto" data-stellar-background-ratio="0.5">
                <div class="overlay"></div><br><br>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <div id="fh5co-project">
                                <div class="row">
                                    <div class="col-md-12 container-fluid proj-bottom">
                                        @if (session('alert'))
                                            <div class="alert alert-default" style="width: 50%; margin: auto">
                                                <p style="color: darkorange; font-family: Cambria; font-size: 22px; text-align: center; font-weight: bold">{{ session('alert') }}</p>
                                            </div>
                                        @endif
                                        <iframe width="80%" height="390" src="{{asset('/videos/courses/'.$course->video)}}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe><br><br>
                                        <div class="row">
                                            <div class="col-md-6 pull-right">
                                                <h1 style="color: white; font-weight:bold">{{$course->name}}</h1>
                                            </div>
                                            <div class="col-md-6 pull-left">
                                                <h3 style="color: white; font-family: Areeq Al-Gafelh"><span style="color: orange; font-size: 16px">SAR</span>السعر: {{$course->price}}<h3>
                                            </div>
                                            @if($course->introduction != null)
                                                <div class="col-md-12">
                                                    <h2 style="text-align: center; color: darkorange; font-weight: bold; margin-top: 20px; font-family: Areeq Al-Gafelh">وصف الكورس</h2>
                                                    <div class="col-md-12" id="paragraph" style="background-color: whitesmoke; opacity: 0.8">
                                                        {!! $course->introduction !!}
                                                    </div>
                                                </div>
                                            @endif
                                            <div class="col-md-12">
                                                @if(Auth::user())
                                                    @if($course->price == 'free')
                                                        <a class="btn btn-lg btn-primary popup-vimeo" href="{{$course->course_link}}" style="text-align: center; margin-top: 10px">إضغط لمشاهدة الكورس كاملاً</a>
                                                    @else
                                                        @if(in_array($course->id, $subscribed_courses))
                                                            <a class="btn btn-lg btn-primary {{in_array($course->id, $subscribed_courses) ?  'popup-vimeo' : ''}}" href="{{$course->course_link}}" style="text-align: center; margin-top: 10px">إضغط لمشاهدة الكورس كاملاً</a>
                                                        @else
                                                            <a class="btn btn-lg btn-primary {{in_array($course->id, $subscribed_courses) ?  'popup-vimeo' : ''}}" href="/subscribe/{{$course->id}}" style="text-align: center; margin-top: 10px">إضغط لمشاهدة الكورس كاملاً</a>
                                                        @endif
                                                    @endif
                                                @else
                                                    <a class="btn btn-lg btn-primary" href="/login_first" style="text-align: center; margin-top: 10px">إضغط لمشاهدة الكورس كاملاً</a>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>

            <div id="fh5co-explore" class="fh5co-bg-section" style="color: whitesmoke; background-color: lightgrey">
                <div class="container">
                    <div class="row animate-box">
                        <div class="col-md-6 col-md-offset-3 text-center fh5co-heading"><br>
                            <h2 style="color: white; font-weight: bold; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif">أحدث الكورسات</h2>
                            <p style="color: whitesmoke; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif">                نقدم لكم أحدث الكورسات المرغوبة في سوق العمل بأفضل المدربين وباستخدام أحدث التقنيات والأدوات . بحيث يكون الطالب قدر عالي من العلم والمعرفة بعد إكمال الكورس</p>
                        </div>
                    </div>
                </div>

                @foreach($courses as $course)
                    <div class="fh5co-explore">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-8 col-md-pull-1 animate-box">
                                    <img class="img-responsive" src="/images/courses/{{$course->image}}" style="width: 95%; height: 70%; margin-left: 10px" alt="work">
                                </div>
                                <div class="col-md-3 animate-box"><br><br><br><br>
                                    <h3 style="color: white; font-weight: bold; text-align: center">{{$course->name}}</h3>
                                    <p><a class="btn btn-primary btn-lg btn-video" style="color: white; font-weight: bold; text-align: center" href="/one_course/{{$course->id}}"><i class="icon-play"></i>اضغط للحصول على الفيديو التعريفي </a></p>
                                </div>
                            </div>
                        </div>
                    </div><br><br><br>
                @endforeach

                <div class="row">
                    <div class="col-md-4 col-md-offset-3 animate-box">
                        <a class="btn btn-primary btn-lg btn-video col-md-offset-4" style="color: white; font-weight: bold; text-align: center; width: 100%" href="/courses">عرض كل الكورسات</a>
                    </div>
                </div>
            </div>

            <footer id="fh5co-footer" role="contentinfo">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-md-offset-3 fh5co-widget">
                            <ol class="address"><h3 style="color: darkgrey">{{$website_data->address}}</h3></ol><br>
                        </div>

                        <div class="col-md-4 fh5co-widget">
                            <ol class="url" style="text-align: center"><a href="http://govoiceo.com">govoiceo.com : الموقع الرسمي</a></ol>
                        </div>

                        <div class="col-md-4 fh5co-widget">
                            <ol class="email" style="text-align: center; font-size: 15px"><a href="mailto:{{$website_data->email}}"> {{$website_data->email}} : البريد الإلكتروني</a></ol>
                        </div>

                        <div class="col-md-4 fh5co-widget">
                            <ol class="phone" style="text-align: center"><a href="tel://{{$website_data->phone}}">هاتف / إتصال - واتساب : {{$website_data->phone}}</a></ol>
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
                                <li><a href="{{$website_data->twitter_link}}"><i class="icon-twitter"></i></a></li>
                                <li><a href="{{$website_data->facebook_link}}"><i class="icon-facebook"></i></a></li>
                                <li><a href="{{$website_data->linkedin_link}}"><i class="icon-linkedin"></i></a></li>
                                <!--<li><a href="#"><i class="icon-dribbble"></i></a></li>-->
                            </ul>
                            </p>
                        </div>
                    </div>

                </div>
            </footer>
        </div>

        <div class="gototop js-top">
            <a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
        </div>

        <!-- jQuery -->
        <script src="{{asset('js/jquery.min.js')}}"></script>
        <!-- jQuery Easing -->
        <script src="{{asset('js/jquery.easing.1.3.js')}}"></script>
        <!-- Bootstrap -->
        <script src="{{asset('js/bootstrap.min.js')}}"></script>
        <!-- Waypoints -->
        <script src="{{asset('js/jquery.waypoints.min.js')}}"></script>
        <!-- Stellar Parallax -->
        <script src="{{asset('js/jquery.stellar.min.js')}}"></script>
        <!-- Carousel -->
        <script src="{{asset('js/owl.carousel.min.js')}}"></script>
        <!-- countTo -->
        <script src="{{asset('js/jquery.countTo.js')}}"></script>
        <!-- Magnific Popup -->
        <script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
        <script src="{{asset('js/magnific-popup-options.js')}}"></script>
        <!-- Main -->
        <script src="{{asset('js/main.js')}}"></script>

        <script src="{{asset('js/extention/choices.js')}}"></script>
        <script>
            const choices = new Choices('[data-trigger]',
                {
                    searchEnabled: false
                });

        </script>
    </body>
</html>