<?php
$servername = "localhost";  // correcció: estava com "locahost"
$username   = "appuser";
$password   = "app123";       // o buit "" depenent del teu MySQL
$dbname     = "crud_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connexió fallida: " . $conn->connect_error);
}
?>
