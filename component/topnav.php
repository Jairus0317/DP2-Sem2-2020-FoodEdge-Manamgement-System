<?php
	include "component/ShoppingCart.php";
?>

<header>
	<nav class="navbar navbar-expand-sm navbar-dark justify-content-between">
		<ul class="navbar-nav">
			<a class="navbar-brand" href="index.php">
   			 <img src="./images/logo2.png" alt="Logo" width="150px">
  			</a>
			<li class="nav-item">
			<a class="nav-link" href="AboutPage.php">About Us</a>
			</li>
			<li class="nav-item">
			<a class="nav-link" href="CateringServices.php">Catering Services</a>
			</li>
			<li class="nav-item">
			<a class="nav-link" href="contactus.php">Contact Us</a>
			</li>
			<li class="nav-item">
			<a class="nav-link" href="feedback.php">Feedback</a>
			</li>
		</ul>

		<div>
			<button type="button" data-toggle="modal" data-target="#ShoppingCartModal"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Cart
				<span class="badge badge-danger">
					<?php 
					if(isset($_SESSION["ShoppingCart"]))
					{
						echo count($_SESSION["ShoppingCart"]);
					}

					else
					{
						echo '0';
					}
					?>
				</span>
			</button>
		
		<?php 
			if(isset($_SESSION["loginuser"]))
			{
				if(strpos($_SESSION["loginuser"], 'admin') !== false)
				{
		?>
					<a href="managementteam.php" class="btn btn-primary"> Management</a>
		<?php 
				}

				elseif (strpos($_SESSION["loginuser"], 'operate') !== false)
				{
		?>
					<a href="operationteam.php" class="btn btn-primary"> Operation</a>
		<?php 
				}
				
				else
				{
		?>
					<a href="client.php" class="btn btn-primary"> Profile</a>
		<?php
				}
			}		
			else{
		?>
		
				<a href="login.php" class="btn btn-primary"><i class="fa fa-sign-in"></i> Login</a>
				
		<?php 
			}
		?>
		</div>
	</nav>
</header>
