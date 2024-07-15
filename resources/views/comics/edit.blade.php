@extends('layouts.app')

@section('main')
<div class="container w-75 my-3">
    <h2>Modifica comic</h2>

    <form action="{{route('comics.update', $comic->id)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" name="title" id="title" value="{{old('title', $comic->title)}}">
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="number" step="0.01" class="form-control" name="price" id="price" value="{{old('price', $comic->price)}}"></input>
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Type</label>
            <input type="text" class="form-control" name="type" id="type" value="{{old('type', $comic->type)}}"></input>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" rows="3" name="description" id="description">{{old('description', $comic->description)}}</textarea>
        </div>
        <button class="btn btn-primary">Modifica comic</button>
    </form>
</div>
@endsection