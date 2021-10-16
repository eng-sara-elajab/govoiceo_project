

<?php $__env->startSection('content'); ?>
    <div class="container row" style="background-color: white; opacity: 0.8; margin-top: 3%">
        <div class="col-md-10 col-md-offset-1">
            <?php if(session('alert')): ?>
                <div class="alert alert-default" style="width: 50%; margin: auto">
                    <p style="color: darkorange; font-family: Cambria; font-size: 22px; text-align: center; font-weight: bold"><?php echo e(session('alert')); ?></p>
                </div>
            <?php endif; ?><br>
            <h2 style="color: darkorange; font-weight: bold; text-align: center">فواتير الشراء</h2>
            <?php if(count($invoices) > 0): ?>
                <?php $__currentLoopData = $invoices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $invoice): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="row" style="height: 40px; border-radius: 15px; background-color: lightgrey" title="إضغط لعرض تفاصيل الشراء">
                        <div class="col-md-2">
                            <a class="btn btn-default btn-md text-light pull-left" href="/admin/edit_invoice/<?php echo e($invoice->id); ?>" style="margin-top: 3px" title="تعديل بيانات الفاتورة"><i style="color: darkorange" class="fa fa-edit"></i>
                            </a>
                            <a class="btn btn-default btn-md text-light pull-left" href="/admin/delete_invoice/<?php echo e($invoice->id); ?>" style="margin-top: 3px" title="حذف الفاتورة"><i style="color:darkorange" class="fas fa-minus-circle"></i>
                            </a>
                        </div>
                        <div class="col-md-8">
                            <?php if($invoice->id == 1): ?>
                                <p class="pull-right" style="color: orange">
                                    <a class="btn btn-default btn-md text-light" data-toggle="modal" id="mediumButton" data-target="#mediumModal" data-attr="<?php echo e(route('invoice.view', $invoice->id)); ?>" title="عرض التفاصيل"><i style="color:darkorange; margin-top: 3px" class="fas fa-plus-circle"></i>
                                    </a>
                                    <a href="#" style="margin-top: 3px; font-size: 20px">
                                    ...<span>قام <?php echo e($invoice_data[$invoice->id-1]); ?></span>
                                    <span>بشراء الكورس <?php echo e($invoice_data[$invoice->id]); ?></span>
                                    </a>
                                </p>
                            <?php else: ?>
                                <p class="pull-right" style="color: orange">
                                    <a class="btn btn-default text-light" data-toggle="modal" id="mediumButton" data-target="#mediumModal" data-attr="<?php echo e(route('invoice.view', $invoice->id)); ?>" title="عرض التفاصيل"><i class="fas fa-plus-circle"></i>
                                    </a>
                                    <a href="#" style="margin-top: 4px; font-size: 20px">
                                    ...<span>قام <?php echo e($invoice_data[$invoice->id]); ?></span>
                                    <span>بشراء الكورس <?php echo e($invoice_data[$invoice->id+1]); ?></span>
                                    </a>
                                </p>
                            <?php endif; ?>
                        </div>
                    </div><hr style="border: none; height: 1px; color: darkgrey; background-color: darkgrey">
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php else: ?>
                <h3 style="color: darkgrey; text-align:center">لا توجد فواتير</h3>
            <?php endif; ?>
        </div>
    </div>
    <?php echo $invoices->links(); ?>

<?php $__env->stopSection(); ?>

<?php if(count($invoices) > 0): ?>
    <!-- medium modal -->
    <div class="modal fade" id="mediumModal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="mediumBody">
                    <div class="row">
                        <?php if($invoice->id == 1): ?>
                            <div class="col-md-6">
                                <img src="/images/invoices/<?php echo e($invoice->subscription_invoice); ?>" style="width: 95%; height: 200px">
                            </div>
                            <div class="col-md-6" style="margin-top: 7%">
                                <h3 style="color: orange" class="pull-right"> إسم المستخدم
                                    <span style="color: darkgrey">: <?php echo e($invoice_data[$invoice->id-1]); ?></span>
                                </h3>
                                <h3 style="color: orange" class="pull-right">إسم الكورس
                                    <span style="color: darkgrey">: <?php echo e($invoice_data[$invoice->id]); ?></span>
                                </h3>
                            </div>
                        <?php else: ?>
                            <div class="col-md-6">
                                <img src="/images/invoices/<?php echo e($invoice->subscription_invoice); ?>" style="width: 95%; height: 200px">
                            </div>
                            <div class="col-md-6" style="margin-top: 7%">
                                <h3 style="color: orange" class="pull-right"> إسم المستخدم
                                    <span style="color: darkgrey">: <?php echo e($invoice_data[$invoice->id]); ?></span>
                                </h3>
                                <h3 style="color: orange" class="pull-right">إسم الكورس
                                    <span style="color: darkgrey">: <?php echo e($invoice_data[$invoice->id+1]); ?></span>
                                </h3>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>

<script>
    // display a modal (medium modal)
    $(document).on('click', '#mediumButton', function(event) {
        event.preventDefault();
        let href = $(this).attr('data-attr');
        $.ajax({
            url: href,
            beforeSend: function() {
                $('#loader').show();
            },
            // return the result
            success: function(result) {
                $('#mediumModal').modal("show");
                $('#mediumBody').html(result).show();
            },
            complete: function() {
                $('#loader').hide();
            },
            error: function(jqXHR, testStatus, error) {
                console.log(error);
                alert("Page " + href + " cannot open. Error:" + error);
                $('#loader').hide();
            },
            // timeout: 8000
        })
    });

</script>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u229186696/domains/govoiceo.com/blog/resources/views/admin/courses_invoices.blade.php ENDPATH**/ ?>