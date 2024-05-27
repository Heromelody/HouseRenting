<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hr";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$house_id = $_GET['house_id'];
$sql = "SELECT house_number, location, price FROM houses WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $house_id);
$stmt->execute();
$result = $stmt->get_result();

$house = $result->fetch_assoc();
$stmt->close();
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>HOUSE RENTAL - Home Page</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="user/lib/animate/animate.min.css" rel="stylesheet">
    <link href="user/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="user/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="user/css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-xxl bg-white p-0">


        <!-- Navbar Start -->
        <div class="container-fluid nav-bar bg-transparent">
            <nav class="navbar navbar-expand-lg bg-white navbar-light py-0 px-4">
                <a href="index.php" class="navbar-brand d-flex align-items-center text-center">
                    <div class="icon p-2 me-2">
                        <img class="img-fluid" src="user/img/icon-deal.png" alt="Icon" style="width: 30px; height: 30px;">
                    </div>
                    <h1 class="m-0 text-primary">House Rental</h1>
                </a>
                <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto">
                        <a href="index.php" class="nav-item nav-link active">Home</a>
                        <a href="#" class="nav-item nav-link">Property List</a>
                        <a href="#" class="nav-item nav-link">Contact</a>
                    </div>
                    <a href="addProperty.php" class="btn btn-primary px-3 d-none d-lg-flex">Add Property</a>
                </div>
            </nav>
        </div>
        <!-- Navbar End -->

        <!-- Call to Action Start -->
        <div class="container-xxl py-5">
            <div class="container">

                <h2>Book House</h2>
                <form action="process_booking.php" method="post">

                    <div class="row">

                        <input type="hidden" name="house_id" value="<?php echo htmlspecialchars($house_id); ?>">

                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Your Name</label>
                                <input type="text" class="form-control" name="name" required placeholder="John">
                            </div>

                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Your Phone Number</label>
                                <input type="text" class="form-control" name="phone" required placeholder="0713XXXXX">
                            </div>
                        </div>


                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Physical Address</label>
                                <input type="text" class="form-control" name="location" placeholder="dsm">
                            </div>
                        </div>

                    </div>

                    <button type="submit" class="btn btn-primary mt-4">Submit</button>
                </form>

            </div>

        </div>

    </div>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="user/lib/wow/wow.min.js"></script>
    <script src="user/lib/easing/easing.min.js"></script>
    <script src="user/lib/waypoints/waypoints.min.js"></script>
    <script src="user/lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="user/js/main.js"></script>
</body>

</html>