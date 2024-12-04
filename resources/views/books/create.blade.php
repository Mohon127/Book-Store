@extends('layout', ['title'=> 'New'])

@section('page-content')

<legend>New Book</legend>

<form method="post" action="{{route('books.store')}}">
    @csrf
    <div class="form-group">
        <label for="title" class="col-sm-2 control-label">Title</label>
        <div class="col-sm-10">
            <input type="text" class="form-control is-invalid " value="{{old('title')}}" id="title" name="title"
                   placeholder="Title">
            <div class="invalid-feedback">
                @error('title')
                {{ $message}}
                @enderror
            </div>
        </div>
    </div>
    <div class="form-group">
        <label for="title" class="col-sm-2 control-label">Author</label>
        <div class="col-sm-10">
            <input type="text" class="form-control is-invalid " value="{{old('author')}}" id="title" name="author"
                   placeholder="Author">
            <div class="invalid-feedback">
                @error('author')
                {{ $message }}
                @enderror
            </div>
        </div>
    </div>
    <div class="form-group">
        <label for="title" class="col-sm-2 control-label">ISBN</label>
        <div class="col-sm-10">
            <input type="text" class="form-control is-invalid " value="{{old('isbn')}}" id="title" name="isbn"
                   placeholder="ISBN">
            <div class="invalid-feedback">
                @error('isbn')
                {{ $message }}
                @enderror
            </div>
        </div>
    </div>
    <div class="form-group">
        <label for="title" class="col-sm-2 control-label">Stock</label>
        <div class="col-sm-10">
            <input type="text" class="form-control is-invalid " value="{{old('stock')}}" id="title" name="stock"
                   placeholder="Stock">
            <div class="invalid-feedback">
                @error('stock')
                {{ $message }}
                @enderror
            </div>
        </div>
    </div>
    <div class="form-group">
        <label for="title" class="col-sm-2 control-label">Price</label>
        <div class="col-sm-10">
            <input type="text" class="form-control is-invalid " value="{{old('price')}}" id="title" name="price"
                   placeholder="price">
            <div class="invalid-feedback">
                @error('price')
                {{ $message }}
                @enderror
            </div>
        </div>
    </div>

    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>

@endsection
