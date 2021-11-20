<!DOCTYPE html>
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
        
        <meta property="og:title" content=""/>
        <meta property="og:image" content=""/>
        <meta property="og:url" content=""/>
        <meta property="og:site_name" content=""/>
        <meta property="og:description" content=""/>
        <meta name="twitter:title" content="" />
        <meta name="twitter:image" content="" />
        <meta name="twitter:url" content="" />
        <meta name="twitter:card" content="" />

        <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,700,800" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="{{asset('css/animate.css')}}">
        <link rel="stylesheet" href="{{asset('css/icomoon.css')}}">
        <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
        <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/style.css')}}">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <script src="{{asset('js/app.js')}}"></script>
        <script src="{{asset('js/modernizr-2.6.2.min.js')}}"></script>
        <script src="{{asset('js/respond.min.js')}}"></script>
        {{--<script src="{{asset('js/jquery.min.js')}}"></script>--}}
        <script src="{{asset('js/jquery.easing.1.3.js')}}"></script>
        {{--<script src="{{asset('js/bootstrap.min.js')}}"></script>--}}
        <script src="{{asset('js/jquery.waypoints.min.js')}}"></script>
        <script src="{{asset('js/jquery.stellar.min.js')}}"></script>
        <script src="{{asset('js/owl.carousel.min.js')}}"></script>
        <script src="{{asset('js/jquery.countTo.js')}}"></script>
        <script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
        <script src="{{asset('js/magnific-popup-options.js')}}"></script>
        <script src="{{asset('js/main.js')}}"></script>
        <script src="{{asset('js/extention/choices.js')}}"></script>
        <script>
            function openNav() {
                document.getElementById("mySidenav").style.width = "300px";
            }

            function closeNav() {
                document.getElementById("mySidenav").style.width = "0";
            }
        </script>
    </head>
    <style>
        #right_placeholder::placeholder {
            text-align: right;
        }
        .sidenav {
            height: 100%;
            width: 0;
            position: fixed;
            z-index: 1;
            top: 0;
            right: 0;
            background-color: #708090;
            overflow-x: hidden;
            transition: 0.5s;
            padding-top: 60px;
        }

        .sidenav a {
            padding: 8px 8px 8px 32px;
            text-decoration: none;
            font-size: 25px;
            color: #D3D3D3;
            display: block;
            transition: 0.3s;
        }

        .sidenav a:hover {
            color: #ffffff;
        }

        .sidenav .closebtn {
            position: absolute;
            top: 0;
            right: 25px;
            font-size: 36px;
            margin-left: 50px;
        }

        @media screen and (max-height: 450px) {
            .sidenav {padding-top: 15px;}
            .sidenav a {font-size: 18px;}
        }

        #right_placeholder::placeholder {
            text-align: right;
            font-size: 20px;
            color: lightgrey;
        }
        .badge {
            position: absolute;
            display:inline-block;
            min-width:12px;
            padding:8px 8px;
            font-size:10px;
            font-weight:700;
            line-height:1;
            color:#fff;
            text-align:center;
            white-space:nowrap;
            vertical-align:baseline;
            background-color:orange;
            border-radius:15px;
        }

        .nav-item a h3 {
            color: #D3D3D3;
        }

        .nav-item a h3:hover {
            color: #ffffff;
        }
    </style>
    <body style="background-image:  url({{asset('images/man_using_laptop.jpg')}});
            background-repeat: no-repeat; background-size: cover">
        <div style="text-align: right; margin-right: 7px">
            <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
        </div>
        <header id="fh5co-header" class="fh5co-cover" role="banner" data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center">
                        <div class="display-t">
                            <div class="display-tc animate-box" data-animate-effect="fadeIn">
                                <h1>مهارة التعليم هي فن المساعدة على الإكتشاف</h1>
                                <h2> تفضل بتعلم أفضل الكورسات <a href="http://freehtml5.co/" target="_blank">معنا</a></h2>
                                <p><a class="btn btn-lg btn-learn" href="admin_courses">عروض الكورسات</a> <a class="btn btn-lg popup-vimeo btn-video" href="https://vimeo.com/channels/staffpicks/93951774"><i class="icon-play"></i>مشاهدة فيديو تعريفي</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <div class="container-fluid">
                <a href="#" style="text-align: center">
                    <img src="{{asset('/images/logos/'.$website_data->logo)}}" class="img-circle img-responsive" style="width: 30%; height: 5%; margin-left: 30%">
                    <span class="brand-text font-weight-light" style="font-size: large">{{$website_data->name}}</span>
                </a>
                <hr style="color: #D3D3D3; width: 90%">
                <div class="nav-item">
                    <a href="/admin/home" class="pull-right">
                        <h3 style="font-weight: bold"><i class="fa fa-circle nav-icon pull-right" style="font-weight: bold; color: orange"></i>الصفحة الرئيسية&nbsp;</h3>
                    </a>
                </div>
                <div class="nav-item">
                    <a href="/admin/user_service_requests" class="pull-right">
                        <h3 style="font-weight: bold"><i class="fa fa-circle nav-icon pull-right" style="color: orange"></i>
                            @if(count($new_services) > 0)
                                    <span class="badge badge-warning pull-left">{{count($new_services)}}</span>&nbsp;&nbsp;&nbsp;
                                @endif
                        طلبات الخدمات &nbsp;
                        </h3>
                    </a>
                </div>
                <div class="nav-item">
                    <a href="/admin/courses_invoices" class="pull-right">
                        <h3 style="font-weight: bold"><i class="fa fa-circle nav-icon pull-right" style="color: orange"></i>فواتير الكورسات &nbsp;</h3>
                    </a>
                </div>
                <div class="nav-item">
                    <a href="/admin/new_course" class="pull-right">
                        <h3 style="font-weight: bold"><i class="fa fa-circle nav-icon pull-right" style="color: orange"></i>إضافة كورس جديد&nbsp;</h3>
                    </a>
                </div>
                <div class="nav-item">
                    <a href="/admin/admin_courses" class="pull-right">
                        <h3 style="font-weight: bold"><i class="fa fa-circle nav-icon pull-right" style="color: orange"></i>عرض الكورسات&nbsp;</h3>
                    </a>
                </div>
                @if($permission->email == 'admin@example.com')
                    <div class="nav-item">
                        <a href="/admin/new_admin" class="pull-right">
                            <h3 style="font-weight: bold"><i class="fa fa-circle nav-icon pull-right" style="color: orange"></i>إضافة آدمن&nbsp;</h3>
                        </a>
                    </div>
                @endif
                <div class="nav-item">
                    <a href="/admin/admins" class="pull-right">
                        <h3 style="font-weight: bold"><i class="fa fa-circle nav-icon pull-right" style="color: orange"></i>عرض الآدمن&nbsp;</h3>
                    </a>
                </div>
                <div class="nav-item">
                    <a href="/admin/users" class="pull-right">
                        <h3 style="font-weight: bold"><i class="fa fa-circle nav-icon pull-right" style="color: orange"></i>عرض المستخدمين&nbsp;</h3>
                    </a>
                </div>
                <div class="nav-item">
                    <a href="/admin/request_service_requirements" class="pull-right">
                        <h3 style="font-weight: bold"><i class="fa fa-circle nav-icon pull-right" style="color: orange"></i>تفاصيل السداد&nbsp;</h3>
                    </a>
                </div>
                <div class="nav-item">
                    <a href="/admin/profile" class="pull-right">
                        <h3 style="font-weight: bold">تعديل بياناتك الشخصية<i class="fa fa-circle nav-icon pull-right" style="color: orange"></i></h3>
                    </a>
                </div>
                <div class="nav-item">
                    <a href="/admin/website_data" class="pull-right">
                        <h3 style="font-weight: bold; margin-top: 3px"><i class="fa fa-circle nav-icon pull-right" style="color:orange"></i>بيانات الموقع &nbsp;</h3>
                    </a>
                </div>
                <hr style="color: #D3D3D3; width: 90%; margin-bottom: 0">
                <div class="nav-item">
                    <a href="{{ url('/logout') }}" class="btn btn-default btn-block" style="color: orange"><i class="fa fa-sign-out nav-icon" style="color: orange" aria-hidden="true"></i>&nbsp;تسجيل الخروج</a>
                </div>
            </div>
        </div>
    </body>
</html>
