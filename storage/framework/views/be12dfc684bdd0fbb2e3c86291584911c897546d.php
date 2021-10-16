<html>
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
		<!--<meta name="MSSmartTagsPreventParsing" content="true" />-->
		
		<title><?php echo e($website_data->name); ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="name" content="<?php echo e($website_data->name); ?>" />
        <meta name="description" content="<?php echo e($website_data->description); ?>"/>
        <meta name="address" content="<?php echo e($website_data->address); ?>"/>
        <meta name="keywords" content="<?php echo e($website_data->keywords); ?>"/>

		<style type="text/css" media="all">
			@import  "<?php echo e(asset('css/info.css')); ?>";
			@import  "<?php echo e(asset('css/main.css')); ?>";
			@import  "<?php echo e(asset('css/widgEditor.css')); ?>";
		</style>

		<script type="text/javascript" src="<?php echo e(asset('scripts/widgEditor.js')); ?>"></script>
	</head>
	<body>
        
        
        <?php $__env->startSection('content'); ?>
            <form action="/admin/new_course" method="post" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <div class="row form-group">
                    <div class="col-md-12">
                        <input type="text" id="right_placeholder" class="form-control" placeholder="إسم الكورس" style="text-align: right; font-size: 20px; height: 50px; background-color: white; opacity: 0.9; border-radius: 15px; border: 2px solid" name="name" value="" required>
                        <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="invalid-feedback" role="alert"><strong><?php echo e($message); ?></strong></span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-12">
                        <input type="text" id="right_placeholder" placeholder="إسم المدرب" class="form-control" style="text-align: right; font-size: 20px; height: 50px; background-color: white; opacity: 0.9; border-radius: 15px; border: 2px solid" name="instructor" value="" required>
                        <?php $__errorArgs = ['instructor'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="invalid-feedback" role="alert"><strong><?php echo e($message); ?></strong></span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-12">
                        <input type="text" id="right_placeholder" placeholder="عدد الساعات" class="form-control" style="text-align: right; font-size: 20px; height: 50px; background-color: white; opacity: 0.9; border-radius: 15px; border: 2px solid" name="total_hours" value="" required>
                        <?php $__errorArgs = ['total_hours'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="invalid-feedback" role="alert"><strong><?php echo e($message); ?></strong></span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
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
                            <script src="<?php echo e(asset('js/nicEdit.js')); ?>" type="text/javascript"></script>
                            <script type="text/javascript">
                            bkLib.onDomLoaded(function() {
                            	new nicEditor({iconsPath : '<?php echo e(asset("images/nicEditorIcons.gif")); ?>'}).panelInstance('area3');
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
                                <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert"><strong><?php echo e($message); ?></strong></span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
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
                                <?php $__errorArgs = ['video'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert"><strong><?php echo e($message); ?></strong></span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>
                    </div>
                </div><br>
                <div class="row form-group">
                    <div class="col-md-12">
                        <input type="text" id="right_placeholder" placeholder="رابط الكورس" class="form-control" style="font-size: 20px; height: 50px; background-color: white; opacity: 0.9; border-radius: 15px; border: 2px solid" name="course_link" value="" required>
                        <?php $__errorArgs = ['course_link'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="invalid-feedback" role="alert"><strong><?php echo e($message); ?></strong></span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-12">
                        <input type="text" id="right_placeholder" class="form-control" placeholder="سعر الكورس بالريال" title="'free' إذا كان مجاني اكتب" style="font-size: 20px; height: 50px; background-color: white; opacity: 0.9; border-radius: 15px; border: 2px solid" name="price" value="" required>
                        <?php $__errorArgs = ['price'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="invalid-feedback" role="alert"><strong><?php echo e($message); ?></strong></span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-4 col-md-offset-4">
                        <input type="submit" value="إنشاء" class="btn btn-block" style="background-color: darkorange; color: white; text-align: center; font-size: 25px; font-weight: blod; border-radius: 15px;">
                    </div>
                </div>
        	</form>
        <?php $__env->stopSection(); ?>
    </body>
</html>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u229186696/domains/govoiceo.com/blog/resources/views/admin/new_course.blade.php ENDPATH**/ ?>