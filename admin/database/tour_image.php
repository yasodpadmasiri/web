<?php
include 'connection.php';

$ds          = DIRECTORY_SEPARATOR;  
 
$storeFolder = '../upload';   
mkdir("../upload/".$_GET['id']);
 
if (!empty($_FILES)) {

    $id=$_GET['id'];
      $c=uniqid();
    $tempFile = $_FILES['file']['tmp_name'];                   
      
    $targetPath = dirname( __FILE__ ) . $ds. $storeFolder . $ds;  
     
    $targetFile =  $targetPath.$c. $_FILES['file']['name'];  
 
    $values = array(
        't_id'=>$id,
        'image' =>$c.$_FILES['file']['name']
     );

    if (move_uploaded_file($tempFile,$targetFile)) {
        
     $query = $conn->insertInto('tour_images')->values($values);    
     $insert = $query->execute();

    
    }
     
}
?>  