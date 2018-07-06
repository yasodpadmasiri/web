<?php

include 'connection.php';

 $number_date=sizeof($_POST['include1']);

$id=$_GET['id'];

if (isset($_POST['save'])) {

	$dis=$_POST['dis'];

	 $values = array(
	 	  't_id'=>$id,
          'discription'=>$dis       
         );

    $query = $conn->insertInto('tour_package')->values($values);    
    $query->execute();

	 for ($i=0; $i <$number_date; $i++) {             
       
			 $include1=$_POST['include1'][$i]; 
			 		
		 $values = array(
          't_id'=>$id,
          'include'=>$include1,    
         );

    $query = $conn->insertInto('tour_package')->values($values);    
    $query->execute();
	 	  
	  }
}

$page=$_SERVER['HTTP_REFERER'];

echo '<script>window.location.href = "'.$page.'"</script>';


?>