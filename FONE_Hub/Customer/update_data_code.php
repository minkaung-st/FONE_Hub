<?php
    include('../connect.php');

    if (isset($_POST['Updated'])) {

        $customer_id = $_POST['customer_id'];
        $name = $_POST['name'];
        $email = $_POST['email']; 
        $password = $_POST['password'];
        $dob = $_POST['dob'];
        $address = $_POST['address'];
        $phone = $_POST['phone'];

        $update_customer = " UPDATE customer SET  name='$name', email='$email', password='$password', dob='$dob', address='$address', phone='$phone'  WHERE customer_id ='$customer_id' ";
        $run_update_customer = mysqli_query($connect , $update_customer);

        if ($run_update_customer) {

            echo "<script> alert('Customer Updated Successfully !') </script>";
            echo "<script> location = 'customer_list.php' </script>";
        }
        else {
            echo "<script> alert('Error Occur : Please Try Again !') </script>";
            echo "<script> location = 'customer_list.php' </script>";
        }
    }
?>