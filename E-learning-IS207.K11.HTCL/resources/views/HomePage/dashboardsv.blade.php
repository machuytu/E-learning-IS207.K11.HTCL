<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Dashboard</title>
  @include('HomePage.partials.nguon',[])
</head>
<body class="home-3">
@include('HomePage.partials.headerdashboard',[])
<div class="page-wrapper">

<!--header start-->



<!--header end-->
<section class="tuychinh" style=" margin-top:40px;">
<div class="container-fluid">
  <h1>website môn học</h1>
  <p>Ghi chú: Mọi ý kiến đóng góp về trang dashboard vui lòng liên hệ: 17520867@gm.uit.edu.vn</p>
  <div class="row">
    <div class="col-sm-3" style="background-color:lavender;">.col</div>
    <div class="col-sm-8 chuamonhoc">
      <h4 class="kh">Khóa học của bạn đã đăng kí</h4>
      <!--1 lop hoc-->
      <div class="row">
        <div class="col chuamonhoc">
          <h4 class="kh2">Tên môn: + mã lớp </h4>
          <p class="cach"><span class="newnhut">Tên giảng viên:</span> Mạc Huy Tú </p>
          <p class="cach"><span class="newnhut">Phòng học:</span> 101</p>
          <p class="cach"><span class="newnhut">Giờ học:</span> T2 Ca Sáng, T4 Ca Sáng</p>
         </div>
      </div> 
      <!--1 lop hoc-->
       <!--1 lop hoc-->
       <div class="row">
        <div class="col chuamonhoc">
          <h4 class="kh2">Tên môn: + mã lớp </h4>
          <p class="cach"><span class="newnhut">Tên giảng viên:</span> Mạc Huy Tú </p>
          <p class="cach"><span class="newnhut">Phòng học:</span> 101</p>
          <p class="cach"><span class="newnhut">Giờ học:</span> T2 Ca Sáng, T4 Ca Sáng</p>
         </div>
      </div> 
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