<?php
// Initialize the session
session_start();
require_once "Component/Config.php";
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}





if($_SERVER["REQUEST_METHOD"] == "POST"){
		
	$sql = "UPDATE users SET membership = 1 WHERE id = ?";
	 if($stmt = mysqli_prepare($db, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "i",  $param_id);
            

            $param_id = $_SESSION["id"];
			
			
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                
                $success ="You have become a membership";
				echo "<script type='text/javascript'>alert('$success');</script>";

            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
	mysqli_close($db);
}

?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Profile Page</title>
  <meta charset="UTF-8">
	<meta http-equiv="Cache-control" content="no-cache">
	<!--Bootstrap CDN-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<!--FontAwesome CDN-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link rel="stylesheet" href="style/style.css">
	<!--JQuery-->
	<script language="JavaScript" type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script language="JavaScript" type="text/javascript" src="script/jQuery.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style type="text/css">
       
    </style>
</head>
<body>
<?php require_once("component/topnav.php"); ?>

	<div class="container-fluid my-container">
		<div class="row">
			<div class="col-2 managementSideBar">
				<ul>
					<li><a href="profile.php">User Profile</a></li>
					<li><a href="activeorder.php">Active Orders</a></li>
					<li><a href="invoices.php">Invoices</a></li>
					<li><a href="foodandbeverage.php">Food and Beverage Status</a></li>
					<li><a href="businessanalytics.php">Business Analytic</a></li>
				</ul>
			</div>

			<div class="col-10">
			<div class="wrapper">
			
        <h1>User Profile</h1>
	<p>Username : <?php echo htmlspecialchars($_SESSION["username"]); ?></p>
	<p>Email: </p>
	<form action="" method="post"> 
	<p><input type="submit" class="btn btn-warning" value="Subscribe to Membership" name="membership"></p>
	</form>
    <p><a href="reset-password.php" class="btn btn-warning">Reset Your Password</a></p>
	<p><a href="logout.php" class="btn btn-danger">Log out</a></p>
	</div>
	</div>
	</div>
	</div>
	<?php require_once("component/footer.php"); ?>
</body>
</html>