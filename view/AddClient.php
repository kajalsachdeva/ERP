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
         <form action="<?php echo BASE_URL . 'Client/addClient' ?>" method="post">
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
                      <h3 class="box-title">Add Client</h3> 
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Client Name</label>
                                    <input type="text" class="form-control my-colorpicker1" name="client-name">
                 
                                </div>
                                  <div class="form-group">
                                    <label>Company Details</label>
                                    <textarea class="form-control" rows="3" placeholder="Enter ..." name="company-detail"></textarea>
                                </div>
                            </div>
                                <!-- /.form-group -->
                               
                            <!-- /.col -->
                            <div class="col-md-6">
                               
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" class="form-control my-colorpicker1" name="client-email">
                                </div>
                                <div class="form-group">
                                    <label>Mobile Number</label>
                                    <input type="text" pattern="^\d{10}$" class="form-control my-colorpicker1" name="contact-number">
                                </div>
                                <!-- /.form-group -->
                                
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