<?php
    session_start();
    include('../connect.php');

    $phone_id = $_GET['id'];
    $select_phone = "SELECT * FROM phone WHERE phone_id = '$phone_id'";
    $run_select_phone = mysqli_query($connect, $select_phone);

    $data = mysqli_fetch_array($run_select_phone);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>More Details</title>
        <!-- Css -->
    <link rel="stylesheet" href="../css/style.css">
        <!-- Add Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    
    <div class="container my-3 text-center">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card phone-card py-4">
                    <img src="<?php echo $data['phone_img']; ?>" class="card-img-top img-fluid" style="width:200px; margin:auto;" id="img">
                    <div class="card-body">
                        <h5 class="card-title my-4"><?php echo $data['brand'] . " " . $data['model']; ?></h5>
                        <p class="card-text">Storage: <?php echo $data['storage']; ?> GB</p>
                        <p class="card-text">Unit Price: <?php echo $data['unit_price']; ?> Ks</p>
                        <p class="card-text">Stock Quantity: <?php echo $data['stock_quantity']; ?> Pcs</p>
                        <p class="card-text mb-4">Specification: <?php echo $data['specification']; ?></p>
                        
                        <button class="btn_general btn_order">
                            <a href="payment.php?id=<?php echo $data['phone_id']; ?>">Order</a>
                            <img src="../IMG/order.png" class="logo_img" alt="Order Logo">
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Add Font Awesome Kit -->
    <script src="https://kit.fontawesome.com/your-font-awesome-kit.js" crossorigin="anonymous"></script>
    <!-- Add Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
