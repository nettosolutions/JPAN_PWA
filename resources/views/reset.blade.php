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

<body class="main-bg">
  <!-- Login Form -->
  <div class="container">
    <div class="row justify-content-center mt-5">
      <div class="col-lg-4 col-md-6 col-sm-6">
        <div class=" card shadow">
          <div class="card-title text-center border-bottom">
          <img src="{{ asset( 'images/logo.png' ) }}">
          </div>
          <div class="card-body">
            <form>
              <div class="mb-4">
                <label for="username" class="form-label">Enter your email address</label>
                <input type="text" class="form-control" id="username" />
              </div>
              <div class="d-grid">
                <button class="btn text-blue main-bg"><a href="/">Submit</a></button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
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

</html>