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
                <div class="card-profile-image my-5">
                    @if ($universidad->logo)
                        <img src="/storage/{{ $universidad->logo }}" alt="Logo de la universidad" class="" font-weight-bold" style="font-size: 60px; width: 200px;">
                    @endif
                </div>
            </div>
        </div>
        <div class="col-lg-8 order-lg-1">
            <div class="card shadow mb-4 p-3">
                <h2 class="mx-auto mb-4">{{ $universidad->nombre }}</h2>
                <div class="row">
                    <div class="col-md-10 mx-auto">
                        <div class="mb-3">
                            <h3 class="text-primary mb-2">NIT: <span class="text-dark" style="font-size: 23px">{{ $universidad->nit }}</span></h3>
                        </div>
                        <div class="mb-3">
                            <h3 class="text-primary mb-2">Descripción</h3>
                            <p class="text-justify">{{ $universidad->descripcion }}</p>
                        </div>
                        <div class="mb-3">
                            <h3 class="text-primary mb-2">Misión</h3>
                            <p class="text-justify">{{ $universidad->mision }}</p>
                        </div>
                        <div class="mb-3">
                            <h3 class="text-primary mb-2">Visión</h3>
                            <p class="text-justify">{{ $universidad->vision }}</p>
                        </div>
                        <div class="row">
                            <div class="mb-3 col-lg-6">
                                <h3 class="text-primary mb-2">Dirección</h3>
                                <p class="text-justify">{{ $universidad->direccion }}</p>
                            </div>

                            <div class="mb-3 col-lg-6">
                                <h3 class="text-primary mb-2">Telefono</h3>
                                <p class="text-justify">{{ $universidad->telefono }}</p>
                            </div>
                        </div>
                        <div class="row my-3">
                            <div class="col">
                                <a href="{{ route('universidades.edit', ['universidad' => $universidad->id]) }}" class="text-primary">¿Desea editar esta universidad?</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
