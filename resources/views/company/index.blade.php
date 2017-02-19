@extends('layouts.app')

@section('title-page', 'Empresas')
@section('breadcrumb')
    <li><a href="{{ route('home') }}">Home</a></li>
    <li class="active">Empresa</li>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Gerência de empresas</h3>
                    <div class="actions">
                        <a href=" {{ route('company.create') }}">
                            <button type="submit" class="btn btn-success btn-sm btn-trans pull-left">
                                <li class="fa fa-plus"></li>
                                Criar
                            </button>
                        </a>
                    </div>
                </div>
                <div class="panel-body">
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
                                    <a href="{{ route('company.edit', $company->id) }}">
                                        <button type="submit" class="btn btn-primary btn-sm btn-trans pull-left">
                                            <li class="fa fa-edit"></li>
                                            Editar
                                        </button>
                                    </a>
                                    <form action=" {{ route('company.destroy', $company->id) }} " method="post">
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
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
