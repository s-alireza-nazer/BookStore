@extends('layout')
@section('title','Greeting')

@push('css')
<style>
    div {
        background-color: red;
    }

    .ali {
        background-color: green;
    }
</style>
@endpush

@section('content')
<div>Greeting</div>
<div>Greeting</div>
<div>Greeting</div>

<p class="ali">
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente tempora, deserunt nesciunt amet culpa quibusdam
    aliquam nulla reprehenderit praesentium nam perferendis facilis, vero non dignissimos? Nam recusandae placeat fugiat
    quibusdam.
</p>

<div>
    {{ $error }}
</div>

@endsection

@push('js')
<script>
    // alert("Hello Mr Nozer");
</script>
@endpush