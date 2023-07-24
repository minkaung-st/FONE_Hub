<?php
    include('../connect.php'); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> FONE Hub / Product </title>
        <!-- CSS -->
    <link rel="stylesheet" href="../css/style.css">
        <!-- Add Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <!-- Fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
</head>
<body>
        
         <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-5"> 
        <label>FONE Hub</label>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="home.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="product.php">Products</a>
                </li>
                <li class="nav-item disabled">
                    <a class="nav-link disabled" href="#">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="home.php#contact">Contact</a>
                </li> 
                <li class="nav-item">
                    <a class="nav-link" href="home.php#about">About</a>
                </li>
                <li class="nav-item disabled">
                    <a class="nav-link disabled">||</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../Customer/customer_signIn.html"><i class="fa-solid fa-user"></i> </a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container">
        <!-- Search box -->
        <?php
            $searchKeyword = isset($_GET['search']) ? $_GET['search'] : '';

            $showAllPhone = "SELECT * FROM phone WHERE brand LIKE '%$searchKeyword%' OR model LIKE '%$searchKeyword%'";
            $runShowAllPhone = mysqli_query($connect, $showAllPhone);
        ?>
        <form class="form-inline my-5" method="GET">
            <div class="input-group">
                <input type="text" class="form-control" name="search" placeholder="Search" value="<?php echo $searchKeyword; ?>">
                <div class="input-group-append">
                    <button class="btn" type="submit" style="background-color: rgba(16,12,24,255); color: white;"><i class="fas fa-search"></i></button>
                </div>
            </div>
        </form>

        <div class="row">
            <?php
                foreach ($runShowAllPhone as $data) {
                    echo "<div class='col-md-4'>";
                        echo "<div class='card py-5'>";
                            echo "<img src='" . $data['phone_img'] . "'  class='card-img-top m-auto' style='width: 200px; height: auto; object-fit: cover;' >";
                            echo "<div class='card-body text-center'>";
                                echo "<h5 class='card-title'>" . $data['brand'] . " " . $data['model'] . "</h5><br>";
                                echo "<p class='card-text'>Storage: " . $data['storage'] . " GB</p>";
                                echo "<p class='card-text'>Unit Price: " . $data['unit_price'] . " Ks</p>";
                                echo "<button class='btn_general btn_more_details'><a href='more_detail.php?id=" .$data['phone_id']. "'>More Details</a> <i class='fa-solid fa-circle-info'></i></button>";
                            echo "</div>";
                        echo "</div> <br>";
                    echo "</div>";
                }
            ?>
        </div>
    </div>

    <!-- Add Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>