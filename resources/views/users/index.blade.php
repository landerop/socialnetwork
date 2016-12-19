@extends('layouts.app')

@section('content')
    <div class="container">
        @if ($users->count())
            @foreach ($users->chunk(3) as $chunk)
                <div class="row">
                    @foreach ($chunk as $user)
                        <div class="col-xs-12 col-sm-6 col-md-4">
                            @include('users.partials.userblock')
                        </div>
                    @endforeach
                </div>
            @endforeach
        @else
            <p class="alert alert-info">No users available.</p>
        @endif
    </div>
@endsection
