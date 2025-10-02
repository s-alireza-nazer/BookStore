@extends('layouts.layout2')
@section('content')
<div class="row justify-content-center">
    <div class="col-3">
        <form action="{{route('books.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="cover">Cover</label>
                <input type="file" class="form-control" name="cover" id="cover">
            </div>
            <div class="mb-3">
                <label for="title">Title</label>
                <input type="text" class="form-control" name="title" id="title">
            </div>
            <div class="mb-3">
                <label for="description">Description</label>
                <textarea type="text" class="form-control" name="description" id="description" rows="5"></textarea>
            </div>
            <input type="submit" value="Save" class="btn btn-primary w-100">
        </form>
    </div>
</div>
@endsection