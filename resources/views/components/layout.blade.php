<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <link rel="icon" type="image/png" href="{{ asset('assets/img/favicon.png') }}">

  <title>Management Manggungmangu</title>
  <meta content="" name="description">
  <meta content="" name="keywords">  
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <!-- Google Fonts -->
  <link href="{{ asset("https://fonts.gstatic.com") }}" rel="preconnect">
  <link href="{{ asset("https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i") }}" rel="stylesheet">
  <link href="{{ asset("https://fonts.googleapis.com/css?family=Karla:400,700&display=swap") }}" rel="stylesheet">
  
  <!-- Vendor CSS Files -->
  <link href="{{ asset("assets/vendor/bootstrap/css/bootstrap.min.css") }}" rel="stylesheet">
  <link href="{{ asset("assets/vendor/bootstrap-icons/bootstrap-icons.css") }}" rel="stylesheet">
  <link href="{{ asset("assets/vendor/boxicons/css/boxicons.min.css") }}" rel="stylesheet">
  <link href="{{ asset("assets/vendor/quill/quill.snow.css") }}" rel="stylesheet">
  <link href="{{ asset("assets/vendor/quill/quill.bubble.css") }}" rel="stylesheet">
  <link href="{{ asset("assets/vendor/remixicon/remixicon.css") }}" rel="stylesheet">
  <!-- <link href="{{ asset("assets/vendor/simple-datatables/style.css") }}" rel="stylesheet">   -->
  <!-- <link rel="stylesheet" type="text/css" href="{{ asset("https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css") }}">   -->
  <link rel="stylesheet" type="text/css" href="{{ asset("https://cdn.datatables.net/fixedheader/3.1.9/css/fixedHeader.dataTables.min.css") }}">
  <link rel="stylesheet" type="text/css" href="{{ asset("https://cdn.datatables.net/fixedcolumns/4.1.0/css/fixedColumns.dataTables.css") }}">
  <link rel="stylesheet" href="{{ asset("https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css") }}">
  <!-- <link rel="stylesheet" href="{{ asset("https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css") }}"> -->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.8/css/jquery.dataTables.min.css">
  <!-- Template Main CSS File -->
  <link href="{{ asset("assets/css/style.css") }}" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
  <x-header></x-header>
  <!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <x-navbar></x-navbar  >
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
  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

  <!-- TinyMCE -->
  <script src="{{ asset('assets/vendor/tinymce/tinymce.min.js') }}"></script>
  <!-- jQuery -->
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

  <!-- DataTables -->  
  <script src="https://cdn.datatables.net/1.13.8/js/jquery.dataTables.min.js"></script>

  <!-- Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

  <!-- SweetAlert -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <!-- Template -->
  <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>