
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from themeht.com/softino/html/multipage/ltr/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 21 Mar 2019 04:20:48 GMT -->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="keywords" content="HTML5 Template" />
<meta name="description" content="HTML5 Template" />
<meta name="author" content="www.themeht.com" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<title>Trung tâm dạy học Tương lai</title>

<!-- favicon icon -->
<link rel="shortcut icon" href="/images/favicon.ico" />

<!-- inject css start -->

<!--== bootstrap -->
<link href="{{asset('/css/homepage_css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />

<link href="https://fonts.googleapis.com/css?family=Nunito:300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

<!--== animate -->
<link href="{{asset('/css/homepage_css/animate.css')}}" rel="stylesheet" type="text/css" />

<!--== fontawesome -->
<link href="{{asset('/css/homepage_css/fontawesome-all.css')}}" rel="stylesheet" type="text/css" />

<!--== line-awesome -->
<link href="/css/homepage_css/line-awesome.min.css" rel="stylesheet" type="text/css" />

<!--== magnific-popup -->
<link href="/css/homepage_css/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css" />

<!--== owl-carousel -->
<link href="/css/homepage_css/owl-carousel/owl.carousel.css" rel="stylesheet" type="text/css" />

<!--== base -->
<link href="/css/homepage_css/base.css" rel="stylesheet" type="text/css" />

<!--== shortcodes -->
<link href="/css/homepage_css/shortcodes.css" rel="stylesheet" type="text/css" />

<!--== default-theme -->
<link href="/css/homepage_css/style.css" rel="stylesheet" type="text/css" />

<!--== responsive -->
<link href="/css/homepage_css/responsive.css" rel="stylesheet" type="text/css" />

<!--== color-customizer -->
<link href="/css/homepage_css/color-customize/color-customizer.css" rel="stylesheet" type="text/css" />
<link href="{{asset('/css/homepage_css/theme-color/nhutcustom.css')}}" rel="stylesheet" type="text/css" />
<!-- inject css end -->

<!-- custom css -->
<style>
  #form_name, #form_password {
    height: 50px;
    border-radius: 10px;
    font-size: 16px;
    color: #1c1d3e;
    background: #ffffff85;
    border: 1.5px solid #646b7791;
    padding-left: 30px;
    margin-bottom: 23px;
    
  }
</style>
<!-- end custom css -->

</head>

<body>

<!-- page wrapper start -->

<div class="nhutcst1">

<!-- preloader start -->



<!-- preloader end -->


<!--header start-->



<!--header end-->


<!--page title start-->


<!--page title end-->


<!--body content start-->

<div class="page-content">

<!--login start-->

<section class="login">
  <div class="container">
    <div class="row align-items-center">

      <div class="col-lg-6 col-md-12 ml-auto mr-auto md-mt-5">
        <div class="login-form text-center nhutbackgroundlogin">
          <img class="img-center mb-5" src="/images/logo.png" alt="">
          <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}" style="margin-left: 50px;
    margin-right: 50px;">
                <input id="form_name" type="email" name="email" class="form-control" required autocomplete="email" autofocus placeholder="{{ trans('global.login_email') }}" value="{{ old('email', null) }}">

                @if($errors->has('email'))
                    <p class="help-block">
                        {{ $errors->first('email') }}
                    </p>
                @endif
            </div>
            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}" style="margin-left: 50px;
    margin-right: 50px;">
                <input id="form_password" type="password" name="password" class="form-control" required placeholder="{{ trans('global.login_password') }}">

                @if($errors->has('password'))
                    <p class="help-block">
                        {{ $errors->first('password') }}
                    </p>
                @endif
            </div>
            <div class="row">
                
                <button type="submit" class="btn btn-theme btn-block btn-circle" style="margin-left: 100px;
    margin-right: 100px; margin-bottom:20px">
                    {{ trans('global.login') }}
                </button>
            </div>
        </form>
          
         
        </div>
      </div>
    </div>
  </div>
</section>

<!--login end-->

</div>

<!--body content end-->


<!--footer start-->
@include('HomePage.partials.footer',[])


<!--footer end-->

</div>

<!-- page wrapper end -->


<!--color-customizer start-->

<div class="color-customizer closed">

  <div class="clearfix color-chooser text-center">
    <h4 class="text-theme font-w-8 mb-4">Softino With <span class="text-black font-w-5">Awesome Colors</span></h4>
    <ul class="colorChange clearfix">
      <li class="theme-default selected" title="theme-default" data-style="color-1"></li>
      <li class="theme-2" title="theme-2" data-style="color-2"></li>
      <li class="theme-3" title="theme-3" data-style="color-3"></li>
      <li class="theme-4" title="theme-4" data-style="color-4"></li>
      <li class="theme-5" title="theme-5" data-style="color-5"></li>
      <li class="theme-6" title="theme-6" data-style="color-6"></li>
    </ul>
    <div class="text-center mt-4">
      <a class="btn btn-theme btn-circle" href="#" data-text="Purchase Now">
       <span>P</span><span>u</span><span>r</span><span>c</span><span>h</span><span>a</span><span>s</span><span>e</span>
       <span> </span><span>N</span><span>o</span><span>W</span>
        </a>
    </div>
  </div>
</div>

<!--color-customizer end-->


<!--back-to-top start-->

<div class="scroll-top"><a class="smoothscroll" href="#top"><i class="flaticon-go-up-in-web"></i></a></div>

<!--back-to-top end-->


<!-- inject js start -->

<!--== jquery -->
<script src="../../../public/jshomepage/jquery.3.3.1.min.js"></script>

<!--== popper -->
<script src="../../../public/jshomepage/popper.min.js"></script>

<!--== bootstrap -->
<script src="../../../public/jshomepage/bootstrap.min.js"></script>

<!--== appear -->
<!-- <script src="../../../public/jshomepage/jquery.appear.js"></script>  -->

<!--== modernizr -->
<!-- <script src="../../../public/jshomepage/modernizr.js"></script>  -->

<!--== easing -->
<!-- <script src="../../../public/jshomepage/jquery.easing.min.js"></script>  -->

<!--== menu -->
<!-- <script src="../../../public/jshomepage/menu/jquery.smartmenus.js"></script> -->

<!--== owl-carousel -->
<!-- <script src="../../../public/jshomepage/owl-carousel/owl.carousel.min.js"></script>  -->

<!--== magnific-popup -->
<!-- <script src="../../../public/jshomepage/magnific-popup/jquery.magnific-popup.min.js"></script> -->

<!--== counter -->
<!-- <script src="../../../public/jshomepage/counter/counter.js"></script>  -->

<!--== countdown -->
<!-- <script src="../../../public/jshomepage/countdown/jquery.countdown.min.js"></script>  -->

<!--== confetti -->
<!-- <script src="../../../public/jshomepage/confetti.js"></script> -->

<!--== contact-form -->
<!-- <script src="../../../public/jshomepage/contact-form/contact-form.js"></script> -->

<!--== validate -->
<!-- <script src="../../../public/jshomepage/contact-form/jquery.validate.min.js"></script> -->


<!--== map -->

<!--== wow -->
<!-- <script src="../../../public/jshomepage/wow.min.js"></script> -->

<!--== color-customize -->
<!-- <script src="../../../public/jshomepage/color-customize/color-customizer.js"></script>  -->

<!--== theme-script -->
<!-- <script src="../../../public/jshomepage/theme-script.js"></script> -->

<!-- inject js end -->

</body>


<!-- Mirrored from themeht.com/softino/html/multipage/ltr/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 21 Mar 2019 04:20:48 GMT -->
</html>
