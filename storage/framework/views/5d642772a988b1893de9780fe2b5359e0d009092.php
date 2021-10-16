

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

<?php $__env->startSection('content'); ?>
    <div class="container row" style="background-color: white; opacity: 0.8; margin-top: 7%">
        <div class="col-md-12">
            <?php if(session('alert')): ?>
                <div class="alert alert-default" style="width: 50%; margin: auto">
                    <p style="color: darkorange; font-family: Cambria; font-size: 22px; text-align: center; font-weight: bold"><?php echo e(session('alert')); ?></p>
                </div>
            <?php endif; ?>
            <h2 style="color: darkorange; font-weight: bold; text-align: center">تفاصيل الكورسات</h2>
            <?php if(count($courses) > 0): ?>
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
                    <?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr class="row" style="text-align: center" title="السعر : <?php echo e($course->price); ?>$&nbsp;&nbsp;عدد الساعات : <?php echo e($course->total_hours); ?>ساعة">
                            <td class="col-md-1">
                                <a href="/admin/edit_course/<?php echo e($course->id); ?>" title="إضغط لتعديل بيانات الكورس"><i class="fa fa-edit" style="color: orange"></i></a>&nbsp;&nbsp;&nbsp;
                                
                                <?php if($course->deleted_at == null): ?>
                                    <a href="/admin/course_soft_delete/<?php echo e($course->id); ?>" onclick="myFunction()" title="إضغط لحذف الكورس"><i class="fa fa-trash" style="color: orange"></i></a>
                                <?php else: ?>
                                    <a href="/admin/course_restore/<?php echo e($course->id); ?>" onclick="myFunction1()" title="إضغط لاسترجاع الكورس"><i class="fas fa-trash-restore" style="color: orange"></i></a>
                                <?php endif; ?>
                            </td>
                            <td class="col-md-1"><a href="<?php echo e($course->course_link); ?>" class="popup-vimeo">إضغط لعرض الكورس كاملاً</a></td>
                            <td class="col-md-2">
                                <video width="150px" controls>
                                    <source src="<?php echo e(asset("/videos/courses/".$course->video)); ?>" class="popup-vimeo" type="video/mp4">
                                </video>
                            </td>
                            <td class="col-md-2"><img src="<?php echo e(asset("/images/courses/".$course->image)); ?>"></td>
                            <td class="col-md-4"><?php echo $course->introduction; ?></td>
                            <td class="col-md-1"><?php echo e($course->instructor); ?></td>
                            <td class="col-md-1"><?php echo e($course->name); ?></td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </table>
            <?php else: ?>
                <h3 style="color: darkgrey; text-align: center">لا توجد كورسات</h2>
            <?php endif; ?>
            <?php echo $courses->links(); ?>

        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u229186696/domains/govoiceo.com/blog/resources/views/admin/admin_courses.blade.php ENDPATH**/ ?>