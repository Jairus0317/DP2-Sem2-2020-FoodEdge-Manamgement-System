<?php
//Database configuration
include "component/Config.php";

session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="Cache-control" content="no-cache">
	<!--Bootstrap CDN-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<!--FontAwesome CDN-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link rel="stylesheet" href="style/style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<title>Business Analytic</title>
</head>

<body>
	<?php require_once ("component/topnav.php"); ?>

	<div class = "container-fluid my-container">
		<div class="row">
			<div class="col-2 userSideBar">
				<ul>
					<li><a href="profile.php">User Profile</a></li>
					<li><a href="activeorder.php">Active Orders</a></li>
					<li><a href="invoices.php">Invoices</a></li>
					<li><a href="foodandbeverage.php">Food and Beverage Status</a></li>
					<li><a href="businessanalytic.php">Business Analytic</a></li>
				</ul>
			</div>

			<div class="col-10 analytics">
				<h1>Business Analytic</h1>

				<h2>Monthly Sales Report</h2>

				<div id="chartContainer"></div>
					  
				<h2>Visitor Counter</h2>
				<!-- Visitor counter from: https://www.freevisitorcounters.com/ -->
                <a href="https://www.freevisitorcounters.com/en/home/stats/id/762621" target="_blank"><br>
                <img src="https://www.freevisitorcounters.com/en/counter/render/762621/t/1" class="counterimg" width="150px"></a>
				</div>

		</div>
	</div>

	<?php require_once ("component/footer.php"); ?>


</body>

<!--Highlight current page link-->
<script>
	$(document).ready(function() 
	{
		$("[href]").each(function() 
		{
			if (this.href == window.location.href) 
			{
				$(this).addClass("ActiveLink");
			}
		});
	});
</script>

<!--Sales report graph script-->
<script type="text/javascript">
	window.onload = function () {
		var chart = new CanvasJS.Chart("chartContainer",
		{

			axisX:{  
				//Try Changing to MMMM
				title: "Month",						
			},
			axisY: {
				title: "RM",
			},
			data: [
			{        
				type: "line",
				lineThickness: 2,
				color: "#ff9900",
				dataPoints: [
					<?php
					$i = 1;
								
					while($i<=12){
						$sql = "Select SUM(totalPrice) AS Total FROM transaction WHERE MONTH(Date) = ". $i . " AND YEAR(Date) = YEAR(CURDATE())";

						$result = $mysqli -> query($sql);

						while($row = $result->fetch_assoc()) {

					?>

					{ x: <?php echo $i?><?php if ($row['Total'] > 0) {printf (', y: %d', $row['Total']);} ?> },

					<?php
						}
						$i++;
					}
					?>	
				]
			}]
		});

		chart.render();
	}
</script>
<script type="text/javascript" src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>


</html>