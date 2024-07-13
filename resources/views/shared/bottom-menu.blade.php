<div class="bottom-menu bg-primary">
    <div class="container">
        <ul class="d-flex p-5">
            @foreach ($menu as $item)
            <li class="mx-3">
                <div class="d-flex">
                    <i class="{{$item['icon']}} text-light me-2"></i>
                    <p class="text-light text-uppercase m-0">{{$item['text']}}</p>
                </div>
            </li>
            @endforeach
        </ul>
    </div>
</div>