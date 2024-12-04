@extends('layout', ['title' => 'Home'])

@section('page-content')

<legend>Books List</legend>

<div class="row mt-4">
    <div class="col-lg-10">
        <form class="d-flex" action="{{route('books.index')}}" method="GET ">
            <input class="form-control me-2" type="search" name="search" value="{{request('search')}}" placeholder="Search" aria-label="Search" >
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
    </div>
    <div class="col-lg-2">
        
        <a class="btn btn-primary" href="{{route('books.create')}}">Create New</a>
    </div>
</div>

<table class="table table-striped mt-4">
    <tr>
    <th>Title</th>
    <th>Author</th>
    <th>Action</th>
    </tr>

    @foreach ($books as $book)
    
    <tr>
        <td>{{ $book->title }}</td>
        <td>{{ $book->author }}</td>
        <td>
            <a href="{{route('books.show',$book->id)}}">View</a>
            <a href="{{route('books.edit',$book->id)}}">Edit</a>
            <form method="post" action="{{route('books.delete')}}" onsubmit="return confirm('Are you sure to delete?')" >
                @csrf
                @method('DELETE')

                <input type="hidden" name="id" value="{{$book->id}}">
                <button type="submit" class="btn btn-danger" >Delete</button>
            </form>

        </td>
    </tr>
        
    @endforeach

   

</table>

{{ $books->links() }}
@endsection
