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
		<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
		<meta name="author" content="The Man in Blue" />
		<meta name="robots" content="all" />
		<meta name="MSSmartTagsPreventParsing" content="true" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />

        <title>Learning Platform</title>

        <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
        <link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,700,800" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('css/animate.css')}}">
        <link rel="stylesheet" href="{{asset('css/icomoon.css')}}">
        <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
        <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <script src="{{asset('js/modernizr-2.6.2.min.js')}}"></script>
        <script src="{{asset('js/respond.min.js')}}"></script>
        <script src="{{asset('js/jquery.easing.1.3.js')}}"></script>
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
        <script>
            function myFunction() {
                var txt;
                if (confirm("حذف هذا العنصر؟")) {
                    txt = "You pressed OK!";
                } else {
                    txt = "You pressed Cancel!";
                }
                document.getElementById("demo").innerHTML = txt;
            }
        </script>
        <script>
            function myFunction1() {
                var txt;
                if (confirm("إسترجاع هذا العنصر؟")) {
                    txt = "You pressed OK!";
                } else {
                    txt = "You pressed Cancel!";
                }
                document.getElementById("demo").innerHTML = txt;
            }
        </script>
        <script>
            $(document).ready(function(){
                $('#action_menu_btn').click(function(){
                    $('.action_menu').toggle();
                });
            });
        </script>
    </head>
    <style type="text/css" media="all">
        body {
            font-family: "Lato", sans-serif;
            background-image: url({{asset('images/man_using_laptop.jpg')}});
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
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

        .chat{
            margin-top: auto;
            margin-bottom: auto;
        }
        .card{
            height: 550px;
            border-radius: 15px !important;
            background-color: rgba(0,0,0,0.4) !important;
        }
        .contacts_body{
            padding:  0.75rem 0 !important;
            overflow-y: auto;
            white-space: nowrap;
        }
        .msg_card_body{
            overflow-y: auto;
        }
        .card-header{
            border-radius: 15px 15px 0 0 !important;
            border-bottom: 0 !important;
        }
        .card-footer{
            border-radius: 0 0 15px 15px !important;
            border-top: 0 !important;
        }
        .container{
            align-content: center;
        }
        .search{
            border-radius: 15px 0 0 15px !important;
            background-color: rgba(0,0,0,0.3) !important;
            border:0 !important;
            color:white !important;
        }
        .search:focus{
            box-shadow:none !important;
            outline:0px !important;
        }
        .type_msg{
            background-color: rgba(0,0,0,0.3) !important;
            border:0 !important;
            color:white !important;
            height: 60px !important;
            overflow-y: auto;
        }
        .type_msg:focus{
            box-shadow:none !important;
            outline:0px !important;
        }
        .attach_btn{
            border-radius: 15px 0 0 15px !important;
            background-color: rgba(0,0,0,0.3) !important;
            border:0 !important;
            color: white !important;
            cursor: pointer;
        }
        .send_btn{
            border-radius: 0 15px 15px 0 !important;
            background-color: rgba(0,0,0,0.3) !important;
            border:0 !important;
            color: white !important;
            cursor: pointer;
        }
        .search_btn{
            border-radius: 0 15px 15px 0 !important;
            background-color: rgba(0,0,0,0.3) !important;
            border:0 !important;
            color: white !important;
            cursor: pointer;
        }
        .contacts{
            list-style: none;
            padding: 0;
        }
        .contacts li{
            width: 100% !important;
            padding: 5px 10px;
            margin-bottom: 15px !important;
        }
        .active{
            background-color: rgba(0,0,0,0.3);
        }
        .user_img{
            height: 70px;
            width: 70px;
            border:1.5px solid #f5f6fa;

        }
        .user_img_msg{
            height: 40px;
            width: 40px;
            border:1.5px solid #f5f6fa;

        }
        .img_cont{
            position: relative;
            height: 70px;
            width: 70px;
        }
        .img_cont_msg{
            height: 40px;
            width: 40px;
        }
        .online_icon{
            position: absolute;
            height: 15px;
            width:15px;
            background-color: #4cd137;
            border-radius: 50%;
            bottom: 0.2em;
            right: 0.4em;
            border:1.5px solid white;
        }
        .offline{
            background-color: #c23616 !important;
        }
        .user_info{
            margin-top: auto;
            margin-bottom: auto;
            margin-left: 15px;
        }
        .user_info a span{
            font-size: 20px;
            color: orange;
        }
        .user_info a span:hover{
            color: darkorange;
            text-decoration: none;
        }
        .user_info p{
            font-size: 12px;
            color: white;
        }
        .video_cam{
            margin-left: 50px;
            margin-top: 5px;
        }
        .video_cam span{
            color: white;
            font-size: 20px;
            cursor: pointer;
            margin-right: 20px;
        }
        .msg_cotainer{
            margin-top: auto;
            margin-bottom: auto;
            margin-left: 10px;
            border-radius: 25px;
            background-color: #82ccdd;
            padding: 10px;
            position: relative;
        }
        .msg_cotainer_send{
            margin-top: auto;
            margin-bottom: auto;
            margin-right: 10px;
            border-radius: 25px;
            background-color: #78e08f;
            padding: 10px;
            position: relative;
        }
        .msg_time{
            position: absolute;
            left: 0;
            bottom: -15px;
            color: rgba(255,255,255,0.5);
            font-size: 10px;
        }
        .msg_time_send{
            position: absolute;
            right:0;
            bottom: -15px;
            color: rgba(255,255,255,0.5);
            font-size: 10px;
        }
        .msg_head{
            position: relative;
        }
        #action_menu_btn{
            position: absolute;
            right: 10px;
            top: 10px;
            color: white;
            cursor: pointer;
            font-size: 20px;
        }
        .action_menu{
            z-index: 1;
            position: absolute;
            padding: 15px 0;
            background-color: rgba(0,0,0,0.5);
            color: white;
            border-radius: 15px;
            top: 30px;
            right: 15px;
            display: none;
        }
        .action_menu ul{
            list-style: none;
            padding: 0;
            margin: 0;
        }
        .action_menu ul li{
            width: 100%;
            padding: 10px 15px;
            margin-bottom: 5px;
        }
        .action_menu ul li i{
            padding-right: 10px;

        }
        .action_menu ul li:hover{
            cursor: pointer;
            background-color: rgba(0,0,0,0.2);
        }
        @media(max-width: 576px){
            .contacts_card{
                margin-bottom: 15px !important;
            }
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

        .requests_list {
            background-color: white;
        }

        .requests_list:hover {
            background-color: lightgrey;
        }
    </style>
    <body style="margin: 0">
        <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <div class="container-fluid">
                <a href="#" style="text-align: center">
                    <img src="{{asset('images/logos/'.$website_data->logo)}}" class="img-circle img-responsive" style="width: 30%; height: 10%; margin-left: 30%">
                    <span class="brand-text font-weight-light" style="font-size: large">{{$website_data->name}}</span>
                </a>
                <hr style="color: #D3D3D3; width: 90%">
                <div class="nav-item">
                    <a href="/admin/home" class="pull-right">
                        <h3 style="font-weight: bold; margin-top: 3px">الصفحة الرئيسية&nbsp;<i class="fa fa-circle nav-icon pull-right" style="color:orange"></i></h3>
                    </a>
                </div>
                <div class="nav-item">
                    <a href="/admin/user_service_requests" class="pull-right">
                        <h3 style="font-weight: bold"><i class="fa fa-circle nav-icon pull-right" style="color:orange"></i>
                            @if(count($new_services) > 0)
                                    <span class="badge badge-warning pull-left">{{count($new_services)}}</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
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
                <!--{{--<div class="nav-item">--}}-->
                <!--    {{--<a href="/admin/messages" class="pull-right">--}}-->
                <!--        {{--<h3 style="color: lightgrey; font-weight: bold"><i class="fa fa-circle nav-icon pull-right" style="color:orange"></i>الرسائل&nbsp;</h3>--}}-->
                <!--    {{--</a>--}}-->
                <!--{{--</div>--}}-->
                <div class="nav-item">
                    <a href="/admin/new_course" class="pull-right">
                        <h3 style="font-weight: bold; margin-top: 3px">إضافة كورس جديد&nbsp;<i class="fa fa-circle nav-icon pull-right" style="color:orange"></i></h3>
                    </a>
                </div>
                <div class="nav-item">
                    <a href="/admin/admin_courses" class="pull-right">
                        <h3 style="font-weight: bold; margin-top: 3px"><i class="fa fa-circle nav-icon pull-right" style="color:orange"></i>عرض الكورسات&nbsp;</h3>
                    </a>
                </div>
                @if(Auth::guard('admin')->user()->email == 'admin@example.com')
                    <div class="nav-item">
                        <a href="/admin/new_admin" class="pull-right">
                            <h3 style="font-weight: bold; margin-top: 3px"><i class="fa fa-circle nav-icon pull-right" style="color:orange"></i>إضافة آدمن&nbsp;</h3>
                        </a>
                    </div>
                @endif
                <div class="nav-item">
                    <a href="/admin/admins" class="pull-right">
                        <h3 style="font-weight: bold; margin-top: 3px"><i class="fa fa-circle nav-icon pull-right" style="color:orange"></i>عرض الآدمن&nbsp;</h3>
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
                        <h3 style="font-weight: bold; margin-top: 3px"><i class="fa fa-circle nav-icon pull-right" style="color:orange"></i>تعديل بياناتك الشخصية&nbsp;</h3>
                    </a>
                </div>
                <div class="nav-item">
                    <a href="/admin/website_data" class="pull-right">
                        <h3 style="font-weight: bold; margin-top: 3px"><i class="fa fa-circle nav-icon pull-right" style="color:orange"></i>بيانات الموقع &nbsp;</h3>
                    </a>
                </div>
                <hr style="color: #D3D3D3; width: 90%; margin-top: 140%">
                <div class="nav-item">
                    <a href="{{ url('/logout') }}" class="btn btn-default btn-block" style="color: orange"><i class="fa fa-sign-out" style="color: orange" aria-hidden="true"></i>&nbsp;تسجيل الخروج</a>
                </div>
            </div>
        </div>
        <div style="text-align: right; margin-top: auto; margin-right: 7px">
            <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
        </div>
        <div class="container">
            <main class="py-4">
                @yield('content')
            </main>
            <br>
        </div>
    </body>
</html>