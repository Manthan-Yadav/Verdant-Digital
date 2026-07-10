<?php
session_start();

if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit();
}

require '../db.php';

if (!isset($_GET['id'])) {
    header("Location: services.php");
    exit();
}

$id = $_GET['id'];

// Fetch existing service
$result = mysqli_query($conn, "SELECT * FROM services WHERE id='$id'");

if (mysqli_num_rows($result) == 0) {
    header("Location: services.php");
    exit();
}

$row = mysqli_fetch_assoc($result);

$message = "";

// Update Service
if (isset($_POST['update_service'])) {
    $service_name = trim($_POST['service_name']);
    $description = trim($_POST['description']);

    if ($service_name != "" && $description != "") {
        $sql = "UPDATE services
                SET service_name='$service_name',
                    description='$description'
                WHERE id='$id'";

        if (mysqli_query($conn, $sql)) {
            header("Location: services.php");
            exit();
        } else {
            $message = "Failed to update service!";
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

            <h1>Edit Service</h1>

            <span>Update Service Details</span>

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

        <input type="text" name="service_name" value="<?php echo htmlspecialchars($row['service_name']); ?>" required>

        <label>Description</label>

        <textarea name="description" rows="6" required><?php echo htmlspecialchars($row['description']); ?></textarea>

        <button type="submit" name="update_service">

            Update Service

        </button>

    </form>

</div>

<?php include("includes/footer.php"); ?>