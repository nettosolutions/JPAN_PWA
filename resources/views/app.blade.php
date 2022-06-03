<!DOCTYPE html>
<html lang="en">
<head>
<title>JPAN</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Custom styles for this template -->
   <!-- Custom CSS -->
   <link href="assets/css/chartist.min.css" rel="stylesheet">
   <link rel="stylesheet" href="assets/css/chartist-plugin-tooltip.css">
   <!-- Custom CSS -->
   <link href="assets/css/style.min.css" rel="stylesheet">
    <!-- All Jquery -->
    <!-- ============================================================== -->
   
    <!-- Bootstrap tether Core JavaScript -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    
    <!--This page JavaScript -->
    <!--chartis chart-->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/chartist.min.js"></script>
    <script src="assets/js/chartist-plugin-tooltip.min.js"></script>
    <script src="assets/js/jquery.sparkline.min.js"></script>
     <!--Custom JavaScript -->
    <script src="assets/js/custom.js"></script>

    <!-- PWA -->
    <meta name="theme-color" content="#6777ef"/>
    <link rel="apple-touch-icon" href="{{ asset( 'images/logo.png' ) }}">
    <link rel="manifest" href="{{ asset('/manifest.json') }}">
</head>
<body>
<!-- ============================================================== -->
    <!-- Preloader -->
    <!-- ============================================================== -->
    <div class="preloader">
      <div class="lds-ripple">
          <div class="lds-pos"></div>
          <div class="lds-pos"></div>
      </div>
  </div>
  <!-- ============================================================== -->
  <!-- Main wrapper -->
  <!-- ============================================================== -->
  <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
      data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
      <!-- ============================================================== -->
      <!-- Topbar header -->
      <!-- ============================================================== -->
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
                    <img src="{{ asset( 'images/Logo-Mobile.png' ) }}" class="rounded">
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
                          <img src="{{ asset( 'images/translate.png' ) }}">
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
                          <a class="profile-pic" href="#">
                              <img src="{{ asset('images/Avatar.png') }}" alt="user-img" width="36"
                                  class="img-circle"><span class="text-blue font-medium">Steave</span></a>
                      </li>
                      <!-- ============================================================== -->
                      <!-- User profile and search -->
                      <!-- ============================================================== -->
                  </ul>
              </div>
          </nav>
      </header>
      <!-- ============================================================== -->
      <!-- End Topbar header -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- Left Sidebar -->
      <!-- ============================================================== -->
      <aside class="left-sidebar" data-sidebarbg="skin6">
          <!-- Sidebar scroll-->
          <div class="scroll-sidebar">
              <!-- Sidebar navigation-->
              <nav class="sidebar-nav">
                  <ul id="sidebarnav">
                      <!-- User Profile-->
                      <li class="sidebar-item pt-2">
                          <a class="sidebar-link waves-effect waves-dark sidebar-link" href="#"
                              aria-expanded="false">
                              <img src="{{ asset( 'images/dashboard.png' ) }}" class="mx-1">
                              <span class="hide-menu mx-1"><h5>Main</h5></span>
                          </a>
                      </li>
                      <li class="sidebar-item">
                          <a class="sidebar-link waves-effect waves-dark sidebar-link" href="#"
                              aria-expanded="false">
                              <img src="{{ asset( 'images/staff.png' ) }}" class="mx-1">
                              <span class="hide-menu mx-1"><h5>Employees</h5></span>
                          </a>
                      </li>
                      <li class="sidebar-item">
                          <a class="sidebar-link waves-effect waves-dark sidebar-link" href="#"
                              aria-expanded="false">
                              <img src="{{ asset( 'images/administration.png' ) }}" class="mx-1">
                              <span class="hide-menu mx-1"><h5>Administration</h5></span>
                          </a>
                      </li>
                      <li class="sidebar-item">
                          <a class="sidebar-link waves-effect waves-dark sidebar-link" href="#"
                              aria-expanded="false">
                              <img src="{{ asset( 'images/reporting.png' ) }}" class="mx-1">
                              <span class="hide-menu mx-1"><h5>Reporting</h5></span>
                          </a>
                      </li>
                      <li class="sidebar-item">
                          <a class="sidebar-link waves-effect waves-dark sidebar-link" href="#"
                              aria-expanded="false">
                              <img src="{{ asset( 'images/applications.png' ) }}" class="mx-1">
                              <span class="hide-menu mx-1"><h5>Applications</h5></span>
                          </a>
                      </li>
                      <li class="sidebar-item">
                          <a class="sidebar-link waves-effect waves-dark sidebar-link" href="#"
                              aria-expanded="false">
                              <img src="{{ asset( 'images/recruit.png' ) }}" class="mx-1">
                              <span class="hide-menu mx-1"><h5>Recruitment</h5></span>
                          </a>
                      </li>
                  </ul>
              </nav>
              <!-- End Sidebar navigation -->
          </div>
          <!-- End Sidebar scroll-->
      </aside>
      <!-- ============================================================== -->
      <!-- End Left Sidebar -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- Page wrapper  -->
      <!-- ============================================================== -->
      <div class="page-wrapper">
          <!-- ============================================================== -->
          <!-- Container fluid  -->
          <!-- ============================================================== -->
          <div class="container-fluid">
              <!-- ============================================================== -->
              <!-- Three charts -->
              <!-- ============================================================== -->
              <div class="row justify-content-center">
                  <div class="col-lg-4 col-md-12">
                      <div class="white-box analytics-info">
                          <h3 class="box-title">Agencies for hiring</h3>
                          <ul class="list-inline two-part d-flex align-items-center mb-0">
                              <li>
                                  <div id="sparklinedash"><canvas width="67" height="30"
                                          style="display: inline-block; width: 67px; height: 30px; vertical-align: top;"></canvas>
                                  </div>
                              </li>
                              <li class="ms-auto"><span class="counter text-success">659</span></li>
                          </ul>
                      </div>
                  </div>
                  <div class="col-lg-4 col-md-12">
                      <div class="white-box analytics-info">
                          <h3 class="box-title">Success rate of the month</h3>
                          <ul class="list-inline two-part d-flex align-items-center mb-0">
                              <li>
                                  <div id="sparklinedash2"><canvas width="67" height="30"
                                          style="display: inline-block; width: 67px; height: 30px; vertical-align: top;"></canvas>
                                  </div>
                              </li>
                              <li class="ms-auto"><span class="counter text-purple">869</span></li>
                          </ul>
                      </div>
                  </div>
                  <div class="col-lg-4 col-md-12">
                      <div class="white-box analytics-info">
                          <h3 class="box-title">Recruitment conversations</h3>
                          <ul class="list-inline two-part d-flex align-items-center mb-0">
                              <li>
                                  <div id="sparklinedash3"><canvas width="67" height="30"
                                          style="display: inline-block; width: 67px; height: 30px; vertical-align: top;"></canvas>
                                  </div>
                              </li>
                              <li class="ms-auto"><span class="counter text-info">911</span>
                              </li>
                          </ul>
                      </div>
                  </div>
              </div>
              
              <!-- ============================================================== -->
              <!-- Chart panel -->
              <!-- ============================================================== -->
              <div id="app">
                <div class="row">
                    <!-- .col -->
                    <div class="col-md-12 col-lg-7 col-sm-12">
                        <div class="card white-box p-0">
                            <div class="card-body">
                                <h3 class="box-title mb-0">{{ __("language.panel1") }}</h3>
                            </div>
                            <div class="comment-widgets">
                                <!-- Multi Bar Chart -->
                                    <multi-bar-chart class="p-3"/> 
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-12 col-sm-12">
                        <div class="card white-box p-0">
                            <div class="card-heading">
                                <h3 class="box-title mb-0">{{ __("language.panel2") }}</h3>
                            </div>
                            <div class="card-body">
                                <pie-chart class="p-3"/>
                            </div>
                        </div>
                    </div>
                    <!-- /.col -->
                </div>
                <div class="row">
                    <!-- .col -->
                    <div class="col-md-12 col-lg-7 col-sm-12">
                        <div class="card white-box p-0">
                            <div class="card-body">
                                <h3 class="box-title mb-0">{{ __("language.panel3") }}</h3>
                            </div>
                            <div class="comment-widgets">
                                <!-- Comment Row -->
                                <div id="app">
                                    <line-chart class="p-3"/> 
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-12 col-sm-12">
                        <div class="card white-box p-0">
                            <div class="card-heading">
                                <h3 class="box-title mb-0">{{ __("language.panel4") }}</h3>
                            </div>
                            <div class="card-body">
                                <bar-chart class="p-3"/>
                            </div>
                        </div>
                    </div>
                    <!-- /.col -->
                </div>
              </div>
          </div>

          <!-- ============================================================== -->
          <!-- End Container fluid  -->
          <!-- ============================================================== -->
          <!-- ============================================================== -->
          <!-- footer -->
          <!-- ============================================================== -->
          <footer class="footer text-left"> 2022 © JABATAN PERKHIDMATAN AWAM NEGERI SABAH</a>
          </footer>
          <!-- ============================================================== -->
          <!-- End footer -->
          <!-- ============================================================== -->
      </div>
      <!-- ============================================================== -->
      <!-- End Page wrapper  -->
      <!-- ============================================================== -->
  </div>
  <!-- ============================================================== -->
  <!-- End Wrapper -->
  <!-- ============================================================== -->

  <script src="{{ mix('js/app.js') }}"></script>

  <!-- PWA -->
  <script src="{{ asset('/sw.js') }}" ></script>
    <script>
        if(!navigator.serviceWorker.controller){
            navigator.serviceWorker.register("/sw.js").then( function(reg)
            {
                console.log("Service worker has been registered for scope: " + reg.scope );
            });
        }
    </script>
</body>
</html>