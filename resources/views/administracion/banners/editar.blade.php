@extends('adminlte::page')

@section('title', 'Iniciativa Participativa Anti-Corrupción - IPAC')

@section('content_header')
    <section class="content-header">
      <h1>
        Administración de banners
        <small>Editar banner portada</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ url('dashboard') }}"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
        <li class="active">Editar banner portada</li>
      </ol>
    </section>
@stop

@section('content')
	@include('administracion.banners.incluir.actualizar')
@stop