<?php
@session_start();
?>

<html>

  <head>
    <title> About </title>
  </head>
 <link rel="stylesheet" type = "text/css" href ="css/bootstrap.min.css">
  <link rel="stylesheet" type = "text/css" href ="css/aboutus.css">
  
  <body>

  
    <button onclick="topFunction()" id="myBtn" title="Go to top">
      <span class="glyphicon glyphicon-chevron-up"></span>
    </button>

    <script type="text/javascript">
      window.onscroll = function()
      {
        scrollFunction()
      };

      function scrollFunction(){
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
          document.getElementById("myBtn").style.display = "block";
        } else {
          document.getElementById("myBtn").style.display = "none";
        }
      }

      function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
      }
    </script>

    <nav class="navbar navbar-inverse navbar-fixed-top navigation-clean-search" role="navigation"id="navblack">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myNavbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php"id="groceries"></a>
        </div>

        <div class="collapse navbar-collapse " id="myNavbar">
          <ul class="nav navbar-nav">
            <li><a href="index.php">Home</a></li>
            <li class="active"><a href="aboutus.php">About</a></li>
            <li><a href="contactus.php">Contact Us</a></li>
          </ul></div>

<?php
if(isset($_SESSION['login_user1'])){

?>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="glyphicon glyphicon-user"></span> Welcome <?php echo $_SESSION['login_user1']; ?> </a></li>
            <li><a href="myrestaurant.php">MANAGER CONTROL PANEL</a></li>
            <li><a href="logout_m.php"><span class="glyphicon glyphicon-log-out"></span> Log Out </a></li>
          </ul>
<?php
}
else if (isset($_SESSION['login_user2'])) {
  ?>
           <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="glyphicon glyphicon-user"></span> Welcome <?php echo $_SESSION['login_user2']; ?> </a></li>
            <li><a href="foodlist.php"><span class="glyphicon glyphicon-cutlery"></span> Food Zone </a></li>
            <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart 
            (<?php
              if(isset($_SESSION["cart"])){
              $count = count($_SESSION["cart"]); 
              echo "$count"; 
            }
              else
                echo "0";
              ?>)
            </a></li>
            <li><a href="logout_u.php"><span class="glyphicon glyphicon-log-out"></span> Log Out </a></li>
          </ul>

<?php
}
?>
    </nav> 
<div class="wide"> 
        <!-- <div class="tagline" style=" "> <font color="black"> groceries shoppoing is located in musanze district <font color="red"> <font color="green"><strong><em>online groceries shopping management system is an online platform that enables customers to order products and get delivered at home in a short period of time.</em></strong></font></div>? -->
        <h1 style="color:black"><strong> <center>ABOUT US</center></strong> </h1>
        <center>
       <h3> online groceries shopping management system is an online platform that enables <br>
        customers toorder products and get delivered at home in a short period of time.<br><br> 
        <font color="black"><strong><left>Vision:</left></strong></font><br>
        To build the best online market & to provide quality service that exceeds the <br>
        expectations of our esteemed customers<br><br>
        <font color="black"><strong><left>Mission:</left></strong></font><br> 
        To make shopping easy and more accessible & To empower local producers as well<br> 
        as importers in penetrating the online market.<br><br>

        <font color="black"><strong><left>Our values:</left></strong></font><br>
        Our customers are our main priority and we value their feelings. We work towards<br> 
        building trust with our customers and fulfilling their needs.We always give products<br>
        inthe best condition. We deliver on time, and our prices are always lowest on the market.<br>
        We welcome suggestions and collaborations from customers in order to fully serve them.</center></h3></div>
       <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
 <footer class="footer"> 
               <div class="container">
               <center>
                   <p><strong><font color="black"></font> Copyright © musanabera 2020. All Rights Reserved.</strong></p>
                   
               </center>
               </div>
           </footer>
         </body>
</html>