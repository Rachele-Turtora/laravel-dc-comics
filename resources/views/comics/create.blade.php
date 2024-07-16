@extends('layouts.app')

@section('main')
<div class="container w-75 my-3">
    <h2>Inserisci un nuovo comic</h2>

    <form action="{{route('comics.store')}}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control @if ($errors->get('title')) is-invalid @endif" name="title" id="title" value="{{old('title')}}">
            @if ($errors->get('title'))
            @foreach ($errors->get('title') as $message)
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @endforeach
            @endif
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="number" step="0.001" class="form-control @if ($errors->get('price')) is-invalid @endif" name="price" id="price" value="{{old('price')}}"></input>
            @if ($errors->get('price'))
            @foreach ($errors->get('price') as $message)
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @endforeach
            @endif
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Type</label>
            <input type="text" class="form-control @if ($errors->get('type')) is-invalid @endif" name="type" id="type" value="{{old('type')}}"></input>
            @if ($errors->get('type'))
            @foreach ($errors->get('type') as $message)
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @endforeach
            @endif
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control @if ($errors->get('description')) is-invalid @endif" rows="3" name="description" id="description">{{old('description')}}</textarea>
            @if ($errors->get('description'))
            @foreach ($errors->get('description') as $message)
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @endforeach
            @endif
        </div>
        <button class="btn btn-primary">Crea comic</button>
    </form>
</div>
@endsection