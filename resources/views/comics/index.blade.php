@extends('layouts.app')

@section('main')
<h2>Elenco comics</h2>
<ul>
    @foreach ($comics as $comic)
    <li><a href="{{route('comics.show', $comic->id)}}">{{$comic['title']}}</a></li>
    @endforeach
</ul>
<a href="{{route('comics.create')}}">Crea un nuovo comic</a>
@endsection