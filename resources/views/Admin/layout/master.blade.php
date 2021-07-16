<!doctype html>
<html class="fixed">
<head>
    @include('.Admin.layout.head')
</head>
<body>
<section class="body">
    <!-- start: header -->
    <header class="header">
        <div class="logo-container">
            <a href="../" class="logo">
                <img src="{{url('https://kenh14cdn.com/2020/8/28/photo-1-15986171022051518128948.jpg')}}" height="35"
                     alt="JSOFT Admin"/>
            </a>
            <div class="visible-xs toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html"
                 data-fire-event="sidebar-left-opened">
                <i class="fa fa-bars" aria-label="Toggle sidebar"></i>
            </div>
        </div>
        <!-- start: search & user box -->
        <div class="header-right">

            {{--            <form action="" class="search nav-form" style="display: none">--}}
            {{--                <div class="input-group input-search">--}}
            {{--                    <input type="text" class="form-control" name="search" placeholder="Search...">--}}
            {{--                    <span class="input-group-btn">--}}
            {{--								<button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>--}}
            {{--							</span>--}}
            {{--                </div>--}}
            {{--            </form>--}}

            <span class="separator"></span>
            <div id="userbox" class="userbox">
                <a href="#" data-toggle="dropdown">
                    <figure class="profile-picture">
                        <img src="/libs/assets/images/!logged-user.jpg" alt="Joseph Doe" class="img-circle"
                             data-lock-picture="/libs/assets/images/!logged-user.jpg"/>
                    </figure>
                    <div class="profile-info" data-lock-name="John Doe" data-lock-email="johndoe@JSOFT.com">
                        <span class="name">John Doe Junior</span>
                        <span class="role">administrator</span>
                    </div>
                    <i class="fa custom-caret"></i>
                </a>
                <div class="dropdown-menu">
                    <ul class="list-unstyled">
                        <li class="divider"></li>
                        <li>
                            <a role="menuitem" tabindex="-1" href="pages-user-profile.html"><i class="fa fa-user"></i>
                                My Profile</a>
                        </li>
                        <li>
                            <a role="menuitem" tabindex="-1" href="#" data-lock-screen="true"><i class="fa fa-lock"></i>
                                Lock Screen</a>
                        </li>
                        <li>
                            <a role="menuitem" tabindex="-1" href="pages-signin.html"><i class="fa fa-power-off"></i>
                                Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- end: search & user box -->
    </header>
    <!-- end: header -->
    <div class="inner-wrapper">
        <!-- start: sidebar -->
        <aside id="sidebar-left" class="sidebar-left">
            <div class="sidebar-header">
                <div class="sidebar-title">
                    Admin
                </div>
                <div class="sidebar-toggle hidden-xs" data-toggle-class="sidebar-left-collapsed" data-target="html"
                     data-fire-event="sidebar-left-toggle">
                    <i class="fa fa-bars" aria-label="Toggle sidebar"></i>
                </div>
            </div>
            @include('.Admin.layout.sidebar')
        </aside>
        <!-- end: sidebar -->
        <section role="main" class="content-body">
            <header class="page-header">
                <h2>@yield('header_page')</h2>
            </header>
            @yield('main')
        </section>
    </div>
</section>
@include('.Admin.layout.script')
</body>
</html>
