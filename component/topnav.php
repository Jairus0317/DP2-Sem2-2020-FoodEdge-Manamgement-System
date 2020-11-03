<header>
	<nav class="navbar navbar-expand-sm navbar-dark justify-content-between">
		<ul class="navbar-nav">
<<<<<<< Updated upstream
			<a class="navbar-brand" href="#">
=======
			<a class="navbar-brand" href="index.p">
>>>>>>> Stashed changes
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

<<<<<<< Updated upstream
        <a href="login.php" class="btn btn-primary"><i class="fa fa-sign-in"></i> Login</a>
=======
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
			
			<?php include "component/ShoppingCart.php";?>

		<a href="login.php" class="btn btn-primary"><i class="fa fa-sign-in"></i> Login</a>
		</div>

>>>>>>> Stashed changes

	</nav>
</header>