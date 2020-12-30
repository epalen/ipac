<?php
/**
 * IPAC
 * Cabeza
 *
 * @copyright DIGEIG, IPAC
 * @author Yohan Laborda
 * @version 1.0
 */
namespace IPAC;

?>
<!DOCTYPE html>
<html lang="es-DO">
    <head>
        <meta charset="UTF-8">
        <title><?php echo TITULO, isset($Titulo) ? $Titulo : ''; ?></title>
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <meta name="title" content="IPAC - República Dominicana<?php echo isset($Titulo) ? $Titulo : ''; ?>" />
        <meta name="robots" content="index,follow" />
        <meta name="description" content="<?php echo isset($Descripcion) ? $Descripcion : 'IPAC'; ?>" />
        <meta name="keywords" content="<?php echo isset($PalabrasClaves) ? $PalabrasClaves : 'IPAC'; ?>" />
        <meta property="og:locale" content="es_DO" />
        <meta property="og:type" content="website" />
        <meta property="og:title" content="<?php echo TITULO, isset($Titulo) ? $Titulo : ''; ?>" />
        <meta property="og:description" content="<?php echo isset($Descripcion) ? $Descripcion : 'IPAC'; ?>" />
        <?php if (isset($URLActual)) { ?>
        <meta property="og:url" content="<?php echo $URLActual; ?>" />
        <?php } ?>
        <meta property="og:site_name" content="<?php echo TITULO; ?>" />
        <?php if (isset($URLImagen)) { ?>
        <meta property="og:image" content="<?php echo $URLImagen; ?>" />
        <meta property="og:image:type" content="image/jpeg" />
        <meta property="og:image:width" content="1200" />
        <meta property="og:image:height" content="600" />
        <meta property="og:image:alt" content="<?php echo TITULO; ?>" />
        <?php } if (isset($URLActual)) { ?>
        <link rel="canonical" href="<?php echo $URLActual; ?>" />
        <?php } ?>
        <meta name="google" content="notranslate" />
        <meta name="referrer" content="origin">
        <link rel="icon" href="<?php echo URL_IMAGENES; ?>Icono/32x32.png" sizes="32x32" />
        <link rel="icon" href="<?php echo URL_IMAGENES; ?>Icono/192x192.png" sizes="192x192" />
        <link rel="apple-touch-icon-precomposed" href="<?php echo URL_IMAGENES; ?>Icono/180x180.png">
        <meta name="msapplication-TileImage" content="<?php echo URL_IMAGENES; ?>Icono/270x270.png">
        <link href="https://fonts.googleapis.com/css?family=Montserrat|Slabo+27px" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo URL_WEB; ?>Utilidades/Bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="<?php echo URL_WEB; ?>Utilidades/CSS/Iconos.css">
        <link rel="stylesheet" href="<?php echo URL_WEB; ?>Utilidades/CSS/Principal.css">
        <?php
            if (isset($CSS)) {
                if (count($CSS) > 0) {
                    foreach ($CSS as $Archivo) {
        ?>
        <link rel="stylesheet" href="<?php echo $Archivo; ?>">
        <?php } } } ?>
        <script src="<?php echo URL_WEB; ?>Utilidades/Jquery/jquery.js"></script>
        <script src="<?php echo URL_WEB; ?>Utilidades/Bootstrap/js/bootstrap.js"></script>
        <script src="<?php echo URL_WEB; ?>Utilidades/Bootstrap/js/bootstrap-hover-dropdown.js"></script>
        <script src="<?php echo URL_WEB; ?>Utilidades/IPAC/Principal.js"></script>
        <?php
            if (isset($Javascripts)) {
                if (count($Javascripts) > 0) {
                    foreach ($Javascripts as $Javascript) {
        ?>
        <script src="<?php echo $Javascript; ?>"></script>
        <?php } } } ?>
    </head>
    <body>