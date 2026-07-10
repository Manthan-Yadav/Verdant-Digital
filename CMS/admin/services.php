<?php
session_start();

if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit();
}

require '../db.php';

$result = mysqli_query($conn, "SELECT * FROM services");

include("includes/header.php");
include("includes/sidebar.php");
?>

<div class="main">

    <div class="topbar">

        <div>
            <h1>Manage Services</h1>
            <span>View, Add, Edit & Delete Services</span>
        </div>

        <div>
            <a href="add_service.php" class="btn">
                <i class="fa-solid fa-plus"></i> Add Service
            </a>
        </div>

    </div>

    <table>

        <tr>

            <th>ID</th>

            <th>Service Name</th>

            <th>Description</th>

            <th width="180">Action</th>

        </tr>

        <?php

        if (mysqli_num_rows($result) > 0) {

            while ($row = mysqli_fetch_assoc($result)) {

                ?>

                <tr>

                    <td><?php echo $row['id']; ?></td>

                    <td><?php echo $row['service_name']; ?></td>

                    <td><?php echo $row['description']; ?></td>

                    <td>

                        <a href="edit_service.php?id=<?php echo $row['id']; ?>" class="action-btn edit-btn">
                            <i class="fa-solid fa-pen"></i> Edit
                        </a>

                        <a href="delete_service.php?id=<?php echo $row['id']; ?>" class="action-btn delete-btn"
                            onclick="return confirm('Delete this service?')">
                            <i class="fa-solid fa-trash"></i> Delete
                        </a>

                    </td>

                </tr>

                <?php

            }

        } else {

            ?>

            <tr>

                <td colspan="4">

                    No Services Found.

                </td>

            </tr>

            <?php

        }

        ?>

    </table>

</div>

<?php include("includes/footer.php"); ?>