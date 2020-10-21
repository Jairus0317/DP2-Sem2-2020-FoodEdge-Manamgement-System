<?php
include('methods.php');
session_id('transaction');
$discount = '0';

if (isset($_SESSION['user'])) {
    $discount = '20';
}

//unset session variables from Shopping Cart and checkout
foreach ($_SESSION['ShoppingCart'] as $key => $value) {
    unset($_SESSION[$key]);
}
unset($_SESSION['checkout']);
$total = 0;
?>

<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style/style.css">
    <script language="JavaScript" type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script language="JavaScript" type="text/javascript" src="jQuery.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body id="transctionBody">
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
                    <h4> Eveny's Detail </h4>
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
                    <?php
                    }
                    ?>


                </div>

                <hr />
                <!-- Display Menu Booked -->
                <div class="receiptMenuList">
                    <h4> Menu Booked </h4>
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
                    <p><a class="btn btn-outline-dark text-center" href="" onclick="window.print()">Print This</a></p>
                    <!-- Return to homepage -->
                    <p><a class="btn btn-outline-dark text-center" href="index.php" <?php unset($_SESSION['ShoppingCart']); ?>>Back to homepage</a></p>

                </div>
            </div>
        </div>
    </div>
</body>

</html>