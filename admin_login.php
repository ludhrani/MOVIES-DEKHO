
<head>
  <title>ADMIN LOGIN</title>
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
    <h1><b><a class="navbar-brand" style="padding-top: 11px; font-size:35px" href="#"><b>MOVIES DEKHO ADMINISTRATION</b></a></b></h1>
  </div>
</nav>

<div style="width: 400px;height:300px;background-color: #f3f3f3;padding: 20px;align-items: center;border-radius: 5px;margin-left: 350px;">
	<form action="admin.php" method="post">
	    <div class="form-group">
	        <label>Admin</label>
	        <input type="name" class="form-control" name="admin"  required  placeholder="Admin">
	    </div>
	    <div class="form-group">
	        <label>Password</label>
	        <input type="password" class="form-control" name="password" required placeholder="Password">
	    </div>
      <button class="btn btn-info" type="submit">Login</button><br><br>
      <center><a href="signin.php">Login As User!!</a></center>
	</form>
</div>
</body>