@extends('layouts/authlayout')


<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-body">
                @section('form')
                     <form class="form-horizontal" method="POST" action="{{ route('password.email') }}">
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

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Send Password Reset Link
                                </button>
                            </div>
                        </div>
                    </form>
                    <div class="mt-30">
                                            <a class="link-effect text-muted mr-10 mb-5 d-inline-block" href="{{ route('register') }}">
                                                <i class="fa fa-plus mr-5"></i> Create Account
                                            </a>
                                <a class="link-effect text-muted mr-10 mb-5 d-inline-block" href="{{ route('login') }}">
                                                <i class="fa fa-warning mr-5"></i> Sign in
                                            </a>
                                        </div>
                    @endsection
                </div>
            </div>
        </div>
    </div>
</div>

