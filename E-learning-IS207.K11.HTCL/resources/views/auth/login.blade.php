<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Glance Design Dashboard an Admin Panel Category Flat Bootstrap Responsive Website Template | Login Page :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Glance Design Dashboard Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<!-- Bootstrap Core CSS -->
<link href="{{ asset('css/adminpage_css/bootstrap.css') }}" rel='stylesheet' type='text/css' />

<!-- Custom CSS -->
<link href="{{ asset('css/adminpage_css/style.css') }}" rel='stylesheet' type='text/css' />

<!-- font-awesome icons CSS-->
<link href="{{ asset('css/adminpage_css/font-awesome.css') }}" rel="stylesheet">
<!-- //font-awesome icons CSS-->

 <!-- side nav css file -->
 <link href='{{ asset('css/adminpage_css/SidebarNav.min.css') }}' media='all' rel='stylesheet' type='text/css'/>
 <!-- side nav css file -->

 <!-- js-->
<script src="{{ asset('js/jquery-1.11.1.min.js') }}"></script>
<script src="{{ asset('js/modernizr.custom.js') }}"></script>

<!--webfonts-->
<link href="//fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">
<!--//webfonts-->

<!-- Metis Menu -->
<script src="{{ asset('js/metisMenu.min.js') }}"></script>
<script src="{{ asset('js/custom.js') }}"></script>
<link href="{{ asset('css/adminpage_css/custom.css') }}" rel="stylesheet">
<!--//Metis Menu -->

</head>
<body class="cbp-spmenu-push">
<div class="main-content">
		<!--left-fixed -navigation-->

		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page login-page ">
				<h2 class="title1">Login</h2>
				<div class="widget-shadow">
					<div class="login-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="form-group row">
                                    <input type="email" id="email" value="{{ old('email') }}" class="user" name="email" placeholder="Enter Your Email" required="">
                                    @if ($errors -> has('email'))
                                        <span class="help-block">
                                        <strong>{{$errors->first('email')}}</strong>
                                        </span>
                                    @endif
                            </div>

                            <div class="form-group row">
                                    <input type="password" id="password" value="{{ old('password') }}" name="password" class="lock" placeholder="Password" required="">
                                    @if ($errors -> has('password'))
                                        <span class="help-block">
                                        <strong>{{$errors->first('password')}}</strong>
                                        </span>
                                    @endif
                            </div>

                            <div class="forgot-grid">
                                    <label class="checkbox"><input type="checkbox" name="checkbox" {{ old('remember') ? 'checked': '' }} checked=""><i></i>Remember me</label>
                                    <div class="forgot">
                                        <a href="{{ route('password.request') }}">{{ __('Forgot Your Password?') }}</a>
                                    </div>
                                    <div class="clearfix"> </div>
                                </div>


                            <button type="submit" class="btn btn-primary">{{ __('login') }}</button>
							<div class="registration">
								Don't have an account ?
								<a class="" href="signup.html">
									Create an account
								</a>
							</div>
                        </form>
					</div>
				</div>

			</div>
		</div>
		<!--footer-->
		<div class="footer">
		   <p>&copy; 2018 Glance Design Dashboard. All Rights Reserved | Design by <a href="https://w3layouts.com/" target="_blank">w3layouts</a></p>		</div>
        <!--//footer-->
	</div>

	<!-- side nav js -->
	<script src='js/SidebarNav.min.js' type='text/javascript'></script>
	<script>
      $('.sidebar-menu').SidebarNav()
    </script>
	<!-- //side nav js -->

	<!-- Classie --><!-- for toggle left push menu script -->
		<script src="js/classie.js"></script>
		<script>
			var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
				showLeftPush = document.getElementById( 'showLeftPush' ),
				body = document.body;

			showLeftPush.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( body, 'cbp-spmenu-push-toright' );
				classie.toggle( menuLeft, 'cbp-spmenu-open' );
				disableOther( 'showLeftPush' );
			};

			function disableOther( button ) {
				if( button !== 'showLeftPush' ) {
					classie.toggle( showLeftPush, 'disabled' );
				}
			}
		</script>
	<!-- //Classie --><!-- //for toggle left push menu script -->

	<!--scrolling js-->
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/scripts.js"></script>
	<!--//scrolling js-->

	<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.js"> </script>
	<!-- //Bootstrap Core JavaScript -->

</body>
</html>
