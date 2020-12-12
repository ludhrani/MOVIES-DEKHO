<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    body {
      background-color: orange;
      color: black;
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
        padding-left: 50px;
        font-size: 1.5em;
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
    .container-fluid{
      padding: 40px;
    }
  </style>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST)) {
        $username = $_POST['username'];
        $name = $_POST['name'];
        $seats = $_POST['seats'];
        $seatsinfo = $_POST['seatsinfo'];
        
    }
    echo "<div class='container-fluid ticket print-container'>";
    echo "<h3><b><u><center>E-TICKET</center></u></b></h3>";
    echo '<center><span class="fa fa-star "></span>
               <span class="fa fa-star "></span>
               <span class="fa fa-star "></span>
               <span class="fa fa-star"></span>
               <span class="fa fa-star"></center></span>';
    echo "<br><b>Name</b> :- " . $username . "<br><br>";
    echo "<b>Movie Name</b> :- " . $name . "<br><br>";
    echo "<b>No Of Seats</b> :- " . $seats . "<br><br>";
    echo "<b>Seat No's</b> :- " . $seatsinfo . "<br><br>";
    echo "<center><u>Booked On Movies Dekho</u></center><br>";
    echo "<center><h3><b><u>THANKYOU FOR BOOKING</u></b></h3></center><br>";
    echo "<b>Terms of cancellation are as follows:</b><br>
    Transaction can be cancelled only after 10 minutes of booking the ticket<br>
    No cancellation will be allowed within 20 minutes and movie start time<br>
    For tickets cancelled 2 hours before show start time, 75% of ticket value and 100% of value will be refunded<br>
    For tickets cancelled from 20 mins to 2 hours before show start time, 50% of ticket value, 100% of F&B value will be refunded<br>
    In case of F&B booking (without ticket) through any mode, there is no cancellation available.<br>
    No partial cancellation is allowed. The patron will have to cancel the complete transaction.<br><br><br>";
    echo "<a href='confirm.php'><button class='btn btn-success' id='print'>Back</button></a>";
    echo "<button class='btn btn-danger' id='print' style='margin-left:30px' onclick='window.print()' >Ptint Ticket</button><br><br>";
    echo "</div><br><br>";
}
?>