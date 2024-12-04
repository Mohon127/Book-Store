@extends('layout', ['title' => 'Home'])

@section('page-content')

<legend>Show Book</legend>

<table class="table table-striped">
    <tr>
        <th>Book Title</th>
        <td>{{ $book->title }}</td>
    </tr>
    <tr>
        <th>Author</th>
        <td>{{ $book->author }}</td>
    </tr>
    <tr>
        <th>ISBN</th>
        <td>{{ $book->isbn }}</td>
    </tr>
    <tr>
        <th>Stock</th>
        <td>{{$book->stock}}</td>
    </tr>
    <tr>
        <th>Price</th>
        <td>{{$book->price}}</td>
    </tr>

    

   

</table>

<a class="btn btn-primary" href="{{ route('books.index') }}">Back to Books</a>


@endsection
