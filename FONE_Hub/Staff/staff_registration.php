<?php
    include('../connect.php');

    if (isset($_POST['Registered'])) {
    
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $dob = $_POST['dob'];  
        $gender = $_POST['gender'];
        $position = $_POST['position'];
    
        $profile = $_FILES['profile']['tmp_name'];  
        $folder = "staff_profile/";
        $file = $folder . $_FILES['profile']['name'];

        $address = $_POST['address'];
        $phone = $_POST['phone'];

        if (move_uploaded_file ($profile, $file)) {
            $insert = "
                INSERT INTO staff (name, email, password, dob, gender, position, profile_Picture, address, phone)
                VALUES ('$name', '$email', '$password', '$dob', '$gender', '$position', '$file', '$address', '$phone')
            ";

            mysqli_query ($connect, $insert);

            echo "<script> alert('Staff Registered Successfully'); </script>";
            echo "<script> location = 'staff_registration.html'; </script>";
        } 
        else {
            echo "<script> alert('Error Occurred: Failed to upload profile picture'); </script>";
            echo "<script> location = 'staff_registration.html'; </script>";
        }
    } 