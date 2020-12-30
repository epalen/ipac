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
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('bootstrap/css/bootstrap.css') }}" rel="stylesheet">
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
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('Jquery/jquery.js') }}"></script>
    <script src="{{ asset('js/Principal.js') }}"></script>
    <script src="{{ asset('bootstrap/js/bootstrap.js') }}"></script>
    <script src="{{ asset('bootstrap/js/bootstrap-hover-dropdown.js') }}"></script>  
     
    <!-- Steps -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
     
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

        const pending = {!! json_encode($pending) !!};

        console.log(pending);

        new Chart(document.getElementById("bar-chart-grouped"), {
            type: 'bar',
            data: {
            labels: [""],
            datasets: [
                {
                label: "Pendientes",
                backgroundColor: "#dd4b39",
                data: [
                    @foreach($pending as $pdg)
                        {!! $pdg->total !!},
                    @endforeach,0
                ]
                },{
                label: "En proceso",
                backgroundColor: "#f39c12",
                data: [
                    @foreach($finished as $fn)
                        {!! $fn->total !!},
                    @endforeach,0
                ]
                },{
                label: "Finalizadas",
                backgroundColor: "#00a65a",
                data: [
                    @foreach($finished as $fn)
                        {!! $fn->total !!},
                    @endforeach,0
                ]
                },{
                label: "Total",
                backgroundColor: "#00c0ef",
                data: [
                    {{ $total }},0
                ]
                }
            ]
            },
            options: {
            title: {
                display: true,
                text: 'Cantidad de propuestas generadas y sus estados.'
            }
            }
        });
    </script>

</body>
</html>
