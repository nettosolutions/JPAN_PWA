<header class="topbar" data-navbarbg="skin5">
    <nav class="navbar top-navbar navbar-expand-md navbar-dark">
        <div class="navbar-header" data-logobg="skin6">
            <!-- ============================================================== -->
            <!-- Logo -->
            <!-- ============================================================== -->
            <a class="navbar-brand" href="#">
                <!-- Logo icon -->
                <b class="logo-icon">
                    <!-- Dark Logo icon -->
                    JPAN
                </b>
                <!--End Logo icon -->
                <!-- Logo text -->
                <span class="logo-text">
                    <!-- dark Logo text -->
                    
                </span>
            </a>
            <!-- ============================================================== -->
            <!-- End Logo -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- toggle and nav items -->
            <!-- ============================================================== -->
            <a class="nav-toggler waves-effect waves-light text-dark d-block d-md-none"
                href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
        </div>
        <!-- ============================================================== -->
        <!-- End Logo -->
        <!-- ============================================================== -->
        <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
        <div class="ms-3 me-1">
            <a href="{{ url('/dashboard') }}" ><img src="{{ asset( 'images/Logo-Mobile.png' ) }}" class="rounded"></a>
        </div>
            <!-- ============================================================== -->
            <!-- Right side toggle and nav items -->
            <!-- ============================================================== -->
            <ul class="navbar-nav ms-auto d-flex align-items-center">
                <!-- ============================================================== -->
                <!-- Search -->
                <!-- ============================================================== -->
                <li class=" in">
                    <form role="search" class="app-search d-none d-md-block me-3">
                        <input type="text" placeholder="Search..." class="form-control mt-0">
                        <a href="" class="active">
                            <i class="fa fa-search"></i>
                        </a>
                    </form>
                </li>

                <!-- ============================================================== -->
                <!-- Language -->
                <!-- ============================================================== -->
                <li class="ms-1 me-1">
                    <!-- <div class="btn-group">
                        <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            
                        </button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item mb-1" href="#"><i class="fab fa-facebook-f"></i></a>
                        </div>
                    </div> -->
                    <div class="text-right btn btn-group" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="{{ asset( 'images/translate.png' ) }}">
                        <select name="language">
                            <option value="en" {{ \Session::get('language') == 'en' ? 'selected' : '' }}>English</option>
                            <option value="ms" {{ \Session::get('language') == 'ms' ? 'selected' : '' }}>Malay</option>
                        </select>
                    </div>  
                </li>

                <!-- ============================================================== -->
                <!-- Notifications -->
                <!-- ============================================================== -->
                <li class="ms-1 me-1">
                    <img src="{{ asset( 'images/bell.png' ) }}">
                </li>

                <!-- ============================================================== -->
                <!-- User profile and search -->
                <!-- ============================================================== -->
                <li class="ms-1 me-1">
                    <a class="profile-pic" href="{{ url('/userprofile') }}">
                        <img src="{{ asset('images/Avatar.png') }}" alt="user-img" width="36"
                            class="img-circle"><span class="text-blue font-medium">{{ Auth::user()->name }}</span></a>
                </li>
                <!-- ============================================================== -->
                <!-- User profile and search -->
                <!-- ============================================================== -->
            </ul>
        </div>
    </nav>
</header>