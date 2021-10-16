

<?php $__env->startSection('content'); ?>
    <div class="card animate-box" style="opacity: 0.7; margin-top: 5%; height: 100%">
        <?php if(session('alert')): ?>
            <div class="alert alert-default" style="width: 50%; margin: auto">
                <u><p style="color: darkorange; font-family: Cambria; font-size: large; text-align: center; font-weight: bold"><?php echo e(session('alert')); ?></p></u>
            </div>
        <?php endif; ?><br>
        <p style="text-align: center; font-size: 30px; color: darkorange; font-weight: bold">بيانات الآدمن الجديد</p>
        <form action="<?php echo e(route('store_admin')); ?>" method="post" style="width: 80%; margin: auto">
            <?php echo csrf_field(); ?>
            <div class="row form-group">
                <div class="col-md-12">
                    <input type="text" id="right_placeholder" class="form-control" placeholder="إسم الآدمن" style="text-align: right; font-size: 20px; height: 50px; background-color: white; opacity: 0.9; border-radius: 15px; border: 2px solid" name="name" value="">
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
                    <input type="email" id="right_placeholder" placeholder="البريد الإلكتروني" class="form-control" style="font-size: 20px; height: 50px; background-color: white; opacity: 0.9; border-radius: 15px; border: 2px solid" name="email" value="">
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
                <div class="col-md-12">
                    <input type="password" id="right_placeholder" class="form-control" style="font-size: 20px; height: 50px; background-color: white; opacity: 0.9; border-radius: 15px; border: 2px solid" name="password" placeholder="كلمة السر " required>
                    <?php $__errorArgs = ['password'];
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
                    <input type="password" id="right_placeholder" class="form-control"style="font-size: 20px; height: 50px; background-color: white; opacity: 0.9; border-radius: 15px; border: 2px solid" name="password_confirmation" placeholder="أعد كتابة كلمة السر" required>
                    <?php $__errorArgs = ['password'];
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
                    <input type="submit" value="إضافة" class="btn btn-block" style="background-color: darkorange; color: white; text-align: center; font-size: 25px; font-weight: blod; border-radius: 15px;">
                </div><br><br><br>
            </div>
        </form>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u229186696/domains/govoiceo.com/blog/resources/views/admin/create.blade.php ENDPATH**/ ?>