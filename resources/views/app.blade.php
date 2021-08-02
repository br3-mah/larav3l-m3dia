<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/animate.css">
        <link rel="stylesheet" type="text/css" href="assets/css/slick.css">
        <link rel="stylesheet" type="text/css" href="assets/css/theme.css">
        <link rel="stylesheet" type="text/css" href="assets/css/style.css">
        <!-- Styles -->
        <!-- <link rel="stylesheet" href="{{ mix('css/app.css') }}"> -->
        <!-- plugins:css -->
        <!-- <link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css"> -->
        <!-- <link rel="stylesheet" href="vendors/base/vendor.bundle.base.css"> -->
        <!-- endinject -->
        <!-- plugin css for this page -->
        <!-- <link rel="stylesheet" href="vendors/datatables.net-bs4/dataTables.bootstrap4.css"> -->
        <!-- End plugin css for this page -->
        <!-- inject:css -->
        <!-- <link rel="stylesheet" href="css/style.css"> -->
        <!-- endinject -->
        <!-- <link rel="shortcut icon" href="images/favicon.png" /> -->
        <!-- Scripts -->
        @routes
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased">
        @inertia

        @env ('local')
            <script src="http://localhost:3000/browser-sync/browser-sync-client.js"></script>
        @endenv
    </body>
    <script src="assets/js/jquery.min.js"></script> 
    <script src="assets/js/bootstrap.min.js"></script> 
    <script src="assets/js/wow.min.js"></script> 
    <script src="assets/js/slick.min.js"></script> 
    <script src="assets/js/custom.js"></script>

    
      <!-- plugins:js -->
  <!-- <script src="vendors/base/vendor.bundle.base.js"></script> -->
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- <script src="vendors/chart.js/Chart.min.js"></script> -->
  <!-- <script src="vendors/datatables.net/jquery.dataTables.js"></script> -->
  <!-- <script src="vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script> -->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <!-- <script src="js/off-canvas.js"></script> -->
  <!-- <script src="js/hoverable-collapse.js"></script> -->
  <!-- <script src="js/template.js"></script> -->
  <!-- endinject -->
  <!-- Custom js for this page-->
  <!-- <script src="js/dashboard.js"></script> -->
  <!-- <script src="js/data-table.js"></script> -->
  <!-- <script src="js/jquery.dataTables.js"></script> -->
  <!-- <script src="js/dataTables.bootstrap4.js"></script> -->
  <!-- End custom js for this page-->
  <!-- <script src="js/jquery.cookie.js" type="text/javascript"></script> -->
</html>
