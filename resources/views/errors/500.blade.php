@extends('layouts.blank')

@section('content')
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <div id="error-container" class="block-error animated fadeInUp">
            <header>
                <h1 class="error">500</h1>
                <p class="text-center">Internal Server Error</p>
            </header>
            <p class="text-center">Something went wrong, please try again later.</p>
            <div class="row">
                <div class="col-md-6">
                    <a class="btn btn-info btn-block" href="{{ route('home') }}">Back to Home</a>
                </div>
                <div class="col-md-6">
                    <button class="btn btn-success btn-block" onclick="history.back();">Previous Page</button>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
