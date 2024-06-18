<?php
// Configurazione del database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "birra_garofalo";

// Creare connessione
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificare connessione
if ($conn->connect_error) {
    exit("Connection failed: " . $conn->connect_error);
}

// Ottenere i dati dal form
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$region = $_POST['region'];
$trattamentodati = isset($_POST['trattamentodati']) ? 1 : 0;

// Preparare e bind
$stmt = $conn->prepare("INSERT INTO users (firstname, lastname, region, trattamentodati) VALUES (?, ?, ?, ?)");
$stmt->bind_param("sssi", $firstname, $lastname, $region, $trattamentodati);

// Eseguire
if ($stmt->execute()) {
    echo "New record created successfully";
} else {
    echo "Error: " . $stmt->error;
}

// Chiudere connessione
$stmt->close();
$conn->close();

// Reindirizzare a una pagina di conferma o tornare al form
header("Location: thank_you.html");
exit();
?>