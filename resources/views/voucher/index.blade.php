@extends('layouts.app')

@section('title-page', 'Vouchers')
@section('breadcrumb')
    <li><a href="{{ route('home') }}">Home</a></li>
    <li class="active">Voucher</li>
@endsection

@section('content')
    <div class="row">
        @if($vouchers->count())
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Vouchers criados</h3>
                    </div>
                    <div class="panel-body">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Empresa</th>
                                <th>Nome</th>
                                <th>Validade</th>
                                <th>Valor</th>
                                <th>Status</th>
                                <th>Ações</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($vouchers as $voucher)
                                <tr>
                                    <td>{{ $voucher->code }}</td>
                                    <td>{{ $voucher->sale->company->name }}</td>
                                    <td>{{ $voucher->sale->name }}</td>
                                    <td>{{ $voucher->sale->due_date }}</td>
                                    <td>{{ $voucher->sale->value }}</td>
                                    <td>@if($voucher->active)
                                            <span class="fa icon-check"></span>
                                        @else
                                            <span class="fa icon-clock"></span>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ route('voucher.show', $voucher->id) }}">
                                            <button type="submit"
                                                    class="btn btn-primary btn-sm btn-trans">
                                                <li class="fa fa-icon-eye"></li>
                                                Visualizar
                                            </button>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        @endif

        @if($bookings->count())
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Vouchers comprados</h3>
                    </div>
                    <div class="panel-body">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Empresa</th>
                                <th>Nome</th>
                                <th>Validade</th>
                                <th>Valor</th>
                                <th>Status</th>
                                <th>Ações</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($bookings as $booking)
                                <tr>
                                    <td>{{ $booking->voucher->code }}</td>
                                    <td>{{ $booking->voucher->sale->company->name }}</td>
                                    <td>{{ $booking->voucher->sale->name }}</td>
                                    <td>{{ $booking->voucher->sale->due_date }}</td>
                                    <td>{{ $booking->voucher->sale->value }}</td>
                                    <td>@if($booking->voucher->active)
                                            <span class="fa icon-check"></span>
                                        @else
                                            <span class="fa icon-clock"></span>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ route('voucher.show', $booking->voucher->id) }}">
                                            <button type="submit"
                                                    class="btn btn-primary btn-sm btn-trans">
                                                <li class="fa fa-icon-eye"></li>
                                                Visualizar
                                            </button>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        @endif
    </div>
@endsection
