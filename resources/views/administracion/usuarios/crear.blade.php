@extends('adminlte::page')

@section('title', 'Iniciativa Participativa Anti-Corrupción - IPAC')

@section('content_header')
    <section class="content-header">
      <h1>
        Administración de usuarios
        <small>Crear usuario</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ url('dashboard') }}"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
        <li class="active">Crear usuario</li>
      </ol>
    </section>
@stop

@section('content')
	@include('administracion.usuarios.incluir.agregar')
@stop