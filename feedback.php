<?php
	//Database configuration
	include "component/Config.php";

	if (isset($_POST['submit'])) {
		$name = $_POST['your_name'];
		$rating = $_POST['rating'];
		$comment = $_POST['comments'];

		$sql = "insert into 'feedback' (Name,Rating,Comment) 
		values('$name','$rating', '$comment')";

		$result = $mysqli -> query($sql);
		if($result){  
			echo "Account Successfully Created";  
			} else {  
			echo "Failure!";  }
	}
?>


<!DOCTYPE html>
<html lang="en">

<head>
	<title> Feedback</title>
	<meta charset="utf-8">
	<meta name="author" content="Eddie Liew">
	<meta name="description" content="Feedback form">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="style/style.css">
</head>

<body class="feedbackpage">
	
	<div class="bg" id="background">

		<div class="mask rgba-black-light align-items-center">
			<!-- Feedback Title -->
			<div class="container">
				<div class="row">
					<div class="col-md-12 white-text text-center">
						<h1 class="h1-reponsive white-text text-uppercase font-weight-bold mb-0 wow fadeInDown"
							data-wow-delay="0.3s"><strong>Feedback</strong></h1>
						<hr id="linee" data-wow-delay="0.4s">
					</div>
				</div>
			</div>
		</div>


		<div class="mask rgba-gradient align-items-center">
			<!-- Left table -->
			<div class="container">
				<div class="row mt-5">
					<div class="col-md-6 mb-5 mt-md-0 white-text text-center text-md-left" id="result12">

						<table id="selectedColumn" class="table table-striped table-bordered table-sm" cellspacing="0"
							width="100%">
							<thead class="thead-dark">
								<tr>
									<th class="th-sm" style="text-align: center">Customer Feedback</th>

								</tr>
							</thead>
						</table>

						<!-- moving feedback -->
						<marquee id="marquee1" scrollamount="4" direction="up" height="350px">

							<div class="col-12">
								<div class="p-3" id="reviews">

									<!--from database

													<div class="review">
														<h6><?php echo $row['CustName']; ?>, <em>Rate:</em> <?php echo $row['CustRate']; ?> star</h6>
														<p><?php echo $row['CustComments']; ?></p>
													</div>

													-->
									<?php
										$sql = "SELECT * FROM feedback ORDER BY ID";
										
										$result = $mysqli -> query($sql);

										if ($result->num_rows > 0) {
											// output data of each row
											while($row = $result->fetch_assoc()) {
									?>
												<div class="review">
													<h6><?php echo $row['Name']?>, <em>Rating: </em><?php echo $row['Rating']?> star</h6>
													<p><?php echo $row['Comment']?> <em>- Posted on: <?php echo $row['Date']?></em></p>
												</div>
									<?php
											}
										}
									?>

								</div>
							</div>
						</marquee>
					</div>

					<!-- Right feedback form -->

					<div class="col-md-6 col-xl-5 mb-4">
						<div class="card wow fadeInRight" data-wow-delay="0.3s">
							<div class="card-body">
								<form action="feedback.php" method="post">
								<!--Header-->
								<div class="text-center" id="he3">
									<h3> Tell us your experience?</h3>
									<hr class="hr-light">
								</div>
								<!--Body-->
								<div class="md-form">
									<label for="form3" id="t1" class="active">Your name</label>
									<i class="fas fa-user prefix white-text active"></i>
									<input type="text" id="form3" name="your_name" class="white-text form-control"
										required>
								</div>

								<label for="form3" id="t1" class="active">How would you rate the overall
									experience?</label>
								<div class="rating">
									<input type="radio" name="rating" value="5" id="5">
									<label for="5">☆</label>

									<input type="radio" name="rating" value="4" id="4">
									<label for="4">☆</label>

									<input type="radio" name="rating" value="3" id="3">
									<label for="3">☆</label>

									<input type="radio" name="rating" value="2" id="2">
									<label for="2">☆</label>

									<input type="radio" name="rating" value="1" id="1">
									<label for="1">☆</label>
								</div>

								<div class="md-form">
									<label for="form2" id="t1" class="active">Any comments or suggestions</label>
									<i class="fas fa-envelope prefix white-text active"></i>
									<textarea name="comments" id="form2" class="white-text form-control" rows="3"
										cols="28"></textarea>
								</div>

								<div class="text-center mt-5">
									<button type="submit" class="btn btn-primary" id="SubB" name="submit"
										value="Submit">Submit</button>
								</div>
							</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>

</html>