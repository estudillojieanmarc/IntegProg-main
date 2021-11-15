<?php
session_start();
  include('connection.php');
if (isset($_POST['submit']))
{
    $USERNAME = $_POST['USERNAME'];
    $PASSWORD = $_POST['PASSWORD'];

    $qry = mysqli_query($conn,"SELECT * FROM admin_table WHERE USERNAME = '$USERNAME'
    AND PASSWORD = '$PASSWORD'");
    $row = mysqli_fetch_array($qry);

    if(is_array($row)){
        $_SESSION['USERNAME'] = $row =['USERNAME'];
        $_SESSION['PASSWORD'] = $row =['PASSWORD'];

    }else {
        echo "<script>alert('HI $USERNAME YOU HAVE NO RECORDS YET')</script>";
        echo "<script>window.open('http://localhost/integprog/php/admin-login.php','_self')</script>";
    }
}
    if (isset($_SESSION['PASSWORD']))
        {   echo "<script>alert('HI $USERNAME WELCOME TO ADMIN WEB PAGE')</script>";
            echo "<script>window.open('http://localhost/integprog/php/adminlandingpage.php','_self')</script>";
            $_SESSION['USERNAME'] = $USERNAME;
        }
?>