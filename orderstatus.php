<?php 
session_start();

include "component/Config.php";
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Profile</title>
    <meta charset="utf-8">
    <meta name="author" content="Eddie Liew">
    <meta name="description" content="Order Status">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.
    css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="style/style.css">
	<!--Google Translate-->
	<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
</head>


<body>

<?php require_once ("component/topnav.php"); ?>

    <style>
        #apus-breadscrumb {
            text-align: center;
            background-color: #f7f7f7;
            margin: 0 0 30px;
        }
        
        .apus-breadscrumb {
            text-align: center;
            background-color: rgb(247, 247, 247);
            margin: 0px 0px 30px;
        }
        
        .apus-breadscrumb .wrapper-breads {
            padding: 30px 0;
        }
        
        .breadscrumb-inner {
            margin-left: auto;
            margin-right: auto;
            text-align: center;
        }
    </style>

    <section id="apus-breadscrumb" class="breadcrumb-page apus-breadscrumb ">
        <div class="container">
            <div class="wrapper-breads  ">
                <div class="wrapper-breads-inner">
                    <h3 class="bread-title">Order Mangement</h3>
                </div>
            </div>
        </div>
    </section>


    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover mb-0">
                                <thead>
                                    <tr class="align-self-center">
                                        <th>Order ID</th>
                                        <th>Item</th>
                                        <th>Date</th>
                                        <th>Pax</th>
                                        <th>Total</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php
										$sql = "SELECT * FROM transaction ORDER BY id";
										
										$result = $mysqli -> query($sql);

										if ($result->num_rows > 0) {
											// output data of each row
											while($row = $result->fetch_assoc()) {
                                    ?>
                                    <tr>

                                        <td><?php echo $row['checkout_id'] ?></td>
                                        <td><?php echo $row['name'] ?></td>
                                        <td><?php echo $row['Date'] ?></td>
                                        <td><?php echo $row['quantity'] ?></td>
                                        <td><?php echo $row['totalPrice'] ?></td>
                                        <td><?php echo $row['Status'] ?>
                                        </td>
                                    </tr>

                                    <?php }
                                        }
                                    ?>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<?php require_once ("component/footer.php"); ?>
</html>