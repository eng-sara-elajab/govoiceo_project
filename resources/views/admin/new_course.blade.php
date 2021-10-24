<html>
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
		<!--<meta name="MSSmartTagsPreventParsing" content="true" />-->
		
		<title>{{$website_data->name}}</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="name" content="{{$website_data->name}}" />
        <meta name="description" content="{{$website_data->description}}"/>
        <meta name="address" content="{{$website_data->address}}"/>
        <meta name="keywords" content="{{$website_data->keywords}}"/>

		<style type="text/css" media="all">
			@import "{{secure_asset('css/info.css')}}";
			@import "{{secure_asset('css/main.css')}}";
			@import "{{secure_asset('css/widgEditor.css')}}";
		</style>

		<script type="text/javascript" src="{{secure_asset('scripts/widgEditor.js')}}"></script>
	</head>
	<body>
        @extends('layouts.admin')
        
        @section('content')
            <form action="/admin/new_course" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row form-group">
                    <div class="col-md-12">
                        <input type="text" id="right_placeholder" class="form-control" placeholder="إسم الكورس" style="text-align: right; font-size: 20px; height: 50px; background-color: white; opacity: 0.9; border-radius: 15px; border: 2px solid" name="name" value="" required>
                        @error('name')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-12">
                        <input type="text" id="right_placeholder" placeholder="إسم المدرب" class="form-control" style="text-align: right; font-size: 20px; height: 50px; background-color: white; opacity: 0.9; border-radius: 15px; border: 2px solid" name="instructor" value="" required>
                        @error('instructor')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-12">
                        <input type="text" id="right_placeholder" placeholder="عدد الساعات" class="form-control" style="text-align: right; font-size: 20px; height: 50px; background-color: white; opacity: 0.9; border-radius: 15px; border: 2px solid" name="total_hours" value="" required>
                        @error('total_hours')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>
                </div>
       <!--         <div class="row form-group">-->
       <!--             <div class="col-md-12">-->
       <!--                 <div style="background-color: white; opacity: 0.9">-->
       <!--         			<label class="pull-right" style="font-size: 18px; font-weight:bold; color: darkgrey; opacity: 0.5; margin-right: 10px">-->
       <!--         				اشرح تفاصيل الكورس هنا-->
       <!--         			</label>-->
       <!--         			<textarea id="noise" name="introduction" class="widgEditor" style="opacity: 0.9; border-radius: 15px; border: 2px solid" required></textarea>-->
       <!--                 </div>-->
       <!-- 			</div>-->
    			<!--</div>-->
                <div class="row form-group">
                    <div class="col-md-12">
                        <div id="sample" style="background-color: white; opacity: 0.9; width: 100%">
                            <script src="{{asset('js/nicEdit.js')}}" type="text/javascript"></script>
                            <script type="text/javascript">
                            bkLib.onDomLoaded(function() {
                            	new nicEditor({iconsPath : '{{asset("images/nicEditorIcons.gif")}}'}).panelInstance('area3');
                            });
                            </script>
                            <textarea id="area3" name="introduction"></textarea>
                        </div>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-12">
                                <lable class="pull-right" style="font-size: 18px; font-weight:bold; color: white; opacity: 0.5; margin-right: 10px">الصورة التعريفية للكورس</lable>
                            </div>
                            <div class="col-md-12">
                                <input type="file" id="right_placeholder" title="الصورة التعريفية للكورس" class="form-control" style="height: 50px; background-color: white; opacity: 0.9; border-radius: 15px; border: 2px solid" name="image" value="" required>
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
                                <input type="file" id="right_placeholder" title="الفيديو التعريفي" class="form-control" style="height: 50px; background-color: white; opacity: 0.9; border-radius: 15px; border: 2px solid" name="video" value="" required>
                                @error('video')
                                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div><br>
                <div class="row form-group">
                    <div class="col-md-12">
                        <input type="text" id="right_placeholder" placeholder="رابط الكورس" class="form-control" style="font-size: 20px; height: 50px; background-color: white; opacity: 0.9; border-radius: 15px; border: 2px solid" name="course_link" value="" required>
                        @error('course_link')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-12">
                        <input type="text" id="right_placeholder" class="form-control" placeholder="سعر الكورس بالريال" title="'free' إذا كان مجاني اكتب" style="font-size: 20px; height: 50px; background-color: white; opacity: 0.9; border-radius: 15px; border: 2px solid" name="price" value="" required>
                        @error('price')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-4 col-md-offset-4">
                        <input type="submit" value="إنشاء" class="btn btn-block" style="background-color: darkorange; color: white; text-align: center; font-size: 25px; font-weight: blod; border-radius: 15px;">
                    </div>
                </div>
        	</form>
        @endsection
    </body>
</html>