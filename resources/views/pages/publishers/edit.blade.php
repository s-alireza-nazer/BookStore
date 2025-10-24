@extends('layouts.layout2')
@section('content')
<div class="row justify-content-center">
    <div class="col-3">
        <form action="{{route('publishers.update',['publisher'=>$publisher->id])}}" method="POST">
            @method('PUT')
            @csrf
            <div class="mb-3">
                <label for="title">Title</label>
                <input type="text" class="form-control" name="title" id="title" value="{{$publisher->title}}">
            </div>
            <div class="mb-3">
                <label for="address">Address</label>
                <textarea type="text" class="form-control" name="address" id="address"
                    rows="5">{{$publisher->address}}</textarea>
            </div>
            <input type="submit" value="Update" class="btn btn-primary w-100">
        </form>
    </div>
</div>
@endsection