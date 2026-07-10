<?php
session_start();

if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit();
}

require '../db.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM services WHERE id='$id'";

    if (mysqli_query($conn, $sql)) {
        header("Location: services.php");
        exit();
    } else {
        echo "Failed to delete service.";
    }
} else {
    header("Location: services.php");
    exit();
}
?>