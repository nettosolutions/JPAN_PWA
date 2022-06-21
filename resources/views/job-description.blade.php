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
    {{-- Datatables Style --}}
    <link rel="stylesheet" type="text/css"
        href="https://cdn.datatables.net/v/dt/dt-1.12.1/r-2.3.0/datatables.min.css" />
    <!-- Bootstrap tether Core JavaScript -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>

    {{-- Font Awesome --}}
    <script src="https://kit.fontawesome.com/dd6f5bab82.js" crossorigin="anonymous"></script>
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
@auth
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
      <x-header/>
      <!-- ============================================================== -->
      <!-- End Topbar header -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- Left Sidebar -->
      <!-- ============================================================== -->
      <aside class="left-sidebar" data-sidebarbg="skin6">
          <!-- Sidebar scroll-->
          <x-leftmenu/>
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
              <!-- <div class="row justify-content-center">
                  <div class="col-lg-4 col-md-12">
                      <div class="white-box analytics-info">
                          <h3 class="box-title">{{ __("language.card1") }}</h3>
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
                          <h3 class="box-title">{{ __("language.card2") }}</h3>
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
                          <h3 class="box-title">{{ __("language.card3") }}</h3>
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
              </div> -->

              <!-- ============================================================== -->
              <!-- Chart panel -->
              <!-- ============================================================== -->
              <div id="app">
                <h2>{{ __("language.job-description") }}</h2>
                <div class="row">
                    <!-- .col -->
                    <!-- <div class="col-md-12 col-lg-7 col-sm-12">
                        <div class="card white-box p-0">
                            <div class="card-body">
                                <h3 class="box-title mb-0">{{ __("language.panel1") }}</h3>
                            </div>
                            <div class="comment-widgets"> -->
                                <!-- Multi Bar Chart -->
                                    <!-- <multi-bar-chart class="p-3"/>
                            </div>
                        </div>
                    </div>  -->

                    <!-- .col -->
                    <div class="col-md-12 col-lg-6 col-sm-12">
                        <div class="card white-box p-0">
                            <div class="card-body">
                                <h3 class="box-title mb-0">{{ __("language.recruitment") }}</h3>
                            </div>
                            <form class="p-4">

                                <div class="form-group">
                                  <label for="exampleInputEmail1">Company :</label>
                                  <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>

                                <div class="form-group">
                                  <label for="exampleInputPassword1">Warrant department :</label>
                                  <input type="text" class="form-control" id="exampleInputPassword1">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputPassword1">Department :</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1">
                                  </div>

                                  <div class="form-group">
                                    <label for="exampleInputPassword1">SKB Code :</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1">
                                  </div>

                                  <div class="form-group">
                                    <label for="exampleInputPassword1">Grade :</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1">
                                  </div>

                                  <div class="form-group">
                                    <label for="exampleInputPassword1">Warrant Grade :</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1">
                                  </div>

                                  <div class="form-group">
                                    <label for="exampleInputPassword1">Group :</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1">
                                  </div>

                                  <div class="form-group">
                                    <label for="exampleInputPassword1">Work Location :</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1">
                                  </div>

                                  <div class="form-group">
                                    <label for="exampleInputPassword1">Email  :</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1">
                                  </div>

                                  <div class="form-group">
                                    <label for="exampleInputPassword1">Responsible Studies :</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1">
                                  </div>

                              </form>
                              <hr style="margin-top: 30px;margin-bottom:30px">
                              <div class="card-body">
                                <h3 class="box-title mb-0">{{ __("language.WarrantInformation") }}</h3>
                            </div>
                            <form class="p-4">

                                <div class="form-group">
                                  <label for="exampleInputEmail1">Current Number Of Employees :</label>
                                  <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>

                                <div class="form-group">
                                  <label for="exampleInputPassword1">Number of Non-Dsis  :</label>
                                  <input type="text" class="form-control" id="exampleInputPassword1">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputPassword1">Aircraft Percentage :</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1">
                                  </div>

                                  <div class="form-group">
                                    <label for="exampleInputPassword1">Vacancy Percentage :</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1">
                                  </div>

                                  <div class="form-group">
                                    <label for="exampleInputPassword1">Warrant Code :</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1">
                                  </div>

                                  <div class="form-group">
                                    <label for="exampleInputPassword1">Docketed Warrants :</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1">
                                  </div>



                              </form>
                        </div>
                    </div>
                    <!-- /.col -->
                    <!-- .col -->
                    <div class="col-md-12 col-lg-6 col-sm-12">
                        <div class="card white-box p-0">
                            <div class="card-body">
                                <h3 class="box-title mb-0">{{ __("language.offer") }}</h3>
                            </div>
                            <form class="p-4">

                                <div class="form-group">
                                  <label for="exampleInputEmail1">Officer In Charge :</label>
                                  <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>

                                <div class="form-group">
                                  <label for="exampleInputPassword1">Lorem ipsum :</label>
                                  <input type="text" class="form-control" id="exampleInputPassword1">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputPassword1">Service Group Service SCHEME :</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1">
                                  </div>






                              </form>
                              <hr style="margin-top: 30px;margin-bottom:30px">
                              <div class="card-body">
                                <h3 class="box-title mb-0">{{ __("language.CouncilInformation") }}</h3>
                            </div>
                            <form class="p-4">

                                <div class="form-group">
                                  <label for="exampleInputEmail1">Code Scheme :</label>
                                  <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>

                                <div class="form-group">
                                  <label for="exampleInputPassword1">Current Salary Amount :</label>
                                  <input type="text" class="form-control" id="exampleInputPassword1">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputPassword1">Total Daily Studies :</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1">
                                  </div>

                                  <div class="form-group">
                                    <label for="exampleInputPassword1">Current Allowance Amount :</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1">
                                  </div>

                                  <div class="form-group">
                                    <label for="exampleInputPassword1">Total Salary :</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1">
                                  </div>

                                  <div class="form-group">
                                    <label for="exampleInputPassword1">Total Allowance :</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1">
                                  </div>






                              </form>
                        </div>
                    </div>
                    <!-- /.col -->

                    <table id="JobTable" class="display" style="width:100%">

                        <thead class="thead">

                                <h3 class="box-title mb-2 mt-2">{{ __("language.MPKWaran") }}</h3>

                            <tr>
                                <th>Starting Date</th>
                                <th>Expiry Date</th>
                                <th>Number of Positions Under Warrant</th>
                                <th>Dsis Warrant</th>
                                <th>Number Of Vacancies</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>

                                <td>15 JAN 2022</td>
                                <td>15 MAC 2022</td>
                                <td>20</td>
                                <td>20</td>
                                <td>20</td>

                                  <td><i class="fa-solid fa-trash-can"></i></td>
                            </tr>

                            <tr>

                                <td>5 JUN 2022</td>
                                <td>10 JUN  2022</td>
                                <td>50</td>
                                <td>15</td>
                                <td>2</td>

                                  <td><i class="fa-solid fa-trash-can"></i></td>
                            </tr>



                        </tbody>
                    </table>

                </div>

              </div>
          </div>

          <!-- ============================================================== -->
          <!-- End Container fluid  -->
          <!-- ============================================================== -->
          <!-- ============================================================== -->
          <!-- footer -->
          <!-- ============================================================== -->
          <x-footer/>
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
  {{-- Datatables Script --}}
  <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.12.1/r-2.3.0/datatables.min.js"></script>
  <script>
      $(document).ready(function() {
          $('#JobTable').DataTable({
              responsive: true
          });
      });
  </script>

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
    <script type="text/javascript">
        $(document).ready(function() {
            $('select[name=language]').change(function() {
                var lang = $(this).val();
                window.location.href = "{{ route('changeLanguage') }}?language="+lang;
            });
        });
    </script>
@else
    <a class="text-center" href="{{ route('login') }}"><h1 class="nav-link" >{{ __('Login') }}</h1></a>
@endauth
</body>
</html>
