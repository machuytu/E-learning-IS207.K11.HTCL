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
					<h2 class="title1">Giáo Viên</h2>
                        <div class="col-md-6 validation-grids widget-shadow" data-example-id="basic-forms">
                            <div class="form-title">
                                <h3>Thêm Giáo Viên</h3>
                            </div>
                            <div class="form-body">
                                <table class="table table-bordered">
                                    @if (!empty($Giaoviens))
                                        {{ Form::model($Giaoviens, array('route' => array('giaoviens.update',$Giaoviens -> id), 'method' => 'PATCH')) }}
                                    @else
                                        {{ Form::open(['route' => ['giaoviens.store'], 'method' => 'POST']) }}
                                    @endif
                                        {{ csrf_field() }}

                                            <div class="form-group">
                                                {{ Form::text('HoTen',null,['class' => 'form-control', 'placeholder' =>"Họ Tên"]) }}
                                            </div>
                                            <div class="form-group">
                                                {{ Form::radio('Loai', 'Giáo Viên') }} Giáo Viên
                                                {{ Form::radio('Loai', 'Trợ Giảng') }} Trợ Giảng
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
                                                {{ Form::file('image') }}
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

    {{-- start js --}}
    @include('adminpage.partials.js_adminpage')
    {{-- end js --}}

</body>
</html>
