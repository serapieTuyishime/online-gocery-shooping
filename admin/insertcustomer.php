<?php
       
       require('../includes/connection.php');
       
       
        ?>  
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
  <?php
						$C_FNAME = $_POST['C_FNAME'];
						$C_LNAME = $_POST['C_LNAME'];
					    $C_AGE = $_POST['C_AGE'];
					    $C_ADDRESS = $_POST['C_ADDRESS'];
					    $C_PNUMBER = $_POST['C_PNUMBER'];
					    $C_GENDER = $_POST['C_GENDER'];
					    $C_EMAILADD = $_POST['C_EMAILADD'];
					    // $ZIPCODE = $_POST['ZIPCODE'];
					    
						
if ($C_AGE >= 100 || $C_AGE <= 10) 
{
	header("Location: addcustomer.php?error= We only accept age under 100 and over 10");
	exit();
}

if (empty($C_FNAME)||empty($C_LNAME)||empty($C_AGE)||empty($C_ADDRESS)||empty($C_PNUMBER)||empty($C_GENDER)||empty($C_EMAILADD)||empty($username)||empty($password)) {
	header("Location: addcustomer.php?error=empty fields&firstname=".$C_FNAME."&lastname=".$C_LNAME.
	"&mail=".$C_EMAILADD."&uid=".$username);
	exit();
}
if (!filter_var($C_EMAILADD, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/",$username)) {
	header("Location: addcustomer.php?error=invalid email");
	exit();
}
if (!filter_var($C_EMAILADD, FILTER_VALIDATE_EMAIL)) {
	header("Location: addcustomer.php?error=invalid email");
	exit();
}
if (!preg_match("/^[a-zA-Z0-9]*$/",$username)) {
	header("Location: addcustomer.php?error=invalid username");
	exit();
}
if ($password !== $passcon) {
	header("Location: addcustomer.php?error= Password missmatch");
	exit();
} 
					
					switch($_GET['action']){
						case 'add':
						
									$query = "INSERT INTO tblcustomer
								(C_ID,C_FNAME,C_LNAME,C_AGE,C_ADDRESS,C_PNUMBER,C_GENDER,C_EMAILADD)
								VALUES ('Null','".$C_FNAME."','".$C_LNAME."','".$C_AGE."','".$C_ADDRESS."','".$C_PNUMBER."','".$C_GENDER."','".$C_EMAILADD."')";
								mysqli_query($db,$query)or die(mysqli_error($db));
												
								
							
						break;
									
						}
				?>
    	<script type="text/javascript">
			alert("Successfully added.");
			window.location = "customer.php";
		</script>
</body>
</html>