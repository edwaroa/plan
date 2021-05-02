@extends('layouts.admin')

@section('main-content')
    <!-- Page Heading -->
    <a href="javascript:history.back()" class="btn btn-outline-warning px-3 mx-1 my-2"><i class="fas fa-arrow-circle-left"></i></a>

    @if ($errors->any())
        <div class="alert alert-danger border-left-danger" role="alert">
            <ul class="pl-4 my-2">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="row">
        <div class="col-lg-4 order-lg-2">
            <div class="card shadow mb-4">
                <div class="card-header bg-success text-center">
                    <div class="d-inline-block text-white text-lg mx-1">
                        <i class="fas fa-calendar-alt text-lg"></i> Fechas
                    </div>
                </div>
                <div class="card-body">
                    <div class="row text-center">
                        <div class="col-lg-6">
                            <h4>Fecha Inicio</h4>
                            <i class="far fa-clock"></i> {{ $actividad->fecha_inicio }}
                        </div>
                        <div class="col-lg-6">
                            <h4>Fecha Final</h4>
                            <i class="fas fa-stopwatch"></i> {{ $actividad->tiempo_entrega }}
                        </div>
                        <div class="col-lg-12 mt-3 p-0">
                            <p class="text-lg text-primary font-weight-bold mb-0">Faltan: {{ $dias_fechas }} días</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-8 order-lg-1">
            <div class="card shadow mb-4 p-3">
                <div class="mx-auto text-center col-md-10">
                    <h3 class="p-0 mb-5">{{ $actividad->nombre }}</h3>
                </div>
                <div class="row">
                    <div class="col-md-10 mx-auto">
                        <div class="mb-3">
                            <h3 class="text-primary mb-2">Descripción</h3>
                            <p>{{ $actividad->descripcion }}</p>
                        </div>
                    </div>
                    <div class="col-md-10 mx-auto">
                        <div class="row">
                            <div class="col-md-6">
                                <h3 class="text-primary mb-2">Programa</h3>
                                <p>{{ $actividad->indicador->nombre }}</p>
                            </div>
                            <div class="col-md-6 float-right">
                                <h3 class="text-primary mb-2">Usuarios Encargados</h3>
                                <ul>
                                    @foreach ($actividad->users as $usuario)
                                        <li>{{ $usuario->nombre }} ({{ $usuario->rol->nombre }})</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="mx-auto col-md-10">
                        <div class="row my-3">
                            <div class="col">
                                <a href="{{ route('actividades.edit', ['actividad' => $actividad->id]) }}" class="text-primary">¿Desea editar esta actividad?</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>|
        </div>
    </div>

@endsection
