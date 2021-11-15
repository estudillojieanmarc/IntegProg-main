<?php
if (isset($_POST['customerBtn'])){
    include "connection.php";
    $customerUsername = $_POST['customerUsername'];
    $customerPassword = $_POST['customerPassword'];
    $hash = md5($customerPassword);
    $sql = "SELECT * FROM `customertbl` WHERE `Username` = '$customerUsername' AND `Password` ='$hash'";
    $result = mysqli_query($con, $sql);
    if(mysqli_num_rows($result)>0){
        echo "<script>alert('Login Successfully')</script>";
        // PALITAN MO NALANG TO PATHING
        echo "<script>window.open('/IntegProg-main/IntegProg/html/landingpage.html','_self')</script>";
    }else{
        echo "<script>alert('Sorry, wrong username/password')</script>";
        echo "<script>window.open('/IntegProg-main/IntegProg/html/customerLogin.html','_self')</script>";
    }
}
?>


