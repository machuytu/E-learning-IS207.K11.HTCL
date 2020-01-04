<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    {{--css include--}}
    @include('HomePage.partials.nguon',[])
</head>

<body class="home-3">

    <div class="page-wrapper">
        <!--header start-->
        @include('HomePage.partials.headerdashboard',[])
        <!--header end-->

        <section class="tuychinh" style=" margin-top:40px;">
            <div class="container-fluid">
                <h1>website môn học: {{ $baihoc->lop->ten_lop_hoc }}</h1>
                <p>Ghi chú: Mọi ý kiến đóng góp về trang dashboard vui lòng liên hệ: 17520867@gm.uit.edu.vn</p>
                <div class="row">
                        <div class=" moinew col-sm-3" style="background-color:lavender;">
                            @foreach ($baihoc->lop->baihocs as $DS_baihoc)
                                <a href="{{ route('baihocs.show',[$DS_baihoc->lien_quan]) }}"
                                    @if ($DS_baihoc->id == $baihoc->id)
                                        style="font-weight: bold"
                                    @endif>
                                    {{ $DS_baihoc->ten_bai_hoc }}</a><br>
                            @endforeach
                        </div>
                    <div class="col-sm-8 chuamonhoc">
                        <h4 class="kh2">Tên bài học: {{ $baihoc->ten_bai_hoc }}</h4>
                        <p class="cach"><span class="newnhut">Lời ngắn:</span> {{ $baihoc->loi_ngan }} </p>
                        <p class="cach"><span class="newnhut">Nội dung:</span> {{ $baihoc->noi_dung }}</p>
                        <p class="cach"><span class="newnhut">Hình ảnh:</span>
                            @foreach($baihoc->hinh_anh_bai_hoc as $key => $media)
                                <a href="{{ $media->getUrl() }}" target="_blank">
                                    <img src="{{ $media->getUrl('thumb') }}" width="50px" height="50px">
                                </a>
                            @endforeach
                        </p>
                        <p class="cach"><span class="newnhut">File:</span>
                            @foreach($baihoc->file as $key => $media)
                                <a href="{{ $media->getUrl() }}" target="_blank">
                                    {{ trans('global.view_file') }}
                                </a>
                            @endforeach
                        </p>
                        @if ($baihoc_truoc)
                            <p><a href="{{ route('baihocs.show',[$baihoc_truoc->lien_quan]) }}"><< {{ $baihoc_truoc->ten_bai_hoc }}</a></p>
                        @endif
                        @if ($baihoc_sau)
                            <p><a href="{{ route('baihocs.show', [$baihoc_sau->lien_quan]) }}">>>{{ $baihoc_sau->ten_bai_hoc }}</a></p>
                        @endif
                        <!--lop hoc end-->
                    </div>
                </div>
            </div>
        </section>
        @include('HomePage.partials.footer',[])
    </div>
</body>

<!--== jquery -->
<script src="{{asset('js/jquery.3.3.1.min.js')}}"></script>

<!--== popper -->
<script src="{{asset('js/popper.min.js')}}"></script>

<!--== bootstrap -->
<script src="{{asset('js/bootstrap.min.js')}}"></script>

<!--== appear -->
<script src="{{asset('js/jquery.appear.js')}}"></script>

<!--== modernizr -->
<script src="{{asset('js/modernizr.js')}}"></script>

<!--== easing -->
<script src="{{asset('js/jquery.easing.min.js')}}"></script>

<!--== menu -->
<script src="{{asset('js/menu/jquery.smartmenus.js')}}"></script>

<!--== owl-carousel -->
<script src="{{asset('js/owl-carousel/owl.carousel.min.js')}}"></script>

<!--== magnific-popup -->
<script src="{{asset('js/magnific-popup/jquery.magnific-popup.min.js')}}"></script>

<!--== counter -->
<script src="{{asset('js/counter/counter.js')}}"></script>

<!--== countdown -->
<script src="{{asset('js/countdown/jquery.countdown.min.js')}}"></script>

<!--== contact-form -->
<script src="{{asset('js/contact-form/contact-form.js')}}"></script>

<!--== validate -->
<script src="{{asset('js/contact-form/jquery.validate.min.js')}}"></script>

<!--== map api -->
<script src="https://maps.googleapis.com/maps/api/js"></script>

<!--== map -->
<script src="{{asset('js/map.js')}}"></script>

<!--== wow -->
<script src="{{asset('js/wow.min.js')}}"></script>

<!--== color-customize -->
<script src="{{asset('js/color-customize/color-customizer.js')}}"></script>

<!--== theme-script -->
<script src="{{asset('js/theme-script.js')}}"></script>

</body>

</html>
