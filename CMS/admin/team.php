<?php

session_start();

if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit();
}

require '../db.php';

$result = mysqli_query($conn, "SELECT * FROM team_members ORDER BY id DESC");

include("includes/header.php");
include("includes/sidebar.php");

?>

<div class="main">

    <div class="topbar">

        <div>

            <h1>Team Members</h1>

            <span>Manage Team Members</span>

        </div>

        <div>

            <a href="add_team.php" class="btn">

                + Add Team Member

            </a>

        </div>

    </div>

    <table>

        <tr>

            <th>ID</th>

            <th>Photo</th>

            <th>Name</th>

            <th>Designation</th>

            <th>Bio</th>

            <th>Action</th>

        </tr>

        <?php

        if (mysqli_num_rows($result) > 0) {

            while ($row = mysqli_fetch_assoc($result)) {

                ?>

                <tr>

                    <td><?php echo $row['id']; ?></td>

                    <td>

                        <?php

                        if (!empty($row['photo'])) {

                            ?>

                            <img src="../uploads/<?php echo $row['photo']; ?>" width="60" height="60"
                                style="border-radius:50%; object-fit:cover;">

                            <?php

                        } else {

                            echo "No Photo";

                        }

                        ?>

                    </td>

                    <td><?php echo htmlspecialchars($row['name']); ?></td>

                    <td><?php echo htmlspecialchars($row['designation']); ?></td>

                    <td><?php echo htmlspecialchars($row['bio']); ?></td>

                    <td>

                        <a href="edit_team.php?id=<?php echo $row['id']; ?>" class="btn">

                            Edit

                        </a>

                        <a href="delete_team.php?id=<?php echo $row['id']; ?>" class="action-btn delete-btn"
                            onclick="return confirm('Delete this team member?')">

                            <i class="fa-solid fa-trash"></i> Delete

                        </a>

                    </td>

                </tr>

                <?php

            }

        } else {

            ?>

            <tr>

                <td colspan="6">

                    No Team Members Found.

                </td>

            </tr>

            <?php

        }

        ?>

    </table>

</div>

<?php include("includes/footer.php"); ?>