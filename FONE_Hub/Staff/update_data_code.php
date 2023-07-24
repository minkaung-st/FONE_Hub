<?php

    include('../connect.php');

    if (isset($_POST['Updated'])) {

        $staff_id = $_POST['staff_id'];
        $name = $_POST['name'];  
        $email = $_POST['email']; 
        $password = $_POST['password'];
        $dob = $_POST['dob'];
        $gender = $_POST['gender'];
        $position = $_POST['position'];
        $address = $_POST['address'];
        $phone = $_POST['phone'];

        $update_staff_data = " UPDATE staff SET  name='$name', email='$email', password='$password', dob='$dob', gender='$gender', position='$position', address='$address', phone='$phone'  WHERE `staff_id` ='$staff_id' ";
        $run_update_staff_data = mysqli_query($connect,$update_staff_data);

        if ($run_update_staff_data) {

            echo "<script> alert('Staff Updated Successfully !') </script>";
            echo "<script> location = 'staff_list.php' </script>";
        }
        else {
            echo "<script> alert('Error Occur : Please Try Again !') </script>";
            echo "<script> location = 'staff_list.php' </script>";
        }
    }