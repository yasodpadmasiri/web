<?php

include 'connection.php';

$id=$_GET['id'];

$query=$conn->deletefrom('main_tour')->where('t_id',$id);
$query->execute();

$page=$_SERVER['HTTP_REFERER'];
echo '<script>window.location.href="'.$page.'"</script>';	

?>
