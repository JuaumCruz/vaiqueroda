@extends('layouts.app')

@section('title-page', 'Promoções')
@section('breadcrumb')
    <li><a href="{{ route('home') }}">Home</a></li>
    <li class="active">Promoção</li>
@endsection

@section('content')
    @if($companies->count())
        @component('components.crud-table', [
            'title' => 'Gerência de promoções',
            'route_create' => route('sale.create'),
            'models' => $sales->map(function($item, $key) {
                $item->company_name = $item->company->name;
                $item->route_show = route('sale.show', $item->id);
                $item->route_edit = route('sale.edit', $item->id);
                $item->route_delete = route('sale.destroy', $item->id);
                return $item;
            }),
            'columns' => [
                '#' => 'id',
                'Empresa' => 'company_name',
                'Nome' => 'name',
                'Validade' => 'due_date',
                'Limite Diário' => 'daily_limit',
                'Valor' => 'value',
                'No. Usuários' => 'minimum_users',
            ],
        ])
        @endcomponent
    @else
        @component('components.panel', ['title' => 'Gerência de promoções'])
            @component('components.alert', ['type' => 'alert-danger'])
                <strong>Você não possui empresas!</strong> Logo não pode cadastrar promoções.
            @endcomponent
        @endcomponent
    @endif


    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Gerência de promoções</h3>
                    @if($companies->count())
                        <div class="actions">
                            <a href=" {{ route('sale.create') }}" title="Criar">
                                <button type="button" class="btn btn-success btn-sm">
                                    <li class="fa fa-plus"></li>
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
                                            <a href="{{ route('sale.show', $sale->id) }}" title="Visualizar">
                                                <button type="button" class="btn btn-info btn-sm">
                                                    <li class="fa fa-eye"></li>
                                                </button>
                                            </a>
                                            <a href="{{ route('sale.edit', $sale->id) }}" title="Editar">
                                                <button type="button" class="btn btn-warning btn-sm">
                                                    <li class="fa fa-edit"></li>
                                                </button>
                                            </a>
                                            <form action=" {{ route('sale.destroy', $sale->id) }} " method="post" class="form-btn">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <a href="/#" title="Excluir">
                                                    <button type="submit" class="btn btn-danger btn-sm">
                                                        <li class="fa icon-trash"></li>
                                                    </button>
                                                </a>
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
