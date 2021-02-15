<?php include('includes/connection.php');?>  

<!--header area-->
<?php include 'includes/header.php'; ?>

<!--sidebar area-->
<?php include 'includes/sidebar.php'; ?>

<style>
  .error {color: #FF0000;}
</style>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Register</title>

    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="css/sb-new.css">
  </head>

  <body class="bg-dark">

    <div class="container">
      <div class="card card-register mx-auto mt-5">
        <div class="card-header">Register</div>
        <div class="card-body">
          <?php 
          @session_start();
          if (isset($_GET['error'])) {
            if ($_GET["error"]=="emptyfields") {
              echo '<p class="signuperror">Fill in all fields</p>';
            }
            elseif ($_GET["error"]=="invalidmail") {
               echo '<p class="signuperror">Invalid Email</p>';
            }
            elseif ($_GET["error"]=="invaliduid") {
               echo '<p class="signuperror">Invalid Username</p>';
            }
            elseif ($_GET["error"]=="passwordcheck") {
               echo '<p class="signuperror">Your password do not match</p>';
            }
            elseif ($_GET["error"]=="usertaken") {
               echo '<p class="signuperror">Username is already taken</p>';
            }
            elseif ($_GET["error"]=="emailtaken") {
               echo '<p class="signuperror">Email/Username is already taken</p>';
            }
            else
            {
               echo '<p class="signuperror">'.$_GET['error'].'</p>';
            }
            } 
             if (isset($_GET['register'])) {
              if ($_GET["register"]=="success") {
               echo '<p class="signupsuccess">Register successful</p>';
             }
         }

         ?>
         <?php
         $email="";
      if (empty($_POST["email"])) 
      {
      $emailErr = "";
      $email="";
      $justNums='';
      } 
      else 
      {
       $email = test_input($_POST["email"]);
      }
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
    {
      //$emailErr = "Invalid email format";
      //eliminate every char except 0-9
      $justNums = preg_replace("/[^0-9]/", '', $justNums);
    }
//eliminate leading 1 if its there
if (strlen($justNums) == 11)
{
  $justNums = preg_replace("/^1/", '',$justNums);
}
    
//if we have 10 digits left, it's probably valid.
if (strlen($justNums) == 10) $isPhoneNum = true;
    
           ?>
          <form action="includes/signup.php" method="post">
            <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="text" id="firstName" name="C_FNAME" class="form-control" placeholder="First name" autofocus="autofocus" onkeypress ="return alphabets(event)" maxlength="30">
                    <label for="firstName">First name</label>
                  </div>
                  <label class="text-danger pl-3 font-italic" id="firstNameErr"></label>
                </div>
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="text" id="lastName" name="C_LNAME" class="form-control" placeholder="Last name" onkeypress ="return alphabets(event)" maxlength="30">
                    <label for="lastName">Last name</label>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
                <input type="text" maxlength="3" id="inputage" name="C_AGE" class="form-control" placeholder="Age" onkeypress ="return numbers(event)">
                <label for="inputage"> Age</label>
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
                 <input type="text"  id="inputAddress" name="C_ADDRESS" class="form-control" placeholder="address">
                <label for="inputAddress">Address</label>
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
                <input type="text" maxlength="9" id="inputpnumber" name="C_PNUMBER" class="form-control input-sm" placeholder="Phone Number" maxlength="10" onkeypress ="return numbers(event)"  ><label for="inputpnumber" >Phone Number</label>
              </div>
                <label class="text-danger pl-3 font-italic" id="phoneErr"></label>
            </div>
            <div class="form-group">
              <div class="form-label-group">
                <select type="text" id="inputGender" name="C_GENDER" class="form-control" placeholder="Gender">
                  <option value="Male">Male</option>
                  <option value="Female">Female</option>
                  <option value="Other">Others</option>
                </select>
              </div>
            </div>
            
            <div class="form-group">
              <div class="form-label-group">
                <input type="text" id="inputEmail" name="C_EMAILADD" class="form-control" placeholder="Email Address"> <span class="error"> <?php echo $emailErr;?></span>
                <label for="inputEmail">Email Address</label>
              </div>
            </div>
<!--             <div class="form-group">
              <div class="form-label-group">
                <input type="text" id="inputZipcode" name="ZIPCODE" class="form-control" placeholder=" Zipcode">
                <label for="inputZipcode">Zipcode</label>
              </div>
            </div> -->
             <div class="form-group">
              <div class="form-label-group">
                <input type="text" id="inputuser" name="username" class="form-control" placeholder="Username" onkeypress ="return alphabets(event)">
                <label for="inputuser">User Name</label>
              </div>
            </div>
            <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password">
                    <label for="inputPassword">Password</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="password" id="confirmPassword" name="pwdcon" class="form-control" placeholder="Confirm password">
                    <label for="confirmPassword">Confirm password</label>
                  </div>
                </div>
              </div>
            </div>
            <button type="submit" class="btn btn-primary btn-block" name="signups-submit">Save</button>
          </form>
          <div class="text-center">
          <!--   <a class="d-block small mt-3" href="login.php">Login</a> -->
            <a class="d-block small mt-3" href="index.php">Back</a>
          </div>
        </div>
      </div>
    </div>
  
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  </body>

</html>

<?php require 'includes/footer.php'; ?>