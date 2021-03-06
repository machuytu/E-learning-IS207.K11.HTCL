<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    @include('HomePage.partials.nguon',[])
    {{$stt=1}}
</head>

<body class="home-3">
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v5.0"></script>


    @include('HomePage.partials.headerdashboard',[])
    <div class="page-wrapper">

        <section class="tuychinh" style=" margin-top:40px;">
            <div class="container-fluid">
                <h1 class="tieude">website môn học
                </h1>
                <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>Chú ý!</strong> Mọi ý kiến đóng góp về trang dashboard vui lòng liên hệ: 17520867@gm.uit.edu.vn
                </div>
                {{-- @foreach ($lops as $key => $lop) --}}
                <div class="row">
                    <div class="moinew col-sm-3">
                    <!--Thông tin học viên-->
                    <b><h4 class="kh" style="text-align:center">THÔNG TIN HỌC VIÊN</h4></b>
                   <img class="userpicture1 center card-img-top " src="{{ $user->avatar->getUrl() }}" alt="Card image" style="width:50%">
                    <h4 class="card-title" style="text-align:center">{{ $user->name }}</h4>
                    <p><b>Mã học viên:</b> {{ $user->id }}</p>
                    <p><b>Địa chỉ:</b> {{ $user->address }}</p>
                    <p><b>Số điện thoại:</b>{{ $user->phone_number }}</p>
                {{-- @endforeach --}}
                    <!--Cảnh báo-->

                    <!--Thông báo trung tâm-->
                    <b><h4 class="kh" style="text-align:center">Thông báo trung tâm</h4></b>
                    <!--Thông báo báo-->
                    @foreach ($thongbaos as $key => $thongbao)
                    <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <strong>Thông báo!: {{ $thongbao->ten_tb}}<br></strong> {{ $thongbao->noi_dung }}
                    </div>
                    <!--Cảnh báo-->
                    @endforeach
                    </div>

            <div class="col-sm-8 chuamonhoc">
                        <h4 class="kh">Khóa học của bạn đã đăng kí</h4>
                        <!--1 lop hoc-->
                        @foreach ($lops as $key => $lop)
                        <div class="row">
                            <div class="col chuamonhoc">
                                <a href="{{ route('lops.show',[$lop->ten_link]) }}">
                                    <h4 class="kh2">{{ $lop->mo_hoc['ten_mh'] }} - {{ $lop->id }} </h4>
                                </a>
                                <p class="cach"><span class="newnhut">TÊN GIẢNG VIÊN</span>
                                    {{ $lop->giao_vien['name'] }} </p>
                                <p class="cach"><span class="newnhut">PHÒNG HỌC</span>
                                    {{ $lop->phong_hoc['ten_phong'] }}</p>
                                <p class="cach"><span class="newnhut">GIỜ HỌC</span> {{$lop->thu_hoc}} --- <b>{{$lop->ca_hoc}}</b>--- </p>

                                <button type="button" class="dinhdang btn btn-primary" data-toggle="collapse" data-target="#demo{{$stt+=1}}">Mô tả môn học</button>
                                <div id="demo{{$stt}}" class="collapse hidden" style="text-align:justify">
                               {{$lop->mo_ta}}
                                </div>
                                <br>
                                <p class="cach"><span class="newnhut">BÌNH LUẬN VỀ KHÓA HỌC CỦA HỌC VIÊN</span>
                                <div class="moinew fb-comments" data-href="https://developers.facebook.com/docs/plugins/comments#{{ $lop->mo_hoc['ten_mh'] }} - {{ $lop->id }}" data-width="" data-numposts="2">


                            </div>

                            </div>
                        </div>

                        @endforeach
                        <!--1 lop hoc-->
                    </div>

                </div>
            </div>
        </section>

        <!--section su kien-->

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
