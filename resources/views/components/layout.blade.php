<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <link rel="icon" type="image/png" href="../assets/img/card.png">

  <title>Management Manggungmangu</title>
  <meta content="" name="description">
  <meta content="" name="keywords">  
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  
  <!-- Vendor CSS Files -->
  <link href="{{ asset("assets/vendor/bootstrap/css/bootstrap.min.css") }}" rel="stylesheet">
  <link href="{{ asset("assets/vendor/bootstrap-icons/bootstrap-icons.css") }}" rel="stylesheet">
  <link href="{{ asset("assets/vendor/boxicons/css/boxicons.min.css") }}" rel="stylesheet">
  <link href="{{ asset("assets/vendor/quill/quill.snow.css") }}" rel="stylesheet">
  <link href="{{ asset("assets/vendor/quill/quill.bubble.css") }}" rel="stylesheet">
  <link href="{{ asset("assets/vendor/remixicon/remixicon.css") }}" rel="stylesheet">
  <link href="{{ asset("assets/vendor/simple-datatables/style.css") }}" rel="stylesheet">  
  <link rel="stylesheet" type="text/css" href="{{ asset("https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css") }}">  
  <link rel="stylesheet" type="text/css" href="{{ asset("https://cdn.datatables.net/fixedheader/3.1.9/css/fixedHeader.dataTables.min.css") }}">
  <link rel="stylesheet" type="text/css" href="{{ asset("https://cdn.datatables.net/fixedcolumns/4.1.0/css/fixedColumns.dataTables.css") }}">
</head>
<body>

  <!-- Template Main CSS File -->
  <link href="{{ asset("assets/css/style.css") }}" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
  <x-header></x-header>
  <!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <x-navbar></x-navbar>
  <!-- End Sidebar-->
  
  <!-- ======= Main Content ======= -->
  <main id="main" class="main">
    {{ $slot }}
  </main>
  <!-- End Sidebar-->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>Manggungmangu</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      Designed by <a href="https://bootstrapmade.com/">KKN UNNES Giat 9</a>
    </div>
  </footer>
  <!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset("assets/vendor/apexcharts/apexcharts.min.js") }}"></script>
  <script src="{{ asset("assets/vendor/bootstrap/js/bootstrap.bundle.min.js") }}"></script>
  <script src="{{ asset("assets/vendor/chart.js/chart.umd.js") }}"></script>
  <script src="{{ asset("assets/vendor/echarts/echarts.min.js") }}"></script>
  <script src="{{ asset("assets/vendor/quill/quill.js") }}"></script>
  <script src="{{ asset("assets/vendor/simple-datatables/simple-datatables.js") }}"></script>
  <script src="{{ asset("assets/vendor/tinymce/tinymce.min.js") }}"></script>
  <script src="{{ asset("assets/vendor/php-email-form/validate.js") }}"></script>  
  <script src="{{ asset("https://code.jquery.com/jquery-3.5.1.js") }}"></script>  
  <script type="text/javascript" charset="utf8" src="{{ asset("https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js") }}"></script>
  <script type="text/javascript" charset="utf8" src="{{ asset("https://cdn.datatables.net/fixedheader/3.1.9/js/dataTables.fixedHeader.min.js") }}"></script>
  <script type="text/javascript" charset="utf8" src="{{ asset("https://cdn.datatables.net/fixedcolumns/4.1.0/js/dataTables.fixedColumns.js") }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset("assets/js/main.js") }}"></script>

</body>

</html>