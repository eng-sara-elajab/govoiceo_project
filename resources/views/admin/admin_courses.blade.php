@extends('layouts.admin')

<style>
    img {height: 70px;
        width: 50%";
        margin-right: 5px;
        margin-bottom: 5px;
        margin-left: 5px;
        margin-top: 5px;
    }

    iframe {height: 100px;
        width: 70%";
        margin-right: 5px;
        margin-bottom: 5px;
        margin-left: 5px;
        margin-top: 5px;
    }

    source {height: 100px;
        width: 50%";
        margin-right: 5px;
        margin-bottom: 5px;
        margin-left: 5px;
        margin-top: 5px;
    }
</style>

@section('content')
    <div class="container row" style="background-color: white; opacity: 0.8; margin-top: 7%">
        <div class="col-md-12">
            @if (session('alert'))
                <div class="alert alert-default" style="width: 50%; margin: auto">
                    <p style="color: darkorange; font-family: Cambria; font-size: 22px; text-align: center; font-weight: bold">{{ session('alert') }}</p>
                </div>
            @endif
            <h2 style="color: darkorange; font-weight: bold; text-align: center">تفاصيل الكورسات</h2>
            @if(count($courses) > 0)
                <table class="table table-bordered table-responsive" style="margin-top: 15px">
                    <tr class="row" style="font-size: 20px; font-weight: bold">
                        <th style="border:1px solid black;border-collapse:collapse; text-align: center" class="col-md-1">تعديل / حذف - استرجاع</th>
                        <th style="border:1px solid black;border-collapse:collapse; text-align: center" class="col-md-1">رابط الكورس كامل</th>
                        <th style="border:1px solid black;border-collapse:collapse; text-align: center" class="col-md-2">الفيديو التعريفي</th>
                        <th style="border:1px solid black;border-collapse:collapse; text-align: center" class="col-md-2">الصورة</th>
                        <th style="border:1px solid black;border-collapse:collapse; text-align: center" class="col-md-4">المقدمة التعريفية</th>
                        <th style="border:1px solid black;border-collapse:collapse; text-align: center" class="col-md-1">إسم المدرب</th>
                        <th style="border:1px solid black;border-collapse:collapse; text-align: center" class="col-md-1">إسم الكورس</th>
                    </tr>
                    @foreach($courses as $course)
                        <tr class="row" style="text-align: center" title="السعر : {{$course->price}}$&nbsp;&nbsp;عدد الساعات : {{$course->total_hours}}ساعة">
                            <td class="col-md-1">
                                <a href="/admin/edit_course/{{$course->id}}" title="إضغط لتعديل بيانات الكورس"><i class="fa fa-edit" style="color: orange"></i></a>&nbsp;&nbsp;&nbsp;
                                
                                @if($course->deleted_at == null)
                                    <a href="/admin/course_soft_delete/{{$course->id}}" onclick="myFunction()" title="إضغط لحذف الكورس"><i class="fa fa-trash" style="color: orange"></i></a>
                                @else
                                    <a href="/admin/course_restore/{{$course->id}}" onclick="myFunction1()" title="إضغط لاسترجاع الكورس"><i class="fas fa-trash-restore" style="color: orange"></i></a>
                                @endif
                            </td>
                            <td class="col-md-1"><a href="{{$course->course_link}}" class="popup-vimeo">إضغط لعرض الكورس كاملاً</a></td>
                            <td class="col-md-2">
                                <video width="150px" controls>
                                    <source src="{{asset("/videos/courses/".$course->video)}}" class="popup-vimeo" type="video/mp4">
                                </video>
                            </td>
                            <td class="col-md-2"><img src="{{asset("/images/courses/".$course->image)}}"></td>
                            <td class="col-md-4">{!! $course->introduction !!}</td>
                            <td class="col-md-1">{{$course->instructor}}</td>
                            <td class="col-md-1">{{$course->name}}</td>
                        </tr>
                    @endforeach
                </table>
            @else
                <h3 style="color: darkgrey; text-align: center">لا توجد كورسات</h2>
            @endif
            {!! $courses->links() !!}
        </div>
    </div>
@endsection