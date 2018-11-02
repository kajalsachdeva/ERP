<html>
    <head>
         <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.7 -->
        <link rel="stylesheet" href="../bower_components/bootstrap/dist/css/bootstrap.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="../bower_components/font-awesome/css/font-awesome.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="../bower_components/Ionicons/css/ionicons.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
        <!-- AdminLTE Skins. Choose a skin from the css/skins
             folder instead of downloading all of them to reduce the load. -->
        <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">
        <!-- Morris chart -->
        <link rel="stylesheet" href="../bower_components/morris.js/morris.css">
        <!-- jvectormap -->
        <link rel="stylesheet" href="../bower_components/jvectormap/jquery-jvectormap.css">
        <!-- Date Picker -->
        <link rel="stylesheet" href="../bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
        <!-- Daterange picker -->
        <link rel="stylesheet" href="../bower_components/bootstrap-daterangepicker/daterangepicker.css">
        <!-- bootstrap wysihtml5 - text editor -->
        <link rel="stylesheet" href="../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

      
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    </head>
    <body>
        <aside class="main-sidebar">
            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">
                <!-- Sidebar user panel -->
                <div class="user-panel">
<!--                    <div class="pull-left image">
                        <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                    </div>-->
                    <div class="pull-left info">
                        <?php // echo($_SESSION['result']['fullname']); ?>
                        <!--<a href="#"><i class="fa fa-circle text-success"></i> Online</a>-->
                    </div>
                </div>
                <!-- search form -->
                <form action="#" method="get" class="sidebar-form">
<!--                    
                </form>
                <!-- /.search form -->
                <!-- sidebar menu: : style can be found in sidebar.less -->
                <ul class="sidebar-menu" data-widget="tree">
                    <li class="header">MAIN NAVIGATION</li>
                  <li class="active">
                        <a href="<?php echo BASE_URL . 'Login/dashboard' ?>">
                            <i class="fa fa-files-o"></i>
                            <span>Dashboard</span>
                            <span class="pull-right-container">
                               
                            </span>
                        </a>
                       
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-files-o"></i>
                            <span>Course</span>
                            <span class="pull-right-container">
                                 <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            
                            <li><a href="<?php echo BASE_URL . 'Course/viewCourse' ?>"><i class="fa fa-circle-o"></i>View</a></li>
                            <li><a href="<?php echo BASE_URL . 'Course/addCourse' ?>"><i class="fa fa-circle-o"></i> Add</a></li>
                        </ul>
                    </li>
                     <li class="treeview">
                        <a href="#">
                            <i class="fa fa-files-o"></i>
                            <span>Projects</span>
                            <span class="pull-right-container">
                                 <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            
                            <li><a href="<?php echo BASE_URL . 'Project/addProject' ?>"><i class="fa fa-circle-o"></i>Add Project</a></li>
                            <!--<li><a href="<?php // echo BASE_URL . 'Client/addClient' ?>"><i class="fa fa-circle-o"></i> Add Client</a></li>-->
                        </ul>
                    </li>
                </ul>
            </section>
            <!-- /.sidebar -->
        </aside>
    </body>
</html>

<script src="../bower_components/jquery/dist/jquery.min.js"></script>
                <!-- jQuery UI 1.11.4 -->
                <script src="../bower_components/jquery-ui/jquery-ui.min.js"></script>
                <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
                <script>
                    $.widget.bridge('uibutton', $.ui.button);
                </script>
                <!-- Bootstrap 3.3.7 -->
                <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
                <!-- Morris.js charts -->
                <script src="../bower_components/raphael/raphael.min.js"></script>
                <script src="../bower_components/morris.js/morris.min.js"></script>
                <!-- Sparkline -->
                <script src="../bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
                <!-- jvectormap -->
                <script src="../plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
                <script src="../plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
                <!-- jQuery Knob Chart -->
                <script src="../bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
                <!-- daterangepicker -->
                <script src="../bower_components/moment/min/moment.min.js"></script>
                <script src="../bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
                <!-- datepicker -->
                <script src="../bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
                <!-- Bootstrap WYSIHTML5 -->
                <script src="../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
                <!-- Slimscroll -->
                <script src="../bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
                <!-- FastClick -->
                <script src="../bower_components/fastclick/lib/fastclick.js"></script>
                <!-- AdminLTE App -->
                <script src="../dist/js/adminlte.min.js"></script>
                <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
                <script src="../dist/js/pages/dashboard.js"></script>
                <!-- AdminLTE for demo purposes -->
                <script src="../dist/js/demo.js"></script>
                <script src="../bower_components/JS/Custom.js"></script> 