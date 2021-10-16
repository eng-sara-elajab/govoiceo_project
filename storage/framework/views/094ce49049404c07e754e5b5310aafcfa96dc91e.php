

<style>
    table, th, td {
      border: 1px solid black;
      border-collapse: collapse;
    }
</style>

<?php $__env->startSection('content'); ?>
    <h3 style="color: darkorange; font-weight: bold; text-align: center">: بيانات السداد المعتمدة الآن هي</h3>
    <div class="row">
        <table class="col-md-6 col-md-offset-3" style="background-color: white; opacity: 0.8">
            <tr>
                <td style="text-align: center"><?php echo e($service_requirements->bank_name); ?></td>
                <th style="text-align: center">اسم البنك</th>
            </tr>
            <tr>
                <td style="text-align: center"><?php echo e($service_requirements->customer_name); ?></td>
                <th style="text-align: center">اسم صاحب الحساب</th>
            </tr>
            <tr>
                <td style="text-align: center"><?php echo e($service_requirements->bank_account); ?></td>
                <th style="text-align: center">رقم الحساب</th>
            </tr>
            <tr>
                <td style="text-align: center"><?php echo e($service_requirements->price == 0 ? 'غير محدد' : $service_requirements->price); ?></td>
                <th style="text-align: center">السعر</th>
            </tr>
        </table>
    </div>
    <div class="row card" style="opacity: 0.7; margin-top: 3%; border: 2px solid lightgrey; width: 95%; margin-left: 2.5%; height: auto">
        <div class="col-md-10 col-md-offset-1 animate-box" style="margin-top: 3%">
            <?php if(session('alert')): ?>
                <div class="alert alert-default" style="width: 50%; margin: auto">
                    <p style="color: darkorange; font-family: Cambria; font-size: 22px; text-align: center; font-weight: bold"><?php echo e(session('alert')); ?></p>
                </div>
            <?php endif; ?>
            <h2 style="color: darkorange; font-weight: bold; text-align: center">تعديل بيانات السداد</h2>
            <form action="/admin/submit_request_service_requirements" method="post">
                <?php echo csrf_field(); ?>
                <?php echo e(method_field('put')); ?>

                <div class="row form-group">
                    <div class="col-md-12">
                        <input type="text" id="right_placeholder" style="text-align: right; font-size: 20px; height: 50px; background-color: white; opacity: 0.9; border-radius: 15px; border: 2px solid" class="form-control" name="bank_name" placeholder="اسم البنك" required>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-12">
                        <input type="text" id="right_placeholder" style="text-align: right; font-size: 20px; height: 50px; background-color: white; opacity: 0.9; border-radius: 15px; border: 2px solid" class="form-control" name="customer_name" placeholder="اسم صاحب الحساب" required>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-12">
                        <input type="text" id="right_placeholder" style="font-size: 20px; height: 50px; background-color: white; opacity: 0.9; border-radius: 15px; border: 2px solid" class="form-control" name="bank_account" placeholder="رقم الحساب" required>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-12">
                        <input type="number" id="right_placeholder" style="font-size: 20px; height: 50px; background-color: white; opacity: 0.9; border-radius: 15px; border: 2px solid" class="form-control" name="price" placeholder="السعر بالريال" required>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-4 col-md-offset-4">
                        <input type="submit" value="تحديث" class="btn btn-block"
                        style="background-color: darkorange; color: white; text-align: center; font-size: 20px; border-radius: 15px;">
                    </div>
                </div>
            </form>
        </div>
        <div class="row">
            <div class="col-md-4 col-md-offset-7">
                <a href="/admin/reset_service_requirements" class="btn btn-default pull-right" style="background-color: white; color: darkorange; text-align: center; font-size: 18px; border-radius: 15px;">حذف بيانات الحساب</a><br><br>
            </div>
        </div>
    </div><br><br><br><br><br>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u229186696/domains/govoiceo.com/blog/resources/views/admin/request_service_requirements.blade.php ENDPATH**/ ?>