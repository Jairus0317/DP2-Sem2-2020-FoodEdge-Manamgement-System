<!DOCTYPE html>
<html>

<head>
	<meta http-equiv="Cache-control" content="no-cache">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" href="style/style.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>

<body>

	<div class = "container-fluid my-container">

		<div class="row my-row FeatureBanner justify-content-center" >
				<h1>Catering Services</h1>
		</div>

		<div class="row my-row justify-content-center" >
			<ul class="menuPageNavi">
				<li><a href="index.php">Home</a></li>
				<li><a href="CateringServices.php">Catering Services</a></li>
			</ul>

			
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
		</div>


		<div class = "row justify-content-center my-row">
			<div class="col-xl-3 col-lg-5 col-md-6 my-col ServicesCard">
				<a href="BuffetMenu.php">
					<!--image from: https://static.asiawebdirect.com/m/kl/portals/kuala-lumpur-ws/homepage/putrajaya/putrajaya-dining/pagePropertiesImage/putrajaya-dining.jpg.jpg-->
					<img class="img-fluid" src = "images/Service_BuffetCatering.jpg">
				</a>
				<p>Buffet Catering</p>
			</div>
	
			<div class="col-xl-3 col-lg-5 col-md-6 my-col ServicesCard">
				<a href="">
					<!--image from: https://www.thechairmansbao.com/wp-content/uploads/2017/11/Chinese-Wedding-Banquet-Spread.jpg-->
					<img class="img-fluid" src = "images/Service2_ChineseBanquet.jpg">
				</a>
				<p>Chinese Banquet</p>
			</div>
		</div>

		
		<div class = "row justify-content-center my-row">
			<div class="col-xl-3 col-lg-5 col-md-6 my-col ServicesCard">
				<a href="">
					<!--image from: https://www.bigonioncaterer.com.my/wp-content/uploads/2020/01/Hawker-Stall-2-1024x683-1.jpg-->
					<img class="img-fluid" src = "images/Service3_HawkerStallStyle.jpg">
				</a>
				<p>Hawker Stall Style</p>
			</div>
		</div>

	</div>



	
	
</body>

</html>