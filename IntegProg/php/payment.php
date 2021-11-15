<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width-device-width, initial-scale-1.0">
    <title>Payment Page</title>
    <link rel="stylesheet" type="text/css" href="../css/payment.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    </head>
    <body>
        <form action="action">
            <h1>Payment</h1>
            <label for="name">Payer Name</label><br>
            <input class="box1" type="text" name="name" id="name" value="" required placeholder="Enter Name"><br>
            <label for="email">Email</label><br>
            <input class="box1" type="email" name="email" id="email" value="" required placeholder="Enter Email"><br>
            <label for="mobilenum">Mobile Number</label>
            <input class="box1" type="number" name="number" id="number" value="" required placeholder="09*********"><br>

            <button type="submit" class="btn" name="submit">Pay Now</button>
            <a href="http://localhost/integprog/php/landingpage.php" type="button" class="btn">Close</a>
            
        </form>

    <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
        

    </body>
</html>
