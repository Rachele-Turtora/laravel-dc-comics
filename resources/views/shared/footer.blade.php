<footer>
    <div class="footer-top-bg">
        <div class="container">
            <div class="footer-top">
                <ul class=" footer-lists d-flex">
                    @foreach ($footer_lists as $footer_list)
                    <li class="m-3">
                        <ul class="footer-list">
                            @foreach ($footer_list as $item)
                            <li>{{$item}}</li>
                            @endforeach
                        </ul>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-bottom-bg bg-dark">
        <div class="container">
            <div class="footer-bottom">
                <div class="d-flex align-items-center">
                    <div class="col-6">
                        <button class="text-uppercase border border-primary fw-semibold">Sign-up now!</button>
                    </div>
                    <div class="col-6 d-flex align-items-center">
                        <p class="text-primary text-uppercase fw-semibold">Follow us</p>
                        <div class="icons d-flex text-secondary mx-3">
                            <i class="fa-brands fa-facebook"></i>
                            <i class="fa-brands fa-square-twitter"></i>
                            <i class="fa-brands fa-youtube"></i>
                            <i class="fa-brands fa-square-pinterest"></i>
                            <i class="fa-brands fa-square-instagram"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>