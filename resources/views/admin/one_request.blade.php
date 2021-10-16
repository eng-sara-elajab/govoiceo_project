@extends('layouts.admin')

@section('content')
    <div class="container row" style="background-color: white; opacity: 0.8; margin-top: 7%; height: auto">
        <div class="fh5co-explore">
            <div class="row animate-box">
                <div class="col-md-6">
                    <img class="img-responsive" src="/images/invoices/{{$service->invoice_image}}" style="width: 95%; height: 400px; margin: 20px; border: solid 2px lightgrey" alt="work">
                </div><br><br>
                <div class="col-md-6">
                    <h3 style="color: darkgrey">:يطلب منك المستخدم خدمة تعليق صوتي بالمواصفات الآتية</h3>
                    <div class="row" style="border: solid 2px lightgrey; width: 90%; height: auto">
                        <div class="col-md-12">
                            <h3 style="color: darkgrey" class="pull-right">نوع النص :
                                <span style="color: orange; font-size: 25px">{{$service->text_type}}</span>
                            </h3>
                        </div>
                        <div class="col-md-12">
                            <h3 style="color: darkgrey" class="pull-right">نوع الأداء :
                                <span style="color: orange; font-size: 25px">{{$service->performance_type}}</span>
                            </h3>
                        </div>
                        <div class="col-md-12">
                            <h3 style="color: darkgrey" class="pull-right">تحميل النص :
                                <span style="color: orange; font-size: 25px">{{$service->inserted_text}}</span>
                            </h3>
                        </div>
                        <div class="col-md-12">
                            <h3 style="color: darkgrey" class="pull-right">المونتاج :
                                <span style="color: orange; font-size: 25px">{{$service->producing}}</span>
                            </h3>
                        </div>
                        <div class="col-md-12">
                            <h3 style="color: darkgrey" class="pull-right">نوع الموسيقى :
                                <span style="color: orange; font-size: 25px">{{$service->music_type}}</span>
                            </h3>
                        </div>
                    </div>
                    @if($service->status == 'unapproved')
                        <div class="row">
                            <div class="col-md-4 col-md-offset-2"><br>
                                <a href="/admin/reject_request/{{$service->id}}" class="btn btn-danger">رفض </a>
                            </div>
                            <div class="col-md-6"><br>
                            <a href="/admin/approve_request/{{$service->id}}" class="btn btn-info">الموافقة على الطلب</a>
                            </div>
                        </div><br>
                    @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection