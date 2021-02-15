<?php
@session_start();
if(!isset($_SESSION["userid"])){
 header("Location: login.php");
}else{
include('../includes/connection.php');
include 'theme/header.php';
include 'theme/sidebar.php';
?>  
<!-- Product Tables -->

<div class="card mb-3">
            <div class="card-header">
              <h3>Products <a href="productadd.php" type="button" class="btn btn-info fas fa-plus"> Add New</a></h3> 
            <div class="card-body">
              <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Product</th>
                                        <th>Quantity</th>
                                        <th>Price</th>
                                       <th>Profit</th>
                                        <th>Date In</th>
                                        <th>Category</th>
                                        <th>Supplier</th>
                                        <th>Encoder</th>
                                        <th>Update</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  <?php                  
                $query = 'SELECT *,category,supplier_name,concat(d.`fname`," ",d.`lname`)as name FROM tblproducts a inner join tblcategory b inner join tblsupplier c inner join tblusers d on a.`category_id` = b.`category_id` and a.`supplier_id` = c.`supplier_id` and a.`user_id` = d.`user_id`';
                    $result = mysqli_query($db, $query) or die (mysqli_error($db));
                  
                        while ($row = mysqli_fetch_assoc($result)) {
                                             
                            echo '<tr>';
                            echo '<td>'. $row['product_id'].'</td>';
                            if ($row['status']=='Available') {
                               echo '<td class="bg-primary"> '.$row['product_name'].'</td>';
                            }
                            else
                            {
                                echo '<td class="bg-warning"> '.$row['product_name'].'</td>';
                            }
                            
 echo '<td>'.$row['quantity'].'<a title="Update Quantity" href="updatequantity.php?id='. $row['product_code'].'" style="color: blue;font-size: 21px"><label class="btn bnt-warning"><i class="fa fa-plus"></i></label> </a></td>';  

                            echo '<td>'. $row['price'].'</td>';
                            echo '<td>'. $row['profit'].'</td>';
                            echo '<td>'. $row['date_in'].'</td>';
                            echo '<td>'. $row['category'].'</td>';
                            echo '<td>'. $row['supplier_name'].'</td>';
                            echo '<td>'. $row['name'].'</td>';
                             echo '<td>  ';
                      

                             echo '<a title="Update Product" type="button" class="btn btn-lg btn-warning fas fa-pen" href="productupdate.php?action=view & id='.$row['product_code'] . '"></a> ';

                            echo '</tr> ';
                }
            ?> 
                                    
                                </tbody>
                            </table>
                        </div>
            </div>
           
          </div>
</div>
          
        </div>

        <!-- /.container-fluid -->  
          
<!--footer area-->
<?php include 'theme/footer.php'; }?>