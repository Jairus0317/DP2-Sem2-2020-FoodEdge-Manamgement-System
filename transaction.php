<?php
include('component/methods.php');
$discount = '0';

if (isset($_SESSION['user'])) {
    $discount = '20';
}

//unset session variables from Shopping Cart and checkout
<<<<<<< Updated upstream
foreach ($_SESSION['ShoppingCart'] as $key => $value) {
    unset($_SESSION[$key]);
}
unset($_SESSION['checkout']);
$totalprice = 0;
=======
if (isset($_SESSION['ShoppingCart'])){
    foreach ($_SESSION['ShoppingCart'] as $key => $value) {
        unset($_SESSION[$key]);
    }
    unset($_SESSION['checkout']);
    $total = 0;
}
>>>>>>> Stashed changes
?>

<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style/style.css">
    <script language="JavaScript" type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<<<<<<< Updated upstream
    <script language="JavaScript" type="text/javascript" src="script/jQuery.js"></script>
=======
    <script language="JavaScript" type="text/javascript" src="jQuery.js"></script>
>>>>>>> Stashed changes
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<<<<<<< Updated upstream
<body id="transctionBody">
=======
<body class="transctionBody">
<div class = "container-fluid">
    <div class="row banner text-center">
      <img src="./images/logo2.png" alt="Logo" width="12%">
    </div>
    
>>>>>>> Stashed changes
    <div id="receipt">
        <h1 class="text-center">Transaction</h1>
        <h2 class="text-center"><em>Transaction Successful - Order is placed and waiting to be processed</em></h2>

        <!-- Display Receipt Number -->
        <p id="receiptNo">
            <em> Receipt No :
                <?php
                $checkoutid = mysqli_fetch_assoc(mysqli_query($mysqli, "select * from transaction T join checkout C on T.checkout_id=C.id order by checkout_id desc limit 1"));
                echo $checkoutid['checkout_id'];
                ?>
            </em>
        </p>

        <!-- Display Summary of Booking -->
        <div class="row trans">
            <div class="col">
                <div>
                    <h3 class="text-center">Receipt</h3>
                </div>

                <!-- Display Customer Detail -->
                <div class="receiptMenuList">
                    <hr />
                    <h4> Customer's Detail </h4>
                    <?php
                    $query = 'Select * from checkout Where id=' . $checkoutid['checkout_id'];
                    $results = mysqli_query($mysqli, $query);
<<<<<<< Updated upstream

                    while ($row = mysqli_fetch_assoc($results)) {
                    ?>
                        <p><strong>Name : </strong><?php echo $row['username'] ?></p>
                        <p><strong>Email : </strong><?php echo $row['email'] ?></p>
                        <p><strong>Phone Number : </strong><?php echo $row['phoneNumber'] ?></p>
                        <p><strong>Date of Event : </strong><?php echo $row['date'] ?></p>
                        <p><strong>Serving Time : </strong><?php echo $row['time'] ?></p>
                        <p><strong>Address : </strong><?php echo $row['address'] ?></p>
                        <p><strong>City : </strong><?php echo $row['city'] ?></p>
                        <p><strong>State : </strong><?php echo $row['state'] ?></p>
                        <p><strong>Zip : </strong><?php echo $row['zip'] ?></p>

=======
                    while ($row = mysqli_fetch_assoc($results)) {
                    ?>
                        <table class="tableTransaction">
                            <tr>
                                <th><strong>Name </strong></th>
                                <th><strong>Email </strong></th>
                                <th><strong>Phone Number </strong></th>
                            </tr>
                            <tr>
                                <td><?php echo $row['username'] ?></td>
                                <td><?php echo $row['email'] ?></td>
                                <td><?php echo $row['phoneNumber'] ?></td>
                            </tr>
                        </table>
                    <?php
                    }
                    ?>
                </div>

                <div class="receiptMenuList">
                    <hr />
                    <h4> Event's Detail </h4>
                    <?php
                    $query = 'Select * from checkout Where id=' . $checkoutid['checkout_id'];
                    $results = mysqli_query($mysqli, $query);
                    while ($row = mysqli_fetch_assoc($results)) {
                    ?>
                        <table class="tableTransaction">
                            <tr>
                                <th><strong>Date of Event </strong></th>
                                <th><strong>Serving Time </strong></th>
                                <th><strong>Address </strong></th>
                                <th><strong>City </strong></th>
                                <th><strong>State </strong></th>
                                <th><strong>Zip </strong></th>
                                
                            </tr>
                            <tr>
                            <td><?php echo $row['date'] ?></td>
                                <td><?php echo $row['time'] ?></td>
                                <td><?php echo $row['address'] ?></td>
                                <td><?php echo $row['city'] ?></td>
                                <td><?php echo $row['state'] ?></td>
                                <td><?php echo $row['zip'] ?></td>
                            </tr>
                        </table>
>>>>>>> Stashed changes
                    <?php
                    }
                    ?>


                </div>
<<<<<<< Updated upstream
=======

>>>>>>> Stashed changes
                <hr />
                <!-- Display Menu Booked -->
                <div class="receiptMenuList">
                    <h4> Menu Booked </h4>
<<<<<<< Updated upstream
                    <?php
                    if (isset($_SESSION['ShoppingCart'])) {
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
                    }
                    ?>
=======
                    <table class="tableTransaction">
                        <tr>
                            <th><strong>Menu </strong></th>
                            <th><strong>No of Pax </strong></th>
                            <th><strong>Price per Menu </strong></th>
                            <th><strong>Calculated price per Menu </strong></th>
                        </tr>
                        <?php
                        if (isset($_SESSION['ShoppingCart'])) {
                            $total = 0;

                            foreach ($_SESSION["ShoppingCart"] as $keys => $values) {
                        ?>
                                <tr>
                                    <td><?php echo $values["ItemName"]; ?></td>
                                    <td><?php echo $values["ItemQuantity"]; ?></td>
                                    <td>RM <?php echo number_format($values["ItemPrice"], 2); ?></td>
                                    <td>RM <?php echo number_format($values["ItemQuantity"] * $values["ItemPrice"], 2); ?></td>
                                </tr>

                        <?php
                                $total = $total + ($values["ItemQuantity"] * $values["ItemPrice"]);
                            }
                        }

                        ?>
                    </table>
>>>>>>> Stashed changes

                    <!-- Display Total Price from booking -->
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

                    <!-- Allow user to print the recipt -->
<<<<<<< Updated upstream
                    <a class="btn btn-outline-dark text-center" href="" onclick="window.print()">Print This</a>
                    <!-- Return to homepage -->
                    <a class="btn btn-outline-dark text-center" href="index.php">Back to homepage</a>
=======
                    <p><a class="btn btn-outline-dark text-center" href="" onclick="window.print()">Print This</a></p>
                    <!-- Return to homepage -->
                    <p><a class="btn btn-outline-dark text-center" href="index.php" <?php unset($_SESSION['ShoppingCart']); ?>>Back to homepage</a></p>
>>>>>>> Stashed changes

                </div>
            </div>
        </div>
    </div>
<<<<<<< Updated upstream
=======
</div>

<?php require_once ("component/footer.php"); ?>

>>>>>>> Stashed changes
</body>

</html>