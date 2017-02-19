@extends('layouts.app')

@section('title-page', 'Home')

@section('breadcrumb')
    <li class="active">Home</li>
@endsection

@section('content')

        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">LA FAVORITTA</h3>
                    <div class="actions pull-right">
                        <i class="fa fa-expand"></i>
                        <i class="fa fa-chevron-down"></i>
                        <i class="fa fa-times"></i>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <img src="assets/img/logo-lafavoritta.png">    
                    </div>
                    <div class="panel-body">
                        <p>
                            Venha desfrutar com seus amigos de nossas maravilhosas pizzas de segunda a quinta com descontos especiais para grupos.
                        </p>
                    </div>
                </div>
                <div class="panel-footer">

                        <button type="submit" class="btn btn-default btn-sm" id="comprar">Comprar</button>


                    <button type="button" class="btn btn-default btn-sm">Compartilhar</button>
                </div>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">CIRCUITO INT PALADINO</h3>
                    <div class="actions pull-right">
                        <i class="fa fa-expand"></i>
                        <i class="fa fa-chevron-down"></i>
                        <i class="fa fa-times"></i>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <img src="assets/img/paladino.jpg">    
                    </div>
                    <div class="panel-body">
                        <p>
                            Venha se divertir com seus amigos em uma emocionante pista e demonstrar seu taleto como piloto.
                        </p>
                    </div>
                </div>
                <div class="panel-footer">
                    <button type="button" class="btn btn-default btn-sm">Comprar</button>
                    <button type="button" class="btn btn-default btn-sm">Compartilhar</button>
                </div>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">PARQUE AQUATICO</h3>
                    <div class="actions pull-right">
                        <i class="fa fa-expand"></i>
                        <i class="fa fa-chevron-down"></i>
                        <i class="fa fa-times"></i>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <img src="assets/img/parqueaguatico.jpg">    
                    </div>
                    <div class="panel-body">
                        <p>
                            Venha desfrutar de um dia de lazer em nossas psinas você com toda família e amigos.
                        </p>
                    </div>
                </div>
                <div class="panel-footer">
                    <button type="button" class="btn btn-default btn-sm">Comprar</button>
                    <button type="button" class="btn btn-default btn-sm">Compartilhar</button>
                </div>

            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">TERERÊ</h3>
                    <div class="actions pull-right">
                        <i class="fa fa-expand"></i>
                        <i class="fa fa-chevron-down"></i>
                        <i class="fa fa-times"></i>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <img src="assets/img/terere.png">    
                    </div>
                    <div class="panel-body">
                        <p>
                            Venha desfrutar com seus amigos de nossas carnes especias, preparadas a partir da autêntica tradição gaúcha.
                        </p>
                    </div>
                </div>
                <div class="panel-footer">
                    <button type="button" class="btn btn-default btn-sm">Comprar</button>
                    <button type="button" class="btn btn-default btn-sm">Compartilhar</button>
                </div>

            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">CACHACÁRIA CENTRAL</h3>
                    <div class="actions pull-right">
                        <i class="fa fa-expand"></i>
                        <i class="fa fa-chevron-down"></i>
                        <i class="fa fa-times"></i>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <img src="assets/img/cachacariacentral.png">    
                    </div>
                    <div class="panel-body">
                        <p>
                            Desfrufe te momentos de descontração com seus amigos saboreando as mais diversas cachaças da região
                        </p>
                    </div>
                </div>
                <div class="panel-footer">
                    <button type="button" class="btn btn-default btn-sm">Comprar</button>
                    <button type="button" class="btn btn-default btn-sm">Compartilhar</button>
                </div>

            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">BESSA GRILL</h3>
                    <div class="actions pull-right">
                        <i class="fa fa-expand"></i>
                        <i class="fa fa-chevron-down"></i>
                        <i class="fa fa-times"></i>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <img src="assets/img/bessagrill.png">    
                    </div>
                    <div class="panel-body">
                        <p>
                            A beira mar no bessa, local agradavel e descontraido para curtir com os amigos boa música em seu happy hour semanal.
                        </p>
                    </div>
                </div>
                <div class="panel-footer">
                    <button type="button" class="btn btn-default btn-sm">Comprar</button>
                    <button type="button" class="btn btn-default btn-sm">Compartilhar</button>
                </div>

            </div>
        </div>



@endsection


@section('scripts')
    <script type="text/javascript" src="https://stc.sandbox.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.lightbox.js">
        </script>
<script>

    var basePath = 'http://localhost:8000/';

    $("#comprar").click(function () {
        var data = [];
        $.ajax({
            type: "POST",
            url: basePath+'pagseuro-buy',
            data: data,
            success: function (response) {
                console.log(response)
                isOpenLightbox = PagSeguroLightbox({
                    code: response
                }, {
                    success : function(transactionCode) {
                        alert("success - " + transactionCode);
                    },
                    abort : function() {
                        alert("abort");
                    }
                });

                if (!isOpenLightbox){
                    location.href="https://sandbox.pagseguro.uol.com.br/v2/checkout/payment.html?code="+fieldId;
                }

            }
            //dataType: dataType
        });
    });
    //var fieldId = $('#field').data("field-id");
    //console.log(fieldId);
    //PagSeguroLightbox(fieldId);




</script>
    @endsection
