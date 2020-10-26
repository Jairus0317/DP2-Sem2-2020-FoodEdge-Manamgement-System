<?php
include('component/methods.php');

$discount = '0';

if (isset($_SESSION['user'])) {
    $discount = '20';
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style/style.css">
    <script language="JavaScript" type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script language="JavaScript" type="text/javascript" src="script/jQuery.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body class="paymentTransaction">
    <div class="paymentArea">
        <h1 class="paymentTitle">Payment</h1>
        <p id="paymentPageP">Please fill out the form to proceed with the payment</p>
        
        <!-- Payment Form -->
        <div class="col-12 col-md-8 order-2 order-md-1" id="payment">
            <form method="post" id="paymentForm" action="payment.php">
                
            <!-- Display validation error -->
                <?php echo display_error(); ?>

                <!-- Personal Information Form -->
                <div class="form-row container col-lg-10">
                    <p class="type">Personal information</p>
                    <div class="form-group">
                        <label for="inputUsertName">Username</label>
                        <input type="text" name="username" class="form-control" id="inputUsertName" value="<?php echo $username; ?>">
                    </div>
                    <div class="form-group">
                        <label for="inputEmail">Email</label>
                        <input type="text" name="email" class="form-control" id="inputEmail" value="<?php echo $email; ?>">
                    </div>
                    <div class="form-group">
                        <label for="inputPhoneNumber">Phone Number</label>
                        <input type="tel" name="phoneNumber" class="form-control" id="phoneNumber" value="<?php echo $phoneNumber; ?>">
                    </div>
                </div>

                <!-- Event Details Form -->
                <div class="container col-lg-10">
                    <p class="type">Event Details</p>
                    <div class="form-row ">
                        <div class="form-group ">
                            <label for="dateBooking"> Date of Event:</label>
                            ` <input type="date" name="eventDate" id="dateBooking" class="form-control">
                        </div>
                        <div class=" form-group ">
                            <div class="md-form md-outline">
                                <label for="servingTime">Serving Time</label>
                                <input type="time" name="eventTime" id="servingTime" class="form-control" placeholder="Select time">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputAddress">Address</label>
                        <input type="text" name="address1" class="form-control" id="inputAddress" placeholder="1234 Main St">
                    </div>
                    <div class="form-group">
                        <label for="inputAddress2">Address 2</label>
                        <input type="text" name="address2" class="form-control" id="inputAddress2" placeholder="Building. e.g. Town Hall of Kuching">
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="inputCity">City</label>
                            <input type="text" name="city" class="form-control" id="inputCity">
                        </div>
                        <div class="form-group ">
                            <label for="inputState">State</label>
                            <select id="inputState" name="state" class="form-control">
                                <option selected value="Johor">Johor</option>
                                <option value="Kedah">Kedah</option>
                                <option value="Kelantan">Kelantan</option>
                                <option value="Malacca">Malacca</option>
                                <option value="Negeri Sembilan">Negeri Sembilan</option>
                                <option value="Pahang">Pahang</option>
                                <option value="Penang">Penang</option>
                                <option value="Perak">Perak</option>
                                <option value="Perlis">Perlis</option>
                                <option value="Sabah">Sabah</option>
                                <option value="Sarawak">Sarawak</option>
                                <option value="Selangor">Selangor</option>
                                <option value="Terengganu">Terengganu</option>
                                <option value="Kuala Lumpur">Kuala Lumpur</option>
                                <option value="Labuan">Labuan</option>
                                <option value="Putrajaya">Putrajaya</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="inputZip">Zip</label>
                            <input type="text" name="zip" class="form-control" id="inputZip">
                        </div>
                    </div>
                </div>

                <!-- Payment Type Form -->
                <div class="form-row container col-lg-10">
                    <p class="type">Payment Type</p>
                    <div id="paymentType">
                        <img class="cardType" src="images/master.png" alt="MasterCard" class="img-thumbnail">
                        <img class="cardType" src="images/visa.png" alt="MasterCard" class="img-thumbnail">
                        <label for="card">Credit/Debit Card</label>
                        <input type="radio" name="paymentType" value="card" />
                        <br />
                        <img class="cardType" src="images/money.png" alt="MasterCard" class="img-thumbnail">
                        <label for="cash">Cash</label>
                        <input type="radio" name="paymentType" value="cash" />
                    </div>
                </div>


                <!-- Card Information Form -->
                <div class="form-row container  col-lg-10">
                    <div id="card" desc="cardPayment" style="display: none">
                        <div class="form-group col-md-6">
                            <label for="cardname">Name on Card</label>
                            <input type="text" class="form-control" name="cardname" id="cardname">
                        </div>

                        <div class="form-group col-md-4">
                            <label for="cardnum">Card Number</label>
                            <input type="text" name="cardnumber" class="form-control" name="cardnumber" id="cardnum">
                        </div>

                        <div class="form-group col-md-4">
                            <label for="month">MM</label>
                            <input type="text" class="form-control" name="expmonth" id="month">
                        </div>

                        <div class="form-group col-md-4">
                            <label for="year">YYYY</label>
                            <input type="text" class="form-control" name="expyear" id="year">
                        </div>
                        <div class="form-group col-md-4 ">
                            <label for="cvc">CVC</label>
                            <input type="text" class="form-control" name="cvc" id="cvc">
                        </div>
                    </div>
                </div>

                <div id="buttonDiv" class="container col-lg-10">
                    <button type="submit" name="proceed" class="btn btn-primary">Proceed</button>
                    <button type="reset" name="reset" class="btn btn-primary">Reset</button>
                </div>

                
            </form>

        </div>

        <!-- Display Items from Cart -->
        <div class="col-12 col-md-4 order-1 order-md-2">
            <aside id="paymentSummary">
                <h3 id="orderSum">Order Summary</h3>
                <hr />
                <?php
                $total = 0;

                foreach ($_SESSION["ShoppingCart"] as $keys => $values) {
                ?>
                    <p><strong>Menu : </strong><?php echo $values["ItemName"]; ?></p>
                    <p><strong>No of Pax: </strong><?php echo $values["ItemQuantity"]; ?></p>
                    <p><strong>Price per Menu: </strong>RM <?php echo number_format($values["ItemPrice"], 2); ?></p>
                    <p><strong>Calculated price per Menu: </strong>RM <?php echo number_format($values["ItemQuantity"] * $values["ItemPrice"], 2); ?></p>
                    <hr />
                <?php
                    $total = $total + ($values["ItemQuantity"] * $values["ItemPrice"]);
                }
                ?>

                <!-- Calculate Price either customer is applicable for discount or not -->
                <?php
                if ($discount != '0') { ?>
                    <p><?php echo "Membership Discount : 20% "; ?></p>
                    <p><?php echo "Price before discount : RM" . $total; ?></p>
                <?php } ?>
                <p id="totalPriceSum"><strong> Total : RM
                        <?php
                        if ($discount != '0') {
                            $beforeDiscount = $total;
                            $afterDiscount = ($discount / 100) * $beforeDiscount;
                            echo number_format($afterDiscount, 2);
                        } else {
                            echo $total;
                        }

                        ?> </strong></p>
            </aside>
        </div>
    </div>
</body>

</html>