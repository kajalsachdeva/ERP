<?php include 'header.php'; ?>
<!DOCTYPE html>
<html> 
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>AdminLTE 2 | Dashboard</title>
        <!-- Tell the browser to be responsive to screen width -->

    </head>
    <body class="hold-transition skin-blue sidebar-mini">
    <center>
        <div class="box box-primary">

            <div class="box-header with-border">
                <h3 class="box-title">Course Form</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form acton="<?php echo BASE_URL . 'Course/editCourse' ?>" method="POST">

                <div class="box-body">
                    <div class="form-group">
                        <label for="exampleInputcourseName">Course Name</label>
                        <input type="text" name="InputCourseName"  id="exampleInputcourseName" value="<?php echo $data['course_name']; ?>" placeholder="Enter course name">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputDescripton">Description</label>
                        <textarea rows="4" cols="50" name="InputDescripton" id="exampleInputDescripton" placeholder="Enter Course Description"><?php echo $data['description']; ?>
                        </textarea>
                    </div>

                </div>

                <!-- /.box-body -->

                <div class="box-footer">
                    <button type="submit" class="btn btn-primary" name = "submit">Submit</button>
                </div>
            </form>
        </div>
    </center>

</body>
</html>
<?php include 'sidebar.php'; ?> 