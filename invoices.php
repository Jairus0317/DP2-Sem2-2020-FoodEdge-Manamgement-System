<?php
include('Config.php');
$total = 0;
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

	<title>Buffet Menu</title>
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
				<h1>Invoices</h1>
				<div id="invoicePage">

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
							<div id="ReceiptP">
								<?php
								echo '<em> Invoice No : ' . $value . ' </em>';
								?>
								<?php
								$valueBefore = $value
								?>
							</div>

							<div id="invoiceShow" desc="displayInvoice">
								<!--Display customer's details-->
								<?php
								$query = 'Select * from checkout Where id=' . $value;
								$results = mysqli_query($mysqli, $query);
								while ($row = mysqli_fetch_assoc($results)) {
								?>
									<table class="tableTransaction">
										<tr>
											<th>Name </th>
											<th>Email </th>
											<th>Phone Number</th>
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
											<th>Date of Event</th>
											<th>Serving Time</th>
											<th>Address</th>
											<th>City</th>
											<th>State</th>
											<th>Zip</th>
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
								<?php
								$query = 'Select * from transaction Where checkout_id=' . $value;
								$results = mysqli_query($mysqli, $query);
								while ($row = mysqli_fetch_assoc($results)) {
								?>
									<table class="tableTransaction">
										<tr>
											<th>Name </th>
											<th>Price per item </th>
											<th>No of Pax </th>
											<th>Total Price per Menu</th>
										</tr>
										<tr>
											<td><?php echo $row['name'] ?></td>
											<td>RM<?php echo $row['price'] ?></td>
											<td><?php echo $row['quantity'] ?></td>
											<td>RM<?php echo $row['totalPrice'] ?></td>
										</tr>
									</table>
								<?php
									$total = $total + ($row["quantity"] * $row["price"]);
								}
								?>

								<p id="DisplayTotal"><strong> Total : RM
										<?php
										echo $total;
										?> </strong> <a class="btn buttonOutline text-center" onClick="print_this('invoiceShow')">Print This</a></p>
							</div>
					<?php
						}
					}
					?>

				</div>
			</div>
		</div>
	</div>

	<?php require_once("component/footer.php"); ?>


</body>

<script>
	window.print_this = function(id) {
		var prtContent = document.getElementById(id);
		var WinPrint = window.open('', '', 'left=0,top=0,width=800,height=900,toolbar=0,scrollbars=0,status=0');
		WinPrint.document.write('<link rel="stylesheet" type="text/css" href="style/style.css">');
		WinPrint.document.write(prtContent.innerHTML);
		WinPrint.document.close();
		WinPrint.setTimeout(function() {
			WinPrint.focus();
			WinPrint.print();
			WinPrint.close();
		}, 1000);
	}
</script>


</html>