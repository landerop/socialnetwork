<div class="well well-sm">
    <div class="row">
        <div class="col-sm-6 col-md-4 text-center">
            <a href="{{ route('users.show', $user) }}">
                <img src="{{ $user->getGravatarUrl(100) }}" alt="" class="img-circle img-responsive">
            </a>

            <br>

            <button class="btn btn-default">Button</button>
        </div>

        <div class="col-sm-6 col-md-8">
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
        </div>
    </div>
</div>
