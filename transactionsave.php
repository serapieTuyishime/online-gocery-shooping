<?php
include "includes/connection.php";
 @session_start();

    $date = $_POST['del'];  #delivery or pickup date
    $met= $_POST['paymethod'];  


    #check if the address is empty while method is set to delivery

    if (($met == 'Cash on Delivery') && (empty(trim($_POST['delivery_address'])))) 
    {
        echo "<script>
            alert('The address must not be empty when you need delivery')
            window.location = 'cart.php';</script>";
            die();
    }
 
    #addres is not a requisite because one can pickup his products 
    if (!isset($_POST['delivery_address'])) 
    {
        $_POST['delivery_address']= 'None';
    }

    $delivery_address= htmlspecialchars($_POST['delivery_address']);  
            // $query = 'SELECT current_date FROM tblusers';
            // $result = mysqli_query($db, $query) or die(mysqli_error($db));
            //   while($row = mysqli_fetch_array($result))
            //   {   
            //    $date = $row['current_date'];
            //   }
    $tat=time();

    // validate te delivery date if is not way in future or in past
    if (date('Y-m-d') > $date) 
    {
        echo "<script>
            alert('The date must not be from the past')
            window.location = 'cart.php';</script>";
            die();
    }

    #if the delivery is past 7 days
    if (date('Y-m-d', strtotime('+ 6 days')) < $date) 
    {
        echo "<script>
            alert('We only accept dates up to 7 days')
            window.location = 'cart.php';</script>";
            die();
    }



    if($_GET["action"]=='adds') 
    {
        // loop though the cart 
        foreach($_SESSION['cart'] as $id => $value) 
        {

            //Save Transaction
            $query2 = "INSERT INTO tbltransac(transac_code,date,customer_id,product_code,qty,price,total)values('".$tat."','".$date."','".$_SESSION['cid']."','".$value['ids']."','".$value['quantity']."','".$value['price']."','".$value['quantity'] * $value['price']."')"; 
                 mysqli_query($db,$query2)or die(mysqli_error($db));

            //Update Product
            $sql = "UPDATE tblproducts SET quantity = quantity - '".$value['quantity']."' WHERE product_code='".$value['ids']."'";
            mysqli_query($db,$sql)or die(mysqli_error($db));
        }
        unset($id); unset($value);
        
        //Save Transaction Detail 
        $priceTotal= $_SESSION['mm'];
        $deliveryfee= 0;
        $method="";  #the method of transaction if ispickup or delivery

        if ($met=='Cash on Delivery') 
        {
            $priceTotal+=150;
            $deliveryfee= 150;
            $method= 'Delivery';
        }
        else
        {
            $method =  "Pickup";
            $delivery_address= "-";  #because there won't be a delivery
        }

        $query3 = "INSERT INTO tbltransacdetail(transac_code,date, customer_id,deliveryfee,pay_met,totalprice,status,delivery_date, delivery_address) VALUES ('".$tat."','".date('Y-m-d')."','".$_SESSION['cid']."','".$deliveryfee."','".$met."','".$priceTotal."','Pending','".$date."','".$delivery_address."')";
        mysqli_query($db,$query3)or die(mysqli_error($db)); 

        // if there has to be a delivery
        if ($met== 'Cash on Delivery') 
        {
            #for inserting into the deliveries table
            $query4= "INSERT INTO tbldelivery (TRANSAC_CODE, C_ID, C_ADDRESS, C_PNUMBER, D_DATE) VALUES ('".$tat."','".$_SESSION['cid']."','".$delivery_address."','".$_SESSION['contact']."', '".$date."')";
            mysqli_query($db,$query4);
        }

  
    }
    else
    {

        echo "<script>
            alert('There are some inconveniences')
            window.location = 'cart.php';</script>";
    }
							
	unset($_SESSION["cart"]);
    unset($_SESSION['mm']);	
?>
    	
<script type="text/javascript">
	alert("Successfully added.");
	window.location = "order.php";
</script>
