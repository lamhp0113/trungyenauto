<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light">
    <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="fa fa-bars"></span> Menu
        </button>
        @if(isset($isDisplayBooking))
            <div class="form-group d-flex order-lg-last" style="font-size: 16px;
        background:#f79f24;
        margin: 0;
        padding: 0;
        font-weight: 500;
        color: white;
        text-transform: uppercase;
        letter-spacing: 1px;
        position: relative;
        ">
                <a style="color: white;" href="#datlich"><span
                        style="display: inline-block;padding: 16px 20px;">Đặt Lịch</span></a>
            </div>
        @endif

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item dropdown"><a class="nav-link " href="/">Trang chủ</a>
                </li>
                <li class="nav-item dropdown"><a class="nav-link" href="/about">Giới thiệu</a>

                </li>
                <li class="nav-item dropdown"><a href="#" class="nav-link">Dịch vụ</a>
                    <div class="dropdown-menu animate slideIn" aria-labelledby="navbarDropdown">
                        @foreach($cate as $ca)
                            <a class="dropdown-item" href="/services/{{$ca->id}}">{{$ca->name}}</a>
                            @if(!($loop->last))
                                <div class="dropdown-divider"></div>
                            @endif
                        @endforeach
                    </div>
                </li>
                <li class="nav-item dropdown"><a href="#" class="nav-link">Khuyến mại</a>
                    <div class="dropdown-menu animate slideIn" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="/news/0">Tin tức</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="/news/1">Chương trình khuyến mại</a>
                    </div>
                </li>
                <li class="nav-item dropdown"><a href="/contact" class="nav-link">Liên hệ</a></li>
            </ul>
        </div>
    </div>
</nav>
