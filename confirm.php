<?php
  session_start();
  $logged = false;
if (isset($_SESSION["isLoggedIn"]) && $_SESSION["isLoggedIn"])
  $logged = true;
  $username = $_SESSION["username"];
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  <title>CONFIRMATION!!</title>
  <style>
    .ticket {
      background-color: orange;
      color: black;
      width: 40vw;
      height: 42vh;
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.4);
    }

    .ticket:hover {
      transform: scale(1.1);
    }
    @media print {
      body * {
        visibility: hidden;
      }
      .print-container, .print-container * {
        visibility: visible;
      }
      .print-container {
        position: absolute;
        left: 0px;
        top: 500px;
        right: 0px;
      }
      #print {
        display: none;
        visibility: none;
      }
      @page{
        size: A4;
        margin: 0;
      }
    }
  </style>
</head>
<body>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <?php
  include 'dbhelper.php';
  ?>
  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <img id="header-img" style="width:80px;height:80px; border-radius: 200px; opacity: 0.6;" src="images/MD Logo.jpg" alt="logo of MD"> &nbsp;&nbsp

      </div>
      <h1><b><a class="navbar-brand" style="padding-top: 11px;font-size:35px;margin-right:800px" href="home.php">MOVIES DEKHO</a></b></h1>
      <button class="btn btn-warning  navbar-btn navbar-right" onclick="window.location.href='confirm.php'" style="margin-right: 5px;">My Tickets</button>
      <button class="btn btn-info  navbar-btn navbar-right" onclick="window.location.href='bookings.php'" style="margin-right: 5px;">My Bookings</button>
      <button class="btn  btn-danger navbar-btn navbar-right" onclick="window.location.href='logout.php'" style="margin-right:5px;">Logout</button>
      <?php
      if ($logged) {
      ?>
              <i class="fa fa-user navbar-right" style="color:white; margin-top:-80px;margin-left:1120px" aria-hidden="true"></i>
        <span class="navbar-right" style="color:white; margin-top:-80px;margin-right:300px"><?= $_SESSION["username"] ?></span>
        </a>
      <?php } ?>
    </div>
  </nav>
  <?php
  $result = mysqli_query($con, "SELECT * FROM bookings where username='$username'");
  while ($row = mysqli_fetch_array($result)) {
    echo "<div class='container-fluid ticket print-container'>";
    echo "<h3><b><u><center>E-TICKET</center></u></b></h3>";
    echo '<center><span class="fa fa-star "></span>
               <span class="fa fa-star "></span>
               <span class="fa fa-star "></span>
               <span class="fa fa-star"></span>
               <span class="fa fa-star"></center></span>';
    echo "<br><b>Name</b> :- " . $row['username'] . "<br><br>";
    echo "<b>Movie Name</b> :- " . $row['name'] . "<br><br>";
    echo "<b>No Of Seats</b> :- " . $row['seats'] . "<br><br>";
    echo "<b>Seat No's</b> :- " . $row['seatsinfo'] . "<br><br>";
    echo "<center><u>Booked On Movies Dekho</u></center>";
    echo "<form action='print.php' method='POST'>
          <input type='hidden' value='{$row['username']}' name='username' />
          <input type='hidden' value='{$row['name']}' name='name' />
          <input type='hidden' value='{$row['seats']}' name='seats' />
          <input type='hidden' value='{$row['seatsinfo']}' name='seatsinfo' />
            <a  href='print.php'><button class='btn btn-danger' id='view'>View Ticket</button></a>
  </form>";
  echo "</div><br><br>";
  }
  include 'footer.php';
  ?>
</body>
</html>