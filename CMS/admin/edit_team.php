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

if (isset($_POST['update_team'])) {

    $name = $_POST['name'];
    $designation = $_POST['designation'];
    $bio = $_POST['bio'];

    $photo = $row['photo'];

    if ($_FILES['photo']['name'] != "") {

        if (file_exists("../uploads/" . $photo)) {
            unlink("../uploads/" . $photo);
        }

        $photo = time() . "_" . $_FILES['photo']['name'];

        move_uploaded_file($_FILES['photo']['tmp_name'], "../uploads/" . $photo);

    }

    $sql = "UPDATE team_members
SET
name='$name',
designation='$designation',
bio='$bio',
photo='$photo'
WHERE id='$id'";

    mysqli_query($conn, $sql);

    header("Location: team.php");

    exit();

}

include("includes/header.php");
include("includes/sidebar.php");

?>

<div class="main">

    <div class="topbar">

        <h1>Edit Team Member</h1>

    </div>

    <form method="POST" enctype="multipart/form-data">

        <label>Name</label>

        <input type="text" name="name" value="<?php echo htmlspecialchars($row['name']); ?>" required>

        <label>Designation</label>

        <input type="text" name="designation" value="<?php echo htmlspecialchars($row['designation']); ?>" required>

        <label>Bio</label>

        <textarea name="bio" rows="5" required><?php echo htmlspecialchars($row['bio']); ?></textarea>

        <label>Current Photo</label>

        <br><br>

        <img src="../uploads/<?php echo $row['photo']; ?>" width="100" style="border-radius:8px;">

        <br><br>

        <label>Change Photo (Optional)</label>

        <input type="file" name="photo" accept="image/*">

        <button type="submit" name="update_team">

            Update Team Member

        </button>

    </form>

</div>

<?php include("includes/footer.php"); ?>