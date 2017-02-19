@extends('layouts.app')

@section('title-page', 'Home')

@section('breadcrumb')
    <li class="active">Home</li>
@endsection

@section('content')

        @foreach($sales as $sale)
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">{{ $sale->company->name }}</h3>
                    <small>{{ $sale->name }}</small>
                    <div class="actions pull-right">
                    </div>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <img src="assets/img/{{ $sale->company->image }}">
                    </div>
                    <div class="panel-body">
                        <p>{{ $sale->company->presentation }}</p>
                    </div>
                </div>
                <div class="panel-footer">
                    <a href=" {{ route('voucher.create', ['sale_id' => $sale->id]) }}">
                        <button type="button" class="btn btn-default btn-sm btn-inv">
                            <li class="fa fa-ticket"></li> Gerar Voucher
                        </button>
                    </a>
                </div>
            </div>
        </div>
        @endforeach

@endsection
