<?php

include 'connection.php';

$id=$_GET['id'];

$query=$conn->deletefrom('tour_package')->where('id',$id);
$query->execute();

$page=$_SERVER['HTTP_REFERER'];
echo '<script>window.location.href="'.$page.'"</script>';	

?>
