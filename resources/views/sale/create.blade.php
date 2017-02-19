@extends('layouts.app')

@section('title-page', 'Promoções')
@section('breadcrumb')
    <li><a href="{{ route('home') }}">Home</a></li>
    <li><a href="{{ route('sale.index') }}">Promoção</a></li>
    <li class="active">Criar</li>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Cadastro de promoção</h3>
                </div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="post" action=" {{ route('sale.store') }}">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="company_id" class="col-sm-2 control-label">Empresa</label>
                            <div class="col-sm-10">
                                <select class="form-control" id="company_id" name="company_id">
                                    <option value="">Selecione uma empresa</option>
                                    @foreach($companies as $company)
                                        <option value="{{ $company->id }}">{{ $company->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name" class="col-sm-2 control-label">Nome</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="name" name="name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="description" class="col-sm-2 control-label">Descrição</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="description" name="description">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="due_date" class="col-sm-2 control-label">Data Validade</label>
                            <div class="col-sm-10">
                                <input type="date" class="form-control" id="due_date" name="due_date">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="daily_limit" class="col-sm-2 control-label">Limite Diário</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" id="daily_limit" name="daily_limit">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="value" class="col-sm-2 control-label">Valor</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="value" name="value">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="minimum_users" class="col-sm-2 control-label">Número de Usuários</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" id="minimum_users" name="minimum_users">
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
