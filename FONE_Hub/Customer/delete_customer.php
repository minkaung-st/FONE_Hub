<?php
    include('../connect.php');

    if (isset($_GET['id'])) {

        $customer_id = $_GET['id'];
        $delete = "delete from customer where customer_id ='$customer_id' ";
        $run_delete = mysqli_query($connect , $delete);

        if ($run_delete) {
            
            echo "<script> alert('Customer Successfully Deleted !') </script>";
            echo "<script> location = 'customer_list.php' </script>";
        }
        else {
            echo "<script> alert('Error Occur : Please Try Again !') </script>";
            echo "<script> location = 'customer_list.php' </script>";
        }
    }
?>