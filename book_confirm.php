<?php
session_start();
include 'dbhelper.php';
$id=$_GET["id"];
$choice=$_GET["choice"];
$name=$_GET["name"];
$b = str_replace( ',', '', $choice );
$seat_numbers="";
$c=0;
for($i=0;$i<100;$i++)
{
	if($b[$i]=='1')
	{
		$c=$c+1;
		$seat_numbers=$seat_numbers.$i;
		$seat_numbers=$seat_numbers.',';
	}
}
$seat_numbers=rtrim($seat_numbers,',');
$username=$_SESSION["username"];
$insert="insert into bookings(movieid,name,username,seats,seatsinfo) values('".$id."','".$name."','".$username."','".$c."','".$seat_numbers."')";

$con->query($insert);
$b = str_replace( '2', '1', $b);
$update='update movie set seats="'.$b.'" where id="'.$id.'"';
$con->query($update);
echo "<script> location.href='bookings.php'; </script>";

?>
<style>
   body {
	background-image: url("images/theatre.jpg");
  height: 95%;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}
</style>