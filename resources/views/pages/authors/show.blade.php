@extends('layouts.layout2')
@section('content')
<div class="card" style="width: 18rem;">
    <div class="card-body">
        <h5 class="card-title">{{$author->name}}</h5>
        <p class="card-text">{{$author->family}}</p>
        <a href="{{route('authors.index')}}" class="btn btn-primary">
            Back
        </a>
    </div>
</div>
@endsection