<?php
session_start();
if(isset($_GET['action'])){

    include "connection.php";
    //login
    if($_GET['action']=='login'){
        //var_dump($_POST);
        $query=$conn->from('login')->where('name',$_POST['uname'])->where('password',sha1($_POST['password']));
        $row=$query->fetch();
        //var_dump($row);
        if($row!=null){
            echo 'Logged as ';
            $_SESSION['bs'] = $_POST['uname'];
            echo $_SESSION['bs'];
            //header("location:../index.php");
            echo "<script>location='../index.php'</script>";

        }else{
            echo 'invalid username or password';
            //header("location:../index.php");
            echo "<script>location='../index.php'</script>";
        }
    }
    //logout
    if($_GET['action']=='logout'){
        echo 'logout';
        session_destroy();
        //header("location:../index.php");
        echo "<script>location='../index.php'</script>";
    }
    //change password
    if($_GET['action']=='password'){
        if(isset($_SESSION['bs'])){
            if(isset($_POST['cpassword']) && isset($_POST['newpassword'])  && isset($_POST['rnewpassword'])){
                $query=$conn->from('login')->where('name',$_SESSION['bs'])->where('password',sha1($_POST['cpassword']));
                $row=$query->fetch();
               
                if($row!=null){
                    if($_POST['newpassword'] == $_POST['rnewpassword']){
                        $set=array('password' => sha1($_POST['newpassword']));
                        //var_dump($set);
                        $query=$conn->update('login')->set($set)->where('name',$_SESSION['bs']);
                        $query->execute();
                        echo 'password changed successfully';
                    }
                    header("location:../settings.php");
                    echo "<script>location='../settings.php</script>";
                }
                header("location:../settings.php");
                echo "<script>location='../settings.php</script>";
            }
            header("location:../settings.php");
            echo "<script>location='../settings.php</script>";
        }else{
            header("location:../login.php");
            echo "<script>location='../login.php</script>";
        }
    }

}else{
    header("location:../index.php");
    echo "<script>location='../index.php'</script>";
}