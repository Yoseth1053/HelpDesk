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
                <th class="centrar"><img src="{{ asset('img/LogoSenaNegro.png') }}" width="120px"
                        height="60px"></th>
                <th style="border: 1px solid #E3E3E3;" class="centrar" rowspan="2">
                    FORMATO LEGALIZACION DE ANTICIPO (PRESUPUESTO)
                    <br>
                    Radicado: 
                </th>
                <th class="centrar"><img src="{{ asset('img/LogoSenaNegro.png') }}" width="120px"
                        height="60px"></th>
            </tr>
            <tr>
                <th style="border: 1px solid #E3E3E3;" class="centrar">CÓDIGO:GFI-FO-17</th>
                <th style="border: 1px solid #E3E3E3;" class="centrar">VERSIÓN:2</th>
            </tr>
        </table>
    </header>

    <body>

        <table class="borde">
            <tbody>
                <tr>
                    <td colspan="4" style="border: 1px solid #ffffff;"  width="70%" class="titulo">RADICADO DEL FORMATO QUE SE VA A LEGALIZAR:</td>
                    <td style="border: 1px solid #ffffff;"  class="body"><b></b></td>
                </tr>
                <tr>
                    <td style="border: 1px solid #ffffff;"  class="titulo">FECHA:</td>
                    <td style="border: 1px solid #ffffff;"  class="body"><b></b></td>
                    <td rowspan="2" style="border: 1px solid #ffffff;"  class="titulo">COMPROBANTE DE EGRESO</td>
                    <td style="border: 1px solid #ffffff;"  class="titulo">No.</td>
                    <td style="border: 1px solid #ffffff;"  class="body"></td>
                </tr>
                <tr>
                    <td style="border: 1px solid #ffffff;"  class="titulo">HORA:</td>
                    <td style="border: 1px solid #ffffff;"  class="body"><b></b></td>
                    <td style="border: 1px solid #ffffff;"  class="titulo">VALOR:</td>
                    <td style="border: 1px solid #ffffff;"  class="body"></td>
                </tr>
                <tr>
                    <td style="border: 1px solid #ffffff;"  class="titulo">DEPENDENCIA:</td>
                    <td style="border: 1px solid #ffffff;"  class="body">{</td>
                    <td style="border: 1px solid #ffffff;"  class="titulo">ACTIVIDAD</td>
                    <td colspan="2" style="border: 1px solid #ffffff;"  class="body"></td>
                </tr>
            </tbody>
        </table>

        <table class="borde">
            <tbody>
                <tr>
                    <td style="border: 2px solid #000000;"  class="titulo">NIT/CC</td>
                    <td style="border: 2px solid #000000;"  class="titulo">RAZÓN SOCIAL</td>
                    <td style="border: 2px solid #000000;"  class="titulo">CONCEPTO</td>
                    <td style="border: 2px solid #000000;"  class="titulo">FACTURA</td>
                    <td style="border: 2px solid #000000;"   width="12%" class="titulo">FECHA</td>
                    <td style="border: 2px solid #000000;"  class="titulo">VALOR($)</td>
                    <td style="border: 2px solid #000000;"  class="titulo">RETENCIÓN($)</td>
                </tr>
                
                <tr>
                    <td style="border: 2px solid #000000;"  class="body1"></td>
                    <td style="border: 2px solid #000000;"  class="body1"></td>
                    <td style="border: 2px solid #000000;"  class="body1"></td>
                    <td style="border: 2px solid #000000;"  class="body1"></td>
                    <td style="border: 2px solid #000000;"  class="body1"></td>
                    <td style="border: 2px solid #000000;"  class="body1"></td>
                    <td style="border: 2px solid #000000;"  class="body1"></td>
                </tr>
                <tr>
                    <td style="border: 2px solid #000000;"  class="titulo1">TOTAL:</td>
                    <td colspan="4" style="border: 2px solid #000000;"  class="body1"></td>
                    <td style="border: 2px solid #000000;"  class="body1"></td>
                    <td style="border: 2px solid #000000;"  class="body1"></td>
                </tr>
            </tbody>
        </table>

        <table class="borde">
            <tbody>
                <tr>
                    <td style="border: 1px solid #ffffff;" width="50%" class="titulo">VALOR ANTICIPO($)</td>
                    <td style="border: 1px solid #ffffff;"  class="body"></td>
                </tr>
                <tr>
                    <td style="border: 1px solid #ffffff;"  class="titulo">VALOR DE LA LEGALIZACIÓN($)</td>
                    <td style="border: 1px solid #ffffff;"  class="body"></td>
                </tr>
                <tr>
                    <td style="border: 1px solid #ffffff;"  class="titulo">VALOR A REINTEGRAR RETENCIONES($)</td>
                    <td style="border: 1px solid #ffffff;"  class="body"></td>
                </tr>
                <tr>
                    <td style="border: 1px solid #ffffff;"  class="titulo">VALOR POR REINTEGRAR A LA CRUZ ROJA($)</td>
                    <td style="border: 1px solid #ffffff;"  class="body"></td>
                </tr>
                <tr>
                    <td style="border: 1px solid #ffffff;"  class="titulo">RESPONSABLE DEL ANTICIPO:</td>
                    <td style="border: 1px solid #ffffff;"  class="body"></td>
                </tr>
            </tbody>
        </table>

        

    </body>

</html>