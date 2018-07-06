<?php

include 'connection.php';

if (isset($_POST['submit'])) {
  
  $target="../upload/".basename($_FILES['file']['name']);
   
    $id=$_GET['id'];
    $image=$_FILES['file']['name'];
    $name=$_POST['name'];
    $cap=$_POST['text1'];

 $set = array();

 if ($_FILES['file']['tmp_name'] != '') {
    if (move_uploaded_file($_FILES['file']['tmp_name'], $target)) {
       
           $set['tour_image']=$image;           
    }
 }        
      $set['tour_name']=$name;
      $set['tour_caption']=$cap;

  $query=$conn->update('main_tour')->set($set)->where('t_id', $id);
  $query->execute();

}
 
echo '<script>window.location.href = "../dashboard.php"</script>';

?>