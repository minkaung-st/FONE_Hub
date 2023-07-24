<?php
    include('../connect.php');

    if (isset($_POST['Send'])) {

        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        $insert = "INSERT INTO contact (name, email, message)
                   VALUES ('$name', '$email', '$message')";

        $run_insert = mysqli_query($connect, $insert);

        if ($run_insert) {
            echo "<script>alert('Message Sent Successcully !  We value your feedback . Have a nice day !')</script>";
            echo "<script> location = 'home.php'; </script>";
        } 
        else {
            echo "<script>alert('Fail To Send Message ! Something went wrong . You couldn't sent message at the moment .')</script>";
            echo "<script> location = 'home.php'; </script>";
        }
    }

    
