<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">{{ $title or ''}}</h3>
                <div class="actions">
                    {{ $actions or false }}
                </div>
            </div>
            <div class="panel-body">
                {{ $slot }}
            </div>
        </div>
    </div>
</div>
