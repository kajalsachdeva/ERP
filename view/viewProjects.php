
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
                                        <h3 class="box-title">Project Data Table</h3>
                                    </div>
                                    <!-- /.box-header -->
                                    <div class="box-body">
                                        <?php
                                        if ($data['result'] == 1)
                                            echo "record inserted";
                                        ?> 
                                        <table id="example2" class="table table-bordered table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Project Name</th>
                                                    <th>Team Lead</th>
                                                    <th>Client Name</th>
                                                    <th>Project Manager</th>
                                                    <th>Plan status</th>
                                                    <th>Project Flag</th>
                                                    <th>Quality Score</th>
                                                    <th>Status</th>
                                                    <th colspan="3">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($data as $project => $project_list): ?>
                                                    <?php if ($project == 'viewallproject') { ?>
        <?php foreach ($project_list as $projectdata => $projectlist) : ?>


                                                            <tr>
                                                                <td><a href="<?php echo BASE_URL . 'Project/viewProjectDescription' . '?' . 'Id=' . $projectlist[0]; ?>"><?php echo $projectlist[2] ?></a></td>
                                                                <td><?php echo $projectlist[3] ?></td>
                                                                <td> <?php echo $projectlist[4] ?></td>
                                                                <td><?php echo $projectlist[5] ?></td>
                                                                <td><?php echo $projectlist[6] ?></td>
                                                                <td><?php echo $projectlist[7] ?></td>
                                                                <td><?php echo $projectlist[8] ?></td>
                                                                <td><?php echo $projectlist[9] ?></td>
                                                                <td><a href="<?php
                                                                    echo BASE_URL . 'Project/editProject' .
                                                                    '?' . 'Id=' . $projectlist[0];
                                                                    ?>">Edit</a></td>
                                                                <td><a href="javascript:delete_project_record(<?php echo $projectlist[0] ?>)">Delete</a></td>
                                                            </tr>

        <?php endforeach; ?>  
                                                    <?php } ?>
                                                <?php endforeach; ?>
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
                            <script type="text/javascript">
                                function delete_project_record(id)
                                {

                                    if (confirm('Sure To Remove This Record ?'))
                                    {

                                        window.location.href = "deleteProjectRecord?Id=" + id;

                                    }
                                }
                            </script>