
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FONE Hub Mobile</title>
        <!-- CSS -->
    <link rel="stylesheet" href="../css/style.css">
        <!-- Add Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <!-- Fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
    <style>
        .new_arrival {
            margin: 40px 0 50px 100px;
        }
        .main h2 span {
            font-size: 50px;
            display: inline-block;
            margin-left: 20px;
        }
    </style>
</head>
<body>
        <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-5">
        <!-- <a class="navbar-brand" href="FoneHouse.html">FONE House</a> -->
        <label>FONE Hub</label>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
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
                    <a class="nav-link" href="../Customer/customer_signIn.html"> <i class="fa-solid fa-user"></i> </a>
                </li>
            </ul>
        </div>
    </nav>

        <!-- Container -->
    <div class="container">
        <section class="main">
        <h2>Welcome to <span class="text-white">FONE Hub <img src="../IMG/mobile-phone.png" class="logo_img"></span> Mobile </h2>
            <p class="my-4">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt illo neque reprehenderit <br>
                voluptas fugit et fuga eos alias, est dolor ad excepturi ullam ducimus facilis nulla amet ab quia hic?
            </p>
            <button class="btn_general"><a href="product.php">Shop</a> <i class="fa-solid fa-cart-shopping"></i></button>
        </section> <hr>

            <!-- New Arrival -->
        <section id="new_arrival">
            <h2 class="new_arrival">New Arrival</h2>

            <div class="container">
                <div class="row">
                    <?php
                        include('../connect.php');

                        $new_arrival = "SELECT * FROM `phone` ORDER BY `phone_id` DESC LIMIT 6";
                        $run_new_arrival = mysqli_query ($connect , $new_arrival);

                        foreach ($run_new_arrival as $data) {
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
        </section> <hr>

            <!-- Contact -->
        <section id="contact">
            <h2 class="title text-center my-5">Contact Us</h2>

            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="card text-center">
                        <div class="card-body">
                            <h5 class="card-title"><img src="../IMG/email.png" class="logo_img"> Email</h5>
                            <p class="card-text">customer.service@phonehouse.com</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card text-center">
                        <div class="card-body">
                            <h5 class="card-title"><img src="../IMG/phone.png" class="logo_img"> Hot Line</h5><br>
                            <p class="card-text">09 759 039 057 <br> 09 443 427 414</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card text-center">
                        <div class="card-body">
                            <h5 class="card-title"><img src="../IMG/viber.png" class="logo_img"> Viber</h5>
                            <p class="card-text">+959 759 039 057</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center mt-5 text-center">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                        <h5 class="card-title"><img src="../IMG/address.png" class="logo_img"> Address</h5><br>
                            <p class="card-text">
                                No (35) Yankin Rd, Yankin Township, YGN<br>
                                No (69) Pyay Rd, Insein Township, YGN <br><br>
                                No (426) Mahamying Rd , Miziya Township , MDY
                            </p>
                        </div>
                    </div>
                </div>
            </div><br><br>
            <!-- <i class="fas fa-envelope"></i> <i class="fas fa-phone"></i> <i class="fab fa-viber"></i> <i class="fas fa-map-marker-alt"></i>  -->
        
            <div class="row text-center mt-5">
                <div class="col-md-6 offset-md-3">
                    <p>Feel free to reach out to us with any questions or feedback.</p>
    
                    <form action="contact.php" method="post">
                        <div class="form-group">
                            <input type="text" class="form-control" name="name" placeholder="Your Name" required>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" placeholder="Your Email" required>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="message" placeholder="Your Message" rows="5" required></textarea>
                        </div>
                        <button type="submit" class="btn_general btn_send" name="Send"><a>Send</a> <i class="fa-solid fa-paper-plane"></i></button>
                    </form>
                </div>
            </div>
        </section><hr>

            <!-- About Us -->
        <section id="about">
        <h2 class="title text-center my-5">About Us</h2>
        </section><hr>
    </div>

    <footer style="text-align: center; margin: 100px 0 20px 0;">&copy; 2023 FONE Hub. All Right Reserve .</footer>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>