<!DOCTYPE html>
<html lang="en">
<!--Description: Home Page-->
<!--Author: Wong Xiu Jie-->
<!--Date: 28 September 2020-->
<!--Validated: -->
<head>
	<meta charset="UTF-8">
	<!--Bootstrap CDN-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.7.0/css/bootstrap.min.css">
	<!--FontAwesome CDN-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/styleh.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>FoodEdge Gourmet</title>
</head>
<!--navigation bar-->
<body>
<div class="header">
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="index.php"><img class="home" src="images/homeimage/logo.png" alt="Home Page"/></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php">Home</a></li>
        <li><a href="AboutPage.php">About Us</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="CateringServices.php">Catering Services<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="BuffetMenu.php">Buffet Menu</a></li>
            <li><a href="CateringServices.php">Chinese Banquet</a></li>
            <li><a href="CateringServices.php">Hawker Stall Style</a></li>
          </ul>
        </li>
        <li><a href="#">Contact Us</a></li>
        <li><a href="feedback.php">FeedBack</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>
</div>
<!-- slide show-->
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

  <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="images/homeimage/Slide1.jpg" alt="Slide 1" style="width:100%;">
        <!--image from:https://unsplash.com/photos/SiwrpBnxDww-->
      </div>

      <div class="item">
        <img src="images/homeimage/Slide2.jpg" alt="Slide 2" style="width:100%;">
         <!--image from:https://unsplash.com/photos/IJuze-KdTFk-->
      </div>
    
      <div class="item">
        <img src="images/homeimage/Slide3.jpg" alt="Slide 3" style="width:100%;">
         <!--image from:https://pixabay.com/photos/restaurant-table-setting-decoration-2697945/-->
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

<div class = "row">
<div class = "col-sm-12 col-md-12 col-lg-12">
<div class="content">
			<h1>GREAT PEOPLE + GREAT FOOD</h1>
			<p>We offer a wide range of catering services, from company party, school party to wedding.</p>
			<p>Browse our sample menus for mouth-watering ideas for your next event.</p>
</div>
</div>
</div>
<div class="desc">
    <div class="row">
        <div class="col-sm-4 col-md-4 col-lg-4">
            <div class="bc_d">
            <img src="images/homeimage/Service1_BuffetCatering1.jpg" alt="BuffetCatering">
            <!--image from: https://static.asiawebdirect.com/m/kl/portals/kuala-lumpur-ws/homepage/putrajaya/putrajaya-dining/pagePropertiesImage/putrajaya-dining.jpg.jpg-->
                <div class="overlay1">
                    <div class="text">
                        <img src="images/homeimage/Service1_BuffetCatering.jpg" alt="Buffet Catering"/>
                    </div>
                    <!--image from: https://static.asiawebdirect.com/m/kl/portals/kuala-lumpur-ws/homepage/putrajaya/putrajaya-dining/pagePropertiesImage/putrajaya-dining.jpg.jpg-->   
                </div>
            </div>
        </div>    
        <div class="col-sm-4 col-md-4 col-lg-4">
            <div class="cb_d">
            <img src="images/homeimage/Service2_ChineseBanquet1.jpg" alt="BuffetCatering">
            <!--image from: https://www.thechairmansbao.com/wp-content/uploads/2017/11/Chinese-Wedding-Banquet-Spread.jpg-->    
                <div class="overlay2">
                    <div class="text"><img src="images/homeimage/Service2_ChineseBanquet.jpg" alt="Chinese Banquet"/></div>
                        <!--image from: https://www.thechairmansbao.com/wp-content/uploads/2017/11/Chinese-Wedding-Banquet-Spread.jpg-->    
                </div>
            </div>
        </div>
        <div class="col-sm-4 col-md-4 col-lg-4">
            <div class="hss_d">
            <img src="images/homeimage/Service3_HawkerStallStyle1.jpg" alt="BuffetCatering"/>
            <!--image from: https://www.bigonioncaterer.com.my/wp-content/uploads/2020/01/Hawker-Stall-2-1024x683-1.jpg-->
                <div class="overlay3">
                    <div class="text">
                        <img src="images/homeimage/Service3_HawkerStallStyle.jpg" alt="Hawker Stall Style"/>
                    </div>
                    <!--image from: https://www.bigonioncaterer.com.my/wp-content/uploads/2020/01/Hawker-Stall-2-1024x683-1.jpg-->
                </div>
            </div>
        </div>
    </div>
</div>
<!--table-->
<div class="wedding">
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12">
            <table class="table table-striped">
                <tr>
                    <th scope="col">Wedding</th>
                    <td rowspan="3"><img class = "img-fluid" src = "images/homeimage/wedding.jpg" alt = "Wedding image" ></td>
                    <!--image adapted from:https://www.google.com/search?hl=en-MY&sxsrf=ALeKk01hkNh1oSqPjvnLT212FtpOqp5QuQ:1602815608547&q=catering+services&tbm=isch&source=iu&ictx=1&tbs=simg:CAEStwIJJaorCVd6eaYaqwILELCMpwgaYgpgCAMSKKUWpBafFqAWnhazC8QXtAuiFr4LgynMKc4qnye6KZIiqyeoJ7wpyioaMLZ7-lpS2Wpg-_1wdlLR11-qmrc9ipc_13-MCAzhrJSwucsPxopYeVR3bNxRRn1Gku1CAEDAsQjq7-CBoKCggIARIE6WZY7wwLEJ3twQkaowEKGwoIcGFuZm9ydGXapYj2AwsKCS9tLzA3M3ZkOAoZCgZ0aWZmaW7apYj2AwsKCS9tLzBncGcydwogCg1zbcO2cmfDpXNib3Jk2qWI9gMLCgkvbS8wMWNzZG4KJgoTdGhhbmtzZ2l2aW5nIGRpbm5lctqliPYDCwoJL20vMDhuM3ltCh8KC3NhdGF5IGNlbHVw2qWI9gMMCgovbS8wMnFjZHgxDA&fir=plLTZBwTXqg2jM%252Cq5iz5bbRXJDzPM%252C_&vet=1&usg=AI4_-kQMd2lWpvnmqlEXTe11yvvi0lnEJw&sa=X&ved=2ahUKEwjh7vK3ibjsAhUb8HMBHYULDGAQ9QF6BAgREAQ&biw=958&bih=969-->

                </tr>
                <tr>	
                    <td>From simple to custom</td>
                </tr>
                <tr>
                    <td>FoodEdge Gourmet provides full-service wedding catering for your special day. We created two wedding packages to make planning your wedding easier than ever. We guide you through curating the perfect menu for you and your guests. Should you need help with cocktails, desserts, or other aspects of planning your wedding reception, we are a quick phone call away! We are always happy to be of service.</td>
                </tr>

                <tr>
                    <td rowspan="3"><img class = "img-fluid" src = "images/homeimage/birthday.jpg" alt = "Birthday party image" ></td>
                <!--image adapted from:https://www.facebook.com/TakaPatisserie/photos/a.792523914560710/792523974560704-->
                    <th scope="col">Birthday</th>

                </tr>
                <tr>	
                    <td>From simple to custom</td>
                </tr>
                <tr>
                    <td>FoodEdge Gourmet provides full-service birthday catering for your special day. We created a few birthday packages to make planning your birthday party easier than ever. We guide you through curating the perfect menu for you and your guests. Should you need help with decoration, desserts, or other aspects of planning your birthday reception, we are a quick phone call away! We are always happy to be of service.</td>
                </tr>

            </table>
        </div>
    </div>
</div>
<!-- Footer -->

		<footer class="footer">
		<div class="row">
			<div class="col-sm-4 col-md-4 col-lg-4">
			<h1>Sitemap</h1>
				<li><a href="index.php">Home</a></li>
                <li><a href="aboutpage.php">About Page</a></li>
                <li><a href="CateringServices.php">Catering Services</a></li>                
			</div>
            <div class="col-sm-4 col-md-4 col-lg-4">
			<h1>Catering Services</h1>
				<li><a href="BuffetMenu.php">Buffet Catering</a></li>
                <li><a href="CateringServices.php">Chinese Banquet</a></li>
                <li><a href="CateringServices.php">Hawker Stall Style</a></li>                
			</div>
			<div class="col-sm-4 col-md-4 col-lg-4">
			<h1>Contact Us</h1>
				<li><img src="images/homeimage/call.png" alt="Telephone icon" class="icons" title=" CALL US: 082-345678"/>082-345678</li>
                <!--image adapted from:https://icons8.com/icons/set/phone-->
                <li><img src="images/homeimage/map.png" alt="Map icon" class="icons" title="Address: Lot 10, Jalan Simpang Tiga, 93300, Kuching, Sarawak, Malaysia"/>Lot 10, Jalan Simpang Tiga, 93300, Kuching, Sarawak, Malaysia</li>
                <!--image adapted from:https://icons8.com/icons/set/map-->
			</div>
		</div>

        <hr class="hr">
			<p id="copyright">&#169; i-Tapp | Page developed by: Wong Xiu Jie | Last modified: 6 October 2020
			</p>
			
			<!--back to top arrow-->
			<p>
				<a data-scroll="scroll" href="#top" class="arrow">
					<img src="images/homeimage/scroll_top.png" alt="Picture of Arrow" class="arrow"/>
					<!--image adapted from:https://www.google.com/url?sa=i&rct=j&q=&esrc=s&source=images&cd=&ved=0ahUKEwiVhJ3AnPXQAhUBsJQKHdOIDgMQjBwIBA&url=http%3A%2F%2Fwww.szegedilmbt.hu%2Fimages%2Ficon_top.png&psig=AFQjCNHLDL9_JxzFvRbILXqPXqNzYOS9Og&ust=1481857766253674-->
				</a>
		</footer>
</body>
</html>
