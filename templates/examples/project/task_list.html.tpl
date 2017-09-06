<!DOCTYPE html>
<html>
<head>
    <title>Part listing</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap core CSS -->
    <link href="http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet" media="screen">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.js"></script>
    <![endif]-->
</head>
<body>
<center><h1>{RES:Title}</h1></center>
    <div class="well">
        <ol class="h4">
    <div class="table table-responsive">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>{RES:IDTask}</th>
                    <th>{RES:OraInizio}</th>
                    <th>{RES:OraFine}</th>
                    <th>{RES:Operazione}</th>
                    <th>{RES:Stato}</th>
                    <th>{RES:QuantitaProgrammata}</th>
                    <th>{RES:Edificio}</th>
                    <th>{RES:Reparto}</th>
                    <th>{RES:Macchinario}</th>
                </tr>
            </thead>
            <tbody>
                <!-- BEGIN Parts -->
                <tr>
                    <td>{IDTask}</td>
                    <td>{OraInizio}</td>
                    <td>{OraFine}</td>
                    <td>{Operazione}</td>
                    <td>{Stato}</td>
                    <td>{QuantitaProgrammata}</td>
                    <td>{Edificio}</td>
                    <td>{Reparto}</td>
                    <td>{Macchinario}</td>
                </tr>
                <!-- END Parts -->
            </tbody>
            <tfoot>
                <tr>
                    <td class = "text-center" colspan="9">{RES:AllParts} - <a href="part_paginator_sorter_search">{RES:Back}</a></td>
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