<?php 
if (isset($_POST['login-submit'])) {
	require 'connection.php';

 $mailuid = $_POST['mailuid'];
 $pass = $_POST['pwd'];

if (empty($mailuid)||empty($pass)) {
	header("Location: ../deliverylogin.php?error=emptyfields");
	exit();
}
else{
	$sql = "SELECT * FROM tblemployee WHERE email=?;";
	$stmt = mysqli_stmt_init($db);
	if (!mysqli_stmt_prepare($stmt,$sql)) {
	header("Location: ../deliverylogin.php?error=sqlerror");
	exit();
	}
	else{
		mysqli_stmt_bind_param($stmt,"s",$mailuid);
		mysqli_stmt_execute($stmt);
		$result = mysqli_stmt_get_result($stmt);
		if ($row = mysqli_fetch_assoc($result)) {
			$pwdCheck = password_verify($pass,$row['password']);
			if ($pwdCheck == false) {
			header("Location: ../deliverylogin.php?error=wrongpwd");
			exit();
			}
			elseif ($pwdCheck == true) {
				session_start();
				$_SESSION['cid'] = $row['emp_id'];
				$_SESSION['cuser'] = $row['fname'];
				$_SESSION['email'] = $row['email'];
				$_SESSION['C_FNAME'] = $row['fname'];
				$_SESSION['C_LNAME'] = $row['lname'];
				$_SESSION['address'] = $row['address'];
        		$_SESSION['userType']='delivery';

				$_SESSION['contact'] = $row['contact'];
				header("Location: ../indexx.php?login=success");
				exit();
			}
			else{
				header("Location: ../deliverylogin.php?error=wrongpwd");
				exit();
			}
		}
		else{
			header("Location: ../deliverylogin.php?error=nouser");
			exit();
		}
	}
}

}
else{
	header("Location: ../index.php");
	exit();
	}