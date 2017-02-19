@extends('layouts.app')

@section('title-page', 'Empresas')
@section('breadcrumb')
    <li><a href="{{ route('home') }}">Home</a></li>
    <li><a href="{{ route('company.index') }}">Empresa</a></li>
    <li class="active">Editar</li>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Edição de empresa</h3>
                </div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="post" action=" {{ route('company.update', $company->id) }}">
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}
                        <div class="form-group">
                            <label for="cnpj" class="col-sm-2 control-label">CNPJ</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="cnpj" name="cnpj" value="{{ $company->cnpj }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name" class="col-sm-2 control-label">Nome</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="name" name="name" value="{{ $company->name }}">
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
