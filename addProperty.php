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

                <p class="text text-primary">Register New Property</p>

                <hr>
                <form action="insert.php" method="post" enctype="multipart/form-data">

<div class="row">
    <div class="col-md-4">
        <label>House Number</label>
        <input class="form-control" type="text" name="house_number" placeholder="112 sinza B">
    </div>

    <div class="col-md-4">
        <label>Location (Latitude)</label>
        <input class="form-control" type="text" name="location" placeholder="Longitude, Latitude">
    </div>
    

    <div class="col-md-4">
        <label>Price</label>
        <input class="form-control" type="number" name="price" placeholder="0.00">
    </div>
</div>

<br>

<div class="row">
    <div class="col-md-4">
        <label>Upload House Image</label>
        <input class="form-control" type="file" name="house_image">
    </div>
</div>

<br>

<p class="text text-primary">Owner Details</p>

<hr>

<div class="row">
    <div class="col-md-4">
        <label>Full Name</label>
        <input class="form-control" type="text" name="owner_name" placeholder="Full Name">
    </div>

    <div class="col-md-4">
        <label>Email Address (Optional)</label>
        <input class="form-control" type="email" name="email" placeholder="Email Address">
    </div>

    <div class="col-md-4">
        <label>Mobile Number</label>
        <input class="form-control" type="text" name="mobile_number" placeholder="0712XXXXX">
    </div>
</div>

<button class="btn btn-primary mt-4" type="submit">Register</button>

</form>


            </div>
        </div>


    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
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