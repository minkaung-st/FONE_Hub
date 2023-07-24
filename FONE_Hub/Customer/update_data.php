<?php
    include('../connect.php');

    if (isset($_GET['id'])) {

        $customer_id = $_GET['id'];
        $select_customer = "select * from customer where customer_id ='$customer_id' ";
        $run_select_customer = mysqli_query($connect , $select_customer);

        $data = mysqli_fetch_array($run_select_customer);
    }
?>

<!DOCTYPE html>
<html lang="en">  
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Customer Data</title>
        <!-- Add Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head> 
<body>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form action="update_data_code.php" method="post" enctype="multipart/form-data">
                    <fieldset>
                        <legend>Update Customer Data</legend>

                        <input type="hidden" name="customer_id" value="<?php echo $data['customer_id'] ?>">

                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" class="form-control" id="name" name="name" required value="<?php echo $data['name'] ?>">
                        </div>

                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" id="email" name="email" required value="<?php echo $data['email'] ?>">
                        </div>

                        <div class="form-group">
                            <label for="password">Password:</label>
                            <input type="text" class="form-control" id="password" name="password" required value="<?php echo $data['password'] ?>">
                        </div>

                        <div class="form-group">
                            <label for="dob">Date of Birth:</label>
                            <input type="date" class="form-control" id="dob" name="dob" required value="<?php echo $data['dob'] ?>">
                        </div>

                        <div class="form-group">
                            <label for="address">Address:</label>
                            <textarea class="form-control" id="address" name="address" cols="15" rows="4"><?php echo $data['address'] ?></textarea>
                        </div>

                        <div class="form-group">
                            <label for="phone">Phone:</label>
                            <input type="phone" class="form-control" id="phone" name="phone" required value="<?php echo $data['phone'] ?>"
                                onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))"
                                minlength="8" maxlength="11">
                        </div>

                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" value="Update" name="Updated">
                        </div>
                    </fieldset> 
                </form>
            </div>
        </div> 
    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>