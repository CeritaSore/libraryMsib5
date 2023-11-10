<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Skydash Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{ asset('backend/assets/vendors/feather/feather.css') }}">
  <link rel="stylesheet" href="{{ asset('backend/assets/vendors/ti-icons/css/themify-icons.css') }}">
  <link rel="stylesheet" href="{{ asset('backend/assets/vendors/css/vendor.bundle.base.css') }}">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="{{ asset('backend/assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css') }}">
  <link rel="stylesheet" href="{{ asset('backend/assets/vendors/ti-icons/css/themify-icons.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/js/select.dataTables.min.css') }}">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{ asset('backend/assets/css/vertical-layout-light/style.css') }}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{ asset('backend/assets/images/favicon.png') }}" />
</head>
<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper">
        @include('backend.header')
        @include('backend.sidebar')
        <main id="main">
            @yield('content')
        </main> 
    </div>  
    @include('backend.footer') 
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="{{ asset('backend/assets/endors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="{{ asset('backend/assets/vendors/chart.js/Chart.min.js"></script>
  <script src="{{ asset('backend/assets/vendors/datatables.net/jquery.dataTables.js"></script>
  <script src="{{ asset('backend/assets/vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
  <script src="{{ asset('backend/assets/js/dataTables.select.min.js"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="{{ asset('backend/assets/js/off-canvas.js"></script>
  <script src="{{ asset('backend/assets/js/hoverable-collapse.js"></script>
  <script src="{{ asset('backend/assets/js/template.js"></script>
  <script src="{{ asset('backend/assets/js/settings.js"></script>
  <script src="{{ asset('backend/assets/js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="{{ asset('backend/assets/js/dashboard.js"></script>
  <script src="{{ asset('backend/assets/js/Chart.roundedBarCharts.js"></script>
  <!-- End custom js for this page-->
</body>

</html>

