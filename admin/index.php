<?php
session_start();

include "database/connection.php";
if(isset($_SESSION['bs'])){
    //header("location:dashboard.php");
    echo "<script>location='dashboard.php'</script>";
}else{
    //header("location:login.php");
    echo "<script>location='login.php'</script>";
}
?>