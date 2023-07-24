<?php
    session_start();
    include('../connect.php');
 
    if (isset($_POST['Sign_in'])) {

        $email = $_POST['email'];
        $password = $_POST['password'];

        $search_customer = " SELECT * FROM customer WHERE email = '$email' AND password = '$password' ";
        $run_search_customer = mysqli_query($connect, $search_customer);

        $check_customer = mysqli_num_rows($run_search_customer);

        if ($check_customer == 1) {

            $customer_data = mysqli_fetch_array($run_search_customer);
                $customer_id = $customer_data['customer_id'];
                $customer_name = $customer_data['name'];

            $_SESSION['customer_id'] = $customer_id;
            $_SESSION['customer_name'] = $customer_name;

            $_SESSION['customer_email'] = $email;
            $_SESSION['customer_password'] = $password;

            echo "<script> alert('You Successfully Sign In!') </script>";
            echo "<script> location = '../Product/product.php' </script>";
        }
        else {
            echo "<script> alert('Login Fail: Email or password may be wrong!') </script>";
            echo "<script> location = 'customer_signin.html' </script>";
        }
    }