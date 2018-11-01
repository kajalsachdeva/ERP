<?php
include 'header.php';
?>
<html> 
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>AdminLTE 2 | Dashboard</title>
        <!-- Tell the browser to be responsive to screen width -->

    </head>
    <body class="hold-transition skin-blue sidebar-mini">
         <form action="" method="post">
        <div class="content-wrapper">
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
                      <h3 class="box-title">Add Project</h3> 
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Project ID</label>
                                    <input type="text" class="form-control my-colorpicker1">
                 
                                </div>

                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label>Project Approach</label>
                                    <select class="form-control select2"  style="width: 100%;">
                                        <option>Waterfall</option>
                                        <option>Agile</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Plan Status</label>
                                    <select class="form-control select2"  style="width: 100%;">
                                        <option>Approved</option>
                                        <option>Unapproved</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Team Lead</label>
                                    <select class="form-control select2"  style="width: 100%;">
                                        <option>Divya</option>
                                        <option>Arif</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Start Date</label>

                                    <div class="input-group date">
                                        <div class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                        </div>
                                        <input type="text" class="form-control pull-right" id="startdatepicker">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <div class="form-group">
                                    <label>Technology</label>
                                    <select class="form-control select2" style="width: 100%;" id='multiselect' name= "multiselect[]">
                                        <option>Php</option>
                                        <option>Java</option>
                                        <option>Magento</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                                </div>
                                <!-- /.form-group -->
                            </div>
                            <!-- /.col -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Project Name</label>
                                    <input type="text" class="form-control my-colorpicker1">
                                </div>
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label>Client Name</label>
                                    <select class="form-control select2" style="width: 100%;">
                                        <option selected="selected">Alabama</option>
                                        <option>Alaska</option>
                                        <option disabled="disabled">California (disabled)</option>
                                        <option>Delaware</option>
                                        <option>Tennessee</option>
                                        <option>Texas</option>
                                        <option>Washington</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Project flag</label>
                                    <select class="form-control select2" style="width: 100%;">
                                        <option selected="selected">Smooth Ride</option>
                                        <option>Danger Zone</option>
                                        <option>Critical Zone</option>

                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Project Manager</label>
                                    <select class="form-control select2" style="width: 100%;">
                                        <option selected="selected">Divya</option>
                                        <option>Rahul</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Expected End Date</label>

                                    <div class="input-group date">
                                        <div class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                        </div>
                                        <input type="text" class="form-control pull-right" id="enddatepicker">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                              <div class="form-group">
                                    <label>Project Quality</label>
                                    <select class="form-control select2" style="width: 100%;">
                                        <option>Good</option>
                                        <option>Average</option>
                                        <option>Poor</option>
                                        <option>Very poor</option>
                                        
                                    </select>
                                
                                <!-- /.form-group -->
                            </div>
                                 <div class="form-group">
                                    <label>Estimated Hours</label>
                                    <input type="text" class="form-control my-colorpicker1">
                 
                                </div>
                                <div class="box-footer">
                <p align="right">
                    <button type="submit" name="save">Submit</button></p>
            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.box-body -->

                </div>
                <!-- /.box -->


                <!-- /.row -->

            </section>
            <!-- /.content -->
        </div>
                </form>
    </body>
</html>
<?php include 'sidebar.php'; ?>

<script>
    $(function () {
        $('#startdatepicker').datepicker({
            autoclose: true
        });
        $('#enddatepicker').datepicker({
            autoclose: true
        });
$("#multiselect").multiselect();
    });
</script>



