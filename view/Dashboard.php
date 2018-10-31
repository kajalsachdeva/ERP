<?php
include 'header.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>AdminLTE 2 | Dashboard</title>

    </head>
    <body class="hold-transition skin-blue sidebar-mini">
        <div class="box-body">
            <table id="example2" align="center" border="1">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?php echo($_SESSION['result']['fullname']); ?></td>

                        <td><?php echo($_SESSION['result']['email']); ?></td>
                    </tr>
                    </div>

                    </body>
                    </html>
                    <?php include 'sidebar.php'; ?> 
  