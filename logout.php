<?php 

session_start();
	unset($_SESSION['cid'] ); 
	unset($_SESSION['cuser'] ); 
	unset($_SESSION['email'] ); 
	unset($_SESSION['C_FNAME'] ); 
	unset($_SESSION['C_LNAME'] ); 
	unset($_SESSION['address'] );
	unset($_SESSION['userType']);

	unset($_SESSION['contact'] ); 

session_destroy();

	header('location: index.php');
 ?>