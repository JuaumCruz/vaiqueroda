@extends('layouts.app')

@section('title-page', 'Voucher')
@section('breadcrumb')
    <li><a href="{{ route('home') }}">Home</a></li>
    <li><a href="{{ route('voucher.index') }}">Voucher</a></li>
    <li class="active">Criar</li>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Cadastro de voucher</h3>
                </div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="post" action=" {{ route('voucher.store') }}">
                        {{ csrf_field() }}
                        <input type="hidden" value="{{ $sale->id }}" name="sale_id" id="sale_id"/>
                        <div class="form-group">
                            <label for="name" class="col-sm-2 control-label">Empresa</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="name" readonly="readonly"
                                       value=" {{ $sale->company->name }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name" class="col-sm-2 control-label">Promoção</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="name" readonly="readonly"
                                       value=" {{ $sale->name }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name" class="col-sm-2 control-label">Pessoas para ativar</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="name" readonly="readonly"
                                       value=" {{ $sale->minimum_users }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name" class="col-sm-2 control-label">Valor por pessoa</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="name" readonly="readonly"
                                       value=" {{ $sale->value }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="booking_date" class="col-sm-2 control-label">Data de Uso</label>
                            <div class="col-sm-10">
                                <input type="date" class="form-control" id="booking_date" name="booking_date">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-primary">Confirmar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
