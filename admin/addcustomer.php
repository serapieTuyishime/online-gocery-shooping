<?php
@session_start();
if(!isset($_SESSION["userid"])){
 header("Location: login.php");
 die();
}else{
include('../includes/connection.php');
include 'theme/header.php';
include 'theme/sidebar.php';
?> 

<!DOCTYPE html>
<html>
<head>
  <title></title> 

</head>
<body>
<div class="row">
    <div class="col-lg-8">
 <div class="card mb-3">
        <div class="card-header" style="background-color: white"><center><h3>Add Customer</h3></center></div>
        <div class="card-body">
          <div class="text-danger text-center mb-3" style="font-size: 1.5rem;"><?php echo isset($_GET['error'])? $_GET['error']:''; ?></div>
 <form role="form" method="post" action="insertcustomer.php?action=add">
                            
                            <div class="form-group">
                              <input class="form-control" placeholder="First Name" name="C_FNAME" required autofocus="autofocus" onkeypress="return alphabets(event)" maxlength="30">
                            </div>
                            <div class="form-group">
                              <input class="form-control" placeholder="Last Name" name="C_LNAME" required onkeypress="return alphabets(event)" maxlength="30">
                            </div> 
                             <div class="form-group">
                              <input type="number" class="form-control" placeholder="Age" name="C_AGE" required onkeypress="return numbers(event)">
                            </div> 
                            <div class="form-group">
                              <input class="form-control" placeholder="Address" name="C_ADDRESS" required>
                            </div> 
                            <div class="form-group">
                              <input type="" maxlength="11" class="form-control" placeholder="Phone number" name="C_PNUMBER" required onkeypress="return numbers(event)">
                            </div> 
                          <!--   <div class="form-group">
                              <input type="" id="Gender" class="form-control" placeholder="Gender" name="C_GENDER" required="required" onkeypress="return alphabets(event)">
                              </div> --> 
                              <div class="form-group" >
                                <label>Gender</label>
                                <select class="form-control" name="C_GENDER">
                                  <option value="Female">Female</option>
                                  <option value="Male">Male</option>
                                  <option value="Other">Other</option>
                                </select>
                              </div>
                            <div class="form-group">
                              <input class="form-control" placeholder="Email" name="C_EMAILADD" required>
                            </div> 
                            <!-- <div class="form-group">
                              <input class="form-control" placeholder="zipcode" name="ZIPCODE" required>
                            </div>  -->
                            <div class="form-group">
                  <div class="form-label-group">
                <input type="text" id="inputEmail1" name="uid" class="form-control" placeholder="User Name">
                <label for="inputEmail1">User Name</label>
              </div>
            </div>
            <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="password" id="inputPassword" name="pwd" class="form-control" placeholder="Password">
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
                            <button type="submit" class="btn btn-default">Save Record</button>
                            <button type="reset" class="btn btn-default">Clear Entry</button>


                      </form>  
                       </div>
                </div>
              
        
          <div class="modal-footer">
            
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Page level plugin JavaScript-->
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>

    <script src="../js/validations.js"></script>

    <!-- Demo scripts for this page-->
    <script src="js/demo/datatables-demo.js"></script>
    <script src="js/demo/chart-area-demo.js"></script>

 
<?php include 'theme/footer.php'; }?>









<?php include 'theme/footer.php'; ?>








