<?php
include 'nav_active.php';
include 'dbhelper.php';
error_reporting(0);
session_start();
$username=$_SESSION["username"];

    $ans="";
    $result=$con->query("select * from bookings where username='".$username."'");
    if ($result->num_rows > 0) 
    {

  $ans=$ans."<div class='container' style='magin:50px;'>";
  $ans=$ans."<center><h2>Your Ticket Bookings</h2></center>" ;      
  $ans=$ans."<table class='table'>";
  $ans=$ans."<tr><thead><th>Booking ID</th><th>Movie</th><th>Count</th><th>Seats</th><th>Action</th></thead></tr>";
  $ans=$ans."<tbody>";

        while($row = $result->fetch_assoc()) 
        {
          $ans=$ans."<tr>";
          $bid=$row['bid'];
          $mid=$row['movieid'];
          $ans=$ans."<td>".$row['bid']."</td>"."<td>".$row['name']."</td>"."<td>".$row['seats']."</td><td>".$row['seatsinfo']."</td>";
          $ans=$ans."<td><button id='cancel' class='btn btn-danger' onclick=";
          $ans=$ans.'"';
          $ans=$ans."window.location.href='cancel.php?bid=".$bid."&mid=".$mid."'";
          $ans=$ans.'">';
          $ans=$ans."Cancel</button></td>";
            $ans=$ans."</tr>";
        }
        $ans=$ans."</tbody></table></div>";

    }
    echo $ans."<br><br>";
include 'footer.php';
?>
<script>
	$("#cancel").click(function(){
  alert("Your Booking is Cancelled Successfully!");
});
</script>
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