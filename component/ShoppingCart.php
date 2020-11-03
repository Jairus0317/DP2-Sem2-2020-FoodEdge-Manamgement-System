<<<<<<< Updated upstream


<div class="ShoppingCartIcon">
	<input type="image" src="images/ShoppingCart.png" width="4%" data-toggle="modal" data-target="#ShoppingCartModal"></input>
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
</div>


=======
>>>>>>> Stashed changes
<!-- The Modal -->
<div class="modal fade" id="ShoppingCartModal">
	<div class="modal-dialog modal-lg modal-dialog-centered">
		<div class="modal-content">

<!-- Modal Header -->
			<div class="modal-header">
				<h4 class="modal-title">Shopping Cart</h4>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>

<!-- Modal body -->
			<div class="modal-body">
				<table class="table table-bordered">  
  
						<?php   
							if(!empty($_SESSION["ShoppingCart"]))  
							{
						?>
								<tr>  
									<th width="40%">Item Name</th>  
									<th width="10%">Pax</th>  
									<th width="20%">Price</th>  
									<th width="15%">Total</th>  
									<th width="5%">Action</th>  
								</tr>

						<?php   
								$total = 0;  
								
								foreach($_SESSION["ShoppingCart"] as $keys => $values)  
								{  
						?>
									<tr>  
										<td><?php echo $values["ItemName"]; ?></td>  
										<td><?php echo $values["ItemQuantity"]; ?></td>  
										<td>RM <?php echo number_format($values["ItemPrice"], 2); ?></td>  
										<td>RM <?php echo number_format($values["ItemQuantity"] * $values["ItemPrice"], 2); ?></td>  
										<td><a href="BuffetMenu.php?action=delete&id=<?php echo $values["ItemID"]; ?>"><span class="text-danger">Remove</span></a></td>  
									</tr>  

						<?php  
									$total = $total + ($values["ItemQuantity"] * $values["ItemPrice"]);  
								}  
						?>  

						<tr>  
							<td colspan="3" align="right">Total</td>  
							<td align="right">RM <?php echo number_format($total, 2); ?></td>  
							<td></td>  
						</tr>

						<?php  
							}  

							else
							{
								echo "Its Empty";
							}
						?>  
				</table> 								
			</div>

<!-- Modal footer -->
			<div class="modal-footer">
<<<<<<< Updated upstream
				<a href="payment.php"> Check Out </button>
=======
				<a href="payment.php"> Check Out </a>
>>>>>>> Stashed changes
			</div>

		</div>
	</div>
</div>