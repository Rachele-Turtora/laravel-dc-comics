@extends('layouts.app')

@section('main')
<div class="container w-75 my-3">
    <h2>Inserisci un nuovo comic</h2>

    <form action="{{route('comics.store')}}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" name="title" id="title">
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="number" step="0.01" class="form-control" name="price" id="price"></input>
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Type</label>
            <input type="text" class="form-control" name="type" id="type"></input>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" rows="3" name="description" id="description"></textarea>
        </div>
        <button class="btn btn-primary">Crea comic</button>
    </form>
</div>
@endsection