<?php 
    session_start();  
    include('../connect.php');

    if ( !isset($_SESSION['staff_email']) && !isset($_SESSION['staff_password']) ) {

        echo "<script> alert('Login First To Manage Phone Lists !') </script>";
        echo "<script> location = '../../Staff/staff_signIn.html' </script>";
    }

    $all_phone = "select * from phone";
    $run_all_phone = mysqli_query ($connect , $all_phone);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Phone List</title>
        <!-- Add Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

        <h4 class="text-center my-4">Manage Phone List</h4>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Phone id</th>
                    <th>Brand</th>
                    <th>Model</th>
                    <th>Storage</th>
                    <th>Unit Price</th>
                    <th>Stock Quantity</th>
                    <th>Phone Img</th>
                    <th>Specification</th>
                    <th>Options</th>
                </tr>
            </thead>
            <tbody>

                <?php 
                    foreach ($run_all_phone as $rowData) {

                        $id = $rowData['phone_id'];

                        echo"<tr>";
                            echo"<td>" .$rowData['phone_id']. "</td>";
                            echo"<td>" .$rowData['brand']. "</td>";
                            echo"<td>" .$rowData['model']. "</td>";
                            echo"<td>" .$rowData['storage']. " Gb </td>";
                            echo"<td>" .$rowData['unit_price']. " Ks </td>";
                            echo"<td>" .$rowData['stock_quantity']. " Pcs </td>";

                            echo"<td><img src=' " .$rowData['phone_img']. "'  class='img-fluid' style='max-width: 100px; height: auto;'></td>";

                            echo"<td>" .$rowData['specification']. "</td>";
                            echo"<td><a href='update_data.php?id=$id'> Update </a> | <a href='delete_phone.php?id=$id' class='text-danger'> Delete </a> </td>";
                        echo"</tr>";
                    }
                ?>

            </tbody>
        </table>
        
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>