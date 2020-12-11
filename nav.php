<?php
session_start();
if(isset($_SESSION["name"]))
{
  echo "Logged in, Redirecting!!!";
?>
  <script>

    setTimeout(function(){
      window.location.href = "home.php";
    },1000); 
    
  </script>

<?php
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>MOVIES DEKHO</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
    <img id="header-img"style="width:80px;height:80px; border-radius: 200px; opacity: 0.6" src="images/MD Logo.jpg" alt="logo of MD"> &nbsp;&nbsp
      
    </div>
    <h1><b><a class="navbar-brand" style="padding-top: 11px; font-size:35px" href="home.php">MOVIES DEKHO</a></b></h1>
    <!-- <button class="btn  btn-danger navbar-btn navbar-right" onclick="window.location.href='logout.php'" style="margin-right: 10px;">Logout</button>
    <button class="btn btn-info  navbar-btn navbar-right" onclick="window.location.href='bookings.php'" style="margin-right: 10px;">My Bookings</button> -->
  </div>
</nav>
</body>
</html>
