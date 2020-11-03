<?php
include('Config.php');
$total =0;
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
	<!--JQuery-->
	<script language="JavaScript" type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script language="JavaScript" type="text/javascript" src="script/jQuery.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

	<title>Buffet Menu</title>
</head>

<body>
	<?php require_once("component/topnav.php"); ?>

	<div class="container-fluid my-container BuffetMenuPage">

	</div>

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
				<h1>Invoices</h1>
				<p id="receiptNo">

					<?php
					$query = "select * from transaction T";
					$result = mysqli_query($mysqli, $query);
					$result_array = array();
					while ($row = mysqli_fetch_assoc($result)) {
						$result_array[] = $row['checkout_id'];
					}
					$valueBefore = '';
					foreach ($result_array as $value) {
						if ($valueBefore == $value) {
						} else {
					?>
							<p>
								<?php
								echo '<em> Receipt No : ' . $value . '<br> </em>';
								?>
								<p><a id="show" type="button" class="btn btn-outline-dark text-center">Show</a></p>
							<?php
						}
						$valueBefore = $value
							?>
							</p>

							<!--Hidden Invoice by default, shown when user click on the paragraph above-->
							<div id="invoiceShow" desc="displayInvoice" style="display: none">
								<p><a id="hide" type="button" class="btn btn-outline-dark text-center">Hide</a>
								<!-- Allow user to print the recipt -->
								<a class="btn btn-outline-dark text-center" onclick="window.print()">Print This</a></p>
								<!--Display customer's details-->
								<?php
								$query = 'Select * from checkout Where id=' . $value;
								$results = mysqli_query($mysqli, $query);
								while ($row = mysqli_fetch_assoc($results)) {
								?>
									<table class="tableTransaction">
										<tr>
											<th><strong>Name </strong></th>
											<th><strong>Email </strong></th>
											<th><strong>Phone Number </strong></th>
										</tr>
										<tr>
											<td><?php echo $row['username'] ?></td>
											<td><?php echo $row['email'] ?></td>
											<td><?php echo $row['phoneNumber'] ?></td>
										</tr>
									</table>
								<?php
								}
								?>

								<!--Display event's details-->
								<?php
								$query = 'Select * from checkout Where id=' . $value;
								$results = mysqli_query($mysqli, $query);
								while ($row = mysqli_fetch_assoc($results)) {
								?>
									<table class="tableTransaction">
										<tr>
											<th><strong>Date of Event </strong></th>
											<th><strong>Serving Time </strong></th>
											<th><strong>Address </strong></th>
											<th><strong>City </strong></th>
											<th><strong>State </strong></th>
											<th><strong>Zip </strong></th>

										</tr>
										<tr>
											<td><?php echo $row['date'] ?></td>
											<td><?php echo $row['time'] ?></td>
											<td><?php echo $row['address'] ?></td>
											<td><?php echo $row['city'] ?></td>
											<td><?php echo $row['state'] ?></td>
											<td><?php echo $row['zip'] ?></td>
										</tr>
									</table>
								<?php
								}
								?>

								<!--Display booked menu's details-->
								<table class="tableTransaction">
									<tr>
										<th><strong>Name </strong></th>
										<th><strong>Price per item </strong></th>
										<th><strong>No of Pax</strong></th>
										<th><strong>Total Price per Menu</strong></th>

									</tr>
									<?php
									$query = 'Select * from transaction Where checkout_id=' . $value;
									$results = mysqli_query($mysqli, $query);
									while ($row = mysqli_fetch_assoc($results)) {
									?>
										<tr>
											<td><?php echo $row['name'] ?></td>
											<td><?php echo $row['price'] ?></td>
											<td><?php echo $row['quantity'] ?></td>
											<td><?php echo $row['totalPrice'] ?></td>
										</tr>
								</table>
							<?php
										$total = $total + ($row["quantity"] * $row["price"]);
									}
							?>

							<p><strong> Total : RM
									<?php
									echo $total;
									?> </strong></p>
							</div>

						<?php
					}
						?>

				</p>
			</div>
		</div>
	</div>

	<?php require_once("component/footer.php"); ?>
</body>

<script>
	$("#show").on("click", function() {
		$("#invoiceShow").show();
		$("hide").show();
		$("#show").hide();
	})

	$("#hide").on("click", function() {
		$("#invoiceShow").hide();
		$("#show").show();
		$("#hide").hide();
	})
</script>

</html>