
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
                                                    <th onclick="sortTable(0)">Project Name</th>
                                                    <th onclick="sortTable(1)">Team Lead</th>
                                                    <th onclick="sortTable(2)">Client Name</th>
                                                    <th onclick="sortTable(3)">Project Manager</th>
                                                    <th onclick="sortTable(4)">Plan status</th>
                                                    <th onclick="sortTable(5)">Project Flag</th>
                                                    <th onclick="sortTable(6)">Quality Score</th>
                                                    <th onclick="sortTable(7)">Status</th>
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
                          <script>
function sortTable(n) {
  var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
  table = document.getElementById("example2");
  switching = true;
  //Set the sorting direction to ascending:
  dir = "asc"; 
  /*Make a loop that will continue until
  no switching has been done:*/
  while (switching) {
    //start by saying: no switching is done:
    switching = false;
    rows = table.getElementsByTagName("TR");
    /*Loop through all table rows (except the
    first, which contains table headers):*/
    for (i = 1; i < (rows.length - 1); i++) {
      //start by saying there should be no switching:
      shouldSwitch = false;
      /*Get the two elements you want to compare,
      one from current row and one from the next:*/
      x = rows[i].getElementsByTagName("TD")[n];
      y = rows[i + 1].getElementsByTagName("TD")[n];
      /*check if the two rows should switch place,
      based on the direction, asc or desc:*/
      if (dir === "asc") {
        if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
          //if so, mark as a switch and break the loop:
          shouldSwitch= true;
          break;
        }
      } else if (dir === "desc") {
        if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
          //if so, mark as a switch and break the loop:
          shouldSwitch= true;
          break;
        }
      }
    }
    if (shouldSwitch) {
      /*If a switch has been marked, make the switch
      and mark that a switch has been done:*/
      rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
      switching = true;
      //Each time a switch is done, increase this count by 1:
      switchcount ++;      
    } else {
      /*If no switching has been done AND the direction is "asc",
      set the direction to "desc" and run the while loop again.*/
      if (switchcount === 0 && dir === "asc") {
        dir = "desc";
        switching = true;
      }
    }
  }
}
</script>
