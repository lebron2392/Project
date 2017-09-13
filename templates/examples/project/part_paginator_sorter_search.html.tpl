<!DOCTYPE html>
<html>
<head>
    <title>{RES:SearchFormTitle}</title>
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
{Controller:examples\cms\NavigationBar}
<div class="container">
    <h1>{RES:PartsList}</h1>

    <div id="search-panel" class="panel panel-primary collapse in" aria-expanded="true">
        <div class="panel-heading">
            <h3 class="panel-title">{RES:SearchFormTitle}</h3>
        </div>

        <form class="form-horizontal" method="post" name="{search_form}">
            <div class="panel-body">

                <div class="form-group col-sm-12">
                    <div class="col-sm-4 control-label">
                        <label class="text-danger">{RES:IDOperaioLabel}</label>
                    </div>

                    <div class="col-sm-6 input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-id-badge" aria-hidden="true"></i>
                        </div>
                        <input type="text"  value="{s_id}" name="s_id" id="s_id" placeholder="{RES:IDOperaioPlaceholder}" class="form-control">
                    </div>
                </div>


                    <div class="form-group col-sm-12">
                        <div class="col-sm-4 control-label">
                            <label class="text-danger">{RES:Date}</label>
                        </div>

                        <div class="col-sm-6 input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-calendar-check-o" aria-hidden="true"></i>
                            </div>
                            <div class="form-row show-inputbtns">
                                <input type="date"  value="{s_date}" name="s_date" id="s_date">
                            </div>
                        </div>
                    </div>

            </div>

            <div class="panel-footer">
                <div class="form-group text-center">
                    <label class="col-sm-1 control-label"></label>
                    <div class="col-sm-10">
                        <input class = "btn btn-primary"  type="submit" name="{search_submit}" value="{RES:SearchSubmitCaption}"> &nbsp;
                        <input class = "btn btn-success"  type="submit" name="{search_reset}"  value="{RES:SearchResetCaption}">
                    </div>
                </div>

            </div>
        </form>
    </div>



    <div class="table table-responsive">
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>{SorterBootstrap:ID}</th>
                <th>{SorterBootstrap:Giorno}</th>
                <th>{SorterBootstrap:IDOperaio}</th>
            </tr>
            </thead>
            <tbody>
            <!-- BEGIN Parts -->
            <tr>
                <td><a href="task_list?id={ID}">{ID}</a></td>
                <td>{Giorno}</td>
                <td>{IDOperaio}</td>
            </tr>
            <!-- END Parts -->
            </tbody>
            <tfoot>
            <tr>
                <td class = "text-center" colspan="9">{PaginatorBootstrap:Bottom}</td>
            </tr>
            </tfoot>
        </table>
    </div>

</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.4/js/bootstrap.min.js"></script>
</body>
</html>