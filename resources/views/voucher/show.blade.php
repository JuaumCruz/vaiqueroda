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
                    <h3 class="panel-title">Voucher {{ $voucher->code }}</h3>
                    <div class="actions">
                        <i class="fa fa-calendar"></i>
                        <span>{{ $voucher->booking_date }}</span>
                    </div>
                </div>
                <div class="panel-body">


                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" id="comprar" class="btn btn-primary">
                                    <i class="fa fa-money"></i>
                                    Comprar
                                </button>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
@endsection
