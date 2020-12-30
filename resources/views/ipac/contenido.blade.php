<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>IPAC - República Dominicana</title>

    </head>
    <body>
    	@include('includes.cabecera')
    	@include('includes.carrusel')
        @include('includes.contenido')
        @include('includes.pie')
    </body>
</html>