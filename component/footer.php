<footer>
	<ul class = "language">
		<li><p> <i class="fa fa-language" aria-hidden="true"></i> Language:</p></li>
		<li><a href="#googtrans(en|en)" class="lang-en lang-select" data-lang="en">English</a></li>
		<li><a href="#googtrans(en|ms)" class="lang-es lang-select" data-lang="MS">Malay</a></li>
		<li><a href="#googtrans(en|zh-CN)" class="lang-es lang-select" data-lang="zh-CN">Chinese</a></li>
</ul>

	<p class="copyright">Copyright © FoodEdge Gourmet Catering. All Rights Reserved.</p>
    <p>Developed by Development Project 2 - Team 6 - <a href="https://www.swinburne.edu.my/">Swinburne Sarawak</a></p>
    <ul class="sitemap">
		<li><a href="AboutPage.php">About Us</a></li>
		<li ><a href="CateringServices.php">Catering Services</a></li>
		<li ><a href="contactus.php">Contact Us</a</li>
		<li><a href="feedback.php">Feedback</a></li>
	</ul>

	<script type="text/javascript">
		function googleTranslateElementInit() 
		{
			new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.FloatPosition.TOP_LEFT}, 'google_translate_element');
		}

		function triggerHtmlEvent(element, eventName) 
		{
			var event;
			if (document.createEvent) {
				event = document.createEvent('HTMLEvents');
				event.initEvent(eventName, true, true);
				element.dispatchEvent(event);
			} 
			else {
				event = document.createEventObject();
				event.eventType = eventName;
				element.fireEvent('on' + event.eventType, event);
			}
		}

		jQuery('.lang-select').click(function() 
		{
			var theLang = jQuery(this).attr('data-lang');
			jQuery('.goog-te-combo').val(theLang);
			//alert(jQuery(this).attr('href'));
			window.location = jQuery(this).attr('href');
			location.reload();
		});
	</script>

	<script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
</footer>