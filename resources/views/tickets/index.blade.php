@extends('layouts')

@section('content')
    <a class="btn btn-primary" href="{{route('tickets.create')}}">Dodaj stronę</a>

    <table class="table table-hover">
        <tr>
            <th>ID</th>
            <th>TITLE</th>
            <th>EDIT</th>
            <th>DELETE</th>
        </tr>
        @foreach($tickets as $page)
            <tr>
                <td>{{ $page->id }}</td>
                <td>{{ $page->title  }}</td>
                <td><a class="btn btn-info" href="{{route('tickets.edit', $page)}}">Edit</a></td>
                <td>    
    
                  
        
                </td>
            </tr>
        @endforeach
    </table>

    {{ $tickets->links() }}


@endsection