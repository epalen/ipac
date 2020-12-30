<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'IPAC - República Dominicana') }}</title>

    <!-- Iconos -->
    <link rel="apple-touch-icon" sizes="57x57" href="/imagenes/iconos/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/imagenes/iconos/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/imagenes/iconos/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/imagenes/iconos/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/imagenes/iconos/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/imagenes/iconos/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/imagenes/iconos/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/imagenes/iconos/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/imagenes/iconos/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/imagenes/iconos/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/imagenes/iconos/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/imagenes/iconos/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/imagenes/iconos/favicon-16x16.png">
    <link rel="manifest" href="/imagenes/iconos/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/imagenes/iconos/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <!-- Fuentes -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Slabo+27px" rel="stylesheet">

    <!-- Estilos -->
    <!--<link href="{{ asset('css/app.css') }}" rel="stylesheet">-->
    <!--<link href="{{ asset('bootstrap/css/bootstrap.css') }}" rel="stylesheet">-->
    <!-- Steps -->
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="{{ asset('css/Principal.css') }}" rel="stylesheet" >
    <!-- Iconos Typicons -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/typicons/2.0.9/typicons.css">
    <link href="{{ asset('css/steps.css') }}" rel="stylesheet" >
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Kartik-v Bootstrap File Input  -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" crossorigin="anonymous">
    <!--<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.5.1/css/fileinput.min.css" media="all" rel="stylesheet" type="text/css" />-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.5/css/fileinput.min.css" media="all" rel="stylesheet" type="text/css" />

    <!-- Estilos mapa -->
    <link href="{{ asset('css/map.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">

        @yield('content')
    </div>

    <!-- Scripts -->
    <!--<script src="{{ asset('js/app.js') }}"></script>-->
    <script src="{{ asset('Jquery/jquery.js') }}"></script>
    <script src="{{ asset('js/Principal.js') }}"></script>
    <script src="{{ asset('bootstrap/js/bootstrap.js') }}"></script>
    <script src="{{ asset('bootstrap/js/bootstrap-hover-dropdown.js') }}"></script>  
     
    <!-- Steps -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
    <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script> -->
    
    <!-- File input -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.5/js/plugins/piexif.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.5/js/plugins/sortable.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.5/js/plugins/purify.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.5/js/fileinput.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.5/js/locales/es.js"></script>

    <!-- Steps -->
    <script src="{{ asset('js/steps.js') }}"></script> 

    <!-- Steps -->
    <script src="{{ asset('js/map.js') }}"></script> 

    <!-- ChartJS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>

    <script>
        $("select[name='province_id']").change(function(){
            var province_id = $(this).val();
            var token = $("input[name='_token']").val();
                $.ajax({
                    url: "<?php echo route('select-ajax') ?>",
                    method: 'POST',
                    data: {province_id:province_id, _token:token},
                    success: function(data) {
                    $("select[name='municipalities'").html('');
                    $("select[name='municipalities'").html(data.options);
                }
            });
        });
    </script>

    <script type="text/javascript">
    var _userway_config = {
    /* uncomment the following line to override default position*/
    /* position: '6', */
    /* uncomment the following line to override default size (values: small, large)*/
    /* size: 'small', */
    /* uncomment the following line to override default language (e.g., fr, de, es, he, nl, etc.)*/
    /* language: 'en-US', */
    /* uncomment the following line to override color set via widget (e.g., #053f67)*/
    /* color: '#1873b2', */
    /* uncomment the following line to override type set via widget(1=person, 2=chair, 3=eye)*/
    /* type: '1', */
    /* uncomment the following line to override support on mobile devices*/
    /* mobile: true, */
    account: 'NtTnF1isdS'
    };
    </script>
    <script type="text/javascript" src="https://cdn.userway.org/widget.js"></script>
</body>
</html>
