<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Payment</title>
        <!-- Css -->
    <link rel="stylesheet" href="../css/style.css">
        <!-- Add Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        * {
            color: black;
        }
    </style>
</head>
<body>
    
    <div class="container my-3 text-center">
        <h3 class="my-5 text-white">Ordering . . .</h3>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card phone-card py-4">

                    <?php
                        session_start();
                        include('../connect.php');

                        if (!isset($_SESSION['customer_email']) && !isset($_SESSION['customer_password']) ) {

                            echo "<script> alert('Sign In First To Order Our Products !') </script>";
                            echo "<script> location = '../Customer/customer_signIn.html' </script>";
                        }

                        $phone_id = $_GET['id'];

                        $select_phone = "SELECT * FROM phone WHERE phone_id = '$phone_id'";
                        $run_select_phone = mysqli_query($connect, $select_phone);

                        $data = mysqli_fetch_array($run_select_phone);
                    ?>

                    <img src="<?php echo $data['phone_img']; ?>" class="card-img-top img-fluid mb-3" style="width:140px; margin:auto;" id="img">

                    <div class="card-body">
                        <h5 class="card-title my-4"><?php echo $data['brand'] . " " . $data['model']; ?></h5>
                        
                        <form action="payment_code.php" method="post" enctype="multipart/form-data">

                            <input type="hidden" name="phone_id" value="<?php echo $data['phone_id'] ?>">
                            <input type="hidden" name="brand" value="<?php echo $data['brand'] ?>">
                            <input type="hidden" name="model" value="<?php echo $data['model'] ?>">

                            <input type="hidden" name="customer_name" value="<?php echo $_SESSION['customer_name'] ?>">

                            <div class="form-group">
                                <label for="unit_price">Unit Price (Ks)</label>
                                <input type="text" class="form-control" id="unit_price" name="unit_price" value="<?php echo $data['unit_price']; ?>" readonly>
                            </div>
                            <div class="form-group">
                                <!-- <label for="quantity">Quantity (Pcs)</label> -->
                                <input type="number" class="form-control" id="quantity" name="quantity" placeholder="Quantity (Pcs)" require>
                            </div><br><br>

                            <div class="form-group">
                                <label for="payment_type">Payment</label>
                                <p>Card Owner : FoneHouse Mobile </p>
                                <select class="form-control" id="payment_type" name="payment_type" required>
                                    <option value="kpay">Kpay</option>
                                    <option value="ayapay">AYApay</option>
                                    <option value="cbpay">CBpay</option>
                                    <option value="wave">WAVEpay</option>  
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="payment_slip">Payment Slip:</label>
                                <input type="file" class="form-control-file" id="payment_slip" name="payment_slip" required>
                            </div><br><br>
                            <div class="form-group">
                                <label for="order_date">Order Date:</label>
                                <input type="date" class="form-control" id="order_date" name="order_date" value="<?php echo date('Y-m-d'); ?>" readonly>
                            </div>
                            <div class="form-group">
                                <!-- <label for="phone">Phone:</label> -->
                                <input type="phone" class="form-control" id="phone" name="phone" placeholder="Phone" required
                                    onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))"
                                    minlength="8" maxlength="11">
                            </div>
                            <div class="form-group">
                                <!-- <label for="location">Location:</label> -->
                                <textarea class="form-control" id="location" name="location" cols="15" rows="4" placeholder="Location" require></textarea>
                            </div><br>

                            <button class="btn_general btn_order text-white" type="submit" name="Ordered"> Order <img src="../IMG/order.png" class="logo_img"></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Add Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>