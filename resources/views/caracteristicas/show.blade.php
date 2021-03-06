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
                        <i class="fas fa-balance-scale-left text-lg"></i> Peso de la característica
                    </div>
                </div>
                <div class="card-body">
                    <div class="row text-center">
                        <div class="col-lg-12 mt-2 p-0">
                            <h2 class="text-primary font-weight-bold mb-0">{{ $caracteristica->peso }}</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-8 order-lg-1">
            <div class="card shadow mb-4 p-3">
                <div class="mx-auto text-center col-md-10">
                    <h3 class="p-0 mb-5">{{ $caracteristica->nombre }}</h3>
                </div>
                <div class="row">
                    <div class="col-md-10 mx-auto">
                        <div class="mb-3">
                            <h3 class="text-primary mb-2">Descripción</h3>
                            <p class="text-justify">{{ $caracteristica->descripcion }}</p>
                        </div>
                    </div>
                    <div class="col-md-10 mx-auto">
                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <h3 class="text-primary mb-2">Proyecto</h3>
                                <p>{{ $caracteristica->factor->nombre }}</p>
                            </div>
                            <div class="col-md-6">
                                <h3 class="text-primary mb-2">Progreso</h3>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-striped bg-info progress-bar-animated" role="progressbar" style="width: {{ $caracteristica->progreso }}%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                        {{ $caracteristica->progreso }} %
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <h3 class="text-primary mb-1">Estado</h3>
                                    @if ($caracteristica->estado == "Activado")
                                        <p>
                                            <span class="badge badge-success">{{ $caracteristica->estado }}</span>
                                        </p>
                                    @else
                                        <p>
                                            <span class="badge badge-danger">{{ $caracteristica->estado }}</span>
                                        </p>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mx-auto col-md-10">
                        <div class="row my-3">
                            <div class="col">
                                <a href="{{ route('caracteristicas.edit', ['caracteristica' => $caracteristica->id]) }}" class="text-primary">¿Desea editar esta caracteristica?</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>|
        </div>
    </div>

@endsection
