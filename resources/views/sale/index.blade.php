@extends('layouts.app')

@section('title-page', 'Promoções')
@section('breadcrumb')
    <li><a href="{{ route('home') }}">Home</a></li>
    <li class="active">Promoção</li>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Gerência de promoções</h3>
                    @if($companies->count())
                        <div class="actions">
                            <a href=" {{ route('sale.create') }}">
                                <button type="submit" class="btn btn-success btn-sm btn-trans pull-left">
                                    <li class="fa fa-plus"></li>
                                    Criar
                                </button>
                            </a>
                        </div>
                    @endif
                </div>
                <div class="panel-body table-responsive">
                    @if($companies->count())
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Empresa</th>
                                <th>Nome</th>
                                <th>Validade</th>
                                <th>Limite Diário</th>
                                <th>Valor</th>
                                <th>No. Usuários</th>
                                <th>Ações</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($companies as $company)
                                @foreach($company->sales as $sale)
                                    <tr>
                                        <td>{{ $sale->id }}</td>
                                        <td>{{ $company->name }}</td>
                                        <td>{{ $sale->name }}</td>
                                        <td>{{ $sale->due_date }}</td>
                                        <td>{{ $sale->daily_limit }}</td>
                                        <td>{{ $sale->value }}</td>
                                        <td>{{ $sale->minimum_users }}</td>
                                        <td>
                                            <a href="{{ route('sale.edit', $sale->id) }}">
                                                <button type="submit"
                                                        class="btn btn-primary btn-sm btn-trans pull-left">
                                                    <li class="fa fa-edit"></li>
                                                    Editar
                                                </button>
                                            </a>
                                            <form action=" {{ route('sale.destroy', $sale->id) }} " method="post">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm btn-trans pull-left">
                                                    <li class="fa icon-trash"></li>
                                                    Excluir
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            @endforeach
                            </tbody>
                        </table>
                    @else
                        <div class="alert alert-danger">
                            <strong>Você não possui empresas!</strong> Logo não pode cadastrar promoções.
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
