
<?php include('../includes/connection.php');?>  

<!--header area-->
<?php include 'theme/header.php'; ?>

<!--sidebar area-->
<?php include 'theme/sidebar.php'; ?>

<!--breadcrumbs area-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="./index.php">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Client</li>
          </ol>


<!-- CustomerTables -->
<?php
@session_start();
if(!isset($_SESSION["userid"])){
 @header("Location: index.php");
 die();
}
else{
?>
<?php
}
?>
<div class="card mb-3 row">
            <div class="card-header">
              <h2>Client </h2> <!-- <a href="#" data-toggle="modal" data-target="#logoutModal2"  type="button" class="btn btn-lg btn-info fas fa-user-plus"> Add New</a> -->
            <div class="card-body">
              <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Email</th>
                                        <th>Contact</th>
                                        <th>Sex</th>
                                        <th>Age</th>
                                        <th>Address</th>
                                        <th>Options</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  <?php                  
                $query = 'SELECT * FROM tblcustomer ';
                    $result = mysqli_query($db, $query) or die (mysqli_error($db));
                  
                        while ($row = mysqli_fetch_assoc($result)) {
                                             
                            echo '<tr>';
                            echo '<td>'. $row['C_ID'].'</td>';
                            echo '<td>'. $row['C_FNAME'].'</td>';
                            echo '<td>'. $row['C_LNAME'].'</td>';
                            echo '<td>'. $row['C_EMAILADD'].'</td>';
                            echo '<td>'. $row['C_PNUMBER'].'</td>';
                            echo '<td>'. $row['C_GENDER'].'</td>';
                            echo '<td>'. $row['C_AGE'].'</td>';
                            echo '<td>'. $row['C_ADDRESS'].'</td>';
                            echo '<td>  ';
                            echo ' <a title="Update Client" type="button" class="btn btn-lg btn-warning fas fa-user-edit" href="updateclient.php?action=edit & id='.$row['C_ID'] . '"></a> </td>';
                           /* echo ' <a title="Delete Customer" type="button" class="btn btn-lg btn-danger fas fa-trash-alt" href="deletecustomer.php?type=customer&delete & id=' . $row['customer_id'] . '"></a> ';*/
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

<!--footer area-->
<?php include 'addclient.php'; ?>
