<div class="sidebar">
    <div class="sidebar-inner">
        <div class="sidebar-logo">
            <div class="peers ai-c fxw-nw">
                <div class="peer peer-greed">
                    <a href="" class="sidebar-link td-n">
                        <div class="peers ai-c fxw-nw">
                            <div class="peer">
                                <div class="logo">
                                    <img src="/assets/static/images/logo.png" alt="">
                                </div>
                            </div>
                            <div class="peer peer-greed">
                                <h5 class="lh-1 mB-0 logo-text">
                                    {{ trans('panel.site_title') }}
                                </h5>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="peer">
                    <div class="mobile-toggle sidebar-toggle">
                        <a href="" class="td-n">
                            <i class="ti-arrow-circle-left"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <ul class="sidebar-menu scrollable pos-r ps">
            <li class="nav-item mT-30">
                <a href="{{ route("admin.home") }}" class="sidebar-link">
                    <span class="icon-holder">
                        <i class="nav-icon fas fa-fw fa-tachometer-alt"></i>
                    </span>
                    <span class="title">{{ trans('global.dashboard') }}</span>
                </a>
            </li>
            @can('user_management_access')
                <li class="nav-item dropdown">
                    <a class="dropdown-toggle" href="#">
                        <span class="icon-holder">
                            <i class="fa-fw fas fa-users nav-icon"></i>
                        </span>
                        <span class="title">{{ trans('cruds.userManagement.title') }}</span>
                        <span class="arrow">
                            <i class="ti-angle-right"></i>
                        </span>
                    </a>
                    <ul class="dropdown-menu">
                        @can('permission_access')
                            <li>
                                <a href="{{ route("admin.permissions.index") }}" class="sidebar-link {{ request()->is('admin/permissions') || request()->is('admin/permissions/*') ? 'active' : '' }}">
                                    <i class="fa-fw fas fa-unlock-alt nav-icon">

                                    </i>
                                    {{ trans('cruds.permission.title') }}
                                </a>
                            </li>
                        @endcan
                        @can('role_access')
                            <li>
                                <a href="{{ route("admin.roles.index") }}" class="sidebar-link {{ request()->is('admin/roles') || request()->is('admin/roles/*') ? 'active' : '' }}">
                                    <i class="fa-fw fas fa-briefcase nav-icon">

                                    </i>
                                    {{ trans('cruds.role.title') }}
                                </a>
                            </li>
                        @endcan
                        @can('user_access')
                            <li>
                                <a href="{{ route("admin.users.index") }}" class="sidebar-link {{ request()->is('admin/users') || request()->is('admin/users/*') ? 'active' : '' }}">
                                    <i class="fa-fw fas fa-user nav-icon">

                                    </i>
                                    {{ trans('cruds.user.title') }}
                                </a>
                            </li>
                        @endcan
                    </ul>
                </li>
            @endcan
            <li class="nav-item">
                <a href="#" class="nav-link" onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                    <span class="icon-holder">
                        <i class="nav-icon fas fa-fw fa-sign-out-alt"></i>
                    </span>
                    <span class="title">{{ trans('global.logout') }}</span>
                </a>
            </li>
        </ul>

    </div>
    <button class="sidebar-minimizer brand-minimizer" type="button"></button>
</div>
