<!DOCTYPE html>
<html>
<head>
    <title>Task</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap core CSS -->
    <link href="http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.4/js/bootstrap.min.js"></script>

</head>
<body>
{Controller:examples\cms\NavigationBar}

<div class="container">
    <h1>{RES:Title}</h1>
    <form name="part_record_form" id="part_record_form" method="post" class="form-horizontal">
    
        <div class="panel panel-primary">
            
            <div class="panel-heading">
                <h1 class="panel-title">{FormTitle}</h1>
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
                
                <div class="form-group col-sm-12">
                    <div class="col-sm-4 control-label">
                        <label class="text-danger">{RES:TaskID}</label>
                    </div>
     
                    <div class="col-sm-6 input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-tasks" aria-hidden="true"></i>
                        </div>
                        <input type="text" class="form-control" name="ID" value="{ID}" required {readonly}>
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
                        <input type="text" class="form-control" name="StartTime" value="{StartTime}" required  {readonly}>
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
                        <input type="text" class="form-control" name="FinishTime" value="{FinishTime}" required  {readonly}>
                    </div>
                </div>

                <div class="form-group col-sm-12">
                    <div class="col-sm-4 control-label">
                        <label class="text-danger">{RES:operation}</label>
                    </div>

                    <div class="col-sm-6 input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-cogs" aria-hidden="true"></i>
                        </div>
                        <input type="text" class="form-control" name="Operation" value="{Operation}" required  {readonly}>
                    </div>
                </div>
                
                <div class="form-group row col-sm-12">
                    <div class="col-sm-4 control-label">
                        <label class="text-danger">{RES:state}</label>
                    </div>
                    <div class="col-sm-6 input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-check-square-o" aria-hidden="true"></i>
                        </div>
                        <select class="form-control" name="Status" id="Status" required >
                            <option value="">{RES:select_value}</option>
                            <option value="RUNNING">{RES:value1}</option>
                            <option value="STOPPED">{RES:value2}</option>
                            <option value="FINISHED">{RES:value3}</option>

                        </select>
                    </div>
                </div>

                <div class="form-group row col-sm-12">
                    <div class="col-sm-4 control-label">
                        <label class="text-danger">{RES:scheduled}</label>
                    </div>
                    <div class="col-sm-6 input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-th" aria-hidden="true"></i>
                        </div>
                        <input type="text" class="form-control" name="SQuantity" value={SQuantity} required  {readonly}>
                    </div>
                </div>

                <div class="form-group row col-sm-12">
                    <div class="col-sm-4 control-label">
                        <label class="text-danger">{RES:produced}</label>
                    </div>
                    <div class="col-sm-6 input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-th" aria-hidden="true"></i>
                        </div>
                        <input type="text" class="form-control" name="PQuantity" value={PQuantity} required  {readonly}>
                    </div>
                </div>

                <div class="form-group row col-sm-12">
                    <div class="col-sm-4 control-label">
                        <label class="text-danger">{RES:remaining}</label>
                    </div>
                    <div class="col-sm-6 input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-th" aria-hidden="true"></i>
                        </div>
                        <input type="text" class="form-control" name="RQuantity" value={RQuantity} required  {readonly}>
                    </div>
                </div>

                <div class="form-group row col-sm-12">
                    <div class="col-sm-4 control-label">
                        <label class="text-danger">{RES:additional}</label>
                    </div>
                    <div class="col-sm-6 input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-th" aria-hidden="true"></i>
                        </div>
                        <input type="number" class="form-control" name="AQuantity" value="0" required {readonlyA} >
                    </div>
                </div> 
                
                <div class="form-group col-sm-12">
                    <div class="col-sm-4 control-label">
                        <label class="text-danger">{RES:log}</label>
                    </div>
     
                    <div class="col-sm-6 input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-commenting" aria-hidden="true"></i>
                        </div>
                        <input type="text" class="form-control" name="Log" value="">
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
</body>
</html>
