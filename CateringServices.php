<<<<<<< Updated upstream
<?php

	//Start session
	session_start();
?>

=======
>>>>>>> Stashed changes
<!DOCTYPE html>
<html>

<head>
	<meta http-equiv="Cache-control" content="no-cache">
<<<<<<< Updated upstream
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" href="style/style.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
=======
	<!--Bootstrap CDN-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<!--FontAwesome CDN-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link rel="stylesheet" href="style/style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<!--Google Translate-->
	<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
>>>>>>> Stashed changes

</head>

<body>
<<<<<<< Updated upstream

	<div class = "container-fluid my-container">

		<div class="row my-row FeatureBanner CateringBanner justify-content-center" >
				<h1>Catering Services</h1>
		</div>
=======
	<?php require_once ("component/topnav.php"); ?>

	<div class = "container-fluid my-container my-5">
>>>>>>> Stashed changes

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
<<<<<<< Updated upstream
			<div class="col-xl-3 col-lg-5 col-md-6 my-col ServicesCard">
=======
			<div class="col-3 ServicesCard p-0">
>>>>>>> Stashed changes
				<a href="BuffetMenu.php">
					<!--image from: https://static.asiawebdirect.com/m/kl/portals/kuala-lumpur-ws/homepage/putrajaya/putrajaya-dining/pagePropertiesImage/putrajaya-dining.jpg.jpg-->
					<img class="img-fluid" src = "images/CateringServicesPage/Service1_BuffetCatering.jpg">
				</a>
<<<<<<< Updated upstream
				<p>Buffet Catering</p>
			</div>
	
			<div class="col-xl-3 col-lg-5 col-md-6 my-col ServicesCard">
				<a href="">
					<!--image from: https://www.thechairmansbao.com/wp-content/uploads/2017/11/Chinese-Wedding-Banquet-Spread.jpg-->
					<img class="img-fluid" src = "images/CateringServicesPage/Service2_ChineseBanquet.jpg">
				</a>
				<p>Chinese Banquet</p>
=======
				<a class="overlay" href="BuffetMenu.php" title="Buffet Catering">
					<span>Buffet Catering</span>
				</a>
			</div>
	
			<div class="col-3 ServicesCard p-0">
				<a href="ChineseBanquetMenu.php">
					<!--image from: https://www.thechairmansbao.com/wp-content/uploads/2017/11/Chinese-Wedding-Banquet-Spread.jpg-->
					<img class="img-fluid" src = "images/CateringServicesPage/Service2_ChineseBanquet.jpg">
				</a>
				<a class="overlay" href="ChineseBanquetMenu.php" class="icon" title="Chinese Banquet">
					<span>Chinese Banquet</span>
				</a>
>>>>>>> Stashed changes
			</div>
		</div>

		
		<div class = "row justify-content-center my-row">
<<<<<<< Updated upstream
			<div class="col-xl-3 col-lg-5 col-md-6 my-col ServicesCard">
				<a href="">
					<!--image from: https://www.bigonioncaterer.com.my/wp-content/uploads/2020/01/Hawker-Stall-2-1024x683-1.jpg-->
					<img class="img-fluid" src = "images/CateringServicesPage/Service3_HawkerStallStyle.jpg">
				</a>
				<p>Hawker Stall Style</p>
			</div>
		</div>

		<?php
			include "component/ShoppingCart.php";
		?>
=======
			<div class="col-3 ServicesCard p-0">
				<a href="HawkerStallMenu.php">
					<!--image from: https://www.bigonioncaterer.com.my/wp-content/uploads/2020/01/Hawker-Stall-2-1024x683-1.jpg-->
					<img class="img-fluid" src = "images/CateringServicesPage/Service3_HawkerStallStyle.jpg">
				</a>
				<a class="overlay" href="ChineseBanquetMenu.php" class="icon" title="Hawker Stall Style">
					<span>Hawker Stall Style</span>
				</a>
			</div>
		</div>

		<?php include "component/ShoppingCart.php"; ?>
>>>>>>> Stashed changes

	</div>


<<<<<<< Updated upstream

	
	
</body>
<script type="text/javascript">
    function googleTranslateElementInit() {
      new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.FloatPosition.TOP_LEFT}, 'google_translate_element');
    }

	function triggerHtmlEvent(element, eventName) {
	  var event;
	  if (document.createEvent) {
		event = document.createEvent('HTMLEvents');
		event.initEvent(eventName, true, true);
		element.dispatchEvent(event);
	  } else {
		event = document.createEventObject();
		event.eventType = eventName;
		element.fireEvent('on' + event.eventType, event);
	  }
	}

	jQuery('.lang-select').click(function() {
	  var theLang = jQuery(this).attr('data-lang');
	  jQuery('.goog-te-combo').val(theLang);

	  //alert(jQuery(this).attr('href'));
	  window.location = jQuery(this).attr('href');
	  location.reload();

	});
</script>
<script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
=======
	<?php require_once ("component/footer.php"); ?>

</body>
>>>>>>> Stashed changes

</html>