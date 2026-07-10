<?php
session_start();

if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit();
}

require '../db.php';

$message = "";

if (isset($_POST['add_service'])) {
    $service_name = trim($_POST['service_name']);
    $description = trim($_POST['description']);

    if ($service_name != "" && $description != "") {
        $sql = "INSERT INTO services(service_name, description)
                VALUES('$service_name', '$description')";

        if (mysqli_query($conn, $sql)) {
            header("Location: services.php");
            exit();
        } else {
            $message = "Error while adding service!";
        }
    } else {
        $message = "Please fill all fields.";
    }
}

include("includes/header.php");
include("includes/sidebar.php");
?>

<div class="main">

    <div class="topbar">

        <div>
            <h1>Add New Service</h1>
            <span>Create a new service</span>
        </div>

        <div>
            <a href="services.php" class="btn">
                ← Back
            </a>
        </div>

    </div>

    <?php
    if ($message != "") {
        echo "<div class='error'>$message</div>";
    }
    ?>

    <form method="POST">

        <label>Service Name</label>

        <input type="text" name="service_name" placeholder="Enter Service Name" required>

        <label>Description</label>

        <textarea name="description" rows="6" placeholder="Enter Description" required></textarea>

        <button type="submit" name="add_service">

            Add Service

        </button>

    </form>

</div>

<?php include("includes/footer.php"); ?>