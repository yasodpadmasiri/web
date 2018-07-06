<?php
session_start();
include "database/connection.php";
if(isset($_SESSION['bs'])){}else{
  header("location:login.php");
  echo "<script>location='login.php</script>";
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin | Settings</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="dist/css/skins/skin-blue.min.css">
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <?php include "includes/top-menu.php";?>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <?php include "includes/menu.php";?>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Dashboard</h1>
      <ol class="breadcrumb">
        <li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">Settings</li>
      </ol>
    </section>
    <section class="content" style="height: 750px;">
      <div class="row">
        <div class="col-xs-12 col-md-8 col-lg-8 col-md-offset-2 col-lg-offset-2">
          <div class="box">
            <div class="box box-info">
              <div class="box-header with-border">
                <h3 class="box-title">Change Password</h3>
              </div>
              <!-- /.box-header -->
              <!-- form start -->
              <form class="form-horizontal" method="post" action="database/user.php?action=password">
                <div class="box-body">
                  <div class="form-group">
                    <label for="cpassword" class="col-sm-4 control-label">Current Password</label>

                    <div class="col-sm-8">
                      <input name="cpassword" type="password" class="form-control" id="cpassword" placeholder="Enter Current Password">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="newpassword" class="col-sm-4 control-label">New Password</label>

                    <div class="col-sm-8">
                      <input name="newpassword" type="password" class="form-control" id="newpassword" placeholder="Enter New Password">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="rpassword" class="col-sm-4 control-label"></label>

                    <div class="col-sm-8">
                      <input name="rnewpassword" type="password" class="form-control" id="rpassword" placeholder="Retype New Password">
                    </div>
                  </div>
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                  <button type="reset" class="btn btn-default">Cancel</button>
                  <button type="submit" class="btn btn-info pull-right">Change Password</button>
                </div>
                <!-- /.box-footer -->
              </form>
            </div>
          </div>
          <!-- /.box -->
        </div>
      </div>
    </section>
  </div>
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
    </div>
    <strong>Copyright &copy; 2017 <a href="#">eyes.lk</a>.</strong> All rights reserved.
  </footer>
</div>
<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="dist/js/app.min.js"></script>
</body>
</html>
