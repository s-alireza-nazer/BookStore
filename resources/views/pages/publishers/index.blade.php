@extends('layouts.layout2')
@section('content')
<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th>#</th>
            <th>Title</th>
            <th>Address</th>
            <th>Operations</th>
        </tr>
    </thead>
    <tbody>
        @foreach($publishers as $publisher)
        <tr>
            <td>{{$loop->iteration}}</td> <!-- ردیف -->
            <td>{{$publisher->title}}</td>
            <td>{{Str::limit($publisher->address,20,'...')}}</td>
            <td>
                <div style="display: flex; gap:10px; align-items: center;">
                    <a href="{{route('publishers.show',['publisher' => $publisher->id])}}" class="operations-btn">
                        Show
                    </a>
                    <a href="{{route('publishers.edit',['publisher' => $publisher->id])}}" class="operations-btn">
                        Edit
                    </a>
                    <form action="{{route('publishers.destroy',['publisher' => $publisher->id])}}" method="POST"
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