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
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.12.1/r-2.3.0/datatables.min.css"/>

    {{-- Font Awesome --}}
    <script src="https://kit.fontawesome.com/dd6f5bab82.js" crossorigin="anonymous"></script>

    {{-- Custom Table Styles --}}
    <link rel="stylesheet" type="text/css" href="assets/css/tablestyle.css">

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
    <style>
        .select-wrap
{
  border: 1px solid #777;
  border-radius: 4px;
  margin-bottom: 10px;
  text-align: left;
padding-left: 10px;
padding-top: 5px;
  background-color:white;
  max-height: 90%;
}

.select-wrap label
{

  font-size:14px;
  color: #777;

}

select
{
  background-color: white;
  border:0px;
  padding-bottom: 10px;
}

.search-input{
    max-height: 90% !important;
}
    </style>
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
                <h2>{{ __("language.employee") }}</h2>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="card white-box p-0">
                            <!-- <div class="card-heading">
                                <h3 class="box-title mb-0">{{ __("language.panel2") }}</h3>
                            </div> -->
                            <div class="container-fluid">
                            <div class="row col-md-12 text-center mt-4">
                                <div class="col-md-3">
                                    <input class="search-input" type="text" placeholder=" Employee ID" name="" id="">
                                </div>
                                <div class="col-md-3">
                                    <input class="search-input" type="text" placeholder=" Employee Name" name="" id="">
                                </div>
                                <div class="col-md-3">

                                    <div class="select-wrap">
                                        <label>Designation</label>
                                        <select name="color" style="width: 100%;">
                                          <option value="">Select Designation</option>
                                          <option value="yellow">Yellow</option>
                                          <option value="red">Red</option>
                                          <option value="green">Green</option>
                                        </select>
                                      </div>
                                </div>
                                <div class="col-md-3">
                                    <button style="height: 90%; background-color:#55ce63" class="btn btn-search">SEARCH</button>
                                </div>
                            </div>
                        </div>

                            <div class="card-body">
                                <table id="usersTable" class="display" style="width:100%">
                                    <thead class="thead">
                                        <tr>
                                            <th>Name</th>
                                            <th>Employee ID</th>
                                            <th>Email</th>
                                            <th>Mobile</th>
                                            <th>Join Date</th>
                                            <th>Role</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <img style="float:left;" class="user-avatar-table" src="https://i.ibb.co/8x9xK4H/team.jpg" alt="">
                                                <h5>Richard Miles</h5>
                                                <p style="font-size: 12px; color:#8896b6; font-weight:bold">Web Developer</p>
                                            </td>
                                            <td>FT-0007</td>
                                            <td>bernardogalaviz@emaple.com</td>
                                            <td>9876543210</td>
                                            <td>1 Jan 2013</td>
                                            <td><select class="status-select" name="status" id="status">
                                                <option value="web_developer">Web Developer</option>
                                              </select></td>
                                              <td><i class="fa-solid fa-ellipsis-vertical"></i></td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <img style="float:left;" class="user-avatar-table" src="https://i.ibb.co/8x9xK4H/team.jpg" alt="">
                                                <h5>Richard Miles</h5>
                                                <p style="font-size: 12px; color:#8896b6; font-weight:bold">Web Developer</p>
                                            </td>
                                            <td>FT-0007</td>
                                            <td>bernardogalaviz@emaple.com</td>
                                            <td>9876543210</td>
                                            <td>1 Jan 2013</td>
                                            <td><select class="status-select" name="status" id="status">
                                                <option value="web_developer">Web Developer</option>
                                              </select></td>
                                              <td><i class="fa-solid fa-ellipsis-vertical"></i></td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <img style="float:left;" class="user-avatar-table" src="https://i.ibb.co/8x9xK4H/team.jpg" alt="">
                                                <h5>Richard Miles</h5>
                                                <p style="font-size: 12px; color:#8896b6; font-weight:bold">Web Developer</p>
                                            </td>
                                            <td>FT-0007</td>
                                            <td>bernardogalaviz@emaple.com</td>
                                            <td>9876543210</td>
                                            <td>1 Jan 2013</td>
                                            <td><select class="status-select" name="status" id="status">
                                                <option value="web_developer">Web Developer</option>
                                              </select></td>
                                              <td><i class="fa-solid fa-ellipsis-vertical"></i></td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <img style="float:left;" class="user-avatar-table" src="https://i.ibb.co/8x9xK4H/team.jpg" alt="">
                                                <h5>Richard Miles</h5>
                                                <p style="font-size: 12px; color:#8896b6; font-weight:bold">Web Developer</p>
                                            </td>
                                            <td>FT-0007</td>
                                            <td>bernardogalaviz@emaple.com</td>
                                            <td>9876543210</td>
                                            <td>1 Jan 2013</td>
                                            <td><select class="status-select" name="status" id="status">
                                                <option value="web_developer">Web Developer</option>
                                              </select></td>
                                              <td><i class="fa-solid fa-ellipsis-vertical"></i></td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <img style="float:left;" class="user-avatar-table" src="https://i.ibb.co/8x9xK4H/team.jpg" alt="">
                                                <h5>Richard Miles</h5>
                                                <p style="font-size: 12px; color:#8896b6; font-weight:bold">Web Developer</p>
                                            </td>
                                            <td>FT-0007</td>
                                            <td>bernardogalaviz@emaple.com</td>
                                            <td>9876543210</td>
                                            <td>1 Jan 2013</td>
                                            <td><select class="status-select" name="status" id="status">
                                                <option value="web_developer">Web Developer</option>
                                              </select></td>
                                              <td><i class="fa-solid fa-ellipsis-vertical"></i></td>
                                        </tr>


                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
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
    $(document).ready( function () {
    $('#usersTable').DataTable({
        responsive: true
    });
} );
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
