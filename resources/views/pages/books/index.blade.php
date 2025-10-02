@extends('layouts.layout2')
@section('content')
<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th>#</th>
            <th>Title</th>
            <th>Description</th>
            <th>Operations</th>
        </tr>
    </thead>
    <tbody>
        @foreach($books as $book)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$book->title}}</td>
            <td>{{Str::limit($book->description,20,'...')}}</td>
            <td>
                <div style="display: flex; gap:10px; align-items: center;">
                    <a href="{{route('books.show',['book' => $book->id])}}" class="operations-btn">
                        Show
                    </a>
                    <a href="{{route('books.edit',['book' => $book->id])}}" class="operations-btn">
                        Edit
                    </a>
                    <form action="{{route('books.destroy',['book' => $book->id])}}" method="POST"
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