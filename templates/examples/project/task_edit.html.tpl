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
                            <i class="fa fa-th" aria-hidden="true"></i>
                        </div>
                        <input type="text" class="form-control" name="part_code" value="{part_code}" required {readonly}>
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
                        <input type="text" class="form-control" name="description" value="{description}" required  {readonly}>
                    </div>
                </div>

                <div class="form-group col-sm-12">
                    <div class="col-sm-4 control-label">
                        <label>{RES:finish}</label>
                    </div>

                    <div class="col-sm-6 input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-clock-o" aria-hidden="true"></i>
                        </div>
                        <input type="number" class="form-control" name="source" value="{source}" required  {readonly}>
                    </div>
                </div>

                <div class="form-group col-sm-12">
                    <div class="col-sm-4 control-label">
                        <label>{RES:operation}</label>
                    </div>

                    <div class="col-sm-6 input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-th" aria-hidden="true"></i>
                        </div>
                        <input type="text" class="form-control" name="source_lead_time" value="{source_lead_time}" required  {readonly}>
                    </div>
                </div>
                
                <div class="form-group row col-sm-12">
                    <div class="col-sm-4 control-label">
                        <label class="text-danger">{RES:state}</label>
                    </div>
                    <div class="col-sm-6 input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-expand" aria-hidden="true"></i>
                        </div>
                        <select class="form-control" name="measurement_unit_code" id="measurement_unit_code" required >
                            <option value="">{RES:select_value}</option>
                            <option value="RUNNING">RUNNING</option>
                            <option value="STOPPED">STOPPED</option>
                            <option value="FINISHED">FINISHED</option>

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
                        <input type="text" class="form-control" name="id_part_code" required  {readonly}>
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
                        <input type="number" class="form-control" name="part_code" value="0" >
                    </div>
                </div> 
                
                <div class="form-group col-sm-12">
                    <div class="col-sm-4 control-label">
                        <label>{RES:log}</label>
                    </div>
     
                    <div class="col-sm-6 input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
                        </div>
                        <input type="text" class="form-control" name="wastage" value="">
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
    // Sets all form selects option value


    /** Method 1
    var element = document.getElementById('source');
    element.value = '{source}';

    var element = document.getElementById('measurement_unit_code');
    element.value = '{measurement_unit_code}';

    var element = document.getElementById('part_type_code');
    element.value = '{part_type_code}';

    var element = document.getElementById('part_category_code');
    element.value = '{part_category_code}';
    */

    // Method 2 - Better (do not change values when reset button is pressed)
    // $("#source option[value={source}]").attr('selected','selected');

    $('input[name=source][value="{source}"]').prop('checked', true);

    var measurement_unit_code = '{measurement_unit_code}';
    if (measurement_unit_code != '')
        $("#measurement_unit_code option[value={measurement_unit_code}]").attr('selected','selected');

    var part_type_code = '{part_type_code}';
    if (part_type_code != '')
        $("#part_type_code option[value={part_type_code}]").attr('selected','selected');

    var part_category_code = '{part_category_code}';
    if (part_category_code != '')
        $("#part_category_code option[value={part_category_code}]").attr('selected','selected');
</script>
</body>
</html>
