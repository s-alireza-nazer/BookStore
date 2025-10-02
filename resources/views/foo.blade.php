@extends('layout')
@section('title','Foo')

@section('content')
@if(empty($first_name) || empty($last_name))
<div class="alert alert-danger" role="alert">
    Please enter your fullname.
</div>
@endif

<!-- And -->
@isset($first_name, $last_name)
<div>
    Hello Master it. My fullname is {{$first_name}} {{$last_name}}.
</div>
<div>
    You are {{$age}} years old.
</div>
@endisset

@if(@isset($first_name) || @isset($last_name))
<div>
    Yes
</div>
@endif

@if(!empty($error))
<div class="alert alert-danger" role="alert">
    {{$error}}
</div>
@else
<div>
    {{ $error }}
</div>
@endif


@isset($age)
@if($age<15) <p>You are a child.</p>
    @elseif($age>=15 and $age<25) <p>You are a teenager.</p>
        @else
        <p>You are an adult.</p>
        @endif
        @else
        <div class="alert alert-danger" role="alert">
            Age is not specified.
        </div>
        @endisset

        <ul class="list-group list-group-flush">
            @for($i=1;$i<=10;$i++) <li class="list-group-item">
                {{$i}}
                </li>
                @endfor
        </ul>
        @endsection