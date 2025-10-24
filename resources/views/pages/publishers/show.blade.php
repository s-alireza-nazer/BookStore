@extends('layouts.layout2')
@section('content')
<div class="card" style="width: 18rem;">
    <div class="card-body">
        <h5 class="card-title">{{$publisher->title}}</h5>
        <p class="card-text">{{$publisher->address}}</p>
        <a href="{{route('publishers.index')}}" class="btn btn-primary">
            Back
        </a>
    </div>
</div>
@endsection