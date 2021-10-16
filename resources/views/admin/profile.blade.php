@extends('layouts.admin')

@section('content')
    <div class="row card" style="opacity: 0.7; margin-top: 5%; border: 2px solid lightgrey; width: 95%; margin-left: 2.5%; height: auto">
        <div class="col-md-10 col-md-offset-1 animate-box" style="margin-top: 3%">
            @if (session('alert'))
                <div class="alert alert-default" style="width: 50%; margin: auto">
                    <p style="color: darkorange; font-family: Cambria; font-size: 22px; text-align: center; font-weight: bold">{{ session('alert') }}</p>
                </div>
            @endif
            <h2 style="color: darkorange; font-weight: bold; text-align: center">تعديل بياناتك الشخصية</h2>
            <form action="/admin/profile" method="post">
                @csrf
                {{method_field('put')}}
                <div class="row form-group">
                    <div class="col-md-12">
                        <input type="text" id="right_placeholder" style="text-align: right; font-size: 20px; height: 50px; background-color: white; opacity: 0.9; border-radius: 15px; border: 2px solid" class="form-control" name="name" value="{{$admin->name}}" required>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-12">
                        <input type="email" id="right_placeholder" style="font-size: 20px; height: 50px; background-color: white; opacity: 0.9; border-radius: 15px; border: 2px solid" class="form-control" name="email" value="{{$admin->email}}" required>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-12">
                        <input type="password" id="right_placeholder" style="font-size: 20px; height: 50px; background-color: white; opacity: 0.9; border-radius: 15px; border: 2px solid" class="form-control" name="password" placeholder="أكتب كلمة السر الجديدة هنا" required>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-12">
                        <input type="password" id="right_placeholder" style="font-size: 20px; height: 50px; background-color: white; opacity: 0.9; border-radius: 15px; border: 2px solid" class="form-control" name="password_confirmation" placeholder="أعد كتابة كلمة السر" required>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-4 col-md-offset-4">
                        <input type="submit" value="تعديل" class="btn btn-block"
                        style="background-color: darkorange; color: white; text-align: center; font-size: 20px; border-radius: 15px;">
                    </div>
                </div>
            </form>
        </div>
    </div><br><br><br><br><br>
@endsection