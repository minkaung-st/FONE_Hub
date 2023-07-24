<?php
    session_start();
    include('../connect.php');

    if(isset($_POST['Sign_in'])) {

        $email = $_POST['email'];
        $password = $_POST['password'];

        if ($email === 'minkaungst@gmail.com' && $password === 'MinKaungST/123') {

            $_SESSION['admin_email'] = $email;
            $_SESSION['admin_password'] = $password;

            echo "<script> alert('Login Success!') </script>";
            echo "<script> location = '../index.html' </script>";
        }
        else {
            echo "<script> alert('Login Fail: Invalid email or password!') </script>";
            echo "<script> location = 'admin_signIn.html' </script>";
        }
    }