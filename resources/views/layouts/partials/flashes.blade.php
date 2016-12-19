@if (Session::has('error'))
    <div class="alert alert-danger">
        <button type="button" data-dismiss="alert" aria-label="Close" class="close">
            <span aria-hidden="true">&times;</span>
        </button>
        <div>{{ Session::get('error') }}</div>
    </div>
@endif

@if (Session::has('status'))
    <div class="alert alert-success">
        <button type="button" data-dismiss="alert" aria-label="Close" class="close">
            <span aria-hidden="true">&times;</span>
        </button>
        <div>{{ Session::get('status') }}</div>
    </div>
@endif

@if (count($errors) > 0)
    <div class="alert alert-danger">
        <button type="button" data-dismiss="alert" aria-label="Close" class="close">
            <span aria-hidden="true">&times;</span>
        </button>

        @foreach ($errors->all() as $error)
            <div>{{ $error }}</div>
        @endforeach
    </div>
@endif

@if (Session::has('success'))
    <div class="alert alert-success">
        <button type="button" data-dismiss="alert" aria-label="Close" class="close">
            <span aria-hidden="true">&times;</span>
        </button>
        <div>{{ Session::get('success') }}</div>
    </div>
@endif

@if (Session::has('info'))
    <div class="alert alert-info">
        <button type="button" data-dismiss="alert" aria-label="Close" class="close">
            <span aria-hidden="true">&times;</span>
        </button>
        <div>{{ Session::get('info') }}</div>
    </div>
@endif

@if (Session::has('warning'))
    <div class="alert alert-warning">
        <button type="button" data-dismiss="alert" aria-label="Close" class="close">
            <span aria-hidden="true">&times;</span>
        </button>
        <div>{{ Session::get('warning') }}</div>
    </div>
@endif
