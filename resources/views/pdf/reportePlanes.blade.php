<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exportar PDF</title>

    {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">> --}}
    <style>
        td {
            text-align: center;
        }

        footer {
            position: fixed;
            bottom: 0cm;
            left: 0cm;
            right: 0cm;
            color: grey;
        }
    </style>

</head>
<body style="font-family: 'Arial', sans-serif;">

    <header>
        <table style="margin-bottom: 20px" width="100%" border="1" cellpadding="0" cellspacing="0" bordercolor="#000000">

            <tr>

                <td colspan="2" valign="middle" align="left" width="200px" style="padding: 4px; font-weight: bold">
                    Universidad: <span style="font-weight: normal">{{ $universidad[0]->nombre }}</span></td>
                </td>

                <td colspan="2" style="text-align: center; font-weight: bold">Reporte de Planes</td>
            </tr>

            <tr>

                <td colspan="2" style="text-align: center; font-weight: bold">Fecha: <span style="font-weight: normal">{{ $fecha }}</span></td>
                <td colspan="2" style="text-align: center; font-weight: bold">Codigo: <span style="font-weight: normal">{{ $codigo }}</span></td>

            </tr>

        </table>
    </header>

    <div>
        <table width="100%" border="1" border="1" cellpadding="0" cellspacing="0" bordercolor="#000000">
            <tr>
                <th colspan="7" style="padding: 5px 0 5px 0">Listado de planes</th>
            </tr>
            <tr>
                <th>Nombre</th>
                <th>Programa</th>
                <th>descripción</th>
                <th>Objetivo General</th>
                <th>Objetivos Especificos</th>
                <th>Progreso</th>
                <th>Estado</th>
            </tr>
            <tbody>
                @foreach($planes as $plan)
                <tr>
                    <td>{{$plan->nombre}}</td>
                    <td>{{$plan->programa->nombre}}</td>
                    <td>{{ $plan->descripcion }}</td>
                    <td>{{ $plan->objetivo_general }}</td>
                    <td>{{ $plan->objetivos_especificos }}</td>
                    <td>{{ $plan->progreso }}%</td>
                    <td>
                        {{ $plan->estado }}
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>


    <footer>
        {{ $universidad[0]->nombre }} - 2021
    </footer>




    {{-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script> --}}
</body>
</html>
