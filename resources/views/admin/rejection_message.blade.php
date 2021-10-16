@extends('layouts.admin')

@section('content')
    <div class="animate-box" style="background-color: white; opacity: 0.7; margin-top: 5%; height: auto"><br><br>
        <h3 style="color: orange; text-align: center">اشرح سبب رفض الطلب من فضلك حتى يتم إرساله للمستخدم لإعادة الطلب مرة أخرى</h3>
        <form method="POST" action="/admin/reject_message/{{$service->id}}">
            @csrf
            {{method_field('PUT')}}
            <textarea style="text-align: right; height:300px; width:90%; margin-left:5%; margin-top: 1%; margin-buttom: 2%; border: solid 2px lightgrey" name="reject_message"></textarea>
            <input type="submit" class="btn btn-warning" style="width:200px; margin-left: 45%" value="أرسل"><br><br>
        </form>
    </div>
@endsection