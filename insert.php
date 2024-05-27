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

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $house_number = $_POST['house_number'];
    $location = $_POST['location'];
    $price = $_POST['price'];
    $owner_name = $_POST['owner_name'];
    $email = $_POST['email'];
    $mobile_number = $_POST['mobile_number'];

    // Handle file upload
    // if (isset($_FILES['house_image']) && $_FILES['house_image']['error'] == 0) {
    //     $target_dir = "uploads/";
    //     $target_file = $target_dir . basename($_FILES["house_image"]["name"]);
    //     $image_path = "";

    //     if (move_uploaded_file($_FILES["house_image"]["tmp_name"], $target_file)) {
    //         $image_path = $target_file;
    //     } else {
    //         echo "Sorry, there was an error uploading your file.";
    //         exit;
    //     }
    // } else {
    //     // Output specific error
    //     switch ($_FILES['house_image']['error']) {
    //         case UPLOAD_ERR_INI_SIZE:
    //             echo "The uploaded file exceeds the upload_max_filesize directive in php.ini.";
    //             break;
    //         case UPLOAD_ERR_FORM_SIZE:
    //             echo "The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form.";
    //             break;
    //         case UPLOAD_ERR_PARTIAL:
    //             echo "The uploaded file was only partially uploaded.";
    //             break;
    //         case UPLOAD_ERR_NO_FILE:
    //             echo "No file was uploaded.";
    //             break;
    //         case UPLOAD_ERR_NO_TMP_DIR:
    //             echo "Missing a temporary folder.";
    //             break;
    //         case UPLOAD_ERR_CANT_WRITE:
    //             echo "Failed to write file to disk.";
    //             break;
    //         case UPLOAD_ERR_EXTENSION:
    //             echo "A PHP extension stopped the file upload.";
    //             break;
    //         default:
    //             echo "Unknown upload error.";
    //             break;
    //     }
    //     exit;
    // }

    $stmt = $conn->prepare("INSERT INTO houses (house_number, location, price, image_path, owner_name, email, mobile_number) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssdssss", $house_number, $location, $price, $image_path, $owner_name, $email, $mobile_number);

    if ($stmt->execute()) {
        echo "New record created successfully";

        header("Location: index.php");
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>
