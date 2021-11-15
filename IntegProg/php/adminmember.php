<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/all.min.css">
    <link rel="stylesheet" href="../php-css/admin-member.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>ADMIN MEMBERS</title>
</head>
<body>
<div class="home">
<div class="content">
<a class="insert" href="http://localhost/PowerPlus/AdminLandingPage/AdminRegistration.php">ADD+</a>
    <form action="http://localhost/POWERPLUS/function-script/adminMembers-search.php" method="GET">
        <input class="search" type="text" id="search" name="search" placeholder="SEARCH INFO" >
        <button class="submit" type="submit" class="search" name="query">SEARCH</button>
    </form>
    <table>
    <thead>
      <tr>
        <th>FULLNAME</th>
        <th>POSITION</th>
        <th>EMAIL</th>
        <th>PHONE</th>
        <th>DATE</th>
        <th>FUNCTIONS</th>
    </thead>
      </tr>
    </table>
  </div>
<div class="header">
<nav class="nav-bar">
<img src="../img/logo2.png" alt="">
<h3>ADMIN<span> MEMBERS</span></h3>
<li><a href="http://localhost/integprog/php/admin-login.php"><i class="fas fa-sign-out-alt"></i></a></li>
</nav>
<div class="side">
    <div class="sidebar">
      <div class="profile">
        <img src="../img/adminlogin.png">
      </div>  
   
      <div class="menu">
        <ul>
          <li><i class="fas fa-desktop"></i> <a href="http://localhost/integprog/php/adminmonitoring.php">MONITORING</a></li>
          <li  class="active"><i class="fas fa-user-shield"></i> <a href="http://localhost/integprog/php/adminmember.php">ADMIN MEMBER</a></li>
        </ul>
      </div>
</div>
</div>
</div>
</div>
</body>
</html>