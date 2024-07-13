@extends('layouts.app')

@section('main')
<div class="container">
    <h2 class="mx-2 my-3">Elenco comics</h2>
    <ul>
        @foreach ($comics as $comic)
        <li class="comic m-2">
            <!--<img src="{{ $comic['thumb'] }}" alt="img">-->
            <a href="{{route('comics.show', $comic->id)}}">{{$comic['title']}}</a>
        </li>
        @endforeach
    </ul>
    <a href="{{route('comics.create')}}">
        <button class="btn btn-outline-primary p-2 my-3">Crea nuovo comic</button>
    </a>
</div>
@endsection