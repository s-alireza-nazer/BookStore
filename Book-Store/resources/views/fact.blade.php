@extends('layout')
@section('title','Fact')

@section('content')

@if(!empty($error))
<div class="alert alert-danger" role="alert">
    {{$error}}
</div>
@else
<div>
    Your number is {{ $number }}
</div>
<div>
    The Factorial is {{ $fact }}
</div>
@endif