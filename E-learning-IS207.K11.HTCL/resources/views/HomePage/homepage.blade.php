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
<title>Trang chủ</title>

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

<!-- Cac chuong trinh noi bac-->


<!--endct-->


<!--hero laptrinh section end-->


<!--body content start-->

<div class="page-content">

<!--about start-->


<!--about end-->


<!--feature start-->


<!--feature end-->


<!--step start-->



<!--step end-->


<!--team start-->


<!--team end-->


<!--price table start-->


<!--price table end-->


<!--testimonial start-->

<!--testimonial end-->


<!--counter start-->



<!--counter end-->


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
        @foreach ($lops as $lop)
          <div class="col-sm-4">
            <div class="post">
              <div class="post-image">
                @if($lop->hinh_anh_lop)
                    <img class="img-fluid hinhanhblog" src="{{ $lop->hinh_anh_lop->getUrl() }}">
                        <a class="post-categories" href="#">{{ $lop->mon_hoc['ten_mon_hoc'] }}</a>
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
                      <div class="col mr"><span class='giakm'>{{ $lop->gia * 90 / 100 }}0đ</span></div>

                      </div>

                    </li>
                  </ul>
                </div>
                <div class="post-title">
                  <h4><a href="href="#myModal" data-toggle="modal" data-target="#myModal"">{{ $lop->mon_hoc['ten_mon_hoc'] }} <br>(10 tuần)</a></h4>
                </div>
              </div>
            </div>
          </div>
          @endforeach
        </div>


    </div>
  </div>
</section>

<!--laptrinh end-->
<!--hero ngoaingu section start-->



<!--hero ngoaingu section end-->
<!--ngoaingu start-->

<section class="pos-r a">
  <div class="spinner-eff">
    <div class="spinner-circle circle-1"></div>
    <div class="spinner-circle circle-2"></div>
  </div>
  <div class="container">
    <div class="row text-center">
      <div class="col-lg-8 col-md-12 ml-auto mr-auto">
        <div class="section-title">
          <h2 class="title">Các khóa học bạn có thể quan tâm <br> <span class="text-themenew">"Tương lai"</span></h2>

        </div>
      </div>
    </div>
    <div class="row">

            <div class="row">
                    @foreach ($lops as $lop)
                      <div class="col-sm-4">
                        <div class="post">
                          <div class="post-image">
                            @if($lop->hinh_anh_lop)
                                <img class="img-fluid hinhanhblog" src="{{ $lop->hinh_anh_lop->getUrl() }}">
                                    <a class="post-categories" href="#">{{ $lop->mon_hoc['ten_mon_hoc'] }}</a>
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
                                  <div class="col mr"><span class='giakm'>{{ $lop->gia * 90 / 100 }}0đ</span></div>

                                  </div>

                                </li>
                              </ul>
                            </div>
                            <div class="post-title">
                              <h4><a href="href="#myModal" data-toggle="modal" data-target="#myModal"">{{ $lop->mon_hoc['ten_mon_hoc'] }} <br>(10 tuần)</a></h4>
                            </div>
                          </div>
                        </div>
                      </div>
                      @endforeach
                    </div>


    </div>
  </div>
</section>


<!--ngoaingu end-->
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
                      <span class="newnhutmodal">Khóa học xyz</span>
        </div>
          <button type="button" class="close" data-dismiss="modal">&times;</button>

        </div>
        <div class="modal-body">
          <div class="row padding-modal">
          <div class="col-xs-4">
            <span class="newnhutmodal3">Tên GV: Mạc Huy Tú</span>
          </div>
          <div class=" col-xs-4">
            <span class="newnhutmodal3">Ngày BĐ: 28/11/2019</span>
          </div>
          <div class=" col-xs-4">
            <span class="newnhutmodal3">(T5 Sáng, T7 Sáng)</span>
          </div>
          </div>
          <div>
          <p style ="text-align:justify;">Hồ Quỳnh Hương (sinh 16 tháng 10 năm 1980, tại Hạ Long, Quảng Ninh) là một ca sĩ nổi tiếng người Việt Nam, từng nhận được 2 đề cử và giành 1 giải Cống hiến. Ngoài ra, Hồ Quỳnh Hương còn rất đam mê âm nhạc cổ điển, cô rất hâm mộ nữ ca sĩ thính phòng Lan Anh và có lần cô từng đến nhà Lan Anh nhờ tư vấn và xin bản nhạc để thể hiện những bản nhạc cổ điển nước ngoài ,cô được biết đến với danh hiệu "cô gái của những giải thưởng" nhờ bộ sưu tập giải thưởng đồ sộ trong suốt sự nghiệp ca hát.

Hồ Quỳnh Hương được đánh giá là một trong những nữ ca sĩ hàng đầu Việt Nam và là giám khảo chính thức cuộc thi "Nhân tố bí ẩn" (X-Factor Vietnam) mùa thứ nhất và mùa thứ hai.

Hiện tại cô là giảng viên chuyên ngành thanh nhạc tại Đại học Văn hóa - Nghệ thuật Quân đội.</p>
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
