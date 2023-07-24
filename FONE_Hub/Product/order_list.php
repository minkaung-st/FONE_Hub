<?php
    include('../connect.php');

    $all_order = "select * from `order` ";
    $run_all_order = mysqli_query($connect, $all_order);
?>

<!DOCTYPE html>
<html lang="en"> 
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order</title>
        <!-- Add Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

    <div class="container my-5">
        <div class="row">

            <?php
                foreach ($run_all_order as $data)
                {
                    echo "<div class='col-md-4'>";
                        echo "<div class='card order-card py-3'>";
                            echo "<div class='card-body'>";
                                echo "<h5 class='card-title'> Order Num : " .$data['order_id']. "</h5><br>";
                                echo "<div class='card-text'> Product id : " .$data['phone_id']. "</div>";
                                echo "<div class='card-text'>" .$data['brand']. " | " .$data['model']. "</div><br>";
                                echo "<div class='card-text'>  Quantity : " .$data['quantity']. "</div>";
                                echo "<div class='card-text'>  Unit Price : " .$data['unit_price']. " Ks </div>";
                                echo "<div class='card-text'>  Total Amount : " .$data['total_amount']. " Ks </div><br>";
                                echo "<div class='card-text'>  Order Date : " .$data['order_date']. "</div><br>";

                                echo "<div class='card-text'>  Customer id : " .$data['customer_id']. " , ( " .$data['customer_name']. " )</div>";

                                echo "<div class='card-text'>  Phone : " .$data['phone']. "</div>";
                                echo "<div class='card-text'>  Location : " .$data['location']. "</div>";
                            echo "</div>";
                        echo "</div><br>";
                    echo "</div>";
                }
            ?>
        </div>
    </div>
</body>
</html>