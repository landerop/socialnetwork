@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Register</div>

                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">

                            @include('auth.partials.username')

                            @include('auth.partials.first_name')

                            @include('auth.partials.last_name')

                            @include('auth.partials.email')

                            @include('auth.partials.password')

                            @include('auth.partials.password_confirmation')

                            <hr>

                            @include('auth.partials.country')

                            @include('auth.partials.city')

                            @include('auth.partials.biography')

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Register
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
