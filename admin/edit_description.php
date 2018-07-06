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
                  <div class="row">
                    <div class="col-md-12">
                      <ul class="nav nav-tabs" role="tablist"  style="padding:20px 0px;">
                        <li class="nav-item">
                          <a class="nav-link active" data-toggle="tab" href="#item1" role="tab"><h4 style="border-color: blue;"><b>Recently added images</b></h4></a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" data-toggle="tab" href="#item2" role="tab"><h4 style="border-color: blue;"><b>Add Again</b></h4> </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                       <div class="tab-pane" id="item1" role="tabpanel">
                              <div class="col-md-10" style="margin-left: 100px; margin-top: 20px;">
                                      <?php 
                                    $query=$conn->from('tour_images')->where('t_id',$_GET['id']);
                                    $row=$query->fetchAll();

                                              foreach($row as $images)
                                                  {
                                    ?>
                                  <div class="col-md-2">
                                    <img src="upload/<?=$images['image']?>" class="img-responsive">
                                      <a href="database/image_delete.php?id=<?=$images['id']?>"><input type="button" value="Delete" class="btn btn-danger" name="Delete"></a>
                                  </div>
                                  <?php
                                    }
                                  ?>
                              </div>
                        </div>
                        <div class="tab-pane" id="item2" role="tabpanel">
                              <div class="col-md-10" style="margin-left: 100px; margin-top: 20px;">
                                  <form action="database/tour_image.php?id=<?=$_GET['id']?>"  class="dropzone"  id="my-awesome-dropzone">
                                  </form>
                              </div>
                        </div>
                    </div>
                    </div>
                  </div>
                
                  <div class="row" style="margin-top: 50px;">

                     <form action="database/package.php?id=<?=$_GET['t_id']?>" method="post" enctype="multipart/form-data">
                    <div class="col-md-12">
                       <label>Edit Tour Package</label>
                          <div class="col-md-6">
                              <label>Tour Deccription:</label>
                              <?php
                                  $query=$conn->from('tour_package')->where('t_id',$_GET['id']);
                                  $raw= $query->fetch();  
                              ?>
                             <textarea class="form-control" cols="72" rows="5" name="dis" required="">
                               <?php $raw['discription'] ?>
                             </textarea>
                          </div>
                          <div class="col-md-6">
                            <div id="view"> 
                                <select class="form-control" name="select">
                                  <option>Select</option>
                                </select>                            
                                <label>Include:</label>                      
                                    <input type="text" class="form-control" name="include1[]" required=""> 
                            </div>
                            <div class="col-md-6" style="margin-top: 30px;">
                                   <button class="btn btn-primary" name="save">Update</button>
                            </div> 
                          </div>
                    </div>
  

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
