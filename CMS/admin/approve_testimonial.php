<?php

require '../db.php';

$id = $_GET['id'];

$sql = "UPDATE testimonials
SET status='Approved'
WHERE id='$id'";

mysqli_query($conn, $sql);

header("Location:testimonials.php");

?>