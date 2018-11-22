
<?php
include 'header.php';
?>
<!DOCTYPE html>
<html> 
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>AdminLTE 2 | Dashboard</title>
        <!-- Tell the browser to be responsive to screen width -->

    </head>
    <body class="hold-transition skin-blue sidebar-mini">
       
            <div class="content-wrapper">
                 <form action="<?php echo BASE_URL . 'Project/addProject' ?>" method="post" name="form" id="form" enctype="multipart/form-data">
    <!--            <section class="content-header">
                    <h3>
                        Add Project
                        <small>Preview</small>
                    </h3>
                </section>-->
                <section class="content">

                    <!-- SELECT2 EXAMPLE -->
                    <div class="box box-default">
                        <div class="box-header with-border">
                            <h3 class="box-title">Add Project Task</h3> 
                        </div>
                        <!-- /.box-header -->
                        
                                        
                        <div class="box-body">
                            
                            <div class="row">
                                 <div class="form-group col-xs-3">
                                     <label>Date</label>

                                        <div class="input-group date">
                                            <div class="input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                            </div>
                                            <input type="text" class="form-control pull-right" id="enddatepicker" name="end_date">
                                        </div>
                                        <!-- /.input group -->
                                    </div>
                            </div>
                            <div id="act">
                             <div class="row" id="action">
                                 <div class="col-xs-3">
                 <label>Project</label>
                                        <select class="form-control select2" style="width: 100%;" name="project_quality" id="project_quality">
                                            <option value="">--project name--</option>
                                           

                                        </select>
                </div>
                <div class="col-xs-4">
                  <label>Tasks</label>
                                        <textarea class="form-control" rows="3" placeholder="Enter ..." name="project_description" id="project_description"></textarea>
                </div>
                <div class="col-xs-3">
                  <div class="bootstrap-timepicker">
                <div class="form-group">
                  <label>Time picker:</label>

                  <div class="input-group">
                    <input type="time" class="form-control timepicker">

                    <div class="input-group-addon">
                      <i class="fa fa-clock-o"></i>
                    </div>
                  </div>
                  <!-- /.input group -->
                </div>
                <!-- /.form group -->
              </div>
                </div>
                                <div>            
                  <i class="fa fa-plus-square btn btn-primary" aria-hidden="true" id="addComponent"></i>
                  <i class="fa fa-minus-square btn btn-primary" aria-hidden="true"></i>
                                </div>
               
                <!-- /.form group -->
               
              </div> 
                            </div>
                                </div>
                                <!-- /.row -->
                               
                                    <!-- /.form-group -->
                                  <div class="box-footer">
                                        <p align="right">
                                            <button type="submit" name="submit">Submit</button></p>
                                    </div>  
                                </div>
                      </section>
                     </form>
                            </div>
                           
            </div>
        
    </body>
</html>
<?php include 'sidebar.php'; ?>
<script>
    $(function () {
        
        $('#enddatepicker').datepicker({
            autoclose: true,
            format: 'yyyy-mm-dd'

        });


    });
</script>





