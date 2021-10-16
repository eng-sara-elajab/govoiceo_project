@extends('layouts.admin')

@section('content')
    <div class="card animate-box" style="opacity: 0.7; margin-top: 5%; height: 100%">
        @if (session('alert'))
            <div class="alert alert-default" style="width: 50%; margin: auto">
                <p style="color: orange; font-family: Cambria; font-size: large; text-align: center; font-weight: bold">{{ session('alert') }}</p>
            </div>
        @endif<br>
        <p style="text-align: center; font-size: 30px; color: orange; font-weight: bold">تعديل بيانات الموقع</p>
        <form action="/admin/update_website_data" method="post" enctype="multipart/form-data">
            @csrf
            {{method_field('put')}}
            <div class="row form-group">
                <div class="col-md-8 col-md-offset-2">
                    <input type="text" id="right_placeholder" class="form-control" placeholder="إسم الموقع" style="text-align: right; font-size: 20px; height: 50px; background-color: white; opacity: 0.9; border-radius: 15px; border: 2px solid" name="name" value="{{$website_data->name}}" required>
                    @error('name')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
            </div>
            <div class="row form-group">
                <div class="col-md-8 col-md-offset-2">
                    <input type="email" id="right_placeholder" placeholder="البريد الإلكتروني" class="form-control" style="font-size: 20px; height: 50px; background-color: white; opacity: 0.9; border-radius: 15px; border: 2px solid" name="email" value="{{$website_data->email}}" required>
                    @error('email')
                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
            </div>
            <div class="row form-group">
                <div class="col-md-8 col-md-offset-2">
                    <input type="phone" id="right_placeholder" placeholder="رقم الإتصال + واتساب" class="form-control" style="font-size: 20px; height: 50px; background-color: white; opacity: 0.9; border-radius: 15px; border: 2px solid" name="phone" value="{{$website_data->phone}}" required>
                    @error('phone')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
            </div>
            <div class="row form-group">
                <div class="col-md-8 col-md-offset-2">
                    <textarea id="right_placeholder" class="form-control" placeholder="العنوان" style="text-align: right; font-size: 20px; height: 100px; background-color: white; opacity: 0.9; border-radius: 15px; border: 2px solid" name="address" required>{{$website_data->address}}</textarea>
                    @error('address')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
            </div>
            <div class="row form-group">
                <div class="col-md-8 col-md-offset-2">
                    <textarea id="right_placeholder" class="form-control" placeholder="وصف الموقع" style="text-align: right; font-size: 20px; height: 100px; background-color: white; opacity: 0.9; border-radius: 15px; border: 2px solid" name="description" required>{{$website_data->description}}</textarea>
                    @error('description')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
            </div>
            <div class="row form-group">
                <div class="col-md-8 col-md-offset-2">
                    <img src="/images/logos/{{$website_data->logo}}" style="width: 100%; height: 300px"><br>
                    <input type="file" id="right_placeholder" title="صورة الشعار" class="form-control" style="height: 50px; background-color: white; opacity: 0.9; border-radius: 15px; border: 2px solid" name="logo" value="" required>
                    @error('logo')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
            </div>
            <div class="row form-group">
                <div class="col-md-4 col-md-offset-2">
                    <input type="text" id="right_placeholder" class="form-control" placeholder="رابط صفحة تويتر" style="font-size: 20px; height: 50px; background-color: white; opacity: 0.9; border-radius: 15px; border: 2px solid" name="twitter_link" value="{{$website_data->twitter_link}}" required>
                    @error('twitter_link')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
                <div class="col-md-4">
                    <input type="text" id="right_placeholder" class="form-control" placeholder="رابط صفحة فيسبوك" style="font-size: 20px; height: 50px; background-color: white; opacity: 0.9; border-radius: 15px; border: 2px solid" name="facebook_link" value="{{$website_data->facebook_link}}" required>
                    @error('facebook_link')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
            </div>
            <div class="row form-group">
                <div class="col-md-4 col-md-offset-2">
                    <input type="text" id="right_placeholder" placeholder="رابط الفيديو التعريفي للموقع" class="form-control" style="font-size: 20px; height: 50px; background-color: white; opacity: 0.9; border-radius: 15px; border: 2px solid" name="website_video_link" value="{{$website_data->website_video_link}}" required>
                    @error('website_video_link')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
                <div class="col-md-4">
                    <input type="text" id="right_placeholder" class="form-control" placeholder="رابط صفحة لنكدان" style="font-size: 20px; height: 50px; background-color: white; opacity: 0.9; border-radius: 15px; border: 2px solid" name="linkedin_link" value="{{$website_data->linkedin_link}}" required>
                    @error('linkedin_link')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
            </div>
            <div class="row form-group">
                <div class="col-md-8 col-md-offset-2">
                    <textarea id="right_placeholder" class="form-control" placeholder="عن الموقع والجهة المؤسسة له" style="text-align: right; font-size: 20px; height: 100px; background-color: white; opacity: 0.9; border-radius: 15px; border: 2px solid" name="about_text">{{$website_data->about_text}}</textarea>
                    @error('about_text')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
            </div>
            <div class="row form-group">
                <div class="col-md-8 col-md-offset-2">
                    <textarea id="right_placeholder" class="form-control" placeholder="الكلمات الدلالية" style="text-align: right; font-size: 20px; height: 70px; background-color: white; opacity: 0.9; border-radius: 15px; border: 2px solid" name="keywords">{{$website_data->keywords}}</textarea>
                    @error('keywords')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
            </div>
            <div class="row form-group">
                <div class="col-md-4 col-md-offset-4">
                    <input type="submit" value="حفظ" class="btn btn-block" style="background-color: darkorange; color: white; text-align: center; font-size: 25px; font-weight: blod; border-radius: 15px;"><br>
                </div>
            </div>
    	</form>
    </div>
@endsection