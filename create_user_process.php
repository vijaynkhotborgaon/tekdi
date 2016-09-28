<?php 
	session_start();
	//Include database connection details
	require_once('config.php');
	
	//Array to store validation errors
	$errmsg_arr = array();

	//Validation error flag
	$errflag = false;

	//Function to sanitize values received from the form. Prevents SQL injection
	function clean($str) {
		$str = @trim($str);
		if(get_magic_quotes_gpc()) {
			$str = stripslashes($str);
		}
		return mysql_real_escape_string($str);
	}

	//Sanitize the POST values
	$name = clean($_POST['name']);
	$country = clean($_POST['country']);
	$email = clean($_POST['email']);
	$mobile = clean($_POST['mobile']);
	$about = clean($_POST['about']);
	$dob = clean($_POST['DOB']);
	


	
	if($name == '') {

			$errmsg_arr[] = 'Enter Name';
			$errflag = true;

		}
		
	
	if($country == '') {

			$errmsg_arr[] = 'Enter Country Name';
			$errflag = true;

		}
		
		
	if($email == '') {

			$errmsg_arr[] = 'Enter Email ID';
			$errflag = true;

	}
	
	
	if($mobile == '') {

		$errmsg_arr[] = 'Enter mobile Number';
		$errflag = true;

	}
	
	if($about == '') {

		$errmsg_arr[] = 'Enter About you';
		$errflag = true;
	}
	
	
	if($dob == '') {

		$errmsg_arr[] = 'Enter Date of Birth';
		$errflag = true;

	}
	
	
	if($errflag) {
		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		session_write_close();
		header("location: index.php");
		exit();
	}

	
	$qry = "INSERT INTO user_table(name, country, email, mobile, about, dob) VALUES('$name','$country','$email','$mobile','$about','$dob')";
	
	$result = @mysql_query($qry);


		if($result) {

					$_SESSION['USER_ADDED'] = 1;

					session_write_close();

					header("location: index.php");

					exit();

				}else {

					die("Query failed");

				}

?>
	
	