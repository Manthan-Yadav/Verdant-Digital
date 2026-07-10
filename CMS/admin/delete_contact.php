<?php

session_start();

if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit();
}

require '../db.php';

if (isset($_GET['id'])) {

    $id = $_GET['id'];

    mysqli_query($conn, "DELETE FROM contact_enquiries WHERE id='$id'");

}

header("Location:contact.php");

exit();

?>