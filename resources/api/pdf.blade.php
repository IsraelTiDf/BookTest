@php

    ini_set('max_execution_time', 900);

@endphp
<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" media="all" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <title>RELATÓRIO DE VENDAS</title>

    <style>
        thead {
            display: table-header-group;
        }

        tfoot {
            display: table-row-group;
        }

        tr {
            page-break-inside: avoid;
        }

        td,
        th {
            font-size: 12px;
        }

        h4 {
            font-size: 14px;
        }
    </style>
</head>

<body>
    <div class="container">

        <div class="row">
            <div class="col-xs-4">
                <div style="width:55px">
                    <span id="logo" style="display: inline-block;">
                        <img class="img-responsive"
                            src="https://tecnologiadc.com.br/wp-content/uploads/2020/12/logo-dark.png">
                    </span>
                </div>
            </div>

            <div class="col-xs-8 ">
                <p><strong>PDF</strong></p>

            </div>
        </div>

        <div class="clearfix"></div>

        <div style="margin-top:20px;">

            <div class="well well-sm text-center" style="padding:5px;">
                <h4><strong>RELATÓRIO</strong></h4>
            </div>

            <hr style="margin-bottom:5px;">
            <div class="row">


                @if (isset($params['DATA']))
                    <div class="col-xs-6">
                        <h6>

                            <strong>DATA:</strong> {{ $params['DATA'] or '' }}

                        </h6>
                    </div>
                @endif


                @if (isset($params['DATA_FINAL']))
                    <div class="col-xs-6">
                        <h6><strong>DATA FINAL:</strong> {{ $params['DATA_FINAL'] or '' }}</h6>
                    </div>
                @endif



                <div class="col-xs-4">
                    <h6><strong>TOTAL DE REGISTROS:</strong> {{ count($items) }} </h6>
                </div>


            </div>
            <hr style="margin-top:5px;">




        </div>
    </div>
</body>

</html>
