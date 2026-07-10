<?php

session_start();

if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit();
}

require '../db.php';

$result = mysqli_query($conn, "SELECT * FROM contact_enquiries ORDER BY id DESC");

include("includes/header.php");
include("includes/sidebar.php");

?>

<div class="main">

    <div class="topbar">

        <div>

            <h1>Contact Enquiries</h1>

            <span>View customer enquiries</span>

        </div>

    </div>

    <table>

        <tr>

            <th>ID</th>

            <th>Name</th>

            <th>Email</th>

            <th>Message</th>

            <th>Action</th>

        </tr>

        <?php

        if (mysqli_num_rows($result) > 0) {

            while ($row = mysqli_fetch_assoc($result)) {

                ?>

                <tr>

                    <td><?php echo $row['id']; ?></td>

                    <td><?php echo htmlspecialchars($row['name']); ?></td>

                    <td><?php echo htmlspecialchars($row['email']); ?></td>

                    <td><?php echo htmlspecialchars($row['message']); ?></td>

                    <td>

                        <a href="delete_contact.php?id=<?php echo $row['id']; ?>" class="action-btn delete-btn"
                            onclick="return confirm('Delete this enquiry?');">

                            <i class="fa-solid fa-trash"></i> Delete

                        </a>

                    </td>

                </tr>

                <?php

            }

        } else {

            ?>

            <tr>

                <td colspan="5">

                    No Contact Enquiries Found.

                </td>

            </tr>

            <?php

        }

        ?>

    </table>

</div>

<?php include("includes/footer.php"); ?>