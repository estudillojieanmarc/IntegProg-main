<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width-device-width, initial-scale-1.0">
    <title>Information Page</title>
    <link rel="stylesheet" type="text/css" href="../css/information.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    </head>
    <body>
        <div class = "card-content">
        <form action="action">
            <h1>Reservation</h1>
            <label for="name">Full Name</label><br>
            <input class="box1" type="text" name="name" id="name" value="" required placeholder="Enter Name"><br>
            <label for="mobilenum">Phone Number</label>
            <input class="box1" type="text" name="number" id="number" value="" required placeholder="09*********"><br>
            <label for="date">Date</label>
            <input class="box1" type="date" name="date" id="date" value="" required><br>
            <label for="time">Time</label>
            <input class="box1" type="time" name="time" id="time" value="" required><br>
            <label for="numofpeople">How many people?</label>
            <input class="box1" type="number" min="1" max="10" value="" required><br>
            <button type="submit" class="btn" name="submit">BOOK TABLE</button>
            <a href="http://localhost/integprog/php/landingpage.php" type="button" class="btn">BACK</a>
        </form>
        </div>

    <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
        </section>
        

    </body>
</html>
