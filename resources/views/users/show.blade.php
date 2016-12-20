@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <a href="{{ route('users.show', $user) }}">
                    <img src="{{ $user->getGravatarUrl(100) }}" alt="{{ $user->name }}" class="img-responsive img-circle">
                </a>
                <h4>
                    <a href="{{ route('users.show', $user) }}">
                        {{ $user->name }}
                    </a>
                </h4>
                <div>
                    <i class="fa fa-map-marker"></i> {{ $user->location }}
                </div>
                <div>
                    <i class="fa fa-envelope"></i> {{ $user->email }}
                </div>
                <div>
                    <i class="fa fa-globe"></i> <a href="{{ route('users.show', $user) }}">{{ '@' . $user->username }}</a>
                </div>
                <div>
                    <i class="fa fa-gift"></i> Joined {{ $user->created_at->diffForHumans() }}
                </div>

                <hr>

                <div>
                    <button class="btn btn-default">Button</button>
                </div>
            </div>

            <div class="col-md-8">
                <ul class="media-list">
                    <li class="media">
                        <div class="media-left">
                            <a href="{{ route('users.show', $user) }}">
                                <img src="{{ $user->getGravatarUrl() }}" alt="{{ $user->name }}" class="img-circle">
                            </a>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">
                                <a href="{{ route('users.show', $user) }}">{{ $user->name }}</a>
                            </h4>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam soluta doloribus maiores aspernatur, omnis neque vel excepturi nisi repellendus iure ratione eaque at, consequatur nihil natus labore, possimus molestias. At.
                            </p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
@endsection
