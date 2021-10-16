@extends('layouts.admin')

@section('content')
    <div class="container row" style="background-color: white; opacity: 0.8; margin-top: 3%">
        <div class="col-md-10 col-md-offset-1">
            @if (session('alert'))
                <div class="alert alert-default" style="width: 50%; margin: auto">
                    <p style="color: darkorange; font-family: Cambria; font-size: 22px; text-align: center; font-weight: bold">{{ session('alert') }}</p>
                </div>
            @endif<br>
            <h2 style="color: darkorange; font-weight: bold; text-align: center">طلبات الخدمات الصوتية</h2>
            @if(count($services) > 0)
                @foreach($services as $service)
                    <div class="row requests_list" style="height: 40px;; border-radius: 15px" title="إضغط لعرض تفاصيل الطلب">
                        <div class="col-md-12">
                            <a class="btn btn-default text-light pull-left" href="/admin/delete_service/{{$service->id}}" title="حذف الطلب"><i class="fas fa-minus-circle" style="color: orange"></i>
                            </a>
                            <p class="pull-right" style="color: darkorange">
                                <span style="font-size: 20px; color: darkorange">&nbsp;&nbsp;...</span>
                                <a href="/admin/one_request/{{$service->id}}" class="pull-right" style="margin-top: 4px; font-size: 20px">
                                     لديك طلب خدمة بالمواصفات الآتية :
                                    <span style="font-size: 20px">{{$service->text_voice}}</span>
                                    <span style="font-size: 20px">{{$service->inserted_text}}</span>
                                    <span style="font-size: 20px">{{$service->producing}}</span>
                                    @if($service->read_status == 'unread')
                                        &nbsp;&nbsp;<i class="fa fa-eye" style="color: darkgrey"></i>
                                    @else
                                        <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                    @endif
                                </a>
                            </p>
                        </div>
                    </div><hr style="border: none; height: 1px; color: darkgrey; background-color: darkgrey">
                @endforeach
            @else
                <h3 style="color: darkgrey; text-align: center">لا توجد طلبات</h3>
            @endif
        </div>
    </div>
    {!! $services->links() !!}
@endsection