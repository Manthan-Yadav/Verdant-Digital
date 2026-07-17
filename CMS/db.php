<?php
$servername = "sql105.byethost11.com";
$username = "b11_42380941";
$password = "Manwork12";
$database = "b11_42380941_company_portfolio";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>