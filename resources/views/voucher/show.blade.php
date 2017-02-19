@extends('layouts.app')

@section('title-page', 'Voucher')
@section('breadcrumb')
    <li><a href="{{ route('home') }}">Home</a></li>
    <li><a href="{{ route('voucher.index') }}">Voucher</a></li>
    <li class="active">Visualizar</li>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div id="voucher" data-voucher-code="{{ $voucher }}"></div>
                    <h3 class="panel-title">Voucher {{ $voucher->code }}</h3>
                    <div class="actions">
                        <i class="fa fa-calendar"></i>

                        <span>{{ $voucher->booking_date }}</span>
                    </div>
                </div>
                <div class="panel-body">
                    <form class="form-horizontal">
                        <div class="form-group">
                            <label for="name" class="col-sm-2 control-label">Criado por</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="name" readonly="readonly"
                                       value=" {{ $voucher->user->name }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name" class="col-sm-2 control-label">Empresa</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="name" readonly="readonly"
                                       value=" {{ $voucher->sale->company->name }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name" class="col-sm-2 control-label">Promoção</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="name" readonly="readonly"
                                       value=" {{ $voucher->sale->name }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name" class="col-sm-2 control-label">Pessoas para ativar</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="name" readonly="readonly"
                                       value=" {{ $voucher->sale->minimum_users }} ">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name" class="col-sm-2 control-label">Compras realizadas</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="name" readonly="readonly"
                                       value=" {{ $voucher->bookings->count() }} ">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name" class="col-sm-2 control-label">Valor por pessoa</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="name" readonly="readonly"
                                       value=" {{ $voucher->sale->value }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" id="comprar" class="btn btn-primary" >
                                    <i class="fa fa-money"></i>
                                    Comprar
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection


<script type="text/javascript"
        src="https://stc.sandbox.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.lightbox.js">
</script>

@section('scripts')
<script>

    var basePath = 'http://localhost:8000/';

    $("#comprar").click(function () {
        var voucher = $('#voucher').data("voucher-code");
        //console.log(voucher);

        var data = voucher;
        console.log(data);


        $.ajax({
            type: "POST",
            url: basePath+'pagseguro-buy',
            data: data,
            success: function (response) {
                //console.log(response)
                isOpenLightbox = PagSeguroLightbox({
                    code: response
                }, {
                    success : function(transactionCode) {
                        //console.log(transactionCode);
                        enviarCodigoTransacao(transactionCode, data);


                    },
                    abort : function() {
                        alert("Você cancelou a compra");
                    }
                });

                if (!isOpenLightbox){
                    location.href="https://sandbox.pagseguro.uol.com.br/v2/checkout/payment.html?code="+fieldId;
                }

            }
            //dataType: dataType
        });
        
        function enviarCodigoTransacao(transactionCode, data) {
            console.log(data);
            $.ajax({
                type: "POST",
                url: basePath+'pagseguro-info',
                data: {
                    transactionCode : transactionCode,
                    voucher_id:data.id
                },
                success: function (response) {
                   //mensagem de sucessoo
                    //console.log(response);
                    confirmacaodacompra(response);
                }
                //dataType: dataType
            });
        }

        function confirmacaodacompra(response) {
            console.log(response);
            $.ajax({
                type: "POST",
                url: basePath+'booking',
                data: response,
                success: function (res) {
                    console.log(res);
                }
                //dataType: dataType
            });
        }

    });
    //var fieldId = $('#field').data("field-id");
    //console.log(fieldId);
    //PagSeguroLightbox(fieldId);




</script>
@endsection

