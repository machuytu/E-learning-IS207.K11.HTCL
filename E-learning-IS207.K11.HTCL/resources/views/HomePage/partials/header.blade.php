<header id="site-header" class="header">
    <div id="header-wrap" class="border-nhut">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Navbar -->
                    <nav class="navbar navbar-expand-lg">
                        <a class="navbar-brand logo" href="/">
                            <img id="logo-img" class="img-center" src="{{asset('images/logo.png')}}" alt="">
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                            <span></span>
                            <span></span>
                            <span></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNavDropdown">
                            <!-- Left nav -->
                            <ul id="main-menu" class="nav navbar-nav ml-auto mr-auto font-nav">
                                <li class="nav-item"> <a class="nav-link active" href="#ngoaingu">Ngoại ngữ</a>
                                    <ul>
                                        @foreach ($the_loai_ngoai_ngus as $the_loai_ngoai_ngu)
                                        <li>
                                            <a href="{{ route('lop.index', ['id_the_loai' => $the_loai_ngoai_ngu->id]) }}">{{ $the_loai_ngoai_ngu->ten_tl ?? ''}}</a>
                                        </li>
                                        @endforeach
                                    </ul>
                                </li>
                                <li class="nav-item"> <a class="nav-link" href="#laptrinh">Lập trình</a>
                                    <ul>
                                        @foreach ($the_loai_lap_trinhs as $the_loai_lap_trinh)
                                        <li>
                                            <a href="{{ route('lop.index', ['id_the_loai' => $the_loai_lap_trinh->id]) }}">{{ $the_loai_lap_trinh->ten_tl}}</a>
                                        </li>
                                        @endforeach
                                    </ul>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="#kynangsong">Kỹ năng sống</a>
                                    <ul>
                                        @foreach ($the_loai_ky_nang_mens as $the_loai_ky_nang_mem)
                                        <li>
                                            <a href="{{ route('lop.index', ['id_the_loai' => $the_loai_ky_nang_mem->id]) }}">{{ $the_loai_ky_nang_mem->ten_tl ?? ''}}</a>
                                        </li>
                                        @endforeach
                                    </ul>
                                </li>
                                <li class="nav-item"> <a class="nav-link" href="#">Đồ Họa</a>
                                    <ul>
                                        @if ($the_loai_do_hoas)
                                        @foreach ($the_loai_do_hoas as $the_loai_do_hoa)
                                        <li>
                                            <a href="{{ route('lop.index', ['id_the_loai' => $the_loai_do_hoa->id]) }}">{{ $the_loai_do_hoa->ten_tl ?? ''}}</a>
                                        </li>
                                        @endforeach
                                        @endif
                                    </ul>
                                </li>
                                <li class="nav-item"> <a class="nav-link" href="#">Blogs</a>

                                </li>
                                <li class="nav-item"> <a class="nav-link" href="#">Liên hệ với chúng tôi</a>

                                </li>
                            </ul>
                        </div>
                        <a class="btn buttonnhutcst3" href="{{{ route('login') }}}" data-text="Đăng nhập">
                            <span>Đ</span><span>ă</span><span>n</span><span>g
                            </span><span></span><span>N</span><span>h</span><span>ậ</span><span>p</span>
                        </a>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
