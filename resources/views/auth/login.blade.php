@extends('layouts/authlayout')


<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-body">
                @section('form')
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}



                        <div class="form-group row {{ $errors->has('email') ? ' has-error' : '' }}">
                                        <div class="col-12">
                                            <div class="form-material floating">
                                                <input type="text" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                                                <label for="login-username">Email</label>
                                            </div>
                                        </div>
                                    </div>

                        <div class="form-group row {{ $errors->has('password') ? ' has-error' : '' }}">
                                        <div class="col-12">
                                            <div class="form-material floating">
                                                <input type="password" class="form-control" id="login-password" name="password"  required autofocus>
                                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                                                <label for="login-password">Password</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                    <div class="col-12">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input"  {{ old('remember') ? 'checked' : '' }} name="remember">
                                                <label class="custom-control-label" for="login-remember-me">Remember Me</label>
                                            </div>
                                        </div>
                                        </div>
                                        <div class="form-group">
                                        
                                        <button type="submit" class="btn btn-sm btn-hero btn-alt-primary"><em class="si si-login mr-10"></em> Sign In </button>
                                        <div>
                                        <div class="mt-30">
                                            <a class="link-effect text-muted mr-10 mb-5 d-inline-block" href="{{ route('register') }}">
                                                <i class="fa fa-plus mr-5"></i> Create Account
                                            </a>
                                <a class="link-effect text-muted mr-10 mb-5 d-inline-block" href="{{ route('password.request') }}">
                                                <i class="fa fa-warning mr-5"></i> Forgot Password
                                            </a>
                                        </div>
                                    </div>
                                </div>
                    </form>
                    @endsection
                </div>
            </div>
        </div>
    </div>
</div>

