<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
{{-- start header --}}
@include('adminpage.partials.headerPHP');
{{-- end header --}}
<body class="cbp-spmenu-push">
	<div class="main-content">
	<div class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
		<!--left-fixed -navigation-->
        @include('adminpage.partials.left_navigation');
		<!--left-fixed -navigation-->

		<!-- header-starts -->
        @include('adminpage.partials.header')
		<!-- //header-ends -->
		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
				<div class="tables">
					<h2 class="title1">Học Viên</h2>
                        <div class="col-md-6 validation-grids widget-shadow" data-example-id="basic-forms">
                            <div class="form-title">
                                <h3>Thêm Học Viên</h3>
                            </div>
                            <div class="form-body">
                                <table class="table table-bordered">
                                    @if (!empty($Hocviens))
                                        {{ Form::model($Hocviens, array('route' => array('hocviens.update',$Hocviens -> id), 'method' => 'PATCH')) }}
                                    @else
                                        {{ Form::open(['route' => ['hocviens.store'], 'method' => 'POST']) }}
                                    @endif
                                        {{ csrf_field() }}

                                            <div class="form-group">
                                                {{ Form::text('HoTen',null,['class' => 'form-control', 'placeholder' =>"Họ Tên"]) }}
                                            </div>
                                            <div class="form-group">
                                                {{ Form::text('NgaySinh',null,['class' => 'form-control', 'placeholder' =>"Ngày Sinh (Y-M-D)"]) }}
                                            </div>
                                            <div class="form-group">
                                                {{ Form::text('DiaChi',null,['class' => 'form-control', 'placeholder' =>"Địa Chỉ"]) }}
                                            </div>
                                            <div class="form-group">
                                                {{ Form::text('SDT',null,['class' => 'form-control', 'placeholder' =>"Số điện thoại"]) }}
                                            </div>

                                            <div class="form-group">
                                                <button class="btn btn-primary">Submit</button>
                                            </div>
                                        {{ Form::close() }}
                                </table>
                            </div>
                        </div>
				</div>
			</div>
		</div>
		<!--footer-->
		<div class="footer">
	   </div>
        <!--//footer-->
	</div>

	<!-- side nav js -->
	<script src='{{ asset('js/SidebarNav.min.js') }}' type='text/javascript'></script>
	<script>
      $('.sidebar-menu').SidebarNav()
    </script>
	<!-- //side nav js -->

	<!-- Classie --><!-- for toggle left push menu script -->
		<script src="{{ asset('js/classie.js') }}"></script>
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
	<script src="{{ asset('js/jquery.nicescroll.js') }}"></script>
	<script src="{{ asset('js/scripts.js') }}"></script>
	<!--//scrolling js-->

	<!-- Bootstrap Core JavaScript -->
	<script src="{{ asset('js/bootstrap.js') }}"> </script>

</body>
</html>
