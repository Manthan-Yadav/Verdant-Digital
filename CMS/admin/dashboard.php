<?php

session_start();

if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit();
}

require '../db.php';

// Total Services
$service = mysqli_query($conn, "SELECT COUNT(*) AS total FROM services");
$serviceCount = mysqli_fetch_assoc($service)['total'];

// Total Team Members
$team = mysqli_query($conn, "SELECT COUNT(*) AS total FROM team_members");
$teamCount = mysqli_fetch_assoc($team)['total'];

// Total Testimonials
$testimonial = mysqli_query($conn, "SELECT COUNT(*) AS total FROM testimonials");
$testimonialCount = mysqli_fetch_assoc($testimonial)['total'];

// Total Contact Queries
$contact = mysqli_query($conn, "SELECT COUNT(*) AS total FROM contact_enquiries");
$contactCount = mysqli_fetch_assoc($contact)['total'];

// Pending Testimonials
$pending = mysqli_query($conn, "SELECT COUNT(*) AS total FROM testimonials WHERE status='Pending'");
$pendingCount = mysqli_fetch_assoc($pending)['total'];

// Approved Testimonials
$approved = mysqli_query($conn, "SELECT COUNT(*) AS total FROM testimonials WHERE status='Approved'");
$approvedCount = mysqli_fetch_assoc($approved)['total'];

// Latest 5 Contact Enquiries
$latestContacts = mysqli_query($conn, "
SELECT *
FROM contact_enquiries
ORDER BY id DESC
LIMIT 5
");

// Latest 5 Testimonials
$latestTestimonials = mysqli_query($conn, "
SELECT *
FROM testimonials
ORDER BY id DESC
LIMIT 5
");

// Greeting
$hour = date("H");

if ($hour < 12) {
    $greeting = "Good Morning";
} elseif ($hour < 17) {
    $greeting = "Good Afternoon";
} else {
    $greeting = "Good Evening";
}

include("includes/header.php");

?>

<?php include("includes/sidebar.php"); ?>

<div class="main">

    <!-- Welcome Banner -->

    <div class="welcome-banner">

        <div class="welcome-content">

            <h1>
                <?php echo $greeting; ?>,
                <span><?php echo $_SESSION['admin']; ?></span> 👋
            </h1>

            <p>

                Manage your website content, team members,
                customer testimonials and enquiries from one
                centralized administration dashboard.

            </p>

            <div class="banner-info">

                <div>

                    <i class="fa-solid fa-user-shield"></i>

                    Administrator

                </div>

                <div>

                    <i class="fa-solid fa-layer-group"></i>

                    4 Modules

                </div>

                <div>

                    <i class="fa-solid fa-circle-check"></i>

                    System Active

                </div>

            </div>
        </div>

        <div class="date-card">

            <h2><?php echo date("d"); ?></h2>

            <span><?php echo date("M"); ?></span>

            <p><?php echo date("Y"); ?></p>

            <hr>

            <small><?php echo date("l"); ?></small>

        </div>

    </div>



    <!-- Analytics -->

    <div class="section-title">

        <h2>Website Overview</h2>

        <p>Live statistics of your website</p>

    </div>


    <div class="dashboard-grid">

        <div class="stat-card">

            <div class="stat-icon">
                <i class="fa-solid fa-layer-group"></i>
            </div>

            <div class="stat-info">

                <h3><?php echo $serviceCount; ?></h3>

                <p>Total Services</p>

            </div>

        </div>



        <div class="stat-card">

            <div class="stat-icon">
                <i class="fa-solid fa-users"></i>
            </div>

            <div class="stat-info">

                <h3><?php echo $teamCount; ?></h3>

                <p>Team Members</p>

            </div>

        </div>



        <div class="stat-card">

            <div class="stat-icon">
                <i class="fa-solid fa-star"></i>
            </div>

            <div class="stat-info">

                <h3><?php echo $testimonialCount; ?></h3>

                <p>Testimonials</p>

            </div>

        </div>



        <div class="stat-card">

            <div class="stat-icon">
                <i class="fa-solid fa-envelope"></i>
            </div>

            <div class="stat-info">

                <h3><?php echo $contactCount; ?></h3>

                <p>Enquiries</p>

            </div>

        </div>

    </div>



    <!-- Quick Actions -->

    <div class="section-title">

        <h2>Quick Actions</h2>

        <p>Frequently used admin operations</p>

    </div>


    <div class="action-grid">

        <a href="services.php" class="action-card">

            <i class="fa-solid fa-layer-group"></i>

            <h3>Manage Services</h3>

            <span>Add, edit or delete services</span>

        </a>


        <a href="team.php" class="action-card">

            <i class="fa-solid fa-users"></i>

            <h3>Team Members</h3>

            <span>Manage company members</span>

        </a>


        <a href="testimonials.php" class="action-card">

            <i class="fa-solid fa-star"></i>

            <h3>Testimonials</h3>

            <span>Approve or reject reviews</span>

        </a>


        <a href="contact.php" class="action-card">

            <i class="fa-solid fa-envelope"></i>

            <h3>Contact Enquiries</h3>

            <span>View customer enquiries</span>

        </a>

    </div>



    <!-- Testimonial Summary -->

    <div class="section-title">

        <h2>Testimonials Overview</h2>

    </div>


    <div class="dashboard-grid">

        <div class="summary-card">

            <h3>Pending Reviews</h3>

            <h1><?php echo $pendingCount; ?></h1>

            <span>Awaiting Approval</span>

        </div>

        <div class="summary-card">

            <h3>Approved Reviews</h3>

            <h1><?php echo $approvedCount; ?></h1>

            <span>Published</span>

        </div>

    </div>

    <br><br>

    <!-- Latest Data -->

    <div class="two-column">

        <!-- Latest Testimonials -->

        <div class="panel">

            <div class="panel-header">

                <h2>Latest Testimonials</h2>

            </div>

            <table>

                <tr>

                    <th>Name</th>

                    <th>Rating</th>

                    <th>Status</th>

                </tr>

                <?php while ($row = mysqli_fetch_assoc($latestTestimonials)) { ?>

                    <tr>

                        <td><?php echo $row['name']; ?></td>

                        <td><?php echo str_repeat("⭐", $row['rating']); ?></td>

                        <td><?php echo $row['status']; ?></td>

                    </tr>

                <?php } ?>

            </table>

        </div>



        <!-- Latest Enquiries -->

        <div class="panel">

            <div class="panel-header">

                <h2>Latest Enquiries</h2>

            </div>

            <table>

                <tr>

                    <th>Name</th>

                    <th>Email</th>

                </tr>

                <?php while ($row = mysqli_fetch_assoc($latestContacts)) { ?>

                    <tr>

                        <td><?php echo $row['name']; ?></td>

                        <td><?php echo $row['email']; ?></td>

                    </tr>

                <?php } ?>

            </table>

        </div>

    </div>



    <br><br>



    <!-- System Status -->

    <div class="panel">

        <div class="panel-header">

            <h2>System Status</h2>

        </div>

        <div class="status-grid">

            <div class="status-box">

                <i class="fa-solid fa-database"></i>

                <h3>Database</h3>

                <p class="online">Connected</p>

            </div>

            <div class="status-box">

                <i class="fa-brands fa-php"></i>

                <h3>PHP</h3>

                <p class="online">Running</p>

            </div>

            <div class="status-box">

                <i class="fa-solid fa-server"></i>

                <h3>Server</h3>

                <p class="online">Online</p>

            </div>

        </div>

    </div>

</div>

<?php include("includes/footer.php"); ?>