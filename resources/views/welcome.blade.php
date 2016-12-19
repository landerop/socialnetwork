@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="jumbotron">
            <h1>Social Network</h1>
            <p>Welcome! To use this website you need to log in with your account or register if you don't have one.</p>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('login') }}" role="button">Login</a>
                <a class="btn btn-default" href="{{ route('register') }}" role="button">Register</a>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
@endsection
