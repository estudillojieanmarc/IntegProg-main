<?php
    session_start();
    include('connection.php');
    if (isset($_POST['adminButton'])){
        $adminUsername = $_POST['adminUsername'];
        $adminPassword = $_POST['adminPassword'];
        $sql = "SELECT * FROM `admintbl` WHERE `username` = '$adminUsername' AND `password` = '$adminPassword'";
        $result = mysqli_query($con, $sql);
        if(mysqli_num_rows($result)>0){
            echo "<script>alert('Wekcome admin')</script>";
            echo "<script>window.open('../html/adminlandingpage.html','_self')</script>";
        }else{
            echo "<script>alert('HI $adminUsername YOU HAVE NO RECORDS YET')</script>";
            echo "<script>window.open('../html//admin-login.html','_self')</script>";    
        }
    }
?>