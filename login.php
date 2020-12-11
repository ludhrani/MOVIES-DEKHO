<?php

include 'dbhelper.php';

error_reporting(0);

$username = $_GET["username"];
$password = $_GET["password"];
$response_code = 0; // initialised with success(1)
$session_started = 0;
//queries -->
$select = "select * from user where username='" . $username . "' LIMIT 1";

//to check validity of the username
$select_result = mysqli_query($con, $select);
$cnt = mysqli_num_rows($select_result);

if ($cnt == 0) {
	$reponse_code = 0;
} else {
	$row = mysqli_fetch_array($select_result);
	if (mysqli_num_rows($select_result) == 1) {
		session_start();
		$response_code = 2;
		$_SESSION["name"] = $row["name"];
		$_SESSION["username"] = $row["username"];
		$_SESSION["phone"] = $row["phone"];
		$_SESSION["type"] = "user";
		$_SESSION["isLoggedIn"] = true;
		$session_started = 1;
		echo "<script>
    alert('Login Sucessfully');
    window.location.href = 'home.php' 
    </script>";
	} else {
		$response_code = 1;
	}
}

$obj->rsp_code = $response_code;
$obj->ssn = $session_started;
$jsonObj = json_encode($obj);
echo $jsonObj;
