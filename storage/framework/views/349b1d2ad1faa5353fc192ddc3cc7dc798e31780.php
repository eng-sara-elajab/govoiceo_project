<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title><?php echo e($website_data->name); ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="name" content="<?php echo e($website_data->name); ?>" />
        <meta name="description" content="<?php echo e($website_data->description); ?>"/>
        <meta name="address" content="<?php echo e($website_data->address); ?>"/>
        <meta name="keywords" content="<?php echo e($website_data->keywords); ?>"/>

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
        <link rel="stylesheet" href="<?php echo e(asset('css/animate.css')); ?>">
        <!-- Icomoon Icon Fonts-->
        <link rel="stylesheet" href="<?php echo e(asset('css/icomoon.css')); ?>">
        <!-- Bootstrap  -->
        <link rel="stylesheet" href="<?php echo e(asset('css/bootstrap.css')); ?>">

        <!-- Magnific Popup -->
        <link rel="stylesheet" href="<?php echo e(asset('css/magnific-popup.css')); ?>">

        <!-- Owl Carousel  -->
        <link rel="stylesheet" href="<?php echo e(asset('css/owl.carousel.min.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('css/owl.theme.default.min.css')); ?>">

        <!-- Theme style  -->
        <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">

        <!-- Modernizr JS -->
        <script src="<?php echo e(asset('js/modernizr-2.6.2.min.js')); ?>"></script>
        <!-- FOR IE9 below -->
        <!--[if lt IE 9]>
        <script src="<?php echo e(asset('js/respond.min.js')); ?>"></script>
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
    </style>
    <body>
        <div class="fh5co-loader"></div>

        <div id="page">
            <nav class="fh5co-nav" role="navigation">
                <div class="top">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 text-right">
                                <p class="num">هاتف : <?php echo e($website_data->phone); ?></p>
                                <ul class="fh5co-social">
                                    <li><a href="<?php echo e($website_data->twitter_link); ?>"><i class="icon-twitter"></i></a></li>
                                    <li><a href="<?php echo e($website_data->facebook_link); ?>"><i class="icon-facebook"></i></a></li>
                                    <li><a href="<?php echo e($website_data->linkedin_link); ?>"><i class="icon-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="top-menu">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-2">
                                <div id="fh5co-logo"><a href="/"><?php echo e($website_data->name); ?><span>.</span></a></div>
                            </div>
                            <div class="col-xs-10 text-right menu-1">
                                <div class="row">
                                    <div class="col-md-8 col-md-offset-4 text-right menu-1">
                                        <ul>
                                            <li><a href="/">الصفحة الرئيسية</a></li>
                                            <li class="active"><a href="/courses">الكورسات</a></li>
                                            <li><a href="/request_service">طلب خدمة</a></li>
                                            <li><a href="/about">عن الموقع</a></li>
                                            
                                            <?php if(Auth::user()): ?>
                                                <!-- Notifications Dropdown Menu -->
                                                <li class="nav-item dropdown">
                                                    <a class="nav-link" data-toggle="dropdown" href="#">
                                                        <i class="far fa-bell fa-lg"></i>
                                                        <?php if(count($rejected_requests) > 0): ?>
                                                                <span class="badge badge-warning"><?php echo e(count($rejected_requests)); ?></span>
                                                        <?php endif; ?>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-md dropdown-menu-right" style="width: auto; height: auto">
                                                        <?php if(count($rejected_requests) > 0): ?>
                                                                <div class="dropdown-item" style="height: auto">
                                                                    <span class="dropdown-item dropdown-header">
                                                                        <hr><a href="/edit_service/<?php echo e($rejected_requests[0]->id); ?>" style="color: orange; font-size: 20px">تم رفض الطلب ، إضغط لمراجعته</a><hr>
                                                                    </span>
                                                                </div>
                                                        <?php else: ?>
                                                            <h3 style="color: orange; text-align: center">لا توجد اشعارات جديدة</h3>
                                                        <?php endif; ?>
                                                    </div>
                                                </li>
                                                <li class="btn-cta">
                                                    <a href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><span>تسجيل الخروج</span
                                                    ></a>
                                                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                                                        <?php echo csrf_field(); ?>
                                                    </form>
                                                </li>
                                            <?php else: ?>
                                                <li class="btn-cta"><a href="/login"><span>تسجيل الدخول</span></a></li>
                                                <li class="btn-cta"><a href="/register"><span>إنشاء حساب</span></a></li>
                                            <?php endif; ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </nav>

            <header id="fh5co-header" class="fh5co-cover" role="banner" style="background-image:url(<?php echo e(asset('images/man_using_laptop.jpg')); ?>); height: auto">
                <div class="overlay"></div><br><br><br>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <div id="fh5co-project">
                                <div class="container-fluid proj-bottom">
                                    <div class="row">
                                        <?php if(count($courses) > 0): ?>
                                            <?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <div class="card col-md-4 col-sm-6 fh5co-project animate-box" data-animate-effect="fadeIn" style="width: 350px; height: 300px">
                                                    <div class="card-body">
                                                        <a href="/one_course/<?php echo e($course->id); ?>"><img src="images/courses/<?php echo e($course->image); ?>" style="width: 350px; height: 200px" alt="Free HTML5 Website Template by FreeHTML5.co" class="img-responsive">
                                                            <!--<span style="color: black">عرض الكورس</span>-->
                                                        </a><br>
                                                        <h3 style="color: white"><?php echo e($course->name); ?></h3><br>
                                                    </div>
                                                </div>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><br>
                                            <div class="col-md-6 pull-left">
                                                <?php echo $courses->links(); ?>

                                            </div>
                                        <?php else: ?>
                                            <h3 style="color: darkorange; text-align: center">لا توجد كورسات</h3>
                                        <?php endif; ?>
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

                <?php $__currentLoopData = $new_courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $new_course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="fh5co-explore">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-8 col-md-pull-1 animate-box">
                                    <img class="img-responsive" src="/images/courses/<?php echo e($new_course->image); ?>" style="width: 95%; height: 70%; margin-left: 10px" alt="work">
                                </div>
                                <div class="col-md-3 animate-box"><br><br><br><br>
                                    <h3 style="color: white; font-weight: bold; text-align: center"><?php echo e($new_course->name); ?></h3>
                                    <p><a class="btn btn-primary btn-lg btn-video" style="color: white; font-weight: bold; text-align: center" href="/one_course/<?php echo e($new_course->id); ?>"><i class="icon-play"></i>اضغط للحصول على الفيديو التعريفي </a></p>
                                </div>
                            </div>
                        </div>
                    </div><br><br><br>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

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
                            <ol class="address"><h3 style="color: darkgrey"><?php echo e($website_data->address); ?></h3></ol><br>
                        </div>

                        <div class="col-md-4 fh5co-widget">
                            <ol class="url" style="text-align: center"><a href="http://govoiceo.com">govoiceo.com : الموقع الرسمي</a></ol>
                        </div>

                        <div class="col-md-4 fh5co-widget">
                            <ol class="email" style="text-align: center; font-size: 15px"><a href="mailto:<?php echo e($website_data->email); ?>"> <?php echo e($website_data->email); ?> : البريد الإلكتروني</a></ol>
                        </div>

                        <div class="col-md-4 fh5co-widget">
                            <ol class="phone" style="text-align: center"><a href="tel://<?php echo e($website_data->phone); ?>">هاتف / إتصال - واتساب : <?php echo e($website_data->phone); ?></a></ol>
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
                                <li><a href="<?php echo e($website_data->twitter_link); ?>"><i class="icon-twitter"></i></a></li>
                                <li><a href="<?php echo e($website_data->facebook_link); ?>"><i class="icon-facebook"></i></a></li>
                                <li><a href="<?php echo e($website_data->linkedin_link); ?>"><i class="icon-linkedin"></i></a></li>
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
        <script src="<?php echo e(asset('js/jquery.min.js')); ?>"></script>
        <!-- jQuery Easing -->
        <script src="<?php echo e(asset('js/jquery.easing.1.3.js')); ?>"></script>
        <!-- Bootstrap -->
        <script src="<?php echo e(asset('js/bootstrap.min.js')); ?>"></script>
        <!-- Waypoints -->
        <script src="<?php echo e(asset('js/jquery.waypoints.min.js')); ?>"></script>
        <!-- Stellar Parallax -->
        <script src="<?php echo e(asset('js/jquery.stellar.min.js')); ?>"></script>
        <!-- Carousel -->
        <script src="<?php echo e(asset('js/owl.carousel.min.js')); ?>"></script>
        <!-- countTo -->
        <script src="<?php echo e(asset('js/jquery.countTo.js')); ?>"></script>
        <!-- Magnific Popup -->
        <script src="<?php echo e(asset('js/jquery.magnific-popup.min.js')); ?>"></script>
        <script src="<?php echo e(asset('js/magnific-popup-options.js')); ?>"></script>
        <!-- Main -->
        <script src="<?php echo e(asset('js/main.js')); ?>"></script>

        <script src="<?php echo e(asset('js/extention/choices.js')); ?>"></script>
        <script>
            const choices = new Choices('[data-trigger]',
                {
                    searchEnabled: false
                });

        </script>
    </body>
</html><?php /**PATH /home/u229186696/domains/govoiceo.com/blog/resources/views/courses.blade.php ENDPATH**/ ?>