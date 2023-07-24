<?php
    session_start();
    include('../connect.php');
    
    if (isset($_POST['Ordered'])) {
  
        $phone_id = $_POST['phone_id'];
        $brand = $_POST['brand'];
        $model = $_POST['model'];

        $customer_id = $_SESSION['customer_id'];
        $customer_name = $_SESSION['customer_name'];

        $unit_price = $_POST['unit_price'];
        $quantity = $_POST['quantity'];

        $total_amount = $unit_price * $quantity;

        $payment_type = $_POST['payment_type'];

        $payment_slip = $_FILES['payment_slip']['tmp_name'];
        $folder = "payment_slip/";
        $file = $folder . $_FILES['payment_slip']['name'];

        $order_date = $_POST['order_date'];
        $phone = $_POST['phone'];
        $location = $_POST['location'];

        if (move_uploaded_file($payment_slip, $file)) {

            $insert = "
                INSERT INTO `order` (phone_id, brand, model, unit_price, quantity, total_amount, payment_type, payment_slip, customer_id, customer_name, order_date, phone, location)
                VALUES ('$phone_id', '$brand', '$model', '$unit_price', '$quantity', '$total_amount', '$payment_type', '$file', '$customer_id', '$customer_name', '$order_date', '$phone', '$location')
            ";

            mysqli_query ($connect , $insert);

            echo "<script> alert('Product Ordered Successfully'); </script>";
            echo "<script> location = 'product.php'; </script>";
        } else {
            echo "<script> alert('Failed to move uploaded file. Please try again.'); </script>";
            echo "<script> location = 'products.php'; </script>";
        }
    }