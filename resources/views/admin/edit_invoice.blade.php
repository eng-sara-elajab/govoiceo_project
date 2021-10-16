@extends('layouts.admin')

@section('content')
    <div class="card animate-box" style="opacity: 0.7; margin-top: 5%; height: auto">
        <p style="text-align: center; font-size: 30px; color: darkorange; font-weight: bold">تعديل الفاتورة</p>
        <form action="/admin/update_invoice/{{$invoice->id}}" method="post" style="width: 80%; margin: auto" enctype="multipart/form-data">
            @csrf
            {{method_field('put')}}
            <div class="col-md-12">
                <lable class="pull-right" style="font-size: 25px; font-weight: bold; color: whitesmoke; opacity: 0.9; margin-right: 20px">: تعديل فاتورة السداد</lable><br><br>
                <img src="/images/invoices/{{$invoice->subscription_invoice}}" style="height: 300px; width: 100%"><br><br>
                <input type="file" id="right_placeholder" class="form-control" style="height: 50px; background-color: white; opacity: 0.9; border-radius: 15px; border: 2px solid" name="subscription_invoice" placeholder="صورة الفاتورة"><br>
            </div>
            <div class="row form-group">
                <div class="col-md-4 col-md-offset-4">
                    <input type="submit" value="تحديث" class="btn btn-block" style="background-color: darkorange; color: white; text-align: center; font-size: 25px; font-weight: bold; border-radius: 15px;">
                </div>
            </div>
        </form>
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <a href="/admin/courses_invoices" class="btn btn-default btn-lg pull-right" style="color: darkorange; font-size: 20px; margin-bottom: 10px; font-weight: bold">إلغاء</a><br>
            </div>
        </div>
    </div>
@endsection