@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Login</div>

                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
                            <input type="hidden" name="_token" class="{{ csrf_token() }}">

                            @include('auth.partials.email')

                            @include('auth.partials.password')

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <div class="checkbox">
                                        <label for="remember">
                                            <input type="checkbox" name="remember" id="remember"> Remember me
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-8 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Login
                                    </button>

                                    <a class="btn btn-link" href="{{ route('password.reset') }}">
                                        Forgot Your Password?
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
