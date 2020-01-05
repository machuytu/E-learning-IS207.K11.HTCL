<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $lop->ten_lop_hoc }}</title>
    {{--css include--}}
    @include('HomePage.partials.nguon',[])
</head>
{{$stt=0}}
<body class="home-3">

    <div class="page-wrapper">
        <!--header start-->
        @include('HomePage.partials.headerdashboard',[])
        <!--header end-->

        <section class="tuychinh" style=" margin-top:40px;">
            <div class="container-fluid">
                <h1 class="tieude">{{ $lop->ten_lop_hoc }}</h1>

                <div class="row">
                    <div class="moinew col-sm-3">
                    <b><h4 class="kh" style="text-align:center">THÔNG TIN GIẢNG VIÊN</h4></b>
                   <img class="userpicture1 center card-img-top" src="{{ $lop->giao_vien['avatar']->getUrl() }}" alt="Card image" style="width:50%">

                    <h4 class="card-title" style="text-align:center">{{ $lop->giao_vien['name'] }}</h4>
                    <p><b>Mã giảng viên:</b> {{ $lop->giao_vien['id'] }}</p>
                    <p><b>Số điện thoại:</b> {{ $lop->giao_vien['phone_number'] }}</p>
                    <p><b>Email:</b> {{ $lop->giao_vien['email'] }}</p>
                    <b><h4 class="kh" style="text-align:center">THÔNG BÁO GIẢNG VIÊN</h4></b>
                    <div class="alert alert-info alert-dismissible">
                    <!--Tin tức-->
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong>Chúc mừng<br></strong>Chúc các học viên một năm mới hạnh phúc
                    </div>
                    <!--Thông báo báo-->
                    <div class="alert alert-warning alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong>Thông báo!<br></strong> Vì lý do mất điện trung tâm tạm nghỉ!
                    </div>
                    <!--Cảnh báo-->

                    </div>
                    <div class="moinew col-sm-8 chuamonhoc">
                        <h4 class="kh">KHÓA HỌC - {{ $lop->ten_lop_hoc }}</h4>
                        <!--lop hoc start-->
                        @foreach ($lop->baihocs as $baihoc)
                        <div class="row">
                            <div class="col chuamonhoc">
                                <a href="{{ route('baihocs.show',[$baihoc->lien_quan]) }}">
                                    <h4 class="kh2">LESSION {{$stt+=1}} - {{ $baihoc->ten_bai_hoc }} </h4>
                                </a>
                                <p class="cach"><span class="newnhut">TÊN GIẢNG VIÊN</span>{{ $lop->giao_vien['name'] }}</p>
                                <p class="cach"><span class="newnhut">CONTENT BÀI HỌC {{$stt}} </span>Nội dung </p>
                            </div>
                        </div>
                        @endforeach
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
