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
  <title>Admin | Dashboard</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="dist/css/skins/skin-blue.min.css">
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <link rel="stylesheet" href="dropzone.css">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <?php include "includes/top-menu.php";?>
 
  <aside class="main-sidebar">

    <section class="sidebar">

      <?php include "includes/menu.php";?>
  
    </section>
  
  </aside>

    <div class="content-wrapper">
        <div class="container">
          <div class="box box-default" style="margin-top: 50px;">
              <div class="box-header with-border">
                <h3 class="box-title">Add Single Tours</h3>

                  <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
                  </div>
              </div>
        <!-- /.box-header -->
              <div class="box-body">
                  <div class="row" style="margin-top: 10px;">

                     <form action="database/package.php?id=<?=$_GET['t_id']?>" method="post" enctype="multipart/form-data">
                    <div class="col-md-12">
                       <label>Add Tour Package</label>
                          <div class="col-md-6">
                              <label>Tour Deccription:</label>
                             <textarea class="form-control" cols="72" rows="5" name="dis" required=""></textarea>
                          </div>
                          <div class="col-md-6">
                            <div id="view">                             
                                <label>Include:</label>                      
                                    <input type="text" class="form-control" name="include1[]" required=""> 
                            </div>
                            <div class="col-md-6" style="margin-top: 30px;">
                                  <button type="button" class="btn btn-success" onclick="addinclude()">Add</button>
                                   <button class="btn btn-primary" name="save">Save</button>
                            </div> 
                          </div>
                    </div>
  
                        <script type="text/javascript">
                              function addinclude() {
                                $('#view').append('<label>Include:</label>\
                                       <input type="text" class="form-control" name="include1[]">\
                                   ');
                              }
                        </script> 
                  </form>
                  </div>
              </div>
               
              </div>
     
       
      </div>
      </div> 
        </div>
    </div>
   
  </div>

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
    </div>
    <strong> &copy; 2018 All Rights Reserved | Developed & Design by <a href="#">itoautomations.com</a>.</strong> All rights reserved.
  </footer>
</div>
<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="dist/js/app.min.js"></script>
<script src="dropzone.js"></script>
</body>
</html>
