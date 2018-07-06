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
  <link rel="stylesheet" href="https://rawgit.com/enyo/dropzone/master/dist/dropzone.css">
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
                <h3 class="box-title">Add Tours</h3>

                  <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
                  </div>
              </div>
        <!-- /.box-header -->
              <div class="box-body">
                <div class="row">
                  <form role="form" method="post" enctype="multipart/form-data" action="database/tour.php">
                      <div class="col-md-6">
                          <div class="form-group">
                            <label for="exampleInputEmail1">Tour Name</label>
                              <input type="text" class="form-control" placeholder="Enter Name" name="name" required="">
                          </div>
                      </div>
                      <div class="col-md-6">
                          <div class="form-group">
                            <label for="exampleInputEmail1">Tour Image</label>
                            <input type="file" class="form-control" name="file">
                          </div>
                      </div>
                      <div class="col-md-6">
                          <div class="form-group">
                            <label for="exampleInputEmail1">Tour Caption</label>
                            <textarea class="form-control" name="text1" cols="72" rows="5" required=""></textarea>
                          </div>
                      </div>
                      <div class="col-md-6">
                          <div class="box-footer">
                            <input type="submit" class="btn btn-primary" value="Add" name="submit">
                          </div>
                      </div>
                    </form>
                </div> 
              
              </div>   
      </div>

       <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Tour View Table</h3>

              <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                </div>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tr>
                  <th>ID</th>
                  <th>Main Tour Name</th>
                  <th>Edit Main tour</th>
                  <th>Add Single Tour</th>
                  <th>Edit Single Tour</th>
                  <th>Delete Main</th>
                </tr>
                <tr>
                      <?php
                         $query=$conn->from('main_tour');
                          $data=$query->fetchAll();

                                  foreach ($data as $key) {
                      ?>
                  <td><?= $key['t_id']?></td>
                  <td><?= $key['tour_name']?></td>
                   <td>
                    <a href="edite_tour.php?t_id=<?=$key['t_id']?>" class="btn btn-success">Edit</a>
                  </td>
                  <td>
                    <a href="single_tour.php?t_id=<?=$key['t_id']?>" class="btn btn-primary">Add</a>
                  </td>
                  <td>
                    <a href="edit_description.php?id=<?=$key['t_id']?>" class="btn btn-warning">Edit</a>
                  </td>
                  <td>
                    <a href="database/t_delete.php?id=<?=$key['t_id']?>" class="btn btn-danger">Delete</a>
                  </td>
                </tr>
                <?php
                }
              ?>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
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
