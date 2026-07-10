<?php

session_start();

if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit();
}

require '../db.php';

$id = $_GET['id'];

$result = mysqli_query($conn, "SELECT * FROM team_members WHERE id='$id'");

$row = mysqli_fetch_assoc($result);

if (file_exists("../uploads/" . $row['photo'])) {
    unlink("../uploads/" . $row['photo']);
}

mysqli_query($conn, "DELETE FROM team_members WHERE id='$id'");

header("Location: team.php");

exit();

?>