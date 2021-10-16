@extends('layouts.admin')

@section('content')
    <div class="card animate-box" style="opacity: 0.7; margin-top: 5%; height: 80%"><br>
        <p style="text-align: center; font-size: 30px; color: darkorange; font-weight: bold">تحديث بيانات الآدمن</p>
        <form action="/admin/update_admin/{{$admin->id}}" method="post" style="width: 80%; margin: auto">
            @csrf
            {{method_field('put')}}
            <div class="row form-group">
                <div class="col-md-12">
                    <input type="text" id="right_placeholder" class="form-control" style="text-align: right; font-size: 20px; height: 50px; background-color: white; opacity: 0.9; border-radius: 15px; border: 2px solid" name="name" value="{{$admin->name}}">
                    @error('name')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
            </div>
            <div class="row form-group">
                <div class="col-md-12">
                    <input type="email" id="right_placeholder" class="form-control" style="text-align: right; font-size: 20px; height: 50px; background-color: white; opacity: 0.9; border-radius: 15px; border: 2px solid" name="email" value="{{$admin->email}}">
                    {{--{{$invalid_email}}--}}
                    {{--@if($invalid_email == 0)--}}
                        {{--@error('email')--}}
                            {{--<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>--}}
                        {{--@enderror--}}
                    {{--@else--}}
                    @error('email')
                        <span class="invalid-feedback" role="alert"><strong>Email exists. Try once again, please.</strong></span>
                    @enderror
                    {{--@endif--}}
                </div>
            </div>
            <div class="row form-group">
                <div class="col-md-12">
                    <input type="password" id="right_placeholder" style="text-align: right; font-size: 20px; height: 50px; background-color: white; opacity: 0.9; border-radius: 15px; border: 2px solid" class="form-control" name="password" placeholder="كلمة السر">
                    @error('password')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
            </div>
            <div class="row form-group">
                <div class="col-md-12">
                    <input type="password" id="right_placeholder" style="text-align: right; font-size: 20px; height: 50px; background-color: white; opacity: 0.9; border-radius: 15px; border: 2px solid" class="form-control" name="password_confirmation" placeholder="أعد كتابة كلمة السر">
                    @error('password')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
            </div>
            <div class="row form-group">
                <div class="col-md-4 col-md-offset-4">
                    <input type="submit" value="تحديث" class="btn btn-block" style="background-color: darkorange; color: white; text-align: center; font-size: 25px; font-weight: bold; border-radius: 15px;">
                </div>
            </div>
        </form>
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <a href="/admin/admins" class="btn btn-default btn-lg pull-right" style="color: darkorange; font-size: 20px; margin-bottom: 10px; font-weight: bold">إلغاء</a><br>
            </div>
        </div>
    </div>
@endsection