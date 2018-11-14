
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
        <form action="<?php echo BASE_URL . 'Project/editProject' . '?' . 'Id=' . $data['projectData'][0]; ?>" method="post" id="form">
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
                            <h3 class="box-title">Edit Project</h3> 
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Project ID</label>
                                        <input type="text" class="form-control my-colorpicker1" name="project_id" value="<?php echo $data['projectData']['project_id']; ?>">

                                    </div>

                                    <!-- /.form-group -->
                                    <div class="form-group">
                                        <label>Project Approach</label>
                                        <select class="form-control select2"  style="width: 100%;" name="project_approach" id="project_approach" >
                                            <option value="">--Select project approach--</option>
                                            <option value="Waterfall" <?php echo ($data['projectData']['project_approach'] == 'Waterfall') ? 'selected' : '' ?>>Waterfall</option>
                                            <option value="Agile" <?php echo ($data['projectData']['project_approach'] == 'Agile') ? 'selected' : '' ?>>Agile</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Plan Status</label>
                                        <select class="form-control select2"  style="width: 100%;" name="plan_status" id="plan_status">
                                            <option value="">--Please select plan status--</option>
                                            <option value="Approved" <?php echo ($data['projectData']['plan_status'] == 'Approved') ? 'selected' : '' ?>>Approved</option>
                                            <option value="Unapproved" <?php echo ($data['projectData']['plan_status'] == 'Unapproved') ? 'selected' : '' ?>>Unapproved</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Team Lead</label>
                                        <select class="form-control select2"  style="width: 100%;" name="team_lead" id="team_lead">
                                            <option value="">--Select team lead--</option>
                                            <option value="Divya" <?php echo ($data['projectData']['team_lead'] == 'Divya') ? 'selected' : '' ?>>Divya</option>
                                            <option value="Arif" <?php echo ($data['projectData']['team_lead'] == 'Arif') ? 'selected' : '' ?>>Arif</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Start Date</label>

                                        <div class="input-group date">
                                            <div class="input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                            </div>
                                            <input type="text" class="form-control pull-right" id="startdatepicker" name="start_date" 
                                                   value="<?php echo $data['projectData']['start_date']; ?>">
                                        </div>
                                        <!-- /.input group -->
                                    </div>



                                    <div class="form-group">
                                        <label>Description</label>
                                        <textarea class="form-control" rows="3" name="project_description" id="project_description"><?php echo $data['projectData']['project_description']; ?></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Project Quality</label>
                                        <select class="form-control select2" style="width: 100%;" name="project_quality" id="project_quality">
                                            <option value="">--Select project quality--</option>
                                            <option value="Good" <?php echo ($data['projectData']['project_quality'] == 'Good') ? 'selected' : '' ?>>Good</option>
                                            <option value="Average" <?php echo ($data['projectData']['project_quality'] == 'Average') ? '                                                  selected' : '' ?>>Average</option>
                                            <option value="Poor" <?php echo ($data['projectData']['project_quality'] == 'Poor') ? 'selected' : '' ?>>Poor</option>
                                            <option value="Very poor" <?php echo ($data['projectData']['project_quality'] == 'Very poor') ? 'selected' : '' ?>>Very poor</option>

                                        </select>

                                        <!-- /.form-group -->
                                    </div>
                                    <div class="form-group">
                                        <label>Project Status</label>
                                        <select class="form-control select2" style="width: 100%;" name="project_status" id="project_status">
                                            <option value="">--select project status</option>
                                            <option value="Active" <?php echo ($data['projectData']['project_status'] == 'Active') ? '                                                     selected' : '' ?>>Active</option>
                                            <option value="Inactive" <?php echo ($data['projectData']['project_status'] == 'Inactive') ? '                                                 selected' : '' ?>>Inactive</option>
                                            <option value="Delivered" <?php echo ($data['projectData']['project_status'] == 'Delivered') ? '                                               selected' : '' ?>>Delivered</option>
                                            <option value="Hold" <?php echo ($data['projectData']['project_status'] == 'Hold') ? 'selected' : '' ?>>Hold</option>
                                            <option value="Closed" <?php echo ($data['projectData']['project_status'] == 'Closed') ? '                                                     selected' : '' ?>>Closed</option>

                                        </select>

                                        <!-- /.form-group -->
                                    </div>
                                    <!-- /.form-group -->
                                </div>
                                <!-- /.col -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Project Name</label>
                                        <input type="text" class="form-control my-colorpicker1" name="project_name" value="<?php echo $data['projectData']['project_name']; ?>" id="project_name">
                                    </div>
                                    <!-- /.form-group -->
                                    <div class="form-group">
                                        <label>Client Name</label>
                                        <select class="form-control select2" style="width: 100%;" name="client_name" >
                                            <?php
                                            foreach ($data as $result => $clientData) {
                                                if ($result == 'clientData') {
                                                    echo '<option value="">' . "Select Client Name" . '</option>';
                                                    foreach ($clientData as $clientDescription) {
                                                        ?>

                                                        <option value="<?php echo $clientDescription[0] ?>" <?php echo ($data['projectData']['client_id'] == $clientDescription[0]) ? 'selected' : '' ?>><?php echo $clientDescription[1] ?></option>
                                                        <?php
                                                    }
                                                }
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Project flag</label>
                                        <select class="form-control select2" style="width: 100%;" name="project_flag">
                                            <option value="Smooth Ride" <?php echo ($data['projectData']['project_flag'] == 'Smooth Ride') ? '                                               selected' : '' ?>>Smooth Ride</option>
                                            <option value="Danger Zone" <?php echo ($data['projectData']['project_flag'] == 'Danger Zone') ? '                                               selected' : '' ?>>Danger Zone</option>
                                            <option value="Critical Zone" <?php echo ($data['projectData']['project_flag'] == 'Critical Zone') ? '                                               selected' : '' ?>>Critical Zone</option>

                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Project Manager</label>
                                        <select class="form-control select2" style="width: 100%;" name="project_manager">
                                            <option value="">--Select project manager--</option>
                                            <option value="Divya" <?php echo ($data['projectData']['project_manager'] == 'Divya') ? 'selected' : '' ?>>Divya</option>
                                            <option value="Rahul" <?php echo ($data['projectData']['project_manager'] == 'Rahul') ? 'selected' : '' ?>>Rahul</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Expected End Date</label>

                                        <div class="input-group date">
                                            <div class="input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                            </div>
                                            <input type="text" class="form-control pull-right" id="enddatepicker" 
                                                   name="end_date" value="<?php echo $data['projectData']['end_date']; ?>">
                                        </div>
                                        <!-- /.input group -->
                                    </div>
                                    <div class="form-group">
                                        <label>Technology</label>
                                        <select class="form-control select2" style="width: 100%;" id='multiselect' name= "                                              technology[]" multiple="multiple" required="required">
                                            <?php
                                            foreach ($data as $result => $techData) {

                                                if ($result == 'techData') {
                                                    //echo '<option value="">' . "Select Project Technology" . '</option>';
                                                    $technology_id = explode(",", $data['projectData']['technology_id']);

                                                    foreach ($techData as $techLanguage) {
                                                        ?>
                                                        <option <?= in_array($techLanguage[0], $technology_id) ? 'selected' : '' ?> value="<?php echo $techLanguage[0] ?>"><?php echo $techLanguage[1] ?></option>

                                                        <?php
                                                    }
                                                }
                                            }
                                            ?>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label>Estimated Hours</label>
                                        <input type="text" class="form-control my-colorpicker1" name="estimated_hours" value="<?php echo $data['projectData']['estimated_hours']; ?>" >

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



