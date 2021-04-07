<?php
@session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="img/lifestyleStore.png" />
        <title>Online groseries shop</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- latest compiled and minified CSS -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <!-- jquery library -->
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <!-- Latest compiled and minified javascript -->
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <!-- External CSS -->
        <link rel="stylesheet" href="css/style.css" type="text/css">
    </head>
    <body>
        <div>
           <?php
            require 'includes/header.php';
           ?>
           <div id="bannerImage">
               <div class="container">
                   <center>
                   <div id="bannerContent">
                       <h1>We sell.</h1>
                       <p><h3><marquee SOLID" Behavior="alternate"> you are welcome online groceries shop</marquee></h3></p>
                       <a href="indexx.php" class="btn btn-danger">Shop Now</a>
                   </div>
                   </center>
               </div>
           </div>
           <div class="container">
               <div class="row">
                   <div class="col-xs-4">
                       <div  class="thumbnail">
                           <a href="category.php?category=3">
                                <img src="img/th.jpg" alt="fruits">
                           </a>
                           <center>
                                <div class="caption">
                                        <p id="autoResize">fruits</p>
                                        <p>Choose the best fruits available.</p>
                                </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <div class="thumbnail">
                           <a href="category.php?category=1">
                               <img src="img/veg.jpg" alt="vegetables">
                           </a>
                           <center>
                                <div class="caption">
                                    <p id="autoResize">green vegetables</p>
                                    <p>The best original green vegetables.</p>
                                </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <div class="thumbnail">
                           <a href="category.php?category=2">
                               <img src="img/oill.jpg" alt="cooking oil">
                           </a>
                           <center>
                               <div class="caption">
                                   <p id="autoResize">oil</p>
                                   <p>The best oil can produce in fruits.</p>
                               </div>
                           </center>
                       </div>
                   </div>
               </div>
           </div>
            <br><br> <br><br><br><br>
           <footer class="footer"> 
               <div class="container">
               <center>
                   <p>Copyright © musanabera 2020. All Rights Reserved.</p>
                   
               </center>
               </div>
           </footer>
        </div>
    </body>
</html>