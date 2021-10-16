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
                                            <li><a href="/courses">الكورسات</a></li>
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

            <header id="fh5co-header" class="fh5co-cover" role="banner" style="background-image:url(<?php echo e(asset('images/man_using_laptop.jpg')); ?>); height: auto" data-stellar-background-ratio="0.5">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <div id="fh5co-project">
                                <div class="container-fluid proj-bottom">
                                    <div id="fh5co-contact">
                                        <div class="container">
                                            <div class="row" style="background-color: white; opacity: 0.8; height: auto"><br>
                                                <div class="col-md-3 col-md-offset-1 animate-box">

                                                    <div class="fh5co-contact-info">
                                                        <h3 style="color: orange; font-weight: bold">معلومات المالك</h3><br>
                                                        <ul>
                                                            <li class="address"><?php echo e($website_data->address); ?></li>
                                                            <li class="phone"><a href="tel://1234567920"><?php echo e($website_data->phone); ?></a></li>
                                                            <li class="email"><a href="<?php echo e($website_data->email); ?>"><?php echo e($website_data->email); ?></a></li>
                                                            <li class="url"><a href="http://govoiceo.com">govoiceo.com</a></li>
                                                        </ul>
                                                    </div>

                                                </div>
                                                <div class="col-md-7 col-md-offset-1 animate-box">
                                                    <?php if(session('alert')): ?>
                                                        <div class="alert alert-default" style="width: 50%; margin: auto">
                                                            <p style="color: darkorange; font-family: Cambria; font-size: 22px; text-align: center; font-weight: bold"><?php echo e(session('alert')); ?></p>
                                                        </div>
                                                    <?php endif; ?>
                                                    <!--<h3 class="animate-flicker" style="color: orange; font-weight: bold">عليك إرفاق صورة من فاتورة الدفع حتى يكتمل الطلب</h3>-->
                                                    <h4 style="color: darkorange; font-weight: bold"><?php echo e($edit_service->reject_message); ?></h4>
                                                    <form action="/update_service/<?php echo e($edit_service->id); ?>" method="post" enctype="multipart/form-data">
                                                        <?php echo csrf_field(); ?>
                                                        <?php echo e(method_field('put')); ?>

                                                        <div class="row form-group">
                                                            <div class="col-md-12">
                                                                <select name="text_type" class="form-control" style="height: 50px; width: 100%; color: darkgrey; border-radius: 15px; border: 2px thin">
                                                                    <option value="none" selected disabled hidden> 
                                                                      اختر نوع النص المطلوب
                                                                    </option>
                                                                    <option value="بالفصحى">
                                                                        بالفصحى
                                                                    </option>
                                                                    <option value="بالعامية">
                                                                        بالعامية
                                                                    </option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="row form-group">
                                                            <div class="col-md-12">
                                                                <select name="performance_type" class="form-control" style="height: 50px; width: 100%; color: darkgrey; border-radius: 15px; border: 2px thin">
                                                                    <option value="none" selected disabled hidden> 
                                                                      حدد نوع الأداء المطلوب
                                                                    </option>
                                                                    <option value="عاطفي">
                                                                        عاطفي
                                                                    </option>
                                                                    <option value="إعلان">
                                                                        إعلان 
                                                                    </option>
                                                                    <option value="وثائقي">
                                                                        وثائقي  
                                                                    </option>
                                                                    <option value="رد آلي">
                                                                        رد آلي 
                                                                    </option>
                                                                    <option value="كتاب صوتي">
                                                                        كتاب صوتي 
                                                                    </option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="row form-group">
                                                            <div class="col-md-12">
                                                                <input type="text" id="right_placeholder" class="form-control" style="height: 50px; width: 100%; border-radius: 15px; border: 2px thin" name="text_load" value="<?php echo e($edit_service->inserted_text); ?>" placeholder="صوت النص">
                                                            </div>
                                                        </div>
                                                        <div class="row form-group">
                                                            <div class="col-md-5 col-md-offset-7">
                                                                <input type="radio" class="pull-right" name="producing" value="مع مونتاج">
                                                                  <label class="pull-right">مع مونتاج&nbsp;&nbsp;</label>
                                                                  <label class="pull-left">بدون مونتاج&nbsp;&nbsp;</label>
                                                                  <input type="radio" class="pull-left" name="producing" value="بدون مونتاج">
                                                            </div>
                                                        </div>
                                                        <div class="row form-group">
                                                            <div class="col-md-12">
                                                                <input type="text" id="right_placeholder" class="form-control" style="height: 50px; width: 100%; border-radius: 15px; border: 2px thin" name="music_type" value="<?php echo e($edit_service->music_type); ?>" placeholder="إذا كان مع مونتاج حدد نوع الموسيقى">
                                                            </div>
                                                        </div>
                                                        <div class="row form-group">
                                                            <div class="col-md-12">
                                                                <lable class="pull-right" style="font-size: 18px; font-weight:bold; color: darkgrey; opacity: 0.5; margin-right: 10px">ارفق فاتورة السداد هنا من فضلك</lable>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <input type="file" id="right_placeholder" title="حمل الفاتورة من هنا" class="form-control" style="height: 50px; background-color: white; opacity: 0.9; border-radius: 15px; border: 2px solid" name="invoice_image">
                                                                <?php $__errorArgs = ['invoice_image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                    <span class="invalid-feedback" role="alert"><strong><?php echo e($message); ?></strong></span>
                                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                            </div>
                                                        </div>
                                                        <div class="form-group"><br>
                                                            <input type="submit" value="إرسال" class="btn btn-primary">
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>

            <footer id="fh5co-footer" role="contentinfo">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-md-offset-3 fh5co-widget">
                            <ol class="address"><h3 style="color: darkgrey"><?php echo e($website_data->address); ?></h3></ol><br>
                        </div>

                        <div class="col-md-4 fh5co-widget">
                            <ol class="url" style="text-align: center"><a href="http://gettemplates.co">govoiceo.com : الموقع الرسمي</a></ol>
                        </div>

                        <div class="col-md-4 fh5co-widget">
                            <ol class="email" style="text-align: center; font-size: 15px"><a href="mailto:info@yoursite.com"> <?php echo e($website_data->email); ?> : البريد الإلكتروني</a></ol>
                        </div>

                        <div class="col-md-4 fh5co-widget">
                            <ol class="phone" style="text-align: center"><a href="tel://1234567920">هاتف / إتصال - واتساب : <?php echo e($website_data->phone); ?></a></ol>
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

        <script src="<?php echo e(asset('js/jquery.min.js')); ?>"></script>
        <script src="<?php echo e(asset('js/jquery.easing.1.3.js')); ?>"></script>
        <script src="<?php echo e(asset('js/bootstrap.min.js')); ?>"></script>
        <script src="<?php echo e(asset('js/jquery.waypoints.min.js')); ?>"></script>
        <script src="<?php echo e(asset('js/jquery.stellar.min.js')); ?>"></script>
        <script src="<?php echo e(asset('js/owl.carousel.min.js')); ?>"></script>
        <script src="<?php echo e(asset('js/jquery.countTo.js')); ?>"></script>
        <script src="<?php echo e(asset('js/jquery.magnific-popup.min.js')); ?>"></script>
        <script src="<?php echo e(asset('js/magnific-popup-options.js')); ?>"></script>
        <script src="<?php echo e(asset('js/main.js')); ?>"></script>
        <script src="<?php echo e(asset('js/extention/choices.js')); ?>"></script>
        <script>
            const choices = new Choices('[data-trigger]',
                {
                    searchEnabled: false
                });

        </script>
    </body>
</html><?php /**PATH /home/u229186696/domains/govoiceo.com/blog/resources/views/edit_service.blade.php ENDPATH**/ ?>