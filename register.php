 <?php
session_start();
 
?>
 
 <!DOCTYPE html>
<html>
	<!--Description : Register Page-->
	<!--Author : Manfred-->
	<!--Date : 16/10/2020-->
<head>
	<meta charset="UTF-8">
	<title>Register</title>
	<script src="script/validation.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" href="style/style.css">
<!--FontAwesome CDN-->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body class="registerpage">

	<div class = "container">
		<div class="registerform d-flex justify-content-center">
			<form id="regForm" name="registerform"  method="post" enctype="text/plain" class="reg" action="login.php"> 
				<fieldset>
					<table>
						<tr>
							<h1>Register</h1>
						</tr>
						<tr>
							<td><label for="username">Username</label></td>
							<td><input type="text" id="username" name="username" size="16" value="<?php echo $username; ?>"></td>
						</tr>
						<tr>
							<td><label for="password">Password</label></td>
							<td><input type="password" id="password" maxlength="16" name="password" size="16"></td>
							<td><label for="cfmpassword">Confirmed Password</label></td>
							<td><input type="password" id="cfmpassword" maxlength="16" name="cfmpassword" size="16"></td>
						</tr>
						<tr>
							<td><label for="fname">First name</label></td>
							<td><input type="text" id="fname"  name="fname" size="16"></td>
							<td><label for="lname">Last name</label></td>
							<td><input type="text" id="lname"  name="lname" size="16"></td>
						</tr>
						<tr>
							<td><label for="email">Email address</label></td>
							<td><input type="text" id="email" size="16" name="email"></td>
							<td><label for="phone">Contact number</label></td>
							<td><input type="text" id="phone" maxlength="12" name="phone" size="16"></td>
						</tr>
						<tr>
							<td class="address"><label for="address">Address</label></td>
							<td colspan="3"><textarea name="address" id="address" rows="8" cols="65" placeholder="Please enter your address"></textarea></td>
						</tr>				
						<tr>
							<td colspan="2"><input type="submit" class="btn" name="register" value="Register"></td>
							<td colspan="2"><a href="login.php">Back</button></td>
						</tr>
					</table>
				</fieldset>	
			</form>
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
<?php  
if(isset($_POST["register"])){  
if(!empty($_POST['username']) && !empty($_POST['password']) && !empty($_POST['email']) && !empty($_POST['phone'])) {  
    $user=$_POST['username'];  
    $pass=$_POST['password'];  
	$email=$_POST['email'];  
	$phone=$_POST['phone'];  
    $mysqli = new mysqli("sql201.epizy.com","epiz_26849119","S4zZzz1Cs4G6","epiz_26849119_FoodEdgeDatabase") or die($mysqli -> connect_errno);  
  
	  
    $sql="INSERT INTO register(username,password,email,phone) VALUES('$user','$pass'.'$email','$phone')";  
  
    $result=mysqli_query($mysqli, $sql);  
        if($result){  
    echo "Account Successfully Created";  
    } else {  
    echo "Failure!";  
    }  
  
     
  
}
}  
?>  


 
 