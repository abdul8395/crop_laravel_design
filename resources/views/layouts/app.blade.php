<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" ng-app="cropApp">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crop Estimation-Indistries</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- bootstrap 5.0.2 CSS-->
    <link rel="stylesheet" href="{{   url('lib/bootstrap5_0_2/css/bootstrap.min.css')   }}">
    <!-- bootstrap 5.0.2 JS bundle-->
    <script src="{{   url('lib/bootstrap5_0_2/js/bootstrap.bundle.min.js')   }}"></script>
    <link rel="stylesheet" href="{{   url('style.css')   }}">
    @yield('head')
</head>

<body class="bg-dark text-light">
    {{--@include('layouts.navbar')--}}
    <div class="container-fluid bg-dark text-light">
        @yield('content')
    </div>

    <!-- jquery-3.6.0.min.js -->
    <script src="{{   url('lib/jquery-3.6.0.min.js')   }}"></script>

    <!-- angular js 1.8.3 -->
    <script src="{{   url('lib/angular-1.8.3.min.js')   }}"></script>
    @yield('footer')
</body>

</html>