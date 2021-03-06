@extends('layouts.admin')

@section('main-content')

<div>
    <div>
        <h2>Administrar Actividades</h2>
    </div>
    <div class="card shadow mb-4">

        <div class="card-header py-3">
            @if (auth()->user()->rol->nombre == 'Decano')
                <a href="{{ route('actividades.create') }}" class="m-0 btn btn-outline-success inline-block">Agregar <i class="fas fa-plus"></i></a>
            @else
                <h6 class="text-primary font-weight-bold d-inline-block">Actividades Registradas</h6>
            @endif

            <a href="{{ route('actividades.exportar') }}" class="m-0 btn btn-outline-danger inline-block float-right" target="__blank">Reporte pdf <i class="fas fa-file-pdf"></i></a>
        </div>


        <div class="card-body">

            @include('alertas.estado')

            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead class="bg-primary text-light">
                    <tr>
                        <th scole="col">Nombre</th>
                        <th scole="col">Indicador</th>
                        <th scole="col">Fecha de Inicio</th>
                        <th scole="col">Fecha de Entrega</th>
                        <th scole="col">Peso</th>
                        <th scole="col">Responsables</th>
                        <th scole="col">Estado</th>
                        <th scole="col">Opciones</th>
                    </tr>
                </thead>
                <tbody>
                     @foreach($actividades as $actividad)
                    <tr>
                        <td>{{$actividad->nombre}}</td>
                        <td>{{$actividad->indicador->nombre}}</td>
                        <td>{{ $actividad->fecha_inicio }}</td>
                        <td>{{ $actividad->tiempo_entrega }}</td>
                        <td>{{ $actividad->peso }}</td>
                        <td>
                            @foreach ($actividad->users as $usuarios)
                                <li style="list-style: none">{{ $usuarios->fullname }}</li>
                            @endforeach
                        </td>
                        <td class="text-center">
                            @if ($actividad->estado == "Avalada")
                                <span class="badge badge-success">{{ $actividad->estado }}</span>
                            @elseif ($actividad->estado == "Rechazada")
                                <span class="badge badge-danger">{{ $actividad->estado }}</span>
                            @elseif ($actividad->estado == "Iniciada")
                                <span class="badge badge-warning text-white">{{ $actividad->estado }}</span>
                            @endif

                        </td>
                        <td>
                            <div class="btn-group">
                                <a href="{{route('actividades.show',['actividad'=>$actividad->id])}}" class="btn btn-primary rounded">
                                    <i class="fas fa-eye"></i>
                                </a>
                                @if (Auth::user()->rol->nombre == "Decano")
                                    <a href="{{ route('actividades.edit', ['actividad' => $actividad->id]) }}" class="btn btn-warning mx-2 rounded">
                                        <i class="fas fa-pencil-alt"></i>
                                    </a>
                                @endif
                            </div>
                        </td>
                    </tr>
                     @endforeach
                </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

