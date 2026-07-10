<?php

session_start();

if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit();
}

require '../db.php';

$message = "";

if (isset($_POST['add_team'])) {

    $name = trim($_POST['name']);
    $designation = trim($_POST['designation']);
    $bio = trim($_POST['bio']);

    $photo = $_FILES['photo']['name'];
    $tmp_name = $_FILES['photo']['tmp_name'];

    if ($photo != "") {

        $photo = time() . "_" . $photo;

        move_uploaded_file($tmp_name, "../uploads/" . $photo);

        $sql = "INSERT INTO team_members(name,designation,bio,photo)
VALUES('$name','$designation','$bio','$photo')";

        if (mysqli_query($conn, $sql)) {

            header("Location: team.php");
            exit();

        } else {

            $message = "Failed to add team member.";

        }

    } else {

        $message = "Please select a photo.";

    }

}

include("includes/header.php");
include("includes/sidebar.php");

?>

<div class="main">

    <div class="topbar">

        <div>

            <h1>Add Team Member</h1>

            <span>Add a new member to the team</span>

        </div>

        <div>

            <a href="team.php" class="btn">

                ← Back

            </a>

        </div>

    </div>

    <?php

    if ($message != "") {

        echo "<div class='error'>$message</div>";

    }

    ?>

    <form method="POST" enctype="multipart/form-data">

        <label>Name</label>

        <input type="text" name="name" required>

        <label>Designation</label>

        <input type="text" name="designation" required>

        <label>Bio</label>

        <textarea name="bio" rows="5" required></textarea>

        <label>Photo</label>

        <input type="file" name="photo" accept="image/*" required>

        <button type="submit" name="add_team">

            Add Team Member

        </button>

    </form>

</div>

<?php include("includes/footer.php"); ?>