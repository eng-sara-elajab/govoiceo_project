

<?php $__env->startSection('content'); ?>
    <div class="animate-box" style="background-color: white; opacity: 0.7; margin-top: 5%; height: auto"><br><br>
        <h3 style="color: orange; text-align: center">اشرح سبب رفض الطلب من فضلك حتى يتم إرساله للمستخدم لإعادة الطلب مرة أخرى</h3>
        <form method="POST" action="/admin/reject_message/<?php echo e($service->id); ?>">
            <?php echo csrf_field(); ?>
            <?php echo e(method_field('PUT')); ?>

            <textarea style="text-align: right; height:300px; width:90%; margin-left:5%; margin-top: 1%; margin-buttom: 2%; border: solid 2px lightgrey" name="reject_message"></textarea>
            <input type="submit" class="btn btn-warning" style="width:200px; margin-left: 45%" value="أرسل"><br><br>
        </form>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u229186696/domains/govoiceo.com/blog/resources/views/admin/rejection_message.blade.php ENDPATH**/ ?>