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

        <title>Learning Platform</title>

        <link rel="stylesheet" href="{{secure_asset('css/bootstrap.css')}}">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,700,800" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
        <script src="{{secure_asset('js/jquery.min.js')}}"></script>
        <script src="{{secure_asset('js/jquery.easing.1.3.js')}}"></script>
        <script src="{{secure_asset('js/bootstrap.min.js')}}"></script>
        <script src="{{secure_asset('js/jquery.waypoints.min.js')}}"></script>
        <script src="{{secure_asset('js/jquery.stellar.min.js')}}"></script>
        <script src="{{secure_asset('js/owl.carousel.min.js')}}"></script>
        <script src="{{secure_asset('js/jquery.countTo.js')}}"></script>
        <script src="{{secure_asset('js/jquery.magnific-popup.min.js')}}"></script>
        <script src="{{secure_asset('js/magnific-popup-options.js')}}"></script>
        <script src="{{secure_asset('js/main.js')}}"></script>
        <script src="{{secure_asset('js/extention/choices.js')}}"></script>
    </head>
    <style>
        body {
            font-family: "Lato", sans-serif;
            background-image: url({{asset('images/man_using_laptop.jpg')}});
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        #right_placeholder::placeholder {
            text-align: right;
            font-size: 20px;
            color: lightgrey;
        }
    </style>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-cente">
                    <div id="fh5co-project">
                        <div class="container-fluid proj-bottom">
                            <div id="fh5co-contact">
                                <div class="container">
                                    @if (session('alert'))
                                        <div class="alert alert-default" style="width: 50%; margin: auto">
                                            <p style="color: darkorange; font-family: Cambria; font-size: 35px; text-align: center; font-weight: bold">{{ session('alert') }}</p>
                                        </div>
                                    @endif
                                    <div class="row" style="background-color: white; opacity: 0.7; border: 2px solid lightgrey; height: 365px">
                                        <div class="col-md-10 col-md-offset-1 animate-box"><br>
                                            <h3 style="color: darkorange; font-weight: bold; text-align: center">مرحباً بك في قسم الإدارة ، الرجاء إدخال البريد الإلكتروني وكلمة السر</h3><br>
                                            <form method="POST" action="{{ route('admin.login') }}">
                                                @csrf
                                                <div class="row form-group">
                                                    <div class="col-md-12">
                                                        <input type="email" id="right_placeholder" name="email" class="form-control" style="font-size: 20px; height: 50px; background-color: white; opacity: 0.9; border-radius: 15px; border: 2px solid" placeholder="البريد الإلكتروني" required>
                                                        @error('email')
                                                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                                        @enderror
                                                    </div>
                                                </div>
                        
                                                <div class="row form-group">
                                                    <div class="col-md-12">
                                                        <input type="password" id="right_placeholder" name="password" class="form-control" style="font-size: 20px; height: 50px; background-color: white; opacity: 0.9; border-radius: 15px; border: 2px solid" placeholder="كلمة المرور" required>
                                                        @error('password')
                                                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                                        @enderror
                                                    </div>
                                                </div>
                        
                                                <div class="form-group">
                                                    <div class="col-md-4 col-md-offset-4">
                                                        <input type="submit" value="دخول" class="btn btn-lg pull-right" style="background-color: orange; color: white; border-radius: 50px; width: 250px">
                                                    </div>
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
    </body>
</html>