<?php
include 'header.php';
?>
<!DOCTYPE html>
<html>
    <head></head>
    <body class="hold-transition skin-blue sidebar-mini">

        <div class="box-body">

            <table id="example2" class="table-hover" align="center" border="3px">
                <thead>
                    <tr>
                        <th>Course Detail</th>

                    </tr>
                </thead>
                <tbody>

                    <tr>
                        <td>
                           Course-ID : <?php
                            echo $data['id'];
                            echo "<br>";
                            ?>
                            Course-Name : <?php
                            echo $data['course_name'];
                            echo "<br>";
                            ?> 
                            Description : <?php
                            echo $data['description'];
                            echo "<br>";
                            ?> 
                            Created-Date : <?php
                            echo $data['created_date'];
                            echo "<br>";
                            ?> 
                            Updated-Date : <?php 
                            echo $data['updated_date']; ?>




                        </td>


                    </tr>

                </tbody>

            </table>


        </div>

        <!-- /.box-body -->
    </body>
</html>
<?php include 'sidebar.php'; ?> 