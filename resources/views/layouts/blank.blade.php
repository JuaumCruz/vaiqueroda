<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    {{--<link href="/css/app.css" rel="stylesheet">--}}

    <!-- Favicon -->
    <link rel="shortcut icon" href="/assets/img/favicon.ico" type="image/x-icon">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="/assets/plugins/bootstrap/css/bootstrap.min.css">
    <!-- Fonts  -->
    <link rel="stylesheet" href="/assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="/assets/css/simple-line-icons.css">
    <!-- CSS Animate -->
    <link rel="stylesheet" href="/assets/css/animate.css">
    <!--Page Level CSS-->
    <link rel="stylesheet" href="assets/plugins/icheck/css/all.css">
    <!-- Daterange Picker -->
    <link rel="stylesheet" href="/assets/plugins/daterangepicker/daterangepicker-bs3.css">
    <!-- Calendar demo -->
    <link rel="stylesheet" href="/assets/css/clndr.css">
    <!-- Switchery -->
    <link rel="stylesheet" href="/assets/plugins/switchery/switchery.min.css">
    <!-- Custom styles for this theme -->
    <link rel="stylesheet" href="/assets/css/main.css">
    <!-- Feature detection -->
    <script src="/assets/js/vendor/modernizr-2.6.2.min.js"></script>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="/assets/js/vendor/html5shiv.js"></script>
    <script src="/assets/js/vendor/respond.min.js"></script>

    <![endif]-->

    <!-- Scripts -->
    <script>
    window.Laravel = {!! json_encode([
        'csrfToken' => csrf_token(),
    ]) !!};
    </script>
</head>
<body>
    <div id="app">
        <section class="container animated fadeInUp">
            @yield('content')
        </section>
    </div>

    <!-- Scripts -->
    {{--<script src="/js/app.js"></script>--}}
    <script src="/assets/js/vendor/jquery-1.11.1.min.js"></script>
    <script src="/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="/assets/plugins/navgoco/jquery.navgoco.min.js"></script>
    <script src="assets/plugins/icheck/js/icheck.min.js"></script>
    <script src="assets/plugins/switchery/switchery.min.js"></script>
    <script src="/assets/plugins/pace/pace.min.js"></script>
    <script src="/assets/plugins/fullscreen/jquery.fullscreen-min.js"></script>
    <script src="/assets/js/src/app.js"></script>
    <!--Page Level JS-->
    <script src="/assets/plugins/countTo/jquery.countTo.js"></script>
    <script src="/assets/plugins/weather/js/skycons.js"></script>
    <script src="/assets/plugins/daterangepicker/moment.min.js"></script>
    <script src="/assets/plugins/daterangepicker/daterangepicker.js"></script>
    <!-- ChartJS  -->
    <script src="/assets/plugins/chartjs/Chart.min.js"></script>
    <!-- Morris  -->
    <script src="/assets/plugins/morris/js/morris.min.js"></script>
    <script src="/assets/plugins/morris/js/raphael.2.1.0.min.js"></script>
    <!-- Vector Map  -->
    <script src="/assets/plugins/jvectormap/js/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="/assets/plugins/jvectormap/js/jquery-jvectormap-world-mill-en.js"></script>

    <!-- Calendar  -->
    <script src="/assets/plugins/calendar/clndr.js"></script>
    <script src="/assets/plugins/calendar/clndr-demo.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.5.2/underscore-min.js"></script>
    <!-- Switch -->
    <script src="/assets/plugins/switchery/switchery.min.js"></script>
    <!--Load these page level functions-->
    <script>
    $(document).ready(function () {
        app.dateRangePicker();
        app.chartJs();
        app.weather();
        app.spinStart();
        app.spinStop();
    });
    </script>

    @yield('scripts')

</body>
</html>
