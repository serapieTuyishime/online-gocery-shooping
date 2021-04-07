<?php 
include('includes/connection.php');

if (isset($_GET['deliver'])) {
	mysqli_query($db, "UPDATE tbltransacdetail SET status = 'Delivered', remarks = 'Your order has been Started for delivery !' WHERE transac_code='".$_GET['deliver']."'")or die(mysqli_error($db));
}
 ?>
 <script type="text/javascript">
			alert("Transaction Updated.");
			window.location = "deliveries.php";
		</script>