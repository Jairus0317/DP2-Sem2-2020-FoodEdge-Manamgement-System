<!DOCTYPE html>
<html lang="en">
<!--Description: About Us-->
<!--Author: Wong Xiu Jie-->
<!--Date: 16 October 2020-->
<!--Validated: -->
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="Cache-control" content="no-cache">
        <!--Bootstrap CDN-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <!--FontAwesome CDN-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

        <link rel="stylesheet" href="style/style.css">
        <title>About Page</title>
    </head>

    <body>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

          <div class="row my-row FeatureBanner justify-content-center" >
			<h1>About us</h1>
		</div>

        <!--div class="about us table"-->
        <div class = "about">
            <div class = "row">
                <div class = "col-sm-12 col-md-12 col-lg-12">
                    <table class="table table-striped">
                        <tr>
                            <td scope="col"><img class = "img-fluid" src = "images/Homepage/logo.png" alt = "FoodEdge Gourmet Logo" ></td>
                            <td scope="col">FoodEdge Gourmet Catering focuses on food and beverage catering services for corporate, seminar, weddings and any events in Kuching for nearly 5 years. </td>
                        </tr>
                        <tr>
                            <td scope="col">Their aim is to deliver outstanding service with a commitment to quality, safety and health whether in the workplace, schools and colleges, hospitals, at leisure, on the move or in remote environment.</td>
                            <td scope="col"><img class = "img-fluid" src = "images/Homepage/wedding.jpg" alt = "Wedding image" ></td>
                             <!--image adapted from:https://www.google.com/search?hl=en-MY&sxsrf=ALeKk01hkNh1oSqPjvnLT212FtpOqp5QuQ:1602815608547&q=catering+services&tbm=isch&source=iu&ictx=1&tbs=simg:CAEStwIJJaorCVd6eaYaqwILELCMpwgaYgpgCAMSKKUWpBafFqAWnhazC8QXtAuiFr4LgynMKc4qnye6KZIiqyeoJ7wpyioaMLZ7-lpS2Wpg-_1wdlLR11-qmrc9ipc_13-MCAzhrJSwucsPxopYeVR3bNxRRn1Gku1CAEDAsQjq7-CBoKCggIARIE6WZY7wwLEJ3twQkaowEKGwoIcGFuZm9ydGXapYj2AwsKCS9tLzA3M3ZkOAoZCgZ0aWZmaW7apYj2AwsKCS9tLzBncGcydwogCg1zbcO2cmfDpXNib3Jk2qWI9gMLCgkvbS8wMWNzZG4KJgoTdGhhbmtzZ2l2aW5nIGRpbm5lctqliPYDCwoJL20vMDhuM3ltCh8KC3NhdGF5IGNlbHVw2qWI9gMMCgovbS8wMnFjZHgxDA&fir=plLTZBwTXqg2jM%252Cq5iz5bbRXJDzPM%252C_&vet=1&usg=AI4_-kQMd2lWpvnmqlEXTe11yvvi0lnEJw&sa=X&ved=2ahUKEwjh7vK3ibjsAhUb8HMBHYULDGAQ9QF6BAgREAQ&biw=958&bih=969-->

                        </tr>
                        <tr>
                            <td scope="col"><img class = "img-fluid" src = "images/Homepage/Service1_BuffetCatering1.jpg" alt = "Buffet Catering image" ></td>
					        <!--image from: https://static.asiawebdirect.com/m/kl/portals/kuala-lumpur-ws/homepage/putrajaya/putrajaya-dining/pagePropertiesImage/putrajaya-dining.jpg.jpg-->
                            <td scope="col">FoodEdge Gourmet Catering provide Buffet Catering which present different country's food for guest to have a perfect meal time. </td>
                        </tr>
                        <tr>
                            <td scope="col">FoodEdge Gourmet Catering provide Chinese Banquet to present the traditional Chinese food from China.</td>
                            <td scope="col"><img class = "img-fluid" src = "images/Homepage/Service2_ChineseBanquet1.jpg" alt = "Chinese Banquet image" ></td>
                            <!--image from: https://www.thechairmansbao.com/wp-content/uploads/2017/11/Chinese-Wedding-Banquet-Spread.jpg-->
                        </tr>               
                        <tr>
                            <td scope="col"><img class = "img-fluid" src = "images/CateringServicesPage/Service3_HawkerStallStyle.jpg" alt = "Hawker stall style image" ></td>
                            <!--image from: https://www.bigonioncaterer.com.my/wp-content/uploads/2020/01/Hawker-Stall-2-1024x683-1.jpg-->
                            <td scope="col">Hawker Stall Style is present by FoodEdge Gourmet.Hawker Stall Style present the local food of Malaysia to let the guest taste the Malaysia typical food. </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>



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
</html>
