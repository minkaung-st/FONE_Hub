<?php

    include('../connect.php');

    if (isset($_GET['id'])) {

        $order_id = $_GET['id'];

        $cancel = "DELETE FROM `order` WHERE order_id = '$order_id' ";
        $run_cancel = mysqli_query($connect, $cancel);

        if ($cancel) {

            echo "<script>alert('Order Successfully Deleted!');</script>";
            echo "<script>location='manage_order_list.php';</script>";
        }
        else {
            echo "<script>alert('Error Occurred: Try Again!');</script>";
            echo "<script>location='manage_order_list.php';</script>";
        }
    }