<header class="@unless(Route::currentRouteName() === 'home') bg-black text-light @endunless">
    <div class="container">
        <div class="d-flex align-items-center">
            <div class="col-3">
                <div class="img-container m-4">
                    <a href="{{route('home')}}"><img src="{{ Vite::asset('resources/img/logo.png') }}" alt="logo"></a>
                </div>
            </div>
            <div class="col-9">
                <ul>
                    @foreach ($header_list as $item)
                    <li class="text-uppercase gray fw-bold mx-2">
                        @if ($item === 'comics')
                        <a class="gray" href="{{ route('comics.index') }}">{{ $item }}</a>
                        @else
                        {{ $item }}
                        @endif
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</header>