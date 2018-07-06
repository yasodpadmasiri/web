<?php
include 'connection.php';

if (isset($_POST['save'])) {
    
    $target="../upload/".basename($_FILES['file']['name']);
   
    $id=$_GET['id'];
    $image=$_FILES['file']['name'];
    $name=$_POST['name'];
    $inc1=$_POST['inc1'];
    $inc2=$_POST['inc2'];
    $inc3=$_POST['inc3'];
    $inc4=$_POST['inc4'];
    $inc5=$_POST['inc5'];
	$text1=$_POST['text'];

     $value = array(
     	    't_id'=>$id,
     	    'tour_package'=>$name,
 	 	  	'image' =>$image ,
 	 	  	'description' => $text1,
 	 	  	'inc1'=>$inc1,
 	 	  	'inc2'=>$inc2,
 	 	  	'inc3'=>$inc3,
 	 	  	'inc4'=>$inc4,
 	 	  	'inc5'=>$inc5,
 	 	  );

  

 if (move_uploaded_file($_FILES['file']['tmp_name'], $target)) {
    
        $query = $conn->insertInto('tour_package')->values($value);    
        $query->execute();
 
 }

}

$page=$_SERVER['HTTP_REFERER'];

echo '<script>window.location.href = "'.$page.'"</script>';

?>