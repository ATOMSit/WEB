@if ($message = Session::get('success'))
    <div class="alert alert-success fade show" role="alert">
        <div class="alert-icon">
            <i class="flaticon-warning"></i>
        </div>
        <div class="alert-text lead">
            {{ $message }}
        </div>
    </div>
@endif

@if ($message = Session::get('error'))
    <div class="alert alert-solid-danger" role="alert">
        <div class="alert-icon">
            <i class="flaticon-warning"></i>
        </div>
        <div class="alert-text lead">
            {{ $message }}
        </div>
    </div>
@endif

@if ($errors->any())
    <div class="alert dark alert-alt alert-danger alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        @foreach ($errors->all() as $error)
            <div>{{$error}}</div>
        @endforeach
    </div>
@endif