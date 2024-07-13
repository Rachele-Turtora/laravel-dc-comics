@extends('layouts.app')

@section('main')
<div class="card-container">
    <h2>{{$comics->title}}</h2>
    <p class="text-secondary">{{$comics->type}}</p>
    <p>{{$comics->description}}</p>
    <p><strong>Price: </strong>${{$comics->price}}</p>
    <a href="{{route('comics.index')}}">Torna alla home</a>
</div>
@endsection