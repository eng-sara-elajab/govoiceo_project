

<?php $__env->startSection('content'); ?>
    <div class="container row" style="background-color: white; opacity: 0.6; margin-top: 7%">
        <div class="col-md-12">
            <?php if(session('alert')): ?>
                <div class="alert alert-default" style="width: 50%; margin: auto">
                    <p style="color: darkorange; font-family: Cambria; font-size: 22px; text-align: center; font-weight: bold"><?php echo e(session('alert')); ?></p>
                </div>
            <?php endif; ?><br>
            <h2 style="color: darkorange; font-weight: bold; text-align: center">بيانات كل الآدمن</h2>
            <?php if(Auth::guard('admin')->user()->email == 'admin@example.com'): ?>
                <table class="table table-bordered table-responsive" style="margin-top: 15px">
                    <tr class="row" style="font-size: 20px; font-weight: bold">
                        <th style="border:1px solid black;border-collapse:collapse; text-align: center" class="col-md-1">إسترجاع - حذف</th>
                        <th style="border:1px solid black;border-collapse:collapse; text-align: center" class="col-md-1">تعديل</th>
                        <th style="border:1px solid black;border-collapse:collapse; text-align: center" class="col-md-2">تاريخ الحذف</th>
                        <th style="border:1px solid black;border-collapse:collapse; text-align: center" class="col-md-2">تاريخ الإضافة</th>
                        <th style="border:1px solid black;border-collapse:collapse; text-align: center" class="col-md-3">البريد الإلكتروني</th>
                        <th style="border:1px solid black;border-collapse:collapse; text-align: center" class="col-md-2">إسم الآدمن</th>
                        <th style="border:1px solid black;border-collapse:collapse; text-align: center" class="col-md-1">#</th>
                    </tr>
                    <?php if(count($admins) > 0): ?>
                        <?php $__currentLoopData = $admins; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $admin): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr class="row" style="text-align: center">
                                <td class="col-md-1">
                                    <?php if($admin->deleted_at == null): ?>
                                        <a href="/admin/soft_delete/<?php echo e($admin->id); ?>" onclick="myFunction()" title="إضغط لحذف الآدمن"><i class="fa fa-trash" style="color: orange"></i></a>
                                    <?php else: ?>
                                        <a href="/admin/restore/<?php echo e($admin->id); ?>" onclick="myFunction1()" title="إضغط لاسترجاع الآدمن"><i class="fas fa-trash-restore" style="color: orange"></i></a>
                                    <?php endif; ?>
                                </td>
                                <td class="col-md-1"><a href="/admin/edit_admin/<?php echo e($admin->id); ?>" title="إضغط لتعديل بيانات الآدمن"><i class="fa fa-edit" style="color: orange"></i></a></td>
                                <td class="col-md-2"><?php echo e($admin->deleted_at == null ? 'غير محذوف' : $admin->deleted_at); ?></td>
                                <td class="col-md-2"><?php echo e($admin->created_at); ?></td>
                                <td class="col-md-3"><?php echo e($admin->email); ?></td>
                                <td class="col-md-2"><?php echo e($admin->name); ?></td>
                                <td class="col-md-1"><?php echo e($admin->id); ?></td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>
                </table>
            <?php else: ?>
                <table class="table table-bordered table-responsive" style="margin-top: 15px">
                    <tr class="row" style="font-size: 20px; font-weight: bold">
                        <th style="border:1px solid black;border-collapse:collapse; text-align: center" class="col-md-2">تاريخ الحذف</th>
                        <th style="border:1px solid black;border-collapse:collapse; text-align: center" class="col-md-2">تاريخ الإضافة</th>
                        <th style="border:1px solid black;border-collapse:collapse; text-align: center" class="col-md-4">البريد الإلكتروني</th>
                        <th style="border:1px solid black;border-collapse:collapse; text-align: center" class="col-md-3">إسم الآدمن</th>
                        <th style="border:1px solid black;border-collapse:collapse; text-align: center" class="col-md-1">#</th>
                    </tr>
                    <?php if(count($admins) > 0): ?>
                        <?php $__currentLoopData = $admins; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $admin): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr class="row" style="text-align: center">
                                <td class="col-md-2"><?php echo e($admin->deleted_at == null ? 'غير محذوف' : $admin->deleted_at); ?></td>
                                <td class="col-md-2"><?php echo e($admin->created_at); ?></td>
                                <td class="col-md-4"><?php echo e($admin->email); ?></td>
                                <td class="col-md-3"><?php echo e($admin->name); ?></td>
                                <td class="col-md-1"><?php echo e($admin->id); ?></td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php else: ?>
                        <h3 style="color: darkgrey; text-align: center">لا يوجد آدمن</h3>
                    <?php endif; ?>
                </table>
                <?php echo $admins->links(); ?>

            <?php endif; ?>
        </div>
    </div><br><br><br><br><br>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u229186696/domains/govoiceo.com/blog/resources/views/admin/index.blade.php ENDPATH**/ ?>