<?php

session_start();

if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit();
}

require '../db.php';

$result = mysqli_query($conn, "SELECT * FROM testimonials ORDER BY created_at DESC");

include("includes/header.php");
include("includes/sidebar.php");

?>

<div class="main">

    <div class="topbar">

        <div>

            <h1>Testimonials</h1>

            <span>Approve or Delete Testimonials</span>

        </div>

    </div>

    <table>

        <tr>

            <th>ID</th>

            <th>Name</th>

            <th>Review</th>

            <th>Rating</th>

            <th>Status</th>

            <th>Date</th>

            <th>Action</th>

        </tr>

        <?php

        if (mysqli_num_rows($result) > 0) {

            while ($row = mysqli_fetch_assoc($result)) {

                ?>

                <tr>

                    <td><?php echo $row['id']; ?></td>

                    <td><?php echo htmlspecialchars($row['name']); ?></td>

                    <td><?php echo htmlspecialchars($row['review']); ?></td>

                    <td>

                        <?php

                        for ($i = 1; $i <= $row['rating']; $i++) {
                            echo "⭐";
                        }

                        ?>

                    </td>

                    <td>

                        <?php

                        if ($row['status'] == "Pending") {
                            echo "<span style='color:orange;font-weight:bold;'>Pending</span>";
                        } else {
                            echo "<span style='color:limegreen;font-weight:bold;'>Approved</span>";
                        }

                        ?>

                    </td>

                    <td>

                        <?php echo date("d M Y", strtotime($row['created_at'])); ?>

                    </td>

                    <td>

                        <?php

                        if ($row['status'] == "Pending") {

                            ?>

                            <a href="approve_testimonial.php?id=<?php echo $row['id']; ?>" class="btn">

                                Approve

                            </a>

                            <?php

                        }

                        ?>

                        <a href="delete_testimonial.php?id=<?php echo $row['id']; ?>" class="action-btn delete-btn"
                            onclick="return confirm('Delete this testimonial?')">

                            <i class="fa-solid fa-trash"></i> Delete

                        </a>

                    </td>

                </tr>

                <?php

            }

        } else {

            ?>

            <tr>

                <td colspan="7">

                    No Testimonials Found.

                </td>

            </tr>

            <?php

        }

        ?>

    </table>

</div>

<?php include("includes/footer.php"); ?>