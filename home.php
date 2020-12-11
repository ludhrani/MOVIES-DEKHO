<?php
include 'nav_active.php';
include 'dbhelper.php';
error_reporting(0);
$ans = "";
$result = $con->query("select * from movie");
if ($result->num_rows > 0) {
  // output data of each row

  $ans = $ans . "<div class='container'>";
  $ans = $ans . "<center><h2><b><u>NOW SHOWING</u></b></h2></center><br>";
  $ans = $ans . "<table class='table'>";
  $ans = $ans . "<tbody>";

  while ($row = $result->fetch_assoc()) { //echo "<pre>";
    //print_r($row);
    $ans = $ans . "<tr>";
    $id = $row['id'];
    $src = '"https://www.interserver.net/tips/wp-content/uploads/2016/10/404error.jpeg"';
    $ans = $ans . "<td><img width='120px' height='180px' src='" . $row['image'] . "' onerror='this.src=" . $src . "' alt=''></td>" . "<td>" . $row['name'] . "</td>" . "<td>" . $row['start'] . '-' . $row['end'] . "</td>" . "<td>₹" . $row['price'] . "</td>";
    $ans = $ans . "<td><button class='btn btn-success' onclick=";
    $ans = $ans . '"';
    $ans = $ans . "window.location.href='book.php?id=" . $id . "'";
    $ans = $ans . '">';
    $ans = $ans . "Book Now</button></td>";
    $ans = $ans . "</tr>";
  }
  $ans = $ans . "</tbody></table></div>";
}
echo $ans;
?>
<?php
include 'footer.php';
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
<script src="https://kit.fontawesome.com/a076d05399.js"></script>