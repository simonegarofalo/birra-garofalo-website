<?php
// Configure the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "birra_garofalo";

// Create a connession
$conn = new mysqli($servername, $username, $password, $dbname);

// Connection check
if ($conn->connect_error) {
    exit("Connection failed: " . $conn->connect_error);
}

// Get the form data
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$trattamentodati = isset($_POST['trattamentodati']) ? 1 : 0;


$stmt = $conn->prepare("INSERT INTO users (firstname, lastname, email, trattamentodati) VALUES (?, ?, ?, ?)");
$stmt->bind_param("sssi", $firstname, $lastname, $email, $trattamentodati);

// Execute
if ($stmt->execute()) {
    echo "New record created successfully";
} else {
    echo "Error: " . $stmt->error;
}

// Close connection
$stmt->close();
$conn->close();

// Redirect to the confirmation page
header("Location: thank_you.html");
exit();
?>