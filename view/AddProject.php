
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
        <form action="<?php echo BASE_URL . 'Project/addProject' ?>" method="post" name="form" id="form" enctype="multipart/form-data">
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
                                        <input type="text" class="form-control my-colorpicker1" name="project_id" id ="project_id">
                                            <?php if(!empty($data['errorMsgVariable'][0]))
                                            {
                                                echo $data['errorMsgVariable'][0]; 
                                            }?>
                                            

                                    </div>

                                    <!-- /.form-group -->
                                    <div class="form-group">
                                        <label>Project Approach</label>
                                        <select class="form-control select2"  style="width: 100%;" name="project_approach" id="project_approach"> 
                                            
                                            <option value="">--Select project approach--</option>
                                            <option value="Waterfall">Waterfall</option>
                                            <option value="Agile">Agile</option>
                                        </select><?php if(!empty($data['errorMsgVariable'][2]))
                                            {
                                                echo $data['errorMsgVariable'][2]; 
                                            }?>
                                    </div>
                                    <div class="form-group">
                                        <label>Plan Status</label>
                                        <select class="form-control select2"  style="width: 100%;" name="plan_status" id="plan_status">
                                            <option value="">--Please select plan status--</option>
                                            <option value="Approved">Approved</option>
                                            <option value="Unapproved">Unapproved</option>
                                        </select><?php if(!empty($data['errorMsgVariable'][1]))
                                            {
                                                echo $data['errorMsgVariable'][1]; 
                                            }?>
                                    </div>
                                    <div class="form-group">
                                        <label>Team Lead</label>
                                        <select class="form-control select2"  style="width: 100%;" name="team_lead" id="team_lead">
                                            <option value="">--Select team lead--</option>
                                            <option value="Divya">Divya</option>
                                            <option value="Arif">Arif</option>
                                        </select>
                                        <?php if(!empty($data['errorMsgVariable'][4]))
                                            {
                                                echo $data['errorMsgVariable'][4]; 
                                            }?>
                                    </div>
                                    <div class="form-group">
                                        <label>Start Date</label>

                                        <div class="input-group date">
                                            <div class="input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                            </div>
                                            <input type="text" class="form-control pull-right" id="startdatepicker" name="start_date">
                                        </div>
                                        <!-- /.input group -->
                                    </div>



                                    <div class="form-group">
                                        <label>Description</label>
                                        <textarea class="form-control" rows="3" placeholder="Enter ..." name="project_description" id="project_description"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Project Quality</label>
                                        <select class="form-control select2" style="width: 100%;" name="project_quality" id="project_quality">
                                            <option value="">--Select project quality--</option>
                                            <option value="Good">Good</option>
                                            <option value="Average">Average</option>
                                            <option value="Poor">Poor</option>
                                            <option value="Very poor">Very poor</option>

                                        </select>

                                        <!-- /.form-group -->
                                    </div>
                                    <div class="form-group">
                                        <label>Project Status</label>
                                        <select class="form-control select2" style="width: 100%;" name="project_status" id="project_status">
                                            <option value="">--select project status</option>
                                            <option value="1">Active</option>
                                            <option value="2">Delivered</option>
                                            <option value="3">Hold</option>
                                            <option value="4">Closed</option>
                                            <option value="5">Inactive</option>

                                        </select>

                                        <!-- /.form-group -->
                                    </div>
                                    <!-- /.form-group -->
                                </div>
                                <!-- /.col -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Project Name</label>
                                        <input type="text" class="form-control my-colorpicker1" name="project_name" id="project_name">
                                         <?php if(!empty($data['errorMsgVariable'][2]))
                                            {
                                                echo $data['errorMsgVariable'][2]; 
                                            }?>
                                    </div>
                                    <!-- /.form-group -->
                                    <div class="form-group">
                                        <label>Client Name</label>
                                        <select class="form-control select2" style="width: 100%;" name="client_name">

                                            <?php
                                            foreach ($data as $result => $clientData) {
//                                                echo $result;
//                                                die;
                                                if ($result == 'clientData') {
                                                    echo '<option value="">' . "Select Client Name" . '</option>';
                                                    foreach ($clientData as $clientDEscription) {
//                                                    echo '<pre>';
//                                                    print_r($clientData);
//                                                    die;

                                                        echo '<option value="' . $clientDEscription[0] . '">' . $clientDEscription[1] . '</option>';
                                                    }
                                                }
                                            }
                                            ?>
                                        </select>
                                        <?php if(!empty($data['errorMsgVariable'][6]))
                                            {
                                                echo $data['errorMsgVariable'][6]; 
                                            }?>
                                    </div>
                                    <div class="form-group">
                                        <label>Project flag</label>
                                        <select class="form-control select2" style="width: 100%;" name="project_flag">
                                            <option value="">--Select project flag--</option>
                                            <option value="Smooth Ride">Smooth Ride</option>
                                            <option value="Danger Zone">Danger Zone</option>
                                            <option value="Critical Zone">Critical Zone</option>

                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Project Manager</label>
                                        <select class="form-control select2" style="width: 100%;" name="project_manager">
                                            <option value="">--Select project manager--</option>
                                            <option value="Divya">Divya</option>
                                            <option value="Rahul">Rahul</option>
                                        </select>
                                         <?php if(!empty($data['errorMsgVariable'][5]))
                                            {
                                                echo $data['errorMsgVariable'][5]; 
                                            }?>
                                    </div>
                                    <div class="form-group">
                                        <label>Expected End Date</label>

                                        <div class="input-group date">
                                            <div class="input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                            </div>
                                            <input type="text" class="form-control pull-right" id="enddatepicker" name="end_date">
                                        </div>
                                        <!-- /.input group -->
                                    </div>
                                    <div class="form-group">
                                        <label>Technology</label>
                                        <select class="form-control select2" style="width: 100%;" id='multiselect' name= "technology[]" multiple="multiple" >
                                            <?php
                                            foreach ($data as $result => $techData) {

                                                if ($result == 'techData') {

                                                    foreach ($techData as $techLanguage) {

                                                        echo '<option value="' . $techLanguage[0] . '">' . $techLanguage[1] . '</option>';
                                                    }
                                                }
                                            }
                                            ?>
                                        </select>
                                         <?php if(!empty($data['errorMsgVariable'][7]))
                                            {
                                                echo $data['errorMsgVariable'][7]; 
                                            }?>
                                    </div>

                                    <div class="form-group">
                                        <label>Estimated Hours</label>
                                        <input type="text" class="form-control my-colorpicker1" name="estimated_hours">

                                    </div>
                                    <div class="form-group">
                                        <label>Upload Image</label>
                                        <input type="file" name="image" id="image">

                                    </div>
                                    <div class="box-footer">
                                        <p align="right">
                                            <button type="submit" name="submit">Submit</button></p>
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
            autoclose: true,
            format: 'yyyy-mm-dd'

        });
        $('#enddatepicker').datepicker({
            autoclose: true,
            format: 'yyyy-mm-dd'

        });


    });
</script>




