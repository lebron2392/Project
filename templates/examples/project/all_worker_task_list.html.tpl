<!DOCTYPE html>
<html>
<head>
    <title>{RES:Title}</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap core CSS -->
    <link href="http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.js"></script>
    <![endif]-->
</head>
<body>


<div class="container" >
    <h1>{RES:Title}</h1>
    <form name="part_record_form" id="part_record_form" method="post" class="form-horizontal">

        <div class="panel panel-primary">

            <div class="panel-heading">
                <h1 class="panel-title">{RES:WorkerTitle}</h1>
            </div>

            <div class="panel-body">


                <div class="form-group col-sm-12">
                    <div class="col-sm-4 control-label">
                        <label class="text-danger"></label>
                    </div>

                    <div class="col-sm-6 input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-user-circle" aria-hidden="true"></i>
                        </div>
                        <input type="text" class="form-control" name="IDOp" value="{IDOp}" required readonly>
                    </div>
                </div>
        </div>

    </form>
</div>


    <div class="well">
        <ol class="h4">
    <div class="table table-responsive">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>{RES:IDTask}</th>
                    <th>{RES:Giorno}</th>
                    <th>{RES:OraInizio}</th>
                    <th>{RES:OraFine}</th>
                    <th>{RES:Operazione}</th>
                    <th>{RES:Stato}</th>
                    <th>{RES:QuantitaProgrammata}</th>
                    <th>{RES:QuantitaRealizzata}</th>
                    <th>{RES:ErrorLog}</th>
                    <th>{RES:Edificio}</th>
                    <th>{RES:Reparto}</th>
                    <th>{RES:Macchinario}</th>
                </tr>
            </thead>
            <tbody>
                <!-- BEGIN Parts -->
                <tr>
                    <td>{IDTask}</td>
                    <td>{Giorno}</td>
                    <td>{OraInizio}</td>
                    <td>{OraFine}</td>
                    <td>{Operazione}</td>
                    <td>{Stato}</td>
                    <td>{QuantitaProgrammata}</td>
                    <td>{QuantitaRealizzata}</td>
                    <td>{ErrorLog}</td>
                    <td>{Edificio}</td>
                    <td>{Reparto}</td>
                    <td>{Macchinario}</td>
                </tr>
                <!-- END Parts -->
            </tbody>
            <tfoot>
                <tr>
                    <td class = "text-center" colspan="11">{RES:AllParts} - <a href="part_paginator_sorter_search3">{RES:Back}</a></td>
                </tr>
            </tfoot>
        </table>
    </div>
    </ol>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.4/js/bootstrap.min.js"></script>
</body>
</html>