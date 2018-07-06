<?php
include 'connection.php';

if (isset($_POST['submit'])) {
    
    $target="../upload/".basename($_FILES['file']['name']);
   
    $image=$_FILES['file']['name'];
    $name=$_POST['name'];
	$text1=$_POST['text1'];

     $value = array(
     	    'tour_image'=>$image,
 	 	  	'tour_name' =>$name ,
 	 	  	'tour_caption' => $text1,
 	 	  );

 if (move_uploaded_file($_FILES['file']['tmp_name'], $target)) {
    
        $query = $conn->insertInto('main_tour')->values($value);    
        $query->execute();
 
 }

}

$page=$_SERVER['HTTP_REFERER'];

echo '<script>window.location.href = "'.$page.'"</script>';

?>