<?php 
	$fname = $_POST['fname'];
	$mname = $_POST['mname'];
	$lname = $_POST['lname'];
	$email = $_POST['mail'];
	$phone = $_POST['phone'];
	$gender = $_POST['gen'];
	$profession = $_POST['Pro'];
	$saddress = $_POST['saddress'];
	$naddress = $_POST['naddress'];
	$pincode = $_POST['pincode'];
	$sugg = $_POST['sugg'];

	if(!empty($fname) || !empty($mname) || !empty($lname) || !empty($email) || !empty($phone) || !empty($gender) || !empty($profession) || !empty($saddress) || !empty($naddress) || !empty($pincode) || !empty($sugg)) {
		$host = "localhost";
		$dbUsername = "root";
		$dbPassword = "";
		$dbName = "test";

		$conn =  mysqli_connect($host, $dbUsername, $dbPassword, $dbName);
		if(mysqli_connect_error()) {
			die('Connect error ('.mysql_connect_errno().')'.mysql_connect_error());
		}
		else {
			$query = "INSERT INTO participants(fname, mname, lname, email, phone, gender, profession, address, area, pincode, suggestion) values('$fname', '$mname', '$lname', '$email', $phone, '$gender', '$profession', '$saddress', '$naddress', $pincode, '$sugg')";
			if(mysqli_query($conn, $query)) {
				echo "<h1>successfully registered...</h1>";
			}
			else {
				echo "might have some problem...";
			}
		}
	}
	else {
		echo "<h1>Some fields might be empty...fill all the details</h1>";
		die();
	}
	echo "fname :- ".$fname . "<br/>";
	echo "mname :- ".$mname. "<br/>";
	echo "lname :- ".$lname. "<br/>";
	echo "email :- ".$email. "<br/>";
	echo "phone :- ".$phone. "<br/>";
	echo "gender :- ".$gender. "<br/>";
	echo "profession :- ".$profession. "<br/>";
	echo "saddress :- ".$saddress. "<br/>";
	echo "naddress :- ".$naddress. "<br/>";
	echo "pincode :- ".$pincode. "<br/>";
	echo "sugg :- ".$sugg. "<br/>";
 ?>