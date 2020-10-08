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
    <h1 class="text-center">Transaction</h1>
    <h2 class="text-center">Transaction Successful - Order is placed and waiting to be processed</h2>
    <p>
        <em>Receipt #
            <?php
            $checkoutid = mysqli_fetch_assoc(mysqli_query($db, "select * from transaction T join checkout C on T.checkout_id=C.id order by checkout_id desc limit 1"));
            echo $checkoutid['checkout_id']; ?>
        </em>
    </p>

    <div class="row trans">
        <div class="col">
            <div>
                <h3 class="text-center">Receipt</h3>
            </div>
            <!-- Table that display the payment details -->
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th></th>
                        <th>Menu</th>
                        <th>No of Pax</th>
                        <th class="text-center">Price</th>
                        <th class="text-center">Total</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if (isset($_SESSION['cart'])) {
                        for ($i = 0; $i < sizeof($_SESSION['cart']); $i++) {
                            $results = mysqli_query($db, "select * from menu where id=" . $_SESSION['cart'][$i]['id']);
                            if (mysqli_num_rows($results) > 0) {
                                while ($row = mysqli_fetch_array($results)) {
                    ?>
                                    <tr>
                                        <td><img src="images/<?php echo $row['Image'] ?>" width="50px" class="rounded-circle"></td>
                                        <td class="col-md-9"><em><?php echo $row['Name'] ?></em></td>
                                        <td class="col-md-1" style="text-align: center"><?php echo $_SESSION['cart'][$i]['Quantity'] ?></td>
                                        <td class="col-md-1 text-center">RM<?php echo $row['Price'] ?></td>
                                        <td class="col-md-1 text-center">RM<?php echo $_SESSION['cart'][$i]['Quantity'] * $row['Price'] ?></td>
                                    </tr>
                                    <?php $totalprice = $totalprice + ($row['Price'] * $_SESSION['cart'][$i]['Quantity']); ?>
                    <?php }
                            }
                        }
                    } ?>
                    <tr>
                        <td> </td>
                        <td>   </td>
                        <td>   </td>
                        <!-- Display Total Price -->
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
                </tbody>
            </table>
            <a href="" onclick="window.print()">Print This</a>
            <a href="" >Back to homepage</a>
</body>

</html>