<?php
@session_start();
if(!isset($_SESSION["userid"])){
 header("Location: login.php");
}else{
include('../includes/connection.php');
include 'theme/header.php';
include 'theme/sidebar.php';
?> 


          <div class="card mb-3">
            <div class="card-header">
              <h2 class="text-center display-4">Deliveries</h2>
            <div class="card-body">
              <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Delivery No.</th>
                                        <!-- <th>Customer</th> -->
                                        <th>Order Date</th>
                                        <th>Delivery Date</th>
                                        <th>Total Price</th>
                                        <th>Status</th>
                                            <th>Customer</th>
                                        <th>Option</th> 
                                     
                                    </tr>
                                </thead>
                                <tbody>
                                  <?php                  
                // $query = 'SELECT *,concat(`C_FNAME`," ",`C_LNAME`)as name FROM tbltransacdetail a, tblcustomer b WHERE a.`customer_id`=b.`C_ID` ';
                $query= 'SELECT d.TRANSAC_CODE as transac_code, d.D_ID AS d_id, d.C_ID AS C_ID, t.date as date, t.delivery_date as delivery_date, t.totalprice as totalprice, t.status as status from tbldelivery d inner join tbltransacdetail t on (d.TRANSAC_CODE = t.transac_code)';
                    $result = mysqli_query($db, $query) or die (mysqli_error($db));
                  
                        while ($row = mysqli_fetch_assoc($result)) {
                                          
                            echo '<tr>';
                            echo '<td><a title="View list Of Ordered" href="detailtransac.php?id='. $row['transac_code'].'" style="color: blue;font-size: 21px">'. $row['transac_code'].' </a></td>';                     
                            // echo '<td>'. $row['name'].'</td>';
                           echo '<td>'. substr($row['date'], 0, -16).'</td>';
                             echo '<td>'. substr($row['delivery_date'], 0, -16).'</td>';
                            echo '<td>'. $row['totalprice'].'</td>';
                            echo '<td>'. $row['status'].'</td>';
                            echo '<td>';
                             echo ' <a  type="button" class="btn btn-lg btn-warning fas fa-user-tag" href="deliverdetail.php?action=view & id='.$row['C_ID'] . '"></a> ';
                             echo '<td>';
                            if ($row['status']=='Pending') {?>
                            <a title="Cancel" type="button" class="btn btn-xs btn-danger " onclick="return confirm('Do you want to cancel transaction?')" href="confirm.php?action=edit & cancel=<?php echo $row['transac_code']; ?> "><i class="fa fa-times"></i></a>
                            <a title="Confirm" type="button" class="btn btn-xs btn-info " onclick="return confirm('Do you want to confirm transaction?')" href="confirm.php?action=edit & confirm=<?php echo $row['transac_code']; ?>"><i class="fa fa-check"></i></a>
                            <?php
                             }elseif ($row['status']=='Confirmed') {?>
                               <a title="Cancel" type="button" class="btn btn-xs btn-danger " onclick="return confirm('Do you want to cancel transaction?')" href="confirm.php?action=edit & cancel=<?php echo $row['transac_code']; ?> "><i class="fa fa-times"></i></a>
                            
                             <?php 
                             }    

                             
                            echo '</td>';
                            echo '</tr> ';

                }
            ?> 
                                    
                                </tbody>
                            </table>
                        </div>
            </div>
           
          </div>

          
        </div>
        <!-- /.container-fluid -->

<?php include 'theme/footer.php'; }?>
<?php include 'addtransac.php'; ?>