<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedbacks</title>
        <!-- Add Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container my-5">
        <div class="row">

            <?php include('connect.php');

            $message = "SELECT * FROM contact";
            $run_message = mysqli_query($connect , $message);

            foreach ($run_message as $data) {
                echo "<div class='col-md-4'>";
                    echo "<div class='card order-card py-3'>";
                        echo "<div class='card-body'>";
                            echo "<div class='card-text text-center'> " .$data['contact_num']. "</div>";
                            echo "<div class='card-text'>Name - " .$data['name']. "</div>";
                            echo "<div class='card-text'>Email - " .$data['email']. "</div><br>";
                            echo "<div class='card-text'>Message - " .$data['message']. "</div>";
                        echo "</div>";
                    echo "</div><br>";
                echo "</div>";
            }
            ?>
        </div>
    </div>
</body>
</html>