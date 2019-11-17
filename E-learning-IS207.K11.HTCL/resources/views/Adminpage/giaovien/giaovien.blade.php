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
                        <h2 class="title1">Giáo Viên</h2>
                        <div class="bs-example widget-shadow" data-example-id="hoverable-table">
                            <table>
                                <tr>
                                    <h4>Danh sách giáo viên</h4>
                                </tr>
                                <tr>
                                    <h3 style="text-align: right">
                                        <a href="{{ route('giaoviens.create') }}">
                                            <span class="label label-success">Thêm</span>
                                        </a>
                                    </h3>
                                </tr>
                            </table>

                            <br>
                            <table class="table table-hover"">
                                <thead>
                                    <tr>
                                        <th>Họ và Tên</th>
                                        <th>Loại Giáo Viên</th>
                                        <th>Ngày Sinh</th>
                                        <th>Địa Chỉ</th>
                                        <th>Số Điện Thoại</th>
                                        <th colspan="2"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($Giaoviens as $giaovien)
                                    <tr>
                                        <td>{{ $giaovien->HoTen }}</td>
                                        <td>{{ $giaovien->Loai }}</td>
                                        <td>{{ date('d-m-Y', strtotime($giaovien->NgaySinh)) }}</td>
                                        <td>{{ $giaovien->DiaChi }}</td>
                                        <td>{{ $giaovien->SDT }}</td>
                                        <td class="text-center">
                                            <form action="{{ route('giaoviens.edit',$giaovien->id) }}">
                                                <button class="btn btn-primary">Edit</button>
                                            </form>
                                        </td>
                                        <td class="text-center">
                                            <form action="{{ route('giaoviens.destroy', $giaovien->id)}}" method="post">
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
            </div>
            <!--//footer-->
        </div>

        {{-- start js --}}
        @include('adminpage.partials.js_adminpage')
        {{-- end js --}}
</body>

</html>
