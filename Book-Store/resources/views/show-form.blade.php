@extends('layouts.layout2')
@section('title', 'Show Form')

@section('content')
<div class="row justify-content-center">
    <div class="col-3">
        @if(!empty($first_name) && !empty($last_name) && !empty($age))
        <div class="alert alert-info alert-dismissible fade show" role="alert">
            <div>
                <strong>Welcome!</strong>
            </div>
            Welcome Mr. {!!$first_name!!} {{$last_name}}. You are {{$age}} years old.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        <!-- <form action="{{url('post-form')}}" method="POST"> -->
        <!-- <form action="{{route('postForm')}}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="first_name" class="form-label">First Name</label>
                <input type="text" class="form-control" name="first_name" id="first_name">
            </div>
            <div class="mb-3">
                <label for="last_name" class="form-label">Last Name</label>
                <input type="text" class="form-control" name="last_name" id="last_name">
            </div>
            <div class="mb-3">
                <label for="birth" class="form-label">Birth</label>
                <input type="text" class="form-control" name="birth" id="birth">
            </div>
            <input type="submit" value="Send" class="btn btn-success w-100">
        </form> -->
    </div>
</div>

<body>
    <form action="{{ route('postForm') }}" method="post">
        @csrf
        @if(!empty($firstName) && !empty($lastName))
        <div class="alert alert-primary" role="alert">
            welcome {{$firstName}} {{$lastName}}
        </div>
        @endif
        <div class="mb-3 w-25">
            <label for="firstName" class="form-label">First Name</label>
            <input type="text" class="form-control" name="firstName" id="firstName" value="{{ $firstName ?? '' }}">
        </div>
        <div class="mb-3 w-25">
            <label for="lastName" class="form-label">Last Name</label>
            <input type="text" class="form-control" name="lastName" id="lastName" value="{{ $lastName ?? '' }}">
        </div>
        <div class="mb-3 w-25">
            <label for="color" class="form-label">Color</label>
            <input type="text" class="form-control" name="color" id="color" value="{{ $color ?? 'white' }}">
        </div>
        <input type="submit" value="send" class="btn btn-danger w-25">
    </form>
</body>
@endsection

@push('css')
<style>
body {
    background-color: <?php echo $color ?? '#fff'?>;
}
</style>
@endpush