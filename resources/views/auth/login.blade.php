@extends('layouts.blank')

@section('content')
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <div id="login-wrapper">
            @include('includes._header')

            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="panel-title">
                        Login
                    </div>
                </div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                                <i class="fa fa-user"></i>
                                @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>
                                <i class="fa fa-lock"></i>
                                @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Remember Me</label>

                            <div class="col-md-3">
                                <div class="checkbox">
                                    <input type="checkbox" class="icheck" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                </div>

                            </div>
                            <div class="col-md-3">
                                <a class="btn btn-link pull-right" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>
                                <a class="btn btn-default" href="{{ route('register') }}">
                                    Register
                                </a>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
$(document).ready(function() {
    app.customCheckbox();
});
</script>
@endsection
