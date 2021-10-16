<html>
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
		<meta name="author" content="The Man in Blue" />
		<meta name="robots" content="all" />
		<meta name="MSSmartTagsPreventParsing" content="true" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />

		<style type="text/css" media="all">
			@import "{{asset('css/info.css')}}";
			@import "{{asset('css/main.css')}}";
			@import "{{asset('css/widgEditor.css')}}";
		</style>

		<script type="text/javascript" src="{{asset('scripts/widgEditor.js')}}"></script>
	</head>
	<body>
        @extends('layouts.admin')
        
        @section('content')
            <form action="/admin/update_course/{{$course->id}}" method="post" enctype="multipart/form-data">
                @csrf
                {{method_field('put')}}
                <div class="row form-group">
                    <div class="col-md-12">
                        <input type="text" id="right_placeholder" class="form-control" placeholder="إسم الكورس" style="text-align: right; font-size: 20px; height: 50px; background-color: white; opacity: 0.9; border-radius: 15px; border: 2px solid" name="name" value="{{$course->name}}">
                        @error('name')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-12">
                        <input type="text" id="right_placeholder" placeholder="إسم المدرب" class="form-control" style="text-align: right; font-size: 20px; height: 50px; background-color: white; opacity: 0.9; border-radius: 15px; border: 2px solid" name="instructor" value="{{$course->instructor}}">
                        @error('instructor')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-12">
                        <input type="text" id="right_placeholder" placeholder="عدد الساعات" class="form-control" style="text-align: right; font-size: 20px; height: 50px; background-color: white; opacity: 0.9; border-radius: 15px; border: 2px solid" name="total_hours" value="{{$course->total_hours}}">
                        @error('total_hours')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>
                </div>
        		<fieldset>
        			<label class="pull-right" style="font-size: 18px; font-weight:bold; color: darkgrey; opacity: 0.5; margin-right: 10px">
        				اشرح تفاصيل الكورس هنا
        			</label>
        			<textarea id="noise" name="introduction" class="widgEditor" style="background-color: white; opacity: 0.9; border-radius: 15px; border: 2px solid"></textarea>
        		</fieldset>
                <div class="row form-group">
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-12">
                                <lable class="pull-right" style="font-size: 18px; font-weight:bold; color: white; opacity: 0.5; margin-right: 10px">الصورة التعريفية للكورس</lable>
                            </div>
                            <div class="col-md-12">
                                <input type="file" id="right_placeholder" title="الصورة التعريفية للكورس" class="form-control" style="height: 50px; background-color: white; opacity: 0.9; border-radius: 15px; border: 2px solid" name="image">
                                @error('image')
                                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-12">
                                <lable class="pull-right" style="font-size: 18px; font-weight:bold; color: white; opacity: 0.5; margin-right: 10px">الفيديو التعريفي</lable>
                            </div>
                            <div class="col-md-12">
                                <input type="file" id="right_placeholder" title="الفيديو التعريفي" class="form-control" style="height: 50px; background-color: white; opacity: 0.9; border-radius: 15px; border: 2px solid" name="video">
                                @error('video')
                                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div><br>
                <div class="row form-group">
                    <div class="col-md-12">
                        <input type="text" id="right_placeholder" placeholder="رابط الكورس" class="form-control" style="text-align: right; font-size: 20px; height: 50px; background-color: white; opacity: 0.9; border-radius: 15px; border: 2px solid" name="course_link" value="{{$course->course_link}}">
                        @error('course_link')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-12">
                        <input type="text" class="form-control" placeholder="سعر الكورس" style="text-align: right; font-size: 20px; height: 50px; background-color: white; opacity: 0.9; border-radius: 15px; border: 2px solid" name="price" value="{{$course->price}}">
                        @error('price')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-4 col-md-offset-4">
                        <input type="submit" value="تحديث" class="btn btn-block" style="background-color: darkorange; color: white; text-align: center; font-size: 25px; font-weight: blod; border-radius: 15px;">
                    </div>
                </div>
        	</form>
        @endsection
    </body>
</html>