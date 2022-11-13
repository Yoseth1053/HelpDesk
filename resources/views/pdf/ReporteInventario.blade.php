<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <style>
        table.borde {
            border-collapse: collapse;
            border: 1px solid #E3E3E3;
            padding: 1% 5% 1% 5%;
            width: 100%;
        }

        table.borde1 {
            border-collapse: collapse;
            border: 1px solid #E3E3E3;
            padding: 1% 0% 1% 10%;
            width: 50%;
        }

        table.borde2 {
            border-collapse: collapse;
            border: 1px solid #E3E3E3;
            padding: 2% 0% 1% 10%;
            width: 50%;
        }

        table {
            border: none;
            padding: 1% 5% 1% 5%;
            width: 100%;
        }

        th.centrar {
            font-size: 12px;
            text-align: center;
        }

        th {
            font-size: 13px;
            font-family: Arial, Helvetica, sans-serif;
            padding: 0% 0% 0% 0%;
        }

        td {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 12px;
            padding: 0% 0% 0% 0%;
            text-align: center;
        }

        td.titulo {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 14px;
            padding: 0% 0% 0% 0%;
            text-align: center;
            font-weight: bold;
            background-color: #DDDDDD;
        }

        td.titulo1 {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 14px;
            padding: 0% 0% 0% 0%;
            text-align: center;
            font-weight: bold;
        }

        td.body {
            font-family: 'Times New Roman', Times, serif;
            font-size: 14px;
            padding: 0% 0% 0% 0%;
            text-align: center;
            background-color: #DDDDDD;
        }

        td.body {
            font-family: 'Times New Roman', Times, serif;
            font-size: 14px;
            padding: 0% 0% 0% 0%;
            text-align: center;
        }
    </style>
</head>

<body>

    <header>
        <table class="borde">
            <tr>
                <th class="centrar"><img src="{{ public_path('img/LogoSenaNegro.png') }}" width="120px" height="90px">
                </th>
                <th style="border: 1px solid #E3E3E3;" class="body" rowspan="2">
                    SERVICIO NACIONAL DE APRENDIZAJE - SENA
                    <br>
                    FORMATO REPORTE DE INVENTARIO
                </th>
                <!-- <th class="centrar"></th> -->
            </tr>
            <tr>
                <th style="border: 1px solid #E3E3E3;" class="body">CÓDIGO:FRI-S{{ $ambiente->id }}</th>
                {{-- <th style="border: 1px solid #E3E3E3;" class="body">VERSIÓN:2</th> --}}
            </tr>
        </table>
    </header>

    <body>

        <b>
            <table class="borde">
                <tbody>
                    <tr>
                        <td style="border: 1px solid #ffffff;" class="titulo">AMBIENTE</td>
                        <td style="border: 1px solid #ffffff;" class="titulo"><b>{{ strtoupper($ambiente->nombre) }}</b></td>
                    </tr>

                    <tr>
                        <td style="border: 1px solid #ffffff;" class="titulo">RESPONSABLE:</td>
                        <td style="border: 1px solid #ffffff;" class="titulo"><b>{{strtoupper(Auth::user()->nombres.' '.Auth::user()->apellidos)}}</b></td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid #ffffff;" class="titulo">FECHA:</td>
                        <td style="border: 1px solid #ffffff;" class="titulo"><b>{{$fecha}}</b></td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid #ffffff;" class="titulo">HORA:</td>
                        <td style="border: 1px solid #ffffff;" class="titulo"><b>{{$hora}}</b></td>
                    </tr>
                </tbody>
            </table>
        </b>

        <table class="borde">
            <tbody>
                
                    <tr>
                        <td colspan="2" style="border: 2px solid #ffffff;" class="titulo"><b>INVENTARIO</b></td>
                    </tr>
                    <tr>
                        <td style="border: 2px solid #ffffff;" class="body"><b> Elemento</b></td>
                        <td style="border: 2px solid #ffffff;" class="body"><b> Cantidad</b></td>
                    </tr>
                
                @foreach ($inventarios as $inventario)
                    <tr>
                        <td style="border: 2px solid #ffffff;" class="body">{{ $inventario->elemento->nombre }}</td>
                        <td style="border: 2px solid #ffffff;" class="body">{{ $inventario->cantidad }}</td>
                    </tr>
                @endforeach



            </tbody>
        </table>




    </body>

</html>
