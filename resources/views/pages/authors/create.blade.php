@extends('layouts.layout2')
@section('content')
<div class="row justify-content-center">
    <div class="col-3">
        <form action="{{route('authors.store')}}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="title">Title</label>
                <input type="text" class="form-control" name="title" id="title">
            </div>
            <div class="mb-3">
                <label for="address">Address</label>
                <textarea type="text" class="form-control" name="address" id="address" rows="5"></textarea>
            </div>
            <input type="submit" value="Save" class="btn btn-primary w-100">
        </form>
    </div>
</div>
@endsection