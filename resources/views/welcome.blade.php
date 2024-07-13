@extends('layouts.app')

@section('main')
<div class="jumbo">
    <div class="overlay">
        <div class="m-5">
            <h1 class="text-light">DC Comics</h1>
            <a class="my-3" href="{{route('comics.index')}}"><button class="text-uppercase fw-semibold">Vai all'elenco</button></a>
        </div>
    </div>
</div>
@endsection