<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MENU LIST</title>
     <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    
    <link rel="stylesheet" href="../css/menu.css" type="text/css">

</head>

<body>
                    <!-----Menu List------>
<section id="menu-list" class="section-padding">
    <div class="container">
        <div class="row">
            <div>
                <a href="http://localhost/integprog/php/landingpage.php" class="btn btn-secondary"><i class="bi bi-box-arrow-in-left"></i></a>
                <h1 class="header-h">Menu List</h1>
                <p>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever <br>
                    since the 1500s,</p>
            </div>
            <div class="col-md-12 text-center" id="menu-flters">
                <ul class="nav justify-content-center">
                    <li><a href="#"  class="filter" data-filter=".menu-restaurant">Show All</a></li>
                    <li><a href="#bfast" class="filter" data-filter=".breakfast">Breakfast</a></li>
                    <li><a href="#lunch" class="filter" data-filter=".lunch">Lunch</a></li>
                    <li><a href="#dinner" class="filter" data-filter=".dinner">Dinner</a></li>
                </ul>
            </div>
        </div>

        <div class="menu-wrapper">
            <section id="bfast">
                <div class="breakfast menu-restaurant">
                    <span class="clearfix">
                        <a href="#" class="menu-title" data-meal-img="../img/bf.jpg">Food Item Name</a>
                        <span style="left: 166px; right: 44px;" class="menu-line"></span>
                        <span class="menu-price">PHP 100.00</span>
                    </span>
                    <span class="menu-subtitle">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit</span>
                </div>
    
                <div class="breakfast menu-restaurant">
                    <span class="clearfix">
                        <a href="#" class="menu-title" data-meal-img="../img/bf.jpg">Food Item Name</a>
                        <span style="left: 166px; right: 44px;" class="menu-line"></span>
                        <span class="menu-price">PHP 100.00</span>
                    </span>
                    <span class="menu-subtitle">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit</span>
                </div>
    
                <div class="breakfast menu-restaurant">
                    <span class="clearfix">
                        <a href="#" class="menu-title" data-meal-img="../img/bf.jpg">Food Item Name</a>
                        <span style="left: 166px; right: 44px;" class="menu-line"></span>
                        <span class="menu-price">PHP 100.00</span>
                    </span>
                    <span class="menu-subtitle">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit</span>
                </div>
    
                <div class="breakfast menu-restaurant">
                    <span class="clearfix">
                        <a href="#" class="menu-title" data-meal-img="../img/bf.jpg">Food Item Name</a>
                        <span style="left: 166px; right: 44px;" class="menu-line"></span>
                        <span class="menu-price">PHP 100.00</span>
                    </span>
                    <span class="menu-subtitle">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit</span>
                </div>
                
                <!---------End Breakfast Menu-->
            </section>

            <section id="lunch">
                <div class="lunch menu-restaurant">
                    <span class="clearfix">
                        <a href="#" class="menu-title" data-meal-img="../img/bf.jpg">Food Item Name</a>
                        <span style="left: 166px; right: 44px;" class="menu-line"></span>
                        <span class="menu-price">PHP 100.00</span>
                    </span>
                    <span class="menu-subtitle">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit</span>
                </div>
    
                <div class="lunch menu-restaurant">
                    <span class="clearfix">
                        <a href="#" class="menu-title" data-meal-img="../img/bf.jpg">Food Item Name</a>
                        <span style="left: 166px; right: 44px;" class="menu-line"></span>
                        <span class="menu-price">PHP 100.00</span>
                    </span>
                    <span class="menu-subtitle">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit</span>
                </div>
    
                <div class="lunch menu-restaurant">
                    <span class="clearfix">
                        <a href="#" class="menu-title" data-meal-img="../img/bf.jpg">Food Item Name</a>
                        <span style="left: 166px; right: 44px;" class="menu-line"></span>
                        <span class="menu-price">PHP 100.00</span>
                    </span>
                    <span class="menu-subtitle">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit</span>
                </div>
                
                <!------End Lunch Menu-->
            </section>

            <section id="dinner">
                <div class="dinner menu-restaurant">
                    <span class="clearfix">
                        <a href="#" class="menu-title" data-meal-img="../img/bf.jpg">Food Item Name</a>
                        <span style="left: 166px; right: 44px;" class="menu-line"></span>
                        <span class="menu-price">PHP 100.00</span>
                    </span>
                    <span class="menu-subtitle">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit</span>
                </div>
    
                <div class="dinner menu-restaurant">
                    <span class="clearfix">
                        <a href="#" class="menu-title" data-meal-img="../img/bf.jpg">Food Item Name</a>
                        <span style="left: 166px; right: 44px;" class="menu-line"></span>
                        <span class="menu-price">PHP 100.00</span>
                    </span>
                    <span class="menu-subtitle">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit</span>
                </div>
    
                <div class="dinner menu-restaurant">
                    <span class="clearfix">
                        <a href="#" class="menu-title" data-meal-img="../img/bf.jpg">Food Item Name</a>
                        <span style="left: 166px; right: 44px;" class="menu-line"></span>
                        <span class="menu-price">PHP 100.00</span>
                    </span>
                    <span class="menu-subtitle">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit</span>
                </div><!----------End Dinner Menu-->
            
            </div> <!-----End Menu Wrapper-->
            </section>


    
    </div>
    
</section>



<script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
    

                <!---Jquery (bootstrap Javascript plugins)
<script src="../bootstrap/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js" integrity="sha512-0QbL0ph8Tc8g5bLhfVzSqxe9GERORsKhIn1IrpxDAgUsbBGz/V7iSav2zzW325XGd1OMLdL4UiqRJj702IeqnQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="../js/cdnjs/contact-form.js"></script>-->
</body>
</html>