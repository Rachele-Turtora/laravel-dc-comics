@extends('layouts.app')

@section('main')
<div class="container">
    <h2 class="mx-2 my-3">Elenco comics</h2>
    <ul>
        @foreach ($comics as $comic)
        <li class="comic my-4 mx-2 border-bottom border-primary w-75 d-flex justify-content-between">
            <div class="d-flex align-items-center">
                <!--<img src="{{ $comic['thumb'] }}" alt="img">-->
                <a class="gray" href="{{route('comics.show', $comic->id)}}">{{$comic['title']}}</a>
            </div>
            <div class="d-flex">
                <a href="{{route('comics.edit', $comic->id)}}">
                    <button class="btn btn-outline-primary m-1">
                        <i class="fa-solid fa-pencil"></i>
                    </button>
                </a>
                <form action="{{ route('comics.destroy', $comic->id) }}" method="POST" class="form-delete">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-outline-danger m-1" id="delete-button">
                        <i class="fa-solid fa-trash"></i>
                    </button>
                </form>
            </div>
        </li>
        @endforeach
    </ul>
    <a href="{{route('comics.create')}}">
        <button class="btn btn-outline-primary p-2 my-3">Crea nuovo comic</button>
    </a>
</div>
@endsection