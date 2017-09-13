<!DOCTYPE html>
<html>
<head>
    <title>Project</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap core CSS -->
    <link href="http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.4/js/bootstrap.min.js"></script>

</head>
<body>
{Controller:examples\cms\NavigationBar}
<div class="container">
    <h1>{RES:PartManager}</h1>
    <form name="part_record_form" id="part_record_form" method="post" class="form-horizontal">
    
        <div class="panel panel-primary">
            
            <div class="panel-heading">
                <h1 class="panel-title">{RES:FormTitle}</h1>
            </div>

            <div class="panel-body">

                <!-- BEGIN ValidationErrors -->
                <div class="form-group col-sm-12">
                    <div class="col-sm-1"></div>
                    <div class="alert alert-danger alert-dismissible col-sm-10" role="alert">
                        <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">×</span>
                            <span class="sr-only">Close</span></button>{RES:errormsg}
                        <br/>
                        <span id="campione_record_inccampioneErrorBlock">{Error}</span>
                    </div>
                    <div class="col-sm-1"></div>
                </div>
                <!-- END ValidationErrors -->

                <div class="form-group row col-sm-12">
                    <div class="col-sm-4 control-label">
                        <label class="text-danger">{RES:IDTask}</label>
                    </div>
                    <div class="col-sm-6 input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-tasks" aria-hidden="true"></i>
                        </div>
                        <select class="form-control" name="IDTask" id="IDTask" required>
                            <option value="">{RES:IDTaskPlaceholder}</option>
                            <!-- BEGIN IDTask_list -->
                            <option value="{IDTask}">{name1} - {name2}</option>
                            <!-- END IDTask_list -->
                        </select>
                    </div>
                </div>

                <div class="form-group row col-sm-12">
                    <div class="col-sm-4 control-label">
                        <label class="text-danger">{RES:IDOdl}</label>
                    </div>
                    <div class="col-sm-6 input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-vcard-o" aria-hidden="true"></i>
                        </div>
                        <select class="form-control" name="ID" id="ID" required>
                            <option value="">{RES:IDOdlPlaceholder}</option>
                            <!-- BEGIN IDOdl_list -->
                            <option value="{ID}">{name3} - {name4}</option>
                            <!-- END IDOdl_list -->
                        </select>
                    </div>
                </div>

                <div class="form-group col-sm-12">
                    <div class="col-sm-4 control-label">
                        <label class="text-danger">{RES:start}</label>
                    </div>

                    <div class="col-sm-6 input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-clock-o" aria-hidden="true"></i>
                        </div>
                        <input type="text" class="form-control" name="StartTime"  placeholder="{RES:StartTimePlaceholder}" required>
                    </div>
                </div>

                <div class="form-group col-sm-12">
                    <div class="col-sm-4 control-label">
                        <label class="text-danger">{RES:finish}</label>
                    </div>

                    <div class="col-sm-6 input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-clock-o" aria-hidden="true"></i>
                        </div>
                        <input type="text" class="form-control" name="FinishTime" placeholder="{RES:FinishTimePlaceholder}" required>
                    </div>
                </div>

            </div>
     
            <div class="panel-footer">
                <div class="form-group text-center">
                  <label class="col-sm-1 control-label"></label> 
                  <div class="col-sm-10">
                    {Record:PartManagerRecord}
                  </div>
                </div>
            </div>
    
        </div>
        
    </form>
</div>
<script type="text/javascript">

    var IDTask = '{IDTask}';
    if (IDTask != '')
        $("#IDTask option[value={IDTask}]").attr('selected','selected');

    var IDOdl = '{IDOdl}';
    if (IDOdl != '')
        $("#IDOdl option[value={IDOdl}]").attr('selected','selected');

</script>
</body>
</html>
