@extends('layouts.layout2')
@section('content')
<div class="row justify-content-center">
    <div class="col-3">
        <form action="{{route('authors.update',['author'=>$author->id])}}" method="POST">
            @method('PUT')
            @csrf
            <div class="mb-3">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="name" id="name" value="{{$author->name}}">
            </div>
            <div class="mb-3">
                <label for="family">Family</label>
                <input type="text" class="form-control" name="family" id="family" value="{{$author->family}}">
            </div>
            <input type="submit" value="Update" class="btn btn-primary w-100">
        </form>
    </div>
</div>
@endsection