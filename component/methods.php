<?php
session_start();
include('Config.php');

$errors = array();
$username = "";
$email = "";
$phoneNumber = "";
$cardName = "";
$cardNumber = "";
$expMonth = "";
$expYear = "";
$cvc = "";
$usertype = "";
$eventDate = "";
$eventTime = "";
$paxNo = "";
$eventAddress1 = "";
$eventAddress2 = "";
$city = "";
$state = "";
$zip = "";
$paymentType = "";

//trim input
function e($val)
{
    global $mysqli;
    return mysqli_real_escape_string($mysqli, trim($val));
}

//to display error from database
function display_error()
{
    global $errors;
    if (count($errors) > 0) {
        echo '<div class="error">';
        foreach ($errors as $error) {
            echo $error . '<br>';
        }
        echo '<hr>';
        echo '</div>';
    }
}

//do validation on card
function validatecard($cardName, $cardNumber, $expMonth, $expYear, $cvc)
{
    global $errors;
    if (empty($cardName)) {
        array_push($errors, "Name on Card is required");
    }
    if (!empty($cardName) && preg_match("~\d+~", $cardName)) {
        array_push($errors, "Name on Card cannnot have number");
    }
    if (!empty($cardName) && preg_match("~\W+~", $cardName)) {
        array_push($errors, "Name on Card cannot have special character");
    }
    if (empty($cardNumber)) {
        array_push($errors, "Card Number is required");
    }
    if (!empty($cardNumber) && (strlen($cardNumber) != 16)) {
        array_push($errors, "Card Number must be 16 digits");
    }
    if (!empty($cardNumber) && preg_match("~\W+~", $cardNumber)) {
        array_push($errors, "Card Number cannot have special character");
    }
    if (empty($expMonth)) {
        array_push($errors, "MM is required and cannot be zero");
    }
    if (!empty($expMonth) && preg_match("~^0~", $expMonth)) {
        array_push($errors, "MM cannnot start with 0");
    }
    if (!empty($expMonth) && preg_match("~\W+~", $expMonth)) {
        array_push($errors, "MM cannot have special character");
    }
    if (!empty($expMonth) && !preg_match("~^0~", $expMonth) && !preg_match("~\W+~", $expMonth) && (($expMonth < 1) || ($expMonth > 12))) {
        array_push($errors, "MM can only be 1 - 12");
    }
    if (empty($expYear)) {
        array_push($errors, "YYYY is required and cannot be zero");
    }
    if (!empty($expYear) && preg_match("~^0~", $expYear)) {
        array_push($errors, "YYYY cannnot start with 0");
    }
    if (!empty($expYear) && preg_match("~\W+~", $expYear)) {
        array_push($errors, "YYYY cannot have special character");
    }
    if (!empty($expYear) && !preg_match("~^0~", $expYear) && !preg_match("~\W+~", $expYear) && (($expYear < 2020) || ($expYear > 2099))) {
        array_push($errors, "YYYY can only be 2020 - 2099");
    }
    if (empty($cvc)) {
        array_push($errors, "CVC is required");
    }
    if (!empty($cvc) && (strlen($cvc) != 3)) {
        array_push($errors, "CVC must be 3 digits");
    }
    if (!empty($cvc) && preg_match("~\W+~", $cvc)) {
        array_push($errors, "CVC cannot have special character");
    }
}

//check if the current session is 'checkout' 
if (isset($_GET['checkout'])) {
    if (isset($_SESSION['user'])) {
        $rid = $_SESSION['user']['id'];
        $row = mysqli_fetch_assoc(mysqli_query($mysqli, "select * from account where id='$rid'"));
        $username = $row['username'];
        $email = $row['email'];
        $phoneNumber = $row['phoneNumber'];
    }
}

//validate the details in the payment form
function validatecheckout($userName, $email, $phoneNumber, $eventDate, $eventTime, $address1, $city, $state, $zip, $paymentType)
{
    global $errors;
    if (empty($userName)) {
        array_push($errors, "Name is required");
    }
    if (!empty($userName) && (strlen($userName) > 20)) {
        array_push($errors, "Name cannot be more than 20 words");
    }
    if (empty($email)) {
        array_push($errors, "Email is required");
    }
    if (empty($phoneNumber)) {
        array_push($errors, "Phone Number is required");
    }
    if (empty($eventDate)) {
        array_push($errors, "Please enter appropriate date!");
    }
    if (empty($eventTime)) {
        array_push($errors, "Please enter appropriate time!");
    }
    if (empty($address1)) {
        array_push($errors, "Please enter the address of the event");
    }
    if (empty($city)) {
        array_push($errors, "Please enter the city of the event");
    }
    if (empty($state)) {
        array_push($errors, "Please choose the state of the event");
    }
    if (empty($zip)) {
        array_push($errors, "Please enter the zip address of the event");
    }
    if (empty($paymentType)) {
        array_push($errors, "Please choose type of payment");
    }
}

//checkout session
if (isset($_POST['proceed'])) {
    $username = e($_POST['username']);
    $email = e($_POST['email']);
    $phoneNumber = e($_POST['phoneNumber']);
    $eventDate = e($_POST['eventDate']);
    $eventTime = e($_POST['eventTime']);
    $address1 = e($_POST['address1']);
    $address2 = e($_POST['address2']);
    $city = e($_POST['city']);
    $state = e($_POST['state']);
    $zip = e($_POST['zip']);
    $cardName = e($_POST['cardname']);
    $cardNumber = e($_POST['cardnumber']);
    $expMonth = e($_POST['expmonth']);
    $expYear = e($_POST['expyear']);
    $cvc = e($_POST['cvc']);
    $paymentType = e($_POST['paymentType']);
    $address = $address1 . ',' . $address2;

    //validate personal information and event details
    validatecheckout($username, $email, $phoneNumber, $eventDate, $eventTime, $address, $city, $state, $zip, $paymentType);

    // check the payment type = card / cash
    if (isset($paymentType)) {
        //payment type = card
        if ($paymentType == "card") {
            validatecard($cardName, $cardNumber, $expMonth, $expYear, $cvc); //validation on card details

            //if there is no error, push data into database
            if (count($errors) == 0) {
                $exp = $expMonth . '/' . $expYear;
                $query = "insert into 'checkout' (username,email,phoneNumber,date, time, address, city, state, zip, cardName,cardNumber,exp,cvc) 
            values('$username','$email', '$phoneNumber', '$eventDate','$eventTime','$address', $city', '$state', '$zip','$cardName','$cardNumber''$exp','$cvc')";
                $results = mysqli_query($mysqli, $query);
                $id = mysqli_insert_id($mysqli); //insert data into checkout table indatabase

                if ($id) {
                    $total = 0;
                    foreach ($_SESSION["ShoppingCart"] as $keys => $values) {
                        $mid = $values['ItemID'];
                        $name = $values["ItemName"];
                        $quantity = $values['ItemQuantity'];
                        $price = $values['ItemPrice'];
                        $totalPrice = ($values["ItemQuantity"] * $values["ItemPrice"]);
                        mysqli_query($mysqli, "insert into transaction(ItemID,name,price, quantity, totalPrice,checkout_id)
                    values('$mid','$name','$price', '$quantity', '$totalPrice','$id')"); //insert data into transaction table indatabase

                        //deduct the food stock in database
                        $row =  mysqli_fetch_assoc(mysqli_query($db, "select * from food_stock"));
                        $qty = $row['Quantity'];
                        if ($row['Quantity'] != 0) {
                            $finalqty = $qty - $quantity;
                            mysqli_query($db, "update food_stock set Quantity='$finalqty' where id='$mid'");
                        }
                    }
                    header('location: transaction.php');
                }
            }
        }

        //payment type = cash
        if ($paymentType == "cash") {
            //if there is no error, push data into database
            if (count($errors) == 0) {
                $exp = $expMonth . '/' . $expYear;
                $query = "insert into checkout(username,email,phoneNumber,date, time, address, city, state, zip) 
            values('$username','$email', '$phoneNumber', '$eventDate','$eventTime', '$address', '$city', '$state', '$zip')";
                $results = mysqli_query($mysqli, $query);
                $id = mysqli_insert_id($mysqli); //insert data into checkout table indatabase

                if ($id) {
                    $total = 0;
                    foreach ($_SESSION["ShoppingCart"] as $keys => $values) {
                        $mid = $values['ItemID'];
                        $name = $values["ItemName"];
                        $quantity = $values['ItemQuantity'];
                        $price = $values['ItemPrice'];
                        $totalPrice = ($values["ItemQuantity"] * $values["ItemPrice"]);
                        mysqli_query($mysqli, "insert into transaction(ItemID,name,price, quantity, totalPrice,checkout_id)
                        values('$mid','$name','$price', '$quantity', '$totalPrice','$id')"); //insert data into transaction table indatabase

                        //deduct the food stock in database
                        $row =  mysqli_fetch_assoc(mysqli_query($db, "select * from food_stock"));
                        $qty = $row['Quantity'];
                        if ($row['Quantity'] != 0) {
                            $finalqty = $qty - $quantity;
                            mysqli_query($db, "update food_stock set Quantity='$finalqty' where id='$mid'");
                        }
                    }
                }
                header('location: transaction.php');
            }
        }
    }
}
