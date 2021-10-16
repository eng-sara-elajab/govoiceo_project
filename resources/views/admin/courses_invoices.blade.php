@extends('layouts.admin')

@section('content')
    <div class="container row" style="background-color: white; opacity: 0.8; margin-top: 3%">
        <div class="col-md-10 col-md-offset-1">
            @if (session('alert'))
                <div class="alert alert-default" style="width: 50%; margin: auto">
                    <p style="color: darkorange; font-family: Cambria; font-size: 22px; text-align: center; font-weight: bold">{{ session('alert') }}</p>
                </div>
            @endif<br>
            <h2 style="color: darkorange; font-weight: bold; text-align: center">فواتير الشراء</h2>
            @if(count($invoices) > 0)
                @foreach($invoices as $invoice)
                    <div class="row" style="height: 40px; border-radius: 15px; background-color: lightgrey" title="إضغط لعرض تفاصيل الشراء">
                        <div class="col-md-2">
                            <a class="btn btn-default btn-md text-light pull-left" href="/admin/edit_invoice/{{$invoice->id}}" style="margin-top: 3px" title="تعديل بيانات الفاتورة"><i style="color: darkorange" class="fa fa-edit"></i>
                            </a>
                            <a class="btn btn-default btn-md text-light pull-left" href="/admin/delete_invoice/{{$invoice->id}}" style="margin-top: 3px" title="حذف الفاتورة"><i style="color:darkorange" class="fas fa-minus-circle"></i>
                            </a>
                        </div>
                        <div class="col-md-8">
                            @if($invoice->id == 1)
                                <p class="pull-right" style="color: orange">
                                    <a class="btn btn-default btn-md text-light" data-toggle="modal" id="mediumButton" data-target="#mediumModal" data-attr="{{ route('invoice.view', $invoice->id) }}" title="عرض التفاصيل"><i style="color:darkorange; margin-top: 3px" class="fas fa-plus-circle"></i>
                                    </a>
                                    <a href="#" style="margin-top: 3px; font-size: 20px">
                                    ...<span>قام {{$invoice_data[$invoice->id-1]}}</span>
                                    <span>بشراء الكورس {{$invoice_data[$invoice->id]}}</span>
                                    </a>
                                </p>
                            @else
                                <p class="pull-right" style="color: orange">
                                    <a class="btn btn-default text-light" data-toggle="modal" id="mediumButton" data-target="#mediumModal" data-attr="{{ route('invoice.view', $invoice->id) }}" title="عرض التفاصيل"><i class="fas fa-plus-circle"></i>
                                    </a>
                                    <a href="#" style="margin-top: 4px; font-size: 20px">
                                    ...<span>قام {{$invoice_data[$invoice->id]}}</span>
                                    <span>بشراء الكورس {{$invoice_data[$invoice->id+1]}}</span>
                                    </a>
                                </p>
                            @endif
                        </div>
                    </div><hr style="border: none; height: 1px; color: darkgrey; background-color: darkgrey">
                @endforeach
            @else
                <h3 style="color: darkgrey; text-align:center">لا توجد فواتير</h3>
            @endif
        </div>
    </div>
    {!! $invoices->links() !!}
@endsection

@if(count($invoices) > 0)
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
                        @if($invoice->id == 1)
                            <div class="col-md-6">
                                <img src="/images/invoices/{{$invoice->subscription_invoice}}" style="width: 95%; height: 200px">
                            </div>
                            <div class="col-md-6" style="margin-top: 7%">
                                <h3 style="color: orange" class="pull-right"> إسم المستخدم
                                    <span style="color: darkgrey">: {{$invoice_data[$invoice->id-1]}}</span>
                                </h3>
                                <h3 style="color: orange" class="pull-right">إسم الكورس
                                    <span style="color: darkgrey">: {{$invoice_data[$invoice->id]}}</span>
                                </h3>
                            </div>
                        @else
                            <div class="col-md-6">
                                <img src="/images/invoices/{{$invoice->subscription_invoice}}" style="width: 95%; height: 200px">
                            </div>
                            <div class="col-md-6" style="margin-top: 7%">
                                <h3 style="color: orange" class="pull-right"> إسم المستخدم
                                    <span style="color: darkgrey">: {{$invoice_data[$invoice->id]}}</span>
                                </h3>
                                <h3 style="color: orange" class="pull-right">إسم الكورس
                                    <span style="color: darkgrey">: {{$invoice_data[$invoice->id+1]}}</span>
                                </h3>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif

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