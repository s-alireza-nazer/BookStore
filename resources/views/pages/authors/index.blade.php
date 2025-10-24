@extends('layouts.layout2')
@section('content')
<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Family</th>
            <th>Operations</th>
        </tr>
    </thead>
    <tbody>
        @foreach($authors as $author)
        <tr>
            <td>{{$loop->iteration}}</td> <!-- ردیف -->
            <td>{{$author->name}}</td>
            <td>{{$author->family}}</td>
            <td>
                <div style="display: flex; gap:10px; align-items: center;">
                    <a href="{{route('authors.show',['author' => $author->id])}}" class="operations-btn">
                        Show
                    </a>
                    <a href="{{route('authors.edit',['author' => $author->id])}}" class="operations-btn">
                        Edit
                    </a>
                    <form action="{{route('authors.destroy',['author' => $author->id])}}" method="POST"
                        onsubmit="return confirm('Are you sure?');">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="operations-btn">Delete</button>
                    </form>
                </div>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection