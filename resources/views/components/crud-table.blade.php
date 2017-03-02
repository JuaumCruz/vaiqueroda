@component('components.panel')
    @slot('title')
        {{ $title or 'Gerência de Dados'}}
    @endslot

    @slot('actions')
        @if(isset($route_create))
        <a href="{{ $route_create }}" title="Criar">
            <button type="button" class="btn btn-success btn-sm">
                <li class="fa fa-plus"></li>
            </button>
        </a>
        @endif
    @endslot

    @if(isset($models) and $models->count())
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        @foreach($columns as $label => $attribute)
                        <th>{{ $label }}</th>
                        @endforeach
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($models as $model)
                    <tr>
                        @foreach($columns as $attribute)
                        <td>{{ $model->$attribute }}</td>
                        @endforeach
                        <td>
                            @if($model->route_show)
                            <a href="{{ $model->route_show }}" title="Visualizar">
                                <button type="button" class="btn btn-info btn-sm">
                                    <li class="fa fa-eye"></li>
                                </button>
                            </a>
                            @endif
                            @if($model->route_edit)
                            <a href="{{ $model->route_edit }}" title="Editar">
                                <button type="button" class="btn btn-warning btn-sm">
                                    <li class="fa fa-edit"></li>
                                </button>
                            </a>
                            @endif
                            @if($model->route_delete)
                            <form action="{{ $model->route_delete }}" method="post" class="form-btn">
                                {{ method_field('DELETE') }}
                                {{ csrf_field() }}
                                <a href="/#" title="Excluir">
                                    <button type="submit" class="btn btn-danger btn-sm">
                                        <li class="fa icon-trash"></li>
                                    </button>
                                </a>
                            </form>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @else
        @component('components.alert')
            <strong>Não existem dados cadastrados!</strong> Clique em <strong>Criar</strong> para cadastrar.
        @endcomponent
    @endif
@endcomponent
