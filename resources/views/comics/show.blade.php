@extends('layouts.app')

@section('main')
<div class="card-container">
    <h2>{{$comic->title}}</h2>
    <p class="text-secondary">{{$comic->type}}</p>
    <p>{{$comic->description}}</p>
    <p><strong>Price: </strong>${{$comic->price}}</p>
    <a href="{{route('comics.index')}}">Torna alla home</a>
</div>
@endsection