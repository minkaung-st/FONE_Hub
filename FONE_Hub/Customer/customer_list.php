<?php 
    session_start();
    include('../connect.php');

    if (!isset($_SESSION['admin_email']) && !isset($_SESSION['admin_password'])) {

        echo "<script> alert('Sign In First To Manage Customer List.') </script>";
        echo "<script> location = '../Admin/admin_signIn.html' </script>";
    }  

    $all_customer = "select * from customer";
    $run_all_customer = mysqli_query($connect, $all_customer);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Customer List</title>
    <!-- Add Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <h4 class="text-center my-4">Manage Customer List</h4>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Customer id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Password</th>
                <th>Date Of Birth</th>
                <th>Profile</th>
                <th>Address</th>
                <th>Phone</th>
                <th>Options</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                foreach ($run_all_customer as $rowData) {
                    $id = $rowData['customer_id'];
                    
                    echo "<tr>";
                    echo "<td>" . $rowData['customer_id'] . "</td>";
                    echo "<td>" . $rowData['name'] . "</td>";
                    echo "<td>" . $rowData['email'] . "</td>";
                    echo "<td>" . $rowData['password'] . "</td>";
                    echo "<td>" . $rowData['dob'] . "</td>";

                    echo "<td><img src='" . $rowData['profile_picture'] . "' class='img-fluid' style='max-width: 100px; height: auto;'></td>";

                    echo "<td>" . $rowData['address'] . "</td>";
                    echo "<td>" . $rowData['phone'] . "</td>";
                    echo "<td><a href='update_data.php?id=$id'>Update</a> | <a href='delete_customer.php?id=$id' class='text-danger'>Delete</a></td>"; 
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
