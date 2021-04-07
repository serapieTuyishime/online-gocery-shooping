<?php @session_start(); ?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> Online Groceries shopping</title>

    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="vendor/fontawesome-free/css/all.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="vendor/OwlCarousel2-2.2.1/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="vendor/OwlCarousel2-2.2.1/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="vendor/OwlCarousel2-2.2.1/animate.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">

     <link href="css/cart_style.css" rel="stylesheet">
     <link href="css/main_styles.css" rel="stylesheet">
    <!-- <link rel="stylesheet" type="text/css" href="css/responsive.css"> -->

        <link rel="stylesheet" href="css/style.css" type="text/css">



  </head>

  <body id="page-top">

    <header class="navbar navbar-expand static-top bg-dark">
    <div class="header_overlay"></div>
    <div class="header_content d-flex flex-row align-items-center justify-content-start">
        <div class="row" style="color: white;">
            <div class="col-md-1">
                <button class="btn btn-link btn-sm order-1 text-white order-sm-0" id="sidebarToggle" href="#">
                <i class="fas fa-bars"></i>
            </button>
            </div>
          <div class="logo col">
            <a href="index.php">
              <div class="d-flex flex-row align-items-center justify-content-start">
                <div>Online grocery shopping</div>
              </div>
            </a>  
          </div>
    </div>
      <nav class="main_nav">
        <!-- <ul class="d-flex flex-row align-items-start justify-content-start"> -->
        <!-- <ul class="d-flex flex-row align-items-start justify-content-start"> -->
        <ul class="navbar-nav ml-auto ml-md-0 ">

          <li><a href="category.php?category=2">Oil</a></li>
          <li><a href="category.php?category=3">Juices</a></li>
          <li><a href="category.php?category=1">Vegetables</a></li>
          <li><a href="contactus.php">Contact</a></li>
          <li><a href="aboutus.php">About</a></li>
        </ul>
      </nav>
      <nav class="main_nav">
        <ul class="navbar-nav ml-auto ml-md-0 ">
          <!-- <li class="nav-item dropdown no-arrow mx-1">
          <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-envelope fa-fw"></i>
            <span class="badge badge-danger">7</span>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li> -->
          
              <?php 
     if (isset($_SESSION['cid'])) {
      echo '<li><a class="nav-link text-light " href="index.php"><i class=" fas fa-user-circle" > '.$_SESSION['C_FNAME'].' '.$_SESSION['C_LNAME'].'</i></a></li>`';
   
   
     }else{
      echo '<li><a class="nav-link text-light" href="register.php"><i class="fas fa-user-alt ">Sign Up</i></a></li>';
     }
   // if (isset($_SESSION['cid'])) {
     
      
   //   }else{
   //    echo '<li><a class="nav-link text-light" href="admin/login.php"><i class="fas fa-user-alt ">Manager signin</i></a></li>';
   //   }
      ?>

          
         
        
            <?php 
     if (isset($_SESSION['userType'])) {
      echo '<li><a class="nav-link text-light " href="logout.php"><i class=" fas fa-sign-out-alt" > Logout</i></a></li>';
      if ($_SESSION['userType']=='manager') 
      {
        echo '<li><a class="nav-link text-light " href="logout.php"><i class=" fas fa-sign-out-alt" > Manager panel</i></a></li>';
      }
      elseif ($_SESSION['userType']=='delivery') {
        echo '<li><a class="nav-link text-light " href="deliveries.php"><i class=" fa fa-car" > Deliveries</i></a></li>';
      }
     }else{
      echo '
          <li class="nav-item dropdown no-arrow mx-1">
          <a class="nav-link dropdown-toggle" href="#" id="loginsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-log-in"></i> Login
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="loginsDropdown">
            <a class="dropdown-item text-dark" href="login.php">Customer</a>
            <a class="dropdown-item text-dark" href="admin/login.php">Manager</a>
            <a class="dropdown-item text-dark" href="Deliverylogin.php">Delivery</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">_____________________</a>
          </div>
        </li>
          
       ' ;
      

     }
      ?>
      </ul>
      </nav>
      <!-- </div> -->
    </div>
  </header>