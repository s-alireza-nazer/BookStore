@extends('layouts.layout2')
@section('content')
<div class="row justify-content-center">
    <div class="col-3">
        <form action="{{route('books.update',['book'=>$book->id])}}" method="POST">
            @method('PUT')
            @csrf
            <div class="mb-3">
                <label for="title">Title</label>
                <input type="text" class="form-control" name="title" id="title" value="{{$book->title}}">
            </div>
            <div class="mb-3">
                <label for="description">Description</label>
                <textarea type="text" class="form-control" name="description" id="description"
                    rows="5">{{$book->description}}</textarea>
            </div>
            <input type="submit" value="Update" class="btn btn-primary w-100">
        </form>
    </div>
</div>
@endsection