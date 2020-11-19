<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
body {
  background-image: url("pasabuy.jpg");
  background-repeat: no-repeat;
  background-size: cover;
}
a {
  text-decoration: none;
   margin: 20px 0 0 0;
}

.-btn {
  display: flex;
  justify-content: center;
  align-items: center;
  width: 216px;
  height: 56px;
  text-align: center;
  border-radius: 12px;
}

.-btn:hover {
  opacity: .8;
}

.-bg {
  background: #1c449b;
}

.-txt {
  color: #fff;
}
    </style>
</head>
<body>
    <div class="page-header">
        <h1>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to PasaBuy</h1>
    </div>
    <p>
        <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a><br>
		
        <a href="Front.php" class="btn -bg -txt">Shop Now</a></br>
		
		<a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a>
    </p>
</body>
</html>