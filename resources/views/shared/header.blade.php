<header>
    <div class="container">
        <div class="d-flex align-items-center">
            <div class="col-3">
                <div class="img-container m-3">
                    <img src="{{ Vite::asset('resources/img/logo.png') }}" alt="logo">
                </div>
            </div>
            <div class="col-9">
                <ul>
                    @foreach ($header_list as $item)
                    <li class="text-uppercase fw-bold mx-2">{{$item}}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</header>