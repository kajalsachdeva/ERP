<?php
include 'header.php';
?>


<!DOCTYPE html>
<html>
    <head>

    </head>
    <body class="hold-transition skin-blue sidebar-mini">
        <form action="<?php echo BASE_URL . 'Course/deleteSelectedCourse' ?>" method="post">
            <div class="box-body">


                <table id="example2" class="table-hover" align="right" border="3px">
                    <thead>
                        <tr>
                            <th><input type="checkbox" name="check_all" id="check_all" value=""/></th>
                            <th>Course_Id</th>
                            <th>Course_Name</th>
                            <th>Description</th>
                            <th>Created_Date</th>
                            <th>Updated_Date</th>
                            <th colspan="3">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($data['result'] as $result): ?>

                            <tr>
                                <td> <input type="checkbox" name="selected_id[]" class="checkbox" value="<?php echo $result[0]; ?>"/>
                                </td>
                                <td><?php echo $result[0] ?></td>
                                <td><?php echo $result[1] ?> </td>
                                <td><?php echo $result[2] ?></td>
                                <td> <?php echo $result[3] ?></td>
                                <td><?php echo $result[4] ?></td>
                                <td><a href="<?php echo BASE_URL . 'Course/editCourse' . '?' . 'Id=' . $result[0]; 
                                ?>">Edit</a></td>
                                <td><a href="<?php echo BASE_URL . 'Course/viewCourseDetail' . '?' . 'Id=' . $result[0]; ?>">View</a></td>
                                <td><a href="<?php echo BASE_URL . 'Course/deleteCourse' . '?' . 'Id=' . $result[0]; ?>">Delete</a></td>

                            </tr>
                        <?php endforeach; ?>
                    </tbody>

                </table>
            </div>

            <div class="box-footer">
                <p align="right">
                    <?php for ($i = 1; $i <= $data['totalpages']; $i++) { ?>
                        <a href="<?php echo BASE_URL . 'Course/viewCourse' . '?' . 'page=' . $i; ?>">
                            
                            <?php echo $i ?></a>
                        
                                <?php } ?>             

                    <button type="submit" name="save">BULK DELETE</button></p>
            </div>
        </form>
        <!-- /.box-body -->
    </body>
</html>
<?php include 'sidebar.php'; ?>
