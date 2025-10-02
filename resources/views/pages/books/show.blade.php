@extends('layouts.layout2')
@section('content')
<div class="card" style="width: 18rem;">
    <img src="{{asset('storage/books/' . $book->cover)}}" alt="master-it" class="card-img-top">
    <div class="card-body">
        <h5 class="card-title">{{$book->title}}</h5>
        <p class="card-text">{{$book->description}}</p>
        <a href="{{route('books.index')}}" class="btn btn-primary">
            Back
        </a>
    </div>
</div>
@endsection