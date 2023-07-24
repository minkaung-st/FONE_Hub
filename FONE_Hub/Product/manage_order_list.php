<?php
    session_start();
    include('../connect.php');

    // if (!isset($_SESSION['admin_email']) || isset($_SESSION['admin_password'])) {
    //     echo "<script>alert('Login First To Manage Order List')</script>";
    //     echo "<script>location='../Admin/admin_signIn.html'</script>";
    // 


    $all_order = "SELECT * FROM `order`";
    $run_all_order = mysqli_query($connect, $all_order);
?>  

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Order List</title>
    <!-- Add Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <br>
    <h4 class="text-center">Order List</h4>
    <br>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Order id</th>
                <th>Phone id</th>
                <th>Brand</th>
                <th>Model</th>
                <th>Quantity</th>
                <th>Unit Price</th>
                <th>Total Amount</th>
                <th>Order Date</th>
                <th>Payment Type</th>
                <th>Payment Slip</th>
                <th>Customer id</th>
                <th>Customer Name</th>
                <th>Phone</th>
                <th>Location</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach ($run_all_order as $rowData) {
                    $id = $rowData['order_id'];
                    echo "<tr>"; 
                        echo "<td>" .$rowData['order_id']. "</td>";
                        echo "<td>" .$rowData['phone_id']. "</td>";
                        echo "<td>" .$rowData['brand']. "</td>";
                        echo "<td>" .$rowData['model']. "</td>";
                        echo "<td>" .$rowData['quantity']. "</td>";
                        echo "<td>" .$rowData['unit_price']. "</td>";
                        echo "<td>" .$rowData['total_amount']. "</td>";
                        echo "<td>" .$rowData['order_date']. "</td>";
                        echo "<td>" .$rowData['payment_type']. "</td>";
                        echo "<td><img src='" .$rowData['payment_slip']. "' class='img-fluid' style='max-width: 100px; height: auto;'></td>";
                        echo "<td>" .$rowData['customer_id']. "</td>";
                        echo "<td>" .$rowData['customer_name']. "</td>";
                        echo "<td>" .$rowData['phone']. "</td>";
                        echo "<td>" .$rowData['location']. "</td>";
                        echo "<td><a href='cancel_order.php?id=$id'>Cancel</a></td>";
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>
</body>
</html>
