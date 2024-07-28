<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="icon" type="image/png" href="{{ asset('assets/img/favicon.png') }}">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Manggungmangu Management</title>
        <link href="{{ asset("https://fonts.googleapis.com/css?family=Karla:400,700&display=swap") }}" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset("https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css") }}">
        <link rel="stylesheet" href="{{ asset("https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css") }}">
        <link rel="stylesheet" href="{{ asset("assets/css/style.css") }}">    
    </head>
    <body>
        <!-- ======= Main Content ======= -->
        <main class="login">
            {{ $slot }}
        </main>
        <!-- ======= End Main Content ======= -->

        <script src="{{ asset("https://code.jquery.com/jquery-3.4.1.min.js") }}"></script>
        <script src="{{ asset("https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js") }}"></script>
        <script src="{{ asset("https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js") }}"></script>
    </body>
</html>
