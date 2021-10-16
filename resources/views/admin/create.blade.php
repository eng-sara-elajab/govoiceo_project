@extends('layouts.admin')

@section('content')
    <div class="card animate-box" style="opacity: 0.7; margin-top: 5%; height: 100%">
        @if (session('alert'))
            <div class="alert alert-default" style="width: 50%; margin: auto">
                <u><p style="color: darkorange; font-family: Cambria; font-size: large; text-align: center; font-weight: bold">{{ session('alert') }}</p></u>
            </div>
        @endif<br>
        <p style="text-align: center; font-size: 30px; color: darkorange; font-weight: bold">بيانات الآدمن الجديد</p>
        <form action="{{ route('store_admin') }}" method="post" style="width: 80%; margin: auto">
            @csrf
            <div class="row form-group">
                <div class="col-md-12">
                    <input type="text" id="right_placeholder" class="form-control" placeholder="إسم الآدمن" style="text-align: right; font-size: 20px; height: 50px; background-color: white; opacity: 0.9; border-radius: 15px; border: 2px solid" name="name" value="">
                    @error('name')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
            </div>
            
            <div class="row form-group">
                <div class="col-md-12">
                    <input type="email" id="right_placeholder" placeholder="البريد الإلكتروني" class="form-control" style="font-size: 20px; height: 50px; background-color: white; opacity: 0.9; border-radius: 15px; border: 2px solid" name="email" value="">
                    @error('email')
                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
            </div>
            
            <div class="row form-group">
                <div class="col-md-12">
                    <input type="password" id="right_placeholder" class="form-control" style="font-size: 20px; height: 50px; background-color: white; opacity: 0.9; border-radius: 15px; border: 2px solid" name="password" placeholder="كلمة السر " required>
                    @error('password')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
            </div>
            
            <div class="row form-group">
                <div class="col-md-12">
                    <input type="password" id="right_placeholder" class="form-control"style="font-size: 20px; height: 50px; background-color: white; opacity: 0.9; border-radius: 15px; border: 2px solid" name="password_confirmation" placeholder="أعد كتابة كلمة السر" required>
                    @error('password')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
            </div>
            <div class="row form-group">
                <div class="col-md-4 col-md-offset-4">
                    <input type="submit" value="إضافة" class="btn btn-block" style="background-color: darkorange; color: white; text-align: center; font-size: 25px; font-weight: blod; border-radius: 15px;">
                </div><br><br><br>
            </div>
        </form>
    </div>
@endsection