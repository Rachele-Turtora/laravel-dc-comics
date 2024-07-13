<footer>
    <div class="footer-bg">
        <div class="container">
            <div class="footer-top">
                <ul class=" footer-lists d-flex">
                    @foreach ($footer_lists as $footer_list)
                    <li class="m-2">
                        <ul class="footer-list">
                            @foreach ($footer_list as $item)
                            <li>{{$item}}</li>
                            @endforeach
                        </ul>
                    </li>
                    @endforeach
                </ul>
            </div>
            <div class="footer-bottom">

            </div>
        </div>
    </div>
</footer>