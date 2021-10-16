

<?php $__env->startSection('content'); ?>
    <div class="container row" style="background-color: white; opacity: 0.8; margin-top: 3%">
        <div class="col-md-10 col-md-offset-1">
            <?php if(session('alert')): ?>
                <div class="alert alert-default" style="width: 50%; margin: auto">
                    <p style="color: darkorange; font-family: Cambria; font-size: 22px; text-align: center; font-weight: bold"><?php echo e(session('alert')); ?></p>
                </div>
            <?php endif; ?><br>
            <h2 style="color: darkorange; font-weight: bold; text-align: center">طلبات الخدمات الصوتية</h2>
            <?php if(count($services) > 0): ?>
                <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="row requests_list" style="height: 40px;; border-radius: 15px" title="إضغط لعرض تفاصيل الطلب">
                        <div class="col-md-12">
                            <a class="btn btn-default text-light pull-left" href="/admin/delete_service/<?php echo e($service->id); ?>" title="حذف الطلب"><i class="fas fa-minus-circle" style="color: orange"></i>
                            </a>
                            <p class="pull-right" style="color: darkorange">
                                <span style="font-size: 20px; color: darkorange">&nbsp;&nbsp;...</span>
                                <a href="/admin/one_request/<?php echo e($service->id); ?>" class="pull-right" style="margin-top: 4px; font-size: 20px">
                                     لديك طلب خدمة بالمواصفات الآتية :
                                    <span style="font-size: 20px"><?php echo e($service->text_voice); ?></span>
                                    <span style="font-size: 20px"><?php echo e($service->inserted_text); ?></span>
                                    <span style="font-size: 20px"><?php echo e($service->producing); ?></span>
                                    <?php if($service->read_status == 'unread'): ?>
                                        &nbsp;&nbsp;<i class="fa fa-eye" style="color: darkgrey"></i>
                                    <?php else: ?>
                                        <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                    <?php endif; ?>
                                </a>
                            </p>
                        </div>
                    </div><hr style="border: none; height: 1px; color: darkgrey; background-color: darkgrey">
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php else: ?>
                <h3 style="color: darkgrey; text-align: center">لا توجد طلبات</h3>
            <?php endif; ?>
        </div>
    </div>
    <?php echo $services->links(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u229186696/domains/govoiceo.com/blog/resources/views/admin/user_service_requests.blade.php ENDPATH**/ ?>