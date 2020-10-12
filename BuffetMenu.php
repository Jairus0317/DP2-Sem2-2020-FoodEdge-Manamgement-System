<?php
	//Database configuration
	include "Config.php";

	//Start session
	session_start();

	if(isset($_POST["AddToCart"]))
	{

		if(isset($_SESSION["ShoppingCart"]))
		{
			$ItemArrayID = array_column($_SESSION["ShoppingCart"], "ItemID");

			if(!in_array($_POST["ItemID"], $ItemArrayID))
			{
				$Count = count($_SESSION["ShoppingCart"]);
				$ItemArray	= array(
					'ItemID' => $_POST["ItemID"],
					'ItemName' => $_POST["HiddenName"],
					'ItemPrice' => $_POST["HiddenPrice"],
					'ItemQuantity' => $_POST["Quantity"]
	
				);
				$_SESSION["ShoppingCart"][$Count] = $ItemArray;
			}

			else
			{
				echo '<script>alert("Item Already Added")</script>';
				//echo '<script>window.location="BuffetMenu.php"</script>';

			}
		}

		else
		{
			$ItemArray	= array(
				'ItemID' => $_POST["ItemID"],
				'ItemName' => $_POST["HiddenName"],
				'ItemPrice' => $_POST["HiddenPrice"],
				'ItemQuantity' => $_POST["Quantity"]
			);
			$_SESSION["ShoppingCart"][0] = $ItemArray;
		}
	}

	if(isset($_GET["action"]))  
	{  
		 if($_GET["action"] == "delete")  
		 {  
			  foreach($_SESSION["ShoppingCart"] as $keys => $values)  
			  {  
				   if($values["ItemID"] == $_GET["id"])  
				   {  
						unset($_SESSION["ShoppingCart"][$keys]);  
						echo '<script>alert("Item Removed")</script>';  
						echo '<script>window.location="BuffetMenu.php"</script>';  
				   }  
			  }  
		 }  
	}  

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
	<title>Buffet Menu</title>
</head>

<body>
	
	<div class = "container-fluid my-container">

		<div class="row my-row FeatureBanner justify-content-center" >
			<h1>Catering Menu</h1>
		</div>

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

		<div class="row my-row justify-content-center" >
			<ul class="menuPageNavi">
				<li><a href="index.php">Home</a></li>
				<li><a href="CateringServices.php">Catering Services</a></li>
				<li><a href="BuffetMenu.php">Buffet menu</a></li>
			</ul>
		</div>

		<div class="row my-row justify-content-center" >
			<h2>Buffet Menu</h2>
		</div>

		<div class = "row justify-content-center my-row">

			<?php
				$sql = "SELECT * FROM menu WHERE Category='Buffet' ORDER BY ID";
				
				$result = $mysqli -> query($sql);

				if ($result->num_rows > 0) {
					// output data of each row
					while($row = $result->fetch_assoc()) {
			?>
							<div class="card shadow">
								<img class="card-img-top" src="images/<?php echo $row['Image'] ?>" alt="Card image cap">
								<div class="card-body">
									<h5 class="card-title"><?php echo $row['Name']?></h5>
									<p class="card-text">RM <?php echo number_format($row['Price'],2) ?>/pax</p>

									<!-- The Modal -->
									<div class="modal fade" id="myModal_<?php echo $row['ID']?>">
										<div class="modal-dialog modal-lg modal-dialog-centered">
											<div class="modal-content">

												<!-- Modal Header -->
												<div class="modal-header">
													<h4 class="modal-title"><?php echo $row['Name']?></h4>
													<button type="button" class="close" data-dismiss="modal">&times;</button>
												</div>

												<!-- Modal body -->
												<div class="modal-body">
													<div class="container">
														<div class="row">
															<div class="col-md-6 modalMenu my-col">
																<img src="images/<?php echo $row['Image']?>">
															</div>

															<div class="col-md-6 my-col">
																<h5><?php echo $row['Name']?></h5>
																<p>RM <?php echo number_format($row['Price'],2)?>/pax</p>
																<p>Menu Detail:</p>
																<p><?php echo $row['Items']?></p>
																<p>Availability:</p>
															</div>
														</div>
													</div>
												</div>

												<!-- Modal footer -->
												<div class="modal-footer AddToCart">
															<form method="post" action="BuffetMenu.php">
																<input type="hidden" name="HiddenName" value="<?php echo $row["Category"]; echo " - "; echo $row["Name"]; ?>"> 
																<input type="hidden" name="HiddenPrice" value="<?php echo $row["Price"]; ?>">

																<div class ="row justify-content-end">
																	<div class ="col col-md-6 px-0">
																		<span>Number of pax:</span>
																		<button type="button" id="ButtonMinus" class="btn bg-light border rounded-circle" data-quantity="minus" data-field="quantity"><i class="fa fa-minus"></i></button>
																		<input type="number" name="Quantity" class="form-control input-group-field d-inline" value="1">
																		<button type="button" id="ButtonAdd" class="btn bg-light border rounded-circle" data-quantity="plus" data-field="quantity"><i class="fa fa-plus"></i></button>

																		<script>
																			let ButtonPlus = document.querySelector('#ButtonAdd');
																			let ButtonMinus = document.querySelector('#ButtonMinus');
																			let QuantityInput = document.querySelector('input[name=Quantity]');

																			ButtonPlus.addEventListener('click', () => {
																				QuantityInput.value = parseInt(QuantityInput.value) + 1;
																			});

																			
																			ButtonMinus.addEventListener('click', () => {
																				QuantityInput.value = parseInt(QuantityInput.value) - 1;
																			});



																		</script>

																	</div>
																	<div class ="col col-md-4 px-0">
																		<button type="submit" name="AddToCart" class="btn btn-success"> Add To Cart <i class="fa fa-shopping-cart"></i></button>
																		<input type='hidden' name='ItemID' value='<?php echo $row['ID']?>'>
																	</div>
																</div>
															</form>
												</div>

											</div>
										</div>
									</div>

									<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal_<?php echo $row['ID']?>">Get Detail</button>
									
								</div>
							</div>

			<?php
					}
				}
			?>


		</div>
	</div>

	
	<?php
			include "ShoppingCart.php";
	?>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	
</body>

</html>