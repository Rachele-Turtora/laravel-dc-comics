@extends('layouts.app')

@section('main')
<div class="jumbo">
    <div class="overlay">
        <div class="m-5">
            <h1 class="text-light">DC Comics</h1>
            <button class="text-uppercase fw-semibold my-3"><a href="{{route('comics.index')}}">Vai all'elenco</a></button>
        </div>
    </div>
</div>
@endsection