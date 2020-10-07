<?php
include('methods.php');
session_id('checkout');
?>

<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <script language="JavaScript" type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script language="JavaScript" type="text/javascript" src="jQuery.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <h1 id="paymentTitle">Payment</h1>
    <p>Please fill out the form to proceed with the payment</p>
    <div class="col-12 col-md-8 order-2 order-md-1" id="payment">
        <form method="post" id="paymentForm" method="post" action="payment.php">
            <p class="type">Personal information</p>
            <?php echo display_error();?>
            <div class="form-row container col-lg-10">
                <div class="form-group">
                    <label for="inputUsertName">Username</label>
                    <input type="text" name="username" class="form-control" id="inputUsertName" value="<?php echo $username; ?>">
                </div>
                <div class="form-group">
                    <label for="inputEmail">Email</label>
                    <input type="email" name="email" class="form-control" id="inputEmail" value="<?php echo $email; ?>">
                </div>
                <div class="form-group">
                    <label for="inputPhoneNumber">Phone Number</label>
                    <input type="tel" name="phoneNumber" class="form-control" id="phoneNumber" value="<?php echo $phoneNumber; ?>">
                </div>
            </div>
            <div class="container col-lg-10">
                <p class="type">Event Details</p>
                <div class="form-row ">
                    <div class="form-group ">
                        <label for="dateBooking"> Date of Event:</label>
                        ` <input type="date" name="eventDate" id="dateBooking" class="form-control" required="true">
                    </div>
                    <div class=" form-group ">
                        <div class="md-form md-outline">
                            <label for="servingTime">Serving Time</label>
                            <input type="time" name="eventTime" id="servingTime" class="form-control" placeholder="Select time">
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="quantity">No of Pax</label>
                        <input type="number" name="paxNo" id="quantity" class="form-control" min="1" max="1000" required="true">
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

            <div id="button" class="container col-lg-10">
                <button type="submit" name="proceed" class="btn btn-primary">Proceed</button>
                <button type="reset" name="reset" class="btn btn-primary">Reset</button>
            </div>
        </form>

    </div>
    <div class="col-12 col-md-4 order-1 order-md-2">
        <aside>
            <p class="type">Order Summary</p>
            <?php
            if (isset($_SESSION['cart'])) {
                for ($i = 0; $i < sizeof($_SESSION['cart']); $i++) {
                    $results = mysqli_query($db, "select * from menu where id=" . $_SESSION['cart'][$i]['id']);
                    if (mysqli_num_rows($results) > 0) {
                        while ($row = mysqli_fetch_array($results)) {?>
                            <tr>
                                <td><img src="images/<?php echo $row['image'] ?>" width="50px"></td>
                                <td class="col-md-9"><em><?php echo $row['name'] ?></em></td>
                                <td class="col-md-1" style="text-align: center"><?php echo $_SESSION['cart'][$i]['quantity'] ?></td>
                                <td class="col-md-1 text-center">RM<?php echo $row['price'] ?></td>
                                <td class="col-md-1 text-center">RM<?php echo $_SESSION['cart'][$i]['quantity'] * $row['price'] ?></td>
                            </tr>
                            <?php $totalprice = $totalprice + ($row['price'] * $_SESSION['cart'][$i]['quantity']); ?>
            <?php }
                    }
                }
            } ?>
            <tr>
                <td> </td>
                <td>   </td>
                <td>  <?php 
                if(!empty($_POST)) {
                    echo $_POST['paxNo'];
                }
                 ?> </td>
                <td class="text-right">
                    <h4><strong>Total: </strong></h4>
                </td>
                <td class="text-center text-danger">
                    <h4><strong>RM<?php
                                    if (isset($totalprice)) {
                                        echo $totalprice;
                                    } else {
                                        echo 0;
                                    }
                                    ?></strong></h4>
                </td>
            </tr>
        </aside>
    </div>
</body>

</html>