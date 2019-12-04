<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from themeht.com/softino/html/multipage/ltr/index-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 21 Mar 2019 04:08:34 GMT -->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="keywords" content="HTML5 Template" />
<meta name="description" content="HTML5 Template" />
<meta name="author" content="www.themeht.com" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<title>Trang Chủ</title>

@include('HomePage.partials.nguon',[])

</head>

<body class="home-3">

<!-- page wrapper start -->

<div class="page-wrapper">

<!--header start-->

@include('HomePage.partials.header',[])

<!--header end-->

<!--section su kien-->
<br><br>
<!--anh nen-->

<!--end and nen-->
<section class="hinhnen">
  <div class="container">

    <!--Anhnen-->

<section class="custom1">
<div class="container">

    <div class="row text-center">
      <div class="col-lg-8 col-md-12 ml-auto mr-auto">

      </div>
    </div>
    <div class="row">
      <div class="col-lg-8 col-md-12">
      <div id="demo" class="carousel slide" data-ride="carousel">

<!-- Indicators -->
<ul class="carousel-indicators">
  <li data-target="#demo" data-slide-to="0" class="active"></li>
  <li data-target="#demo" data-slide-to="1"></li>
  <li data-target="#demo" data-slide-to="2"></li>
</ul>

<!-- The slideshow -->
<div class="carousel-inner">
  <div class="carousel-item active">
    <img src="{{asset('images/hinhkhoahoc/a.png')}}" alt="Los Angeles" width="600" height="400">
  </div>
  <div class="carousel-item">
    <img src="{{asset('images/hinhkhoahoc/b.jpg')}}" alt="Chicago" width="600" height="400">
  </div>
  <div class="carousel-item">
    <img src="{{asset('images/hinhkhoahoc/c.jpg')}}" alt="New York" width="600" height="400">
  </div>
</div>

<!-- Left and right controls -->
<a class="carousel-control-prev" href="#demo" data-slide="prev">
  <span class="carousel-control-prev-icon"></span>
</a>
<a class="carousel-control-next" href="#demo" data-slide="next">
  <span class="carousel-control-next-icon"></span>
</a>
</div>
<marquee class="dep "><span class="newnhut2">Nhân dịp khai trương trung tâm dành tặng voucher <b style="color:red;">giảm 20%</b> cho bất kì khóa học đến 100 khách hàng đầu tiên.</span></marquee>
      </div>
      <div class="col-lg-4 col-md-12 widget md-mt-5 hinhnenbao">
        <div class="recent-post main-post">
        <!--section--->
        <div id='nz-div-4'>
          <h3 class="tde">
                <span>TIN TỨC</span>
          </h3>
        </div>
        <!--section-->
          <ul class="list-unstyled">
            <li class="mb-3">
              <div class="recent-post-thumb mr-2">
                <img class="img-fluid" src="images/blog/htmlcss.jpg" alt="">
              </div>
              <div class="recent-post-desc">
                <div class="post-meta">
                  <ul class="list-inline">
                  <div class=" marinblog">
                      <span class="newnhut">By:<b> Lê Thị Trúc Hòa </b></span>
                      </div>
                  </ul>
                </div> <a href="blog-single.html">Lập trình Web căn bản (HTML, CSS)</a>
              </div>
            </li>
            <li class="mb-3">
              <div class="recent-post-thumb">
                <img class="img-fluid" src="images/blog/htmlcss2.jpg" alt="">
              </div>
              <div class="recent-post-desc">
                <div class="post-meta">
                  <ul class="list-inline">
                  <div class=" marinblog">
                      <span class="newnhut">By:<b> Hoàng Thụy Trinh</b></span>
                      </div>
                  </ul>
                </div> <a href="blog-single.html">Lập trình Web căn bản (HTML, CSS)</a>
              </div>
            </li>
            <li>
              <div class="recent-post-thumb">
                <img class="img-fluid" src="images/blog/java.jpg" alt="">
              </div>
              <div class="recent-post-desc">
                <div class="post-meta">
                  <ul class="list-inline">
                  <div class=" marinblog">
                      <span class="newnhut">By:<b>Nguyễn Minh Nhựt</b></span>
                      </div>
                  </ul>
                </div> <a href="blog-single.html">Lập trình JAVA căn bản</a>

              </div>
</div>
<div style="text-align:center; margin-top:15px;">
<div class=" marinblog">
                      <span class="newnhut2"><b> <a href="#" class="nextblog"> Xem Thêm >> </a></b></span>
  </div>

</div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
<!--Anhnenend-->

</section>
<!--end section sk--->

<!--hero laptrinh section start-->
</section>


<div class="page-content">


<!--laptrinh start-->
<section class="pos-r a">
  <div class="spinner-eff">
    <div class="spinner-circle circle-1"></div>
    <div class="spinner-circle circle-2"></div>
  </div>
  <div class="container">
    <div class="row text-center">
      <div class="col-lg-8 col-md-12 ml-auto mr-auto">
        <div class="section-title">
          <h2 class="title">Các khóa học mới của <br> <span class="text-themenew">"Tương lai"</span></h2>

        </div>
      </div>
    </div>
    <div class="row">

        <div class="row">
          <div class="col-sm-4">
            <div class="post">
              <div class="post-image">
                @if($lop->hinh_anh_lop)
                    <img class="img-fluid hinhanhblog" src="{{ $lop->hinh_anh_lop->getUrl() }}">
                        <a class="post-categories" href="">{{ $lop->mo_hoc->ten_mh ?? '' }}</a>
                @endif
            </div>
              <div class="post-desc">
                <div class="post-meta">
                  <ul class="list-inline">
                    <li>
                      <div class="row margingia">
                      <span class="newnhut">Thời gian bắt đầu: <b> {{ $lop->thgian_bd }} </b></span>
                      </div>
                    </li>
                    <br>
                    <li>
                      <div class="row margingia">
                      <span class="newnhut">Giảng viên: <b>{{ $lop->giao_vien['name'] }}</b> ({{ $lop->phong_hoc['ten_phong'] }})</span>
                      </div>
                    </li>
                   <br>
                    <li>
                      <div class="row margingia">

                      <span class="col mr newnhut">Giá gốc</span>
                      <div class="col mr"><span class='giamgia'>{{ $lop->gia }}đ </span></div>

                      </div>

                    </li>
                    <br>
                    <li>
                      <div class="row margingia ">

                      <span class="col mr newnhut">Giá KM</span>
                      <div class="col mr"><span class='giakm'>{{ $lop->gia * 90 / 100 }}đ</span></div>

                      </div>

                    </li>
                  </ul>
                </div>
                <div class="post-title">
                  <h4><a href="href="#myModal" data-toggle="modal" data-target="#myModal"">{{ $lop->mo_hoc['ten_mh']  }} <br>(10 tuần)</a></h4>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
  </div>
</section>
<!--laptrinh end-->
<!--hero ngoaingu section start-->



</div>
<!--hero kynangsong section start-->



<!--hero kynangsong section end-->
<!--kynangsong start-->


<!--kynangsong end-->
</div>

<!--body content end-->


<!--footer start-->

@include('HomePage.partials.footer',[])

<!--footer end-->


</div>

<!-- page wrapper end -->


<!--color-customizer start-->


<!--color-customizer end-->


<!--back-to-top start-->

<!--modalbox-->
 <!-- Modal -->
  <!-- Modal -->
  <div class="modal-nhut fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
        <div class="row margingia">
                      <span class="newnhutmodal">{{ $lop->ten_lop_hoc }}</span>
        </div>
          <button type="button" class="close" data-dismiss="modal">&times;</button>

        </div>
        <div class="modal-body">
            <div class="row padding-modal">
            <div class="col-xs-4">
                <span class="newnhutmodal3">Tên GV: {{ $lop->giao_vien['name'] }}</span>
            </div>
            <div class=" col-xs-4">
                <span class="newnhutmodal3">Ngày BĐ: {{ $lop->thgian_bd }}</span>
            </div>
            <div class=" col-xs-4">
                <span class="newnhutmodal3">(T5 Sáng, T7 Sáng)</span>
            </div>
            </div>
            <div>
            <p style ="text-align:justify;">
                {{ $lop->mo_ta }}
            </p>
          </div>

        </div>
        <div class="modal-footer">
        <div class=" col-xs-4">
            <span class="newnhutmodal3">Số lượng còn lại: 0/100</span>
          </div>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</div>
</div>

<!--modalbox-->

<!--back-to-top end-->

<script>
    $giakm = $lop->thgian_bd * 90%;
</script>
<!-- inject js start -->

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

<!-- inject js end -->

</body>


<!-- Mirrored from themeht.com/softino/html/multipage/ltr/index-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 21 Mar 2019 04:08:47 GMT -->
</html>
