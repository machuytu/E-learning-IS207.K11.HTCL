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
            @include('adminpage.partials.header')
            <!-- header-starts -->

            <!-- //header-ends -->
            <!-- main content start-->
            <div id="page-wrapper">
                <div class="main-page">
                    <div class="tables">
                        <h2 class="title1">Học Viên</h2>
                        <div class="bs-example widget-shadow" data-example-id="bordered-table">
                            <table>
                                <tr>
                                    <h4>Danh sách học viên</h4>
                                </tr>
                                <tr>
                                    <h3 style="text-align: right">
                                        <a href="{{ route('hocviens.create') }}">
                                            <span class="label label-success">Thêm</span>
                                        </a>
                                    </h3>
                                </tr>
                            </table>

                            <br>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Họ và Tên</th>
                                        <th>Ngày Sinh</th>
                                        <th>Địa Chỉ</th>
                                        <th>Số Điện Thoại</th>
                                        <th colspan="2"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($Hocviens as $hocvien)
                                    <tr>
                                        <td>{{ $hocvien->HoTen }}</td>
                                        <td>{{ date('d-m-Y', strtotime($hocvien->NgaySinh)) }}</td>
                                        <td>{{ $hocvien->DiaChi }}</td>
                                        <td>{{ $hocvien->SDT }}</td>
                                        <td class="text-center">
                                            <form action="{{ route('hocviens.edit',$hocvien->id) }}">
                                                <button class="btn btn-primary">Edit</button>
                                            </form>
                                        </td>
                                        <td class="text-center">
                                            <form action="{{ route('hocviens.destroy', $hocvien->id)}}" method="post">
                                                {{ csrf_field() }}
                                                @method('DELETE')
                                                <button class="btn btn-danger" type="submit">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!--footer-->
            <div class="footer">
                <p>&copy; 2018 Glance Design Dashboard. All Rights Reserved | Design by <a href="https://w3layouts.com/"
                        target="_blank">w3layouts</a></p>
            </div>
            <!--//footer-->
        </div>

        <!-- side nav js -->
        <script src='{{ asset('js/SidebarNav.min.js') }}' type='text/javascript'></script>
        <script>
            $('.sidebar-menu').SidebarNav()
        </script>
        <!-- //side nav js -->

        <!-- Classie -->
        <!-- for toggle left push menu script -->
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
        <!-- //Classie -->
        <!-- //for toggle left push menu script -->

        <!--scrolling js-->
        <script src="{{ asset('js/jquery.nicescroll.js') }}"></script>
        <script src="{{ asset('js/scripts.js') }}"></script>
        <!--//scrolling js-->

        <!-- Bootstrap Core JavaScript -->
        <script src="{{ asset('js/bootstrap.js') }}"> </script>

</body>

</html>
