<?php @session_start(); ?>
<?php if (!isset($_SESSION['cid'])) {
  header("location: login.php?info=login to continue checking out");
  die();
} ?>
<?php include('includes/connection.php');?>  

<!--header area-->
<?php include 'includes/header.php'; ?>

<!--sidebar area-->
<?php include 'includes/sidebar.php'; ?>


<!DOCTYPE html>
<html>
<head>
  <title></title> 

</head>
<body>
<div class="row">
    <div class="col-lg-8">
 <div class="card mb-3">
            <div class="card-header" style="background-color: white">
              <h2>Order Detail</h2>
            <div class="card-body" >
              <div class="table-responsive">
                            <table class="table " id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Product</th>
                                        <th>Order Date</th>
                                        <th >Quantity</th>
                                        <th >Price</th>
                                        <th>Total</th> 
                                    </tr>
                                </thead>
                                <tbody style="font-size: 20px">
                                  <?php            
                                   $result = mysqli_query($db, 'SELECT current_date FROM tblusers') or die(mysqli_error($db));
                                  while($row = mysqli_fetch_array($result))
                                 {   
                                  $date = $row['current_date'];
                                  } ?>
                                <?php 
                                if (!empty($_SESSION["cart"])) {
                                  $_SESSION['mm']=0;
                                  foreach($_SESSION["cart"] as $keys => $values){
                                    ?>
                                    <tr>
                                      <td><?php echo $values["name"]; ?></td>
                                       <td><?php echo $date; ?></td>
                                      <td><?php echo $values["quantity"]; ?></td>
                                      <td>Frw <?php echo $values["price"]; ?></td>
                                      <td>Frw<?php echo $values["quantity"] * $values["price"]; ?></td>
                                    </tr>
                                    <?php 
                                    $name= $values["name"];
                                    

                                    $_SESSION['mm'] = $_SESSION['mm'] + ($values["quantity"] * $values["price"]);

                                  }
                                  ?>
                                  

                                  
                                
                             </tbody>
                               <?php
                                }
                                 ?>
                              </table>
                        </div>
            </div>
           
          </div>

          
        </div>
    </div>
     <div class="col-lg-4">
 <div class="card mb-3">
<div class="container">
     

        <div class="card-body">
  <form role="form" method="post" id="addprodForm" action="transactionsave.php?action=adds" onsubmit="return confirm('Do you want to submit order?')">

                            <h5><i class="fas fa-user-alt"></i> <?php echo $_SESSION['C_FNAME'] ?> <?php echo $_SESSION['C_LNAME'] ?></h5><br>
                            <!-- <h5><i class="fas fa-map-marker-alt"></i> <?php echo $_SESSION['address'] ?></h5><br> -->
                            <h5><i class="fas fa-phone"></i> 0<?php echo $_SESSION['contact'] ?></h5><br>
                            <h5><i class="fas fa-envelope"></i> <?php echo $_SESSION['email'] ?></h5><br>
                            <div class="form-group">
                              <label class="text-muted">Delivery address</label><br>
                              <textarea form="addprodForm" class="form-control" name="delivery_address" >
                                
                              </textarea><br>
                              Please use a distrinct addres and your order may be rejected!
                            </div>
                            <h5><i class="fas fa-calendar"></i> Delivery/Pickup Date:<input class="form-control" type="date" min="<?php echo date('Y-m-d'); ?>" name="del" style="width: 206px" required></h5><br>
                            <tr> 
                 <td>Payment Method</td>
                 <td>
                  <!-- <input type="text" id="date"> -->
                <!-- <input type="button" id="btn"  value="Show"/> -->
                 <select  class="form-control" id="paymethod" name="paymethod">
                        <option value="Cash on Delivery">Cash on Delivery</option>
                        <option value="Cash on Pickup">Cash on Pickup</option>
                      </select>
                 <input type="hidden"  placeholder="HH-MM-AM/PM"  id="ftime" name="ftime" value="<?php echo date('y-m-d h:i:s') ?>"  class="form-control"/>

                            <h2>Order Summary</h2><br>
                            <div class="row">
                            <div class="col-lg-7" >
                            <h5>Subtotal</h5><br>
                            </div>                            
                            <div align="right" class="col-lg-4">
                            <h5>Frw <?php echo $_SESSION['mm']; ?></h5><br>
                            </div> 
                            <div class="col-lg-7" >
                            <h5>Delivery fee may be </h5><br>
                            </div> 
                            <div align="right" class="col-lg-4">
                            <h5>Frw 150</h5><br>
                            </div>
                                                       
                            </div>
                            <center><button type="submit" class="btn btn-lg btn-success" style="margin-top: 15px;">Submit Order</button></center>
                            <!-- <div class="form-group">
                              <input class="form-control" placeholder="Supplier Name" name="supplier" required autofocus="autofocus">
                            </div>
                            <div class="form-group">
                              <input class="form-control" type="number" placeholder="Contact" name="contact"required>
                            </div> 
                            <div class="form-group">
                              <input class="form-control" placeholder="Email" name="email"required>
                            </div> 
                            <div class="form-group">
                              <input class="form-control" placeholder="Address" name="address"required>
                            </div> 
                             
                            <button type="submit" class="btn btn-default">Save Record</button>
                            <button type="reset" class="btn btn-default">Clear Entry</button> -->


                      </form>  
                       </div>
                </div>
 </div>
</div>
    </div>
</body>
</html>



   
 
   



<?php include 'includes/footer.php'; ?>
