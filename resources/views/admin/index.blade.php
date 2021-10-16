@extends('layouts.admin')

@section('content')
    <div class="container row" style="background-color: white; opacity: 0.6; margin-top: 7%">
        <div class="col-md-12">
            @if (session('alert'))
                <div class="alert alert-default" style="width: 50%; margin: auto">
                    <p style="color: darkorange; font-family: Cambria; font-size: 22px; text-align: center; font-weight: bold">{{ session('alert') }}</p>
                </div>
            @endif<br>
            <h2 style="color: darkorange; font-weight: bold; text-align: center">بيانات كل الآدمن</h2>
            @if(Auth::guard('admin')->user()->email == 'admin@example.com')
                <table class="table table-bordered table-responsive" style="margin-top: 15px">
                    <tr class="row" style="font-size: 20px; font-weight: bold">
                        <th style="border:1px solid black;border-collapse:collapse; text-align: center" class="col-md-1">إسترجاع - حذف</th>
                        <th style="border:1px solid black;border-collapse:collapse; text-align: center" class="col-md-1">تعديل</th>
                        <th style="border:1px solid black;border-collapse:collapse; text-align: center" class="col-md-2">تاريخ الحذف</th>
                        <th style="border:1px solid black;border-collapse:collapse; text-align: center" class="col-md-2">تاريخ الإضافة</th>
                        <th style="border:1px solid black;border-collapse:collapse; text-align: center" class="col-md-3">البريد الإلكتروني</th>
                        <th style="border:1px solid black;border-collapse:collapse; text-align: center" class="col-md-2">إسم الآدمن</th>
                        <th style="border:1px solid black;border-collapse:collapse; text-align: center" class="col-md-1">#</th>
                    </tr>
                    @if(count($admins) > 0)
                        @foreach($admins as $admin)
                            <tr class="row" style="text-align: center">
                                <td class="col-md-1">
                                    @if($admin->deleted_at == null)
                                        <a href="/admin/soft_delete/{{$admin->id}}" onclick="myFunction()" title="إضغط لحذف الآدمن"><i class="fa fa-trash" style="color: orange"></i></a>
                                    @else
                                        <a href="/admin/restore/{{$admin->id}}" onclick="myFunction1()" title="إضغط لاسترجاع الآدمن"><i class="fas fa-trash-restore" style="color: orange"></i></a>
                                    @endif
                                </td>
                                <td class="col-md-1"><a href="/admin/edit_admin/{{$admin->id}}" title="إضغط لتعديل بيانات الآدمن"><i class="fa fa-edit" style="color: orange"></i></a></td>
                                <td class="col-md-2">{{$admin->deleted_at == null ? 'غير محذوف' : $admin->deleted_at}}</td>
                                <td class="col-md-2">{{$admin->created_at}}</td>
                                <td class="col-md-3">{{$admin->email}}</td>
                                <td class="col-md-2">{{$admin->name}}</td>
                                <td class="col-md-1">{{$admin->id}}</td>
                            </tr>
                        @endforeach
                    @endif
                </table>
            @else
                <table class="table table-bordered table-responsive" style="margin-top: 15px">
                    <tr class="row" style="font-size: 20px; font-weight: bold">
                        <th style="border:1px solid black;border-collapse:collapse; text-align: center" class="col-md-2">تاريخ الحذف</th>
                        <th style="border:1px solid black;border-collapse:collapse; text-align: center" class="col-md-2">تاريخ الإضافة</th>
                        <th style="border:1px solid black;border-collapse:collapse; text-align: center" class="col-md-4">البريد الإلكتروني</th>
                        <th style="border:1px solid black;border-collapse:collapse; text-align: center" class="col-md-3">إسم الآدمن</th>
                        <th style="border:1px solid black;border-collapse:collapse; text-align: center" class="col-md-1">#</th>
                    </tr>
                    @if(count($admins) > 0)
                        @foreach($admins as $admin)
                            <tr class="row" style="text-align: center">
                                <td class="col-md-2">{{$admin->deleted_at == null ? 'غير محذوف' : $admin->deleted_at}}</td>
                                <td class="col-md-2">{{$admin->created_at}}</td>
                                <td class="col-md-4">{{$admin->email}}</td>
                                <td class="col-md-3">{{$admin->name}}</td>
                                <td class="col-md-1">{{$admin->id}}</td>
                            </tr>
                        @endforeach
                    @else
                        <h3 style="color: darkgrey; text-align: center">لا يوجد آدمن</h3>
                    @endif
                </table>
                {!! $admins->links() !!}
            @endif
        </div>
    </div><br><br><br><br><br>
@endsection