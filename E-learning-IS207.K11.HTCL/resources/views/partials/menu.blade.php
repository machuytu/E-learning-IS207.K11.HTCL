<aside class="main-sidebar">
    <section class="sidebar" style="height: auto;">
        <ul class="sidebar-menu tree" data-widget="tree">
            <li>
                <a href="{{ route("admin.home") }}">
                    <i class="fas fa-fw fa-tachometer-alt">

                    </i>
                    {{ trans('global.dashboard') }}
                </a>
            </li>
            @can('user_management_access')
                <li class="treeview">
                    <a href="#">
                        <i class="fa-fw fas fa-users">

                        </i>
                        <span>{{ trans('cruds.userManagement.title') }}</span>
                        <span class="pull-right-container"><i class="fa fa-fw fa-angle-left pull-right"></i></span>
                    </a>
                    <ul class="treeview-menu">
                        @can('permission_access')
                            <li class="{{ request()->is('admin/permissions') || request()->is('admin/permissions/*') ? 'active' : '' }}">
                                <a href="{{ route("admin.permissions.index") }}">
                                    <i class="fa-fw fas fa-unlock-alt">

                                    </i>
                                    <span>{{ trans('cruds.permission.title') }}</span>
                                </a>
                            </li>
                        @endcan
                        @can('role_access')
                            <li class="{{ request()->is('admin/roles') || request()->is('admin/roles/*') ? 'active' : '' }}">
                                <a href="{{ route("admin.roles.index") }}">
                                    <i class="fa-fw fas fa-briefcase">

                                    </i>
                                    <span>{{ trans('cruds.role.title') }}</span>
                                </a>
                            </li>
                        @endcan
                        @can('user_access')
                            <li class="{{ request()->is('admin/users') || request()->is('admin/users/*') ? 'active' : '' }}">
                                <a href="{{ route("admin.users.index") }}">
                                    <i class="fa-fw fas fa-user">

                                    </i>
                                    <span>{{ trans('cruds.user.title') }}</span>
                                </a>
                            </li>
                        @endcan
                    </ul>
                </li>
            @endcan
            @can('mon_hoc_access')
                <li class="{{ request()->is('admin/mon-hocs') || request()->is('admin/mon-hocs/*') ? 'active' : '' }}">
                    <a href="{{ route("admin.mon-hocs.index") }}">
                        <i class="fa-fw fas fa-cogs">

                        </i>
                        <span>{{ trans('cruds.monHoc.title') }}</span>
                    </a>
                </li>
            @endcan
            @can('the_loai_access')
                <li class="{{ request()->is('admin/the-loais') || request()->is('admin/the-loais/*') ? 'active' : '' }}">
                    <a href="{{ route("admin.the-loais.index") }}">
                        <i class="fa-fw fas fa-align-justify">

                        </i>
                        <span>{{ trans('cruds.theLoai.title') }}</span>
                    </a>
                </li>
            @endcan
            @can('co_so_access')
                <li class="{{ request()->is('admin/co-sos') || request()->is('admin/co-sos/*') ? 'active' : '' }}">
                    <a href="{{ route("admin.co-sos.index") }}">
                        <i class="fa-fw fas fa-archway">

                        </i>
                        <span>{{ trans('cruds.coSo.title') }}</span>
                    </a>
                </li>
            @endcan
            @can('phong_hoc_access')
                <li class="{{ request()->is('admin/phong-hocs') || request()->is('admin/phong-hocs/*') ? 'active' : '' }}">
                    <a href="{{ route("admin.phong-hocs.index") }}">
                        <i class="fa-fw fas fa-hospital">

                        </i>
                        <span>{{ trans('cruds.phongHoc.title') }}</span>
                    </a>
                </li>
            @endcan
            @can('lop_access')
                <li class="{{ request()->is('admin/lops') || request()->is('admin/lops/*') ? 'active' : '' }}">
                    <a href="{{ route("admin.lops.index") }}">
                        <i class="fa-fw fas fa-address-book">

                        </i>
                        <span>{{ trans('cruds.lop.title') }}</span>
                    </a>
                </li>
            @endcan
            @can('bai_hoc_access')
                <li class="{{ request()->is('admin/bai-hocs') || request()->is('admin/bai-hocs/*') ? 'active' : '' }}">
                    <a href="{{ route("admin.bai-hocs.index") }}">
                        <i class="fa-fw fas fa-cogs">

                        </i>
                        <span>{{ trans('cruds.baiHoc.title') }}</span>
                    </a>
                </li>
            @endcan
            @can('thong_bao_access')
                <li class="{{ request()->is('admin/thong-baos') || request()->is('admin/thong-baos/*') ? 'active' : '' }}">
                    <a href="{{ route("admin.thong-baos.index") }}">
                        <i class="fa-fw fas fa-cogs">

                        </i>
                        <span>{{ trans('cruds.thongBao.title') }}</span>
                    </a>
                </li>
            @endcan
            <li>
                <a href="#" onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                    <i class="fas fa-fw fa-sign-out-alt">

                    </i>
                    {{ trans('global.logout') }}
                </a>
            </li>
        </ul>
    </section>
</aside>
