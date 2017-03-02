@extends('layouts.app')

@section('title-page', 'Empresas')
@section('breadcrumb')
    <li><a href="{{ route('home') }}">Home</a></li>
    <li class="active">Empresa</li>
@endsection

@section('content')
    @component('components.crud-table', [
        'title' => 'Gerência de empresas',
        'route_create' => route('company.create'),
        'models' => $companies->map(function($item, $key) {
            $item->route_show = route('company.show', $item->id);
            $item->route_edit = route('company.edit', $item->id);
            $item->route_delete = route('company.destroy', $item->id);
            return $item;
        }),
        'columns' => [
            '#' => 'id',
            'CNPJ' => 'cnpj',
            'Nome' => 'name'
        ],
    ])
    @endcomponent

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Gerência de empresas</h3>
                    <div class="actions">
                        <a href=" {{ route('company.create') }}" title="Criar">
                            <button type="button" class="btn btn-success btn-sm">
                                <li class="fa fa-plus"></li>
                            </button>
                        </a>
                    </div>
                </div>
                <div class="panel-body table-responsive">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>CNPJ</th>
                            <th>Nome</th>
                            <th>Ações</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($companies as $company)
                            <tr>
                                <td>{{ $company->id }}</td>
                                <td>{{ $company->cnpj }}</td>
                                <td>{{ $company->name }}</td>
                                <td>
                                    <a href="{{ route('company.show', $company->id) }}" title="Visualizar">
                                        <button type="button" class="btn btn-info btn-sm">
                                            <li class="fa fa-eye"></li>
                                        </button>
                                    </a>
                                    <a href="{{ route('company.edit', $company->id) }}" title="Editar">
                                        <button type="button" class="btn btn-warning btn-sm">
                                            <li class="fa fa-edit"></li>
                                        </button>
                                    </a>
                                    <form action=" {{ route('company.destroy', $company->id) }} " method="post" class="form-btn">
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
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
