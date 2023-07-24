<?php 
    session_start();
    include('../connect.php'); 
 
    if (isset($_POST['Sign_in'])) {
  
        $email = $_POST['email'];
        $password = $_POST['password'];
        
        $search_staff = " SELECT * FROM staff WHERE email = '$email' AND password = '$password' "; 
        $run_search_staff = mysqli_query($connect, $search_staff);

        $check_staff = mysqli_num_rows($run_search_staff);

        if ($check_staff == 1) {

            $staff_data = mysqli_fetch_array($run_search_staff);
            $staff_id = $staff_data['staff_id'];

            $_SESSION['staff_id'] = $staff_id;

            $_SESSION['staff_email'] = $email;
            $_SESSION['staff_password'] = $password;

            echo "<script> alert('You Successfully Sign In!') </script>";
            echo "<script> location = '../index.html' </script>";
        }
        else {
            echo "<script> alert('Login Fail: Email or password may be wrong!') </script>";
            echo "<script> location = 'staff_signIn.html' </script>";
        }
    }
?>
