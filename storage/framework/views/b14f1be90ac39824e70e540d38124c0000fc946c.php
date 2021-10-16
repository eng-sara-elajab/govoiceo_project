

<?php $__env->startSection('content'); ?>
    <div class="card animate-box" style="opacity: 0.7; margin-top: 5%; height: 100%">
        <?php if(session('alert')): ?>
            <div class="alert alert-default" style="width: 50%; margin: auto">
                <p style="color: orange; font-family: Cambria; font-size: large; text-align: center; font-weight: bold"><?php echo e(session('alert')); ?></p>
            </div>
        <?php endif; ?><br>
        <p style="text-align: center; font-size: 30px; color: orange; font-weight: bold">تعديل بيانات الموقع</p>
        <form action="/admin/update_website_data" method="post" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <?php echo e(method_field('put')); ?>

            <div class="row form-group">
                <div class="col-md-8 col-md-offset-2">
                    <input type="text" id="right_placeholder" class="form-control" placeholder="إسم الموقع" style="text-align: right; font-size: 20px; height: 50px; background-color: white; opacity: 0.9; border-radius: 15px; border: 2px solid" name="name" value="<?php echo e($website_data->name); ?>" required>
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
                <div class="col-md-8 col-md-offset-2">
                    <input type="email" id="right_placeholder" placeholder="البريد الإلكتروني" class="form-control" style="font-size: 20px; height: 50px; background-color: white; opacity: 0.9; border-radius: 15px; border: 2px solid" name="email" value="<?php echo e($website_data->email); ?>" required>
                    <?php $__errorArgs = ['email'];
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
                <div class="col-md-8 col-md-offset-2">
                    <input type="phone" id="right_placeholder" placeholder="رقم الإتصال + واتساب" class="form-control" style="font-size: 20px; height: 50px; background-color: white; opacity: 0.9; border-radius: 15px; border: 2px solid" name="phone" value="<?php echo e($website_data->phone); ?>" required>
                    <?php $__errorArgs = ['phone'];
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
                <div class="col-md-8 col-md-offset-2">
                    <textarea id="right_placeholder" class="form-control" placeholder="العنوان" style="text-align: right; font-size: 20px; height: 100px; background-color: white; opacity: 0.9; border-radius: 15px; border: 2px solid" name="address" required><?php echo e($website_data->address); ?></textarea>
                    <?php $__errorArgs = ['address'];
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
                <div class="col-md-8 col-md-offset-2">
                    <textarea id="right_placeholder" class="form-control" placeholder="وصف الموقع" style="text-align: right; font-size: 20px; height: 100px; background-color: white; opacity: 0.9; border-radius: 15px; border: 2px solid" name="description" required><?php echo e($website_data->description); ?></textarea>
                    <?php $__errorArgs = ['description'];
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
                <div class="col-md-8 col-md-offset-2">
                    <img src="/images/logos/<?php echo e($website_data->logo); ?>" style="width: 100%; height: 300px"><br>
                    <input type="file" id="right_placeholder" title="صورة الشعار" class="form-control" style="height: 50px; background-color: white; opacity: 0.9; border-radius: 15px; border: 2px solid" name="logo" value="" required>
                    <?php $__errorArgs = ['logo'];
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
                <div class="col-md-4 col-md-offset-2">
                    <input type="text" id="right_placeholder" class="form-control" placeholder="رابط صفحة تويتر" style="font-size: 20px; height: 50px; background-color: white; opacity: 0.9; border-radius: 15px; border: 2px solid" name="twitter_link" value="<?php echo e($website_data->twitter_link); ?>" required>
                    <?php $__errorArgs = ['twitter_link'];
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
                <div class="col-md-4">
                    <input type="text" id="right_placeholder" class="form-control" placeholder="رابط صفحة فيسبوك" style="font-size: 20px; height: 50px; background-color: white; opacity: 0.9; border-radius: 15px; border: 2px solid" name="facebook_link" value="<?php echo e($website_data->facebook_link); ?>" required>
                    <?php $__errorArgs = ['facebook_link'];
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
                <div class="col-md-4 col-md-offset-2">
                    <input type="text" id="right_placeholder" placeholder="رابط الفيديو التعريفي للموقع" class="form-control" style="font-size: 20px; height: 50px; background-color: white; opacity: 0.9; border-radius: 15px; border: 2px solid" name="website_video_link" value="<?php echo e($website_data->website_video_link); ?>" required>
                    <?php $__errorArgs = ['website_video_link'];
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
                <div class="col-md-4">
                    <input type="text" id="right_placeholder" class="form-control" placeholder="رابط صفحة لنكدان" style="font-size: 20px; height: 50px; background-color: white; opacity: 0.9; border-radius: 15px; border: 2px solid" name="linkedin_link" value="<?php echo e($website_data->linkedin_link); ?>" required>
                    <?php $__errorArgs = ['linkedin_link'];
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
                <div class="col-md-8 col-md-offset-2">
                    <textarea id="right_placeholder" class="form-control" placeholder="عن الموقع والجهة المؤسسة له" style="text-align: right; font-size: 20px; height: 100px; background-color: white; opacity: 0.9; border-radius: 15px; border: 2px solid" name="about_text"><?php echo e($website_data->about_text); ?></textarea>
                    <?php $__errorArgs = ['about_text'];
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
                <div class="col-md-8 col-md-offset-2">
                    <textarea id="right_placeholder" class="form-control" placeholder="الكلمات الدلالية" style="text-align: right; font-size: 20px; height: 70px; background-color: white; opacity: 0.9; border-radius: 15px; border: 2px solid" name="keywords"><?php echo e($website_data->keywords); ?></textarea>
                    <?php $__errorArgs = ['keywords'];
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
                    <input type="submit" value="حفظ" class="btn btn-block" style="background-color: darkorange; color: white; text-align: center; font-size: 25px; font-weight: blod; border-radius: 15px;"><br>
                </div>
            </div>
    	</form>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u229186696/domains/govoiceo.com/blog/resources/views/admin/website_data.blade.php ENDPATH**/ ?>