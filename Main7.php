<!-- Q6.Write a PHP Script to Collect the Data from the Registration Form Designed in HTML, and Submit it to the Database. -->
<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "registration_db";
$conn = new mysqli($host, $user, $pass, $dbname);
if ($conn->connect_error) {
    die("Connection failed : " . $conn->connect_error);
}
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$stmt = $conn->prepare("INSERT INTO students (name, email, phone, address) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $name, $email, $phone, $address);
if ($stmt->execute()) {
    echo "Registration Successful! <a href='Main8.php'>View All Records</a>";
} else {
    echo "Error : " . $stmt->error;
}
$stmt->close();
$conn->close();
?>