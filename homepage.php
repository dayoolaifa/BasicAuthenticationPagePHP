<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
	header('Location: login.php');
	exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Home Page</a>
    </div>
    <div class="navbar-header">
      <a class="navbar-brand" href="logout.php">Logout</a>
    </div>
    <ul class="nav navbar-nav">
    </ul>
  </div>
</nav>
  
<div class="container">
  <h3>Welcome to Basic Authentication Page</h3>
  <p>There's really nothing to see here. You can logout .</p>
</div>

</body>
</html>


