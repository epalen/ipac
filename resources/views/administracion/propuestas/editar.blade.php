@extends('adminlte::page')

@section('title', 'Iniciativa Participativa Anti-Corrupción - IPAC')

@section('content_header')
    <section class="content-header">
      <h1>
        Administración de propuestas
        <small>Verificación de ropuestas</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ url('dashboard') }}"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
        <li class="active">Verificación de propuestas</li>
      </ol>
    </section>
@stop

@section('content')
	@include('administracion.propuestas.incluir.actualizar')
@stop