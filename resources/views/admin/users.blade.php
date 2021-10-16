@extends('layouts.admin')

@section('content')
    <div class="container row" style="background-color: white; opacity: 0.6; margin-top: 7%">
        <div class="col-md-12">
            @if (session('alert'))
                <div class="alert alert-default" style="width: 50%; margin: auto">
                    <p style="color: darkorange; font-family: Cambria; font-size: 22px; text-align: center; font-weight: bold">{{ session('alert') }}</p>
                </div>
            @endif<br>
            <h2 style="color: darkorange; font-weight: bold; text-align: center">بيانات المستخدمين</h2>
            <table class="table table-bordered table-responsive" style="margin-top: 15px">
                <tr class="row" style="font-size: 20px; font-weight: bold">
                    <!--<th style="border:1px solid black;border-collapse:collapse; text-align: center" class="col-md-1">إسترجاع - حذف</th>-->
                    <th style="border:1px solid black;border-collapse:collapse; text-align: center" class="col-md-2">حساب تلغرام</th>
                    <th style="border:1px solid black;border-collapse:collapse; text-align: center" class="col-md-2">رقم الواتساب</th>
                    <th style="border:1px solid black;border-collapse:collapse; text-align: center" class="col-md-2">رقم الإتصال</th>
                    <th style="border:1px solid black;border-collapse:collapse; text-align: center" class="col-md-3">البريد الإلكتروني</th>
                    <th style="border:1px solid black;border-collapse:collapse; text-align: center" class="col-md-2">إسم المستخدم</th>
                    <th style="border:1px solid black;border-collapse:collapse; text-align: center" class="col-md-1">#</th>
                </tr>
                @if(count($users) > 0)
                    @foreach($users as $user)
                        <tr class="row" style="text-align: center">
                            <!--<td class="col-md-1">-->
                            <!--    @if($user->deleted_at == null)-->
                            <!--        <a href="/admin/soft_delete/{{$user->id}}" onclick="myFunction()" title="إضغط لحذف الآدمن"><i class="fa fa-trash" style="color: orange"></i></a>-->
                            <!--    @else-->
                            <!--        <a href="/admin/restore/{{$user->id}}" onclick="myFunction1()" title="إضغط لاسترجاع الآدمن"><i class="fas fa-trash-restore" style="color: orange"></i></a>-->
                            <!--    @endif-->
                            <!--</td>-->
                            <td class="col-md-2">{{$user->telegram}}</td>
                            <td class="col-md-2">{{$user->whatsapp}}</td>
                            <td class="col-md-2">{{$user->phone}}</td>
                            <td class="col-md-3">{{$user->email}}</td>
                            <td class="col-md-2">{{$user->name}}</td>
                            <td class="col-md-1">{{$user->id}}</td>
                        </tr>
                    @endforeach
                @else
                    <h3 style="color: darkgrey; text-align: center">لا يوجد مستخدمين</h3>
                @endif
            </table>
            {!! $users->links() !!}
        </div>
    </div><br><br><br><br><br>
@endsection