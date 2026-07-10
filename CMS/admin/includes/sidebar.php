<div class="sidebar">

    <div class="logo">

        <div class="logo-circle">
            <i class="fa-solid fa-leaf"></i>
        </div>

        <h2>Verdant Digital</h2>

        <p>Content Management System</p>

    </div>

    <ul>

        <li>
            <a href="dashboard.php"
                class="<?php echo basename($_SERVER['PHP_SELF']) == "dashboard.php" ? "active" : ""; ?>">
                <i class="fa-solid fa-chart-line"></i>
                <span>Dashboard</span>
            </a>
        </li>

        <li>
            <a href="services.php"
                class="<?php echo basename($_SERVER['PHP_SELF']) == "services.php" ? "active" : ""; ?>">
                <i class="fa-solid fa-layer-group"></i>
                <span>Services</span>
            </a>
        </li>

        <li>
            <a href="team.php" class="<?php echo basename($_SERVER['PHP_SELF']) == "team.php" ? "active" : ""; ?>">
                <i class="fa-solid fa-users"></i>
                <span>Team Members</span>
            </a>
        </li>

        <li>
            <a href="testimonials.php"
                class="<?php echo basename($_SERVER['PHP_SELF']) == "testimonials.php" ? "active" : ""; ?>">
                <i class="fa-solid fa-star"></i>
                <span>Testimonials</span>
            </a>
        </li>

        <li>
            <a href="contact.php" class="<?php echo basename($_SERVER['PHP_SELF']) == "contact.php" ? "active" : ""; ?>">
                <i class="fa-solid fa-envelope"></i>
                <span>Enquiries</span>
            </a>
        </li>

    </ul>

    <div class="sidebar-bottom">

        <a href="logout.php">

            <i class="fa-solid fa-right-from-bracket"></i>

            Logout

        </a>

    </div>

</div>