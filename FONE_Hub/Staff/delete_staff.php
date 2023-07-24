<?php 
    include('../connect.php');

    if (isset($_GET['id'])) {  

        $staff_id = $_GET['id'];
        
        $delete = "delete from staff where staff_id = '$staff_id' ";
        $run_delete = mysqli_query ($connect , $delete);

        if ($run_delete) {

            echo "<script> alert('Staff Successfully Deleted !') </script>";
            echo "<script> location = 'staff_list.php' </script>";
        }
        else {
            echo "<script> alert('Error Occur : Please Try Again !') </script>";
            echo "<script> location = 'staff_list.php' </script>";
        }
    }
?>