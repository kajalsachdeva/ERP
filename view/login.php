
<html>
    <head>
        <title>login form</title>
        
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
         
        <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
         
        <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
        
        <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
        
        <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
        
        <link rel="stylesheet" href="plugins/iCheck/square/blue.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    </head>
   
    <body class="hold-transition login-page">
       
       
        <div class="login-box">
            <div class="login-logo">
                <b>User Login</b>
            </div>
             
            <div class="login-box-body">
              <p class="login-box-msg">Sign in to start your session</p>

              <form action="<?php echo BASE_URL.'Login/signUp';?>" method="post">
                    <div class="form-group has-feedback">
                        <input type="email" class="form-control" placeholder="Email" name="email" id='useremail'>
                        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <input type="password" class="form-control" placeholder="Password" name="password" id='userpassword'>
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    </div>
                    <div class="row">
                        <div class="col-xs-8">
                                      <div class="checkbox icheck">
                                        <label>
                                          <input type="checkbox"> Remember Me
                                        </label>
                                      </div>
                        </div>
                        
                        <div class="col-xs-4">
                            <button type="submit" name="Submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
                        </div>
                       
                    </div>
                </form>

<!--                   
-->                
                <a href="<?php echo $url.'Login/register';?>" class="text-center">Register a new membership</a>

            </div>
            
        </div>
<!--         <script src="bower_components/JS/Custom.js"></script>-->
<!--        <script src="bower_components/jquery/dist/jquery.min.js"></script>
         
        <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
         
        <script src="plugins/iCheck/icheck.min.js"></script>-->
