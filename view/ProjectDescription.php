
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
                    <section class="content">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="box">
                                    <div class="box-header">
                                        <h3 class="box-title">Project Description</h3>
                                    </div>
                                    <!-- /.box-header -->
                                    <div class="box-body">
                                        <table id="example2" class="table table-bordered table-hover">
                                            
                                            <tbody>
                                              
                                                    <tr>
                                                        <td>Project Name</td>
                                                     <td><?php echo $data[0] ?></td>
                                                    </tr>
                                                    <tr> 
                                                        <td>Project Approach</td>
                                                        <td><?php echo $data[1] ?></td></tr>
                                                    <tr>
                                                        <td>Project Technology</td>
                                                        <td><?php echo $data[2] ?></td></tr>
                                                     <tr>
                                                        <td>Team Lead</td>
                                                        <td><?php echo $data[3] ?></td></tr>
                                                    <tr> 
                                                        <td>Client Name</td>
                                                        <td><?php echo $data[4] ?></td></tr>
                                                     <tr> 
                                                        <td>Client Email</td>
                                                        <td><?php echo $data[5] ?></td></tr>
                                                     <tr> 
                                                        <td>Company Detail</td>
                                                        <td><?php echo $data[6] ?></td></tr>
                                                     <tr> 
                                                        <td>Contact Number</td>
                                                        <td><?php echo $data[7] ?></td></tr>
                                                     <tr> 
                                                        <td>Estimated Hours</td>
                                                        <td><?php echo $data[8] ?></td></tr>
                                                     <tr> 
                                                        <td>Uploaded Image</td>
                                                        <td><img src="<?php echo BASE_URL.$data[9]; ?>" height="150" width="150">
</td></tr>
                                                    
                                                        
                                                        
                                                    
                                                       
                                               
                                            </tbody>

                                        </table>
                                    </div>
                                    <!-- /.box-body -->
                                </div>
                                </section>
                            </div>
                            </form>    
                            </body>
                            </html>
                            <?php include 'sidebar.php'; ?>
                           