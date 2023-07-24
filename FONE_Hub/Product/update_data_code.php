<?php
    include('../connect.php');

    if (isset($_POST['Updated'])) {

        $phone_id = $_POST['phone_id'];
        $brand = $_POST['brand'];  
        $model = $_POST['model']; 
        $storage = $_POST['storage'];
        $unit_price = $_POST['unit_price'];
        $stock_quantity = $_POST['stock_quantity'];
        $specification = $_POST['specification'];

        $update_phone_data = " UPDATE phone SET `brand`='$brand', `model`='$model', `storage`='$storage', `unit_price`='$unit_price', `stock_quantity`='$stock_quantity', `specification`='$specification' WHERE `phone_id` ='$phone_id' ";
        $run_update_phone_data = mysqli_query ($connect, $update_phone_data);

        if ($run_update_phone_data) {

            echo "<script> alert('Phone Updated Successfully !') </script>";
            echo "<script> location = 'phone_list.php' </script>";
        }
        else {
            echo "<script> alert('Error Occur : Please Try Again !') </script>";
            echo "<script> location = 'phone_list.php' </script>";
        }
    }
?>