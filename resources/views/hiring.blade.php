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

    {{-- Font Awesome --}}
    <script src="https://kit.fontawesome.com/dd6f5bab82.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://s3-us-west-2.amazonaws.com/s.cdpn.io/172203/smart-forms.css">

    {{-- Custom Form Styles --}}
    <link rel="stylesheet" type="text/css" href="assets/css/hiringform.css">

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
    <meta name="theme-color" content="#6777ef" />
    <link rel="apple-touch-icon" href="{{ asset('images/logo.png') }}">
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
            <x-header />
            <!-- ============================================================== -->
            <!-- End Topbar header -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Left Sidebar -->
            <!-- ============================================================== -->
            <aside class="left-sidebar" data-sidebarbg="skin6">
                <!-- Sidebar scroll-->
                <x-leftmenu />
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
                              <h3 class="box-title">{{ __('language.card1') }}</h3>
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
                              <h3 class="box-title">{{ __('language.card2') }}</h3>
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
                              <h3 class="box-title">{{ __('language.card3') }}</h3>
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
                        <h2>Recruitment/Hiring Application</h2>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="card white-box p-0">
                                    <!-- <div class="card-heading">
                                    <h3 class="box-title mb-0">{{ __('language.panel2') }}</h3>
                                </div> -->
                                <div class="container-fluid px-1 py-5 mx-auto">
                                    <div class="row d-flex justify-content-center">
                                        <div class="col-xl-7 col-lg-8 col-md-9 col-11">

                                            <form class="form-card" onsubmit="event.preventDefault()">
                                            <div class="card">
                                                <div class="mb-4">
                                                    <h2 style="color: #777777">Employment Application</h2>
                                                </div>


                                                    <div class="row justify-content-between text-left">
                                                        <div class="form-group col-sm-12 flex-column d-flex">
                                                            <input type="text" id="fname" name="fname" placeholder="Position Applied For : " onblur="validate(1)">
                                                         </div>

                                                        <div class="form-group col-sm-12 flex-column d-flex">
                                                            <input type="text" id="lname" name="lname" placeholder="Type Of Employment :" onblur="validate(2)">
                                                        </div>

                                                        <div class="form-group col-sm-12 flex-column d-flex">
                                                            <input type="text" id="lname" name="lname" placeholder="Location :" onblur="validate(2)">
                                                        </div>

                                                        <div class="form-group col-sm-6 flex-column d-flex">
                                                            <input type="text" id="lname" name="lname" placeholder="Pay Rate :" onblur="validate(2)">
                                                        </div>

                                                        <div class="form-group col-sm-6 flex-column d-flex">
                                                            <input type="text" id="lname" name="lname" placeholder="to :" onblur="validate(2)">
                                                        </div>

                                                    </div>
                                                </div>

                                                <div class="card">
                                                    <div class="mb-4">
                                                        <h2 style="color: #777777">Personal Data</h2>
                                                    </div>


                                                        <div class="row justify-content-between text-left">
                                                            <div class="form-group col-sm-12 flex-column d-flex">
                                                                <input type="text" id="fname" name="fname" placeholder="Name :" onblur="validate(1)">
                                                             </div>

                                                            <div class="form-group col-sm-12 flex-column d-flex">
                                                                <input type="text" id="lname" name="lname" placeholder="Telephone :" onblur="validate(2)">
                                                            </div>

                                                            <div class="form-group col-sm-12 flex-column d-flex">
                                                                <input type="text" id="lname" name="lname" placeholder="Address :" onblur="validate(2)">
                                                            </div>

                                                            <div class="form-group col-sm-12 flex-column d-flex">
                                                                <input type="text" id="lname" name="lname" placeholder="City :" onblur="validate(2)">
                                                            </div>

                                                            <div class="form-group col-sm-12 flex-column d-flex">
                                                                <input type="text" id="lname" name="lname" placeholder="Postal Code :" onblur="validate(2)">
                                                            </div>

                                                            <div class="form-group col-sm-12 flex-column d-flex">
                                                                <input type="text" id="lname" name="lname" placeholder="Country :" onblur="validate(2)">
                                                            </div>

                                                        </div>
                                                    </div>

                                                    <div class="card">
                                                        <div class="mb-4">
                                                            <h2 style="color: #777777">Previous Employment</h2>
                                                        </div>


                                                            <div class="row justify-content-between text-left">
                                                                <div class="form-group col-sm-12 flex-column d-flex">
                                                                    <input type="text" id="fname" name="fname" placeholder="Employer :" onblur="validate(1)">
                                                                 </div>

                                                                <div class="form-group col-sm-12 flex-column d-flex">
                                                                    <input type="text" id="lname" name="lname" placeholder="Duties Performed :" onblur="validate(2)">
                                                                </div>

                                                                <div class="form-group col-sm-12 flex-column d-flex">
                                                                    <input type="text" id="lname" name="lname" placeholder="Reason for leaving :" onblur="validate(2)">
                                                                </div>



                                                            </div>
                                                        </div>


                                                        <div class="card">
                                                            <div class="mb-4">
                                                                <h2 style="color: #777777">Education Background</h2>
                                                            </div>


                                                                <div class="row justify-content-between text-left">

                                                                    <div class="mb-4">
                                                                    <div class="form-group col-sm-12 flex-column d-flex">
                                                                        <input type="text" id="fname" name="fname" placeholder="Type Of School :" onblur="validate(1)">
                                                                     </div>

                                                                    <div class="form-group col-sm-12 flex-column d-flex">
                                                                        <input type="text" id="lname" name="lname" placeholder="Name Of School :" onblur="validate(2)">
                                                                    </div>

                                                                    <div class="form-group col-sm-12 flex-column d-flex">
                                                                        <input type="text" id="lname" name="lname" placeholder="Location :" onblur="validate(2)">
                                                                    </div>

                                                                    <div class="form-group col-sm-12 flex-column d-flex">
                                                                        <input type="text" id="lname" name="lname" placeholder="No. of years completed :" onblur="validate(2)">
                                                                    </div>

                                                                    </div>

                                                                    <div class="mb-4 mt-4">
                                                                    <div class="form-group col-sm-12 flex-column d-flex">
                                                                        <input type="text" id="lname" name="lname" placeholder="Type Of School :" onblur="validate(2)">
                                                                    </div>

                                                                    <div class="form-group col-sm-12 flex-column d-flex">
                                                                        <input type="text" id="lname" name="lname" placeholder="Name Of School :" onblur="validate(2)">
                                                                    </div>

                                                                    <div class="form-group col-sm-12 flex-column d-flex">
                                                                        <input type="text" id="lname" name="lname" placeholder="Location :" onblur="validate(2)">
                                                                    </div>

                                                                    <div class="form-group col-sm-12 flex-column d-flex">
                                                                        <input type="text" id="lname" name="lname" placeholder="No. of years completed :" onblur="validate(2)">
                                                                    </div>

                                                                    </div>

                                                                    <div class="mt-4">
                                                                    <div class="form-group col-sm-12 flex-column d-flex">
                                                                        <input type="text" id="lname" name="lname" placeholder="Type Of School :" onblur="validate(2)">
                                                                    </div>

                                                                    <div class="form-group col-sm-12 flex-column d-flex">
                                                                        <input type="text" id="lname" name="lname" placeholder="Name Of School :" onblur="validate(2)">
                                                                    </div>

                                                                    <div class="form-group col-sm-12 flex-column d-flex">
                                                                        <input type="text" id="lname" name="lname" placeholder="Location :" onblur="validate(2)">
                                                                    </div>

                                                                    <div class="form-group col-sm-12 flex-column d-flex">
                                                                        <input type="text" id="lname" name="lname" placeholder="No. of years completed :" onblur="validate(2)">
                                                                    </div>
                                                                    </div>

                                                                </div>
                                                            </div>



                                                    <div class="row justify-content-start">
                                                        <div class="form-group col-sm-4"> <button style="width: 100%" type="submit" class="btn-block btn-submit">Submit</button> </div>
                                                    </div>
                                                </form>

                                        </div>
                                    </div>
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
                <x-footer />
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
                $('#usersTable').DataTable({
                    responsive: true
                });
            });
        </script>

        <!-- PWA -->
        <script src="{{ asset('/sw.js') }}"></script>
        <script>
            if (!navigator.serviceWorker.controller) {
                navigator.serviceWorker.register("/sw.js").then(function(reg) {
                    console.log("Service worker has been registered for scope: " + reg.scope);
                });
            }
        </script>
        <script type="text/javascript">
            $(document).ready(function() {
                $('select[name=language]').change(function() {
                    var lang = $(this).val();
                    window.location.href = "{{ route('changeLanguage') }}?language=" + lang;
                });
            });
        </script>
    @else
        <a class="text-center" href="{{ route('login') }}">
            <h1 class="nav-link">{{ __('Login') }}</h1>
        </a>
    @endauth
</body>

</html>
