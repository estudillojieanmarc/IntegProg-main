<?php
    include('connection.php');
    if(isset($_POST["customerSignUp"])){

     // NAME FROM THE FORM 
    $photo = $_FILES['photo']['name'];
    $fullname = $_POST['fullname'];
    $username = $_POST['username'];
    $contact = $_POST['contact'];
    $address = $_POST['address'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];

    $sql="SELECT * FROM `customertbl` WHERE `Fullname` = '$fullname' || `Username` = '$username'";
    $result = $con->query($sql) or die($con->error);
    $customer = $result->fetch_assoc();

    if($customer > 0){
    echo "<script>alert('Sorry, the account is already exist')</script>";
    echo "<script>window.open('/IntegProg-main/IntegProg/html/customerSignup.html','_self')</script>";
    exit();                 
    }else{
    $target_dir = "../img/customerPhoto/";
    $target_file = $target_dir . basename($_FILES["photo"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $check = getimagesize($_FILES["photo"]["tmp_name"]);

            // Checking the image
            if($check !== false) {
            $uploadOk = 1;
            } else {
            echo "<script>alert('Sorry, The File is not an image.')</script>";
            echo "<script>window.open('/IntegProg-main/IntegProg/html/customerSignup.html','_self')</script>";
            $uploadOk = 0;
            exit();                       
            }
            // Check file size
            if ($_FILES["photo"]["size"] > 500000) {
            echo "<script>window.open('/IntegProg-main/IntegProg/html/customerSignup.html','_self')</script>";
            echo "<script>alert('Sorry, The File is too large.')</script>";
            $uploadOk = 0;
            exit();                    
            }
            // Allow certain file formats
            elseif($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif" ) {
            echo "<script>alert('Sorry, only JPG, JPEG, PNG & GIF files are allowed.')</script>";
            echo "<script>window.open('/IntegProg-main/IntegProg/html/customerSignup.html','_self')</script>";
            exit();           
            $uploadOk = 0;
            }
            // Check if $uploadOk is set to 0 by an error
            elseif($uploadOk == 0) {
            echo "<script>alert('Sorry, your file was not uploaded.')</script>";
            echo "<script>window.open('/IntegProg-main/IntegProg/html/customerSignup.html','_self')</script>";
            exit();           
            } 
            // if everything is ok, try to upload file
            else{
                if($password !== $confirmPassword){
                    echo "<script>alert('Sorry, password mismatch')</script>";
                    echo "<script>window.open('/IntegProg-main/IntegProg/html/customerSignup.html','_self')</script>";
                    exit();           
                }else if(!preg_match("/^[a-zA-Z0-9]*$/", $username)){
                    echo "<script>alert('Sorry, invalid username')</script>";
                    echo "<script>window.open('/IntegProg-main/IntegProg/html/customerSignup.html','_self')</script>";
                    exit();           
                }else{
                    $password = md5($password);
                    $sql = $con->query("INSERT INTO `customertbl` (`image`, `Fullname`, `Username`, `Password`, `Address`, `Contact`) VALUES ('$photo','$fullname','$username','$password','$address','$contact')");
                    if($sql){
                        move_uploaded_file($_FILES["photo"]["tmp_name"],$target_file);
                        echo "<script>alert('Register Successfully')</script>";
                        echo "<script>window.open('/IntegProg-main/IntegProg/html/customerLogin.html','_self')</script>";
                        exit();  
                    }else{
                        echo "<script>alert('Sorry, Register Failed')</script>";
                        exit();  
                            }
                    }
                }
            }
    }
?>


