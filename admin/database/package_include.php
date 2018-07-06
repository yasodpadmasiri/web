<?php

include 'connection.php';

 $number_date=sizeof($_POST['include1']);

$id=$_GET['t_id'];
$pid=$_GET['p_id'];

if (isset($_POST['save'])) {


	 for ($i=0; $i <$number_date; $i++) {             
       
			 $include1=$_POST['include1'][$i]; 
			 		
		 $values = array(
          't_id'=>$id,
          'p_id'=>$pid,
          'include'=>$include1,    
         );

    $query = $conn->insertInto('package_include')->values($values);    
    $query->execute();
	 	  
	  }
}

$page=$_SERVER['HTTP_REFERER'];

echo '<script>window.location.href = "'.$page.'"</script>';


?>