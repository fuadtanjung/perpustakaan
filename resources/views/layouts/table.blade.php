<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sistem Informasi Pengarsipan</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="{{ URL::asset('theme/assets/css/normalize.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('theme/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('theme/assets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('theme/assets/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('theme/assets/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('theme/assets/css/cs-skin-elastic.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('theme/assets/css/lib/datatable/dataTables.bootstrap.min.css')}}">
    <!-- <link rel="stylesheet" href="{{ URL::asset('theme/assets/css/bootstrap-select.less')}}"> -->
    <link rel="stylesheet" href="{{ URL::asset('theme/assets/scss/style.css')}}">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 10vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>

        <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Sistem informasi Pengarsipan</title>

  <!-- Bootstrap core CSS -->
  <link href="{{ URL::asset('welcome/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="{{ URL::asset('welcome/vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
  <link href="{{ URL::asset('welcome/vendor/simple-line-icons/css/simple-line-icons.css')}}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template -->
  <link href="{{ URL::asset('welcome/css/landing-page.min.css')}}" rel="stylesheet">

</head>

<body>


        <!-- Left Panel -->

   

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

    

        @yield('content')


            <script src="{{ URL::asset('theme/assets/js/vendor/jquery-2.1.4.min.js')}}"></script>
            <script src="{{ URL::asset('theme/assets/js/popper.min.js')}}"></script>
            <script src="{{ URL::asset('theme/assets/js/plugins.js')}}"></script>
            <script src="{{ URL::asset('theme/assets/js/main.js')}}"></script>


            <script src="{{ URL::asset('theme/assets/js/lib/data-table/datatables.min.js')}}"></script>
            <script src="{{ URL::asset('theme/assets/js/lib/data-table/dataTables.bootstrap.min.js')}}"></script>
            <script src="{{ URL::asset('theme/assets/js/lib/data-table/dataTables.buttons.min.js')}}"></script>
            <script src="{{ URL::asset('theme/assets/js/lib/data-table/buttons.bootstrap.min.js')}}"></script>
            <script src="{{ URL::asset('theme/assets/js/lib/data-table/jszip.min.js')}}"></script>
            <script src="{{ URL::asset('theme/assets/js/lib/data-table/pdfmake.min.js')}}"></script>
            <script src="{{ URL::asset('theme/assets/js/lib/data-table/vfs_fonts.js')}}"></script>
            <script src="{{ URL::asset('theme/assets/js/lib/data-table/buttons.html5.min.js')}}"></script>
            <script src="{{ URL::asset('theme/assets/js/lib/data-table/buttons.print.min.js')}}"></script>
            <script src="{{ URL::asset('theme/assets/js/lib/data-table/buttons.colVis.min.js')}}"></script>
            <script src="{{ URL::asset('theme/assets/js/lib/data-table/datatables-init.js')}}"></script>


         @yield('script')


        </body>
        </html>
