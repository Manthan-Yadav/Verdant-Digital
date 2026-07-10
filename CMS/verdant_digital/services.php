<?php
require '../db.php';
$sql = "SELECT * FROM services ORDER BY id ASC";
$result = mysqli_query($conn, $sql);
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enterprise Practices | Verdant Consulting</title>
    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom Style -->
    <link href="css/style.css" rel="stylesheet">
</head>
<body>

    <!-- Sticky Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top navbar-custom">
        <div class="container px-4">
            <a class="navbar-brand d-flex align-items-center gap-2" href="index.php">
                <div class="p-2 bg-success rounded-3 d-flex align-items-center justify-content-center" style="width: 2.25rem; height: 2.25rem; background-color: var(--primary-color) !important;">
                    <i data-lucide="leaf" style="color: var(--accent-color); width: 1.15rem; height: 1.15rem;"></i>
                </div>
                <div>
                    <span class="navbar-brand-text">VERDANT</span>
                    <span class="navbar-brand-sub">DIGITAL</span>
                </div>

            </a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 gap-4 me-4">
                    <li class="nav-item">
                        <a class="nav-link nav-link-custom active" href="index.php#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-custom" href="index.php#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-custom" href="services.php">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-custom" href="team.php">Team</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-custom" href="index.php#testimonials">Testimonials</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-custom" href="index.php#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Page Header -->
    <section class="py-5 text-center" style="padding-top: 10rem !important;">
        <div class="container px-4">
            <div class="d-inline-flex align-items-center gap-2 px-3 py-1 bg-dark border border-success rounded-pill mb-4" style="border-color: rgba(40, 90, 72, 0.4) !important;">
                <span class="subheading text-white m-0" style="font-size: 0.65rem;">02 / practice fields</span>
            </div>
            <h1 class="display-4 fw-bold text-white mb-4" style="font-family: var(--font-headings); max-width: 800px; margin: 0 auto; line-height: 1.15;">
                Specialized <span style="color: var(--accent-color);">Strategic</span> Advisory
            </h1>
            <p class="lead mx-auto" style="max-width: 600px;">
                Explore our specialized practice lines. We combine organizational consulting with luxury visual branding and digital efficiency to unlock maximum commercial headroom.
            </p>
        </div>
    </section>

    <!-- Detailed Practices Grid -->
    <section class="py-5">
        <div class="container px-4 text-start">
            <div class="row g-4">

                <?php while($row = mysqli_fetch_assoc($result)) { ?>

                    <div class="col-lg-4 col-md-6">

                        <div class="card card-custom d-flex flex-column h-100">

                            <h3 class="h5 fw-bold text-white mb-3">
                                <?php echo htmlspecialchars($row['service_name']); ?>
                            </h3>

                            <p class="small mb-4">
                                <?php echo htmlspecialchars($row['description']); ?>
                            </p>

                        </div>

                    </div>

                <?php } ?>

                </div>
        </div>
    </section>

    <!-- Professional Footer -->
    <footer class="py-5" style="background-color: #050b0a; border-top: 1px solid rgba(40, 90, 72, 0.15);">
        <div class="container px-4 py-4 text-start">
            <div class="row g-5 mb-5">
                <div class="col-lg-5">
                    <a class="d-flex align-items-center gap-2 text-decoration-none mb-4" href="index.php">
                        <div class="p-2 bg-success rounded-3 d-flex align-items-center justify-content-center" style="width: 2rem; height: 2rem; background-color: var(--primary-color) !important;">
                            <i data-lucide="leaf" style="color: var(--accent-color); width: 1rem; height: 1rem;"></i>
                        </div>
                        <div>
                            <span class="navbar-brand-text h6 m-0 text-white">VERDANT</span>
                            <span class="navbar-brand-sub" style="font-size: 0.5rem;">DIGITAL</span>
                        </div>
                    </a>
                    <p class="mb-4">Engineered guidance for the contemporary enterprise. Harmonizing commercial growth with sustainability and modern design paradigms.</p>
                </div>

                <div class="col-lg-7">
                    <!-- <div class="footer-review-card p-4 p-md-5 rounded-4"> -->
                    <div class="footer-review-card p-3 p-md-4 rounded-4 mx-auto" style="max-width:550px;">    
                        <!-- <h2 class="h4 text-white mb-4" style="font-family: var(--font-headings);">Experience</h2> -->
                        <span class="navbar-brand-text h6 m-0 text-white">Share Your Experience</span>
                        <form action="submit_testimonial.php" method="POST" class="d-flex flex-column gap-2" id="footer-review-form">
                            <div>
                                <label class="form-label text-white" for="footer-review-name">Full Name</label>
                                <input type="text" id="footer-review-name" name="name" class="form-control bg-dark text-white border-success footer-review-input" placeholder="Enter your name" required>
                            </div>

                            <div>
                                <label class="form-label text-white">Rating</label>
                                <div class="d-flex gap-2 footer-star-rating" id="footer-star-rating">

                                    <i data-lucide="star" class="star" data-value="1"></i>

                                    <i data-lucide="star" class="star" data-value="2"></i>

                                    <i data-lucide="star" class="star" data-value="3"></i>

                                    <i data-lucide="star" class="star" data-value="4"></i>

                                    <i data-lucide="star" class="star" data-value="5"></i>
                                </div>

                                <input type="hidden" name="rating" id="footer-rating-input" value="5" required>
                            </div>

                            <div>
                                <label class="form-label text-white" for="footer-review-text">Review</label>
                                <textarea id="footer-review-text" name="review" class="form-control bg-dark text-white border-success footer-review-input" rows="4" placeholder="Write your review here..." required></textarea>
                            </div>

                            <button type="submit" class="btn btn-primary-custom w-100 py-2 footer-review-btn">
                                Submit Review
                            </button>
                        </form>
                    </div>
                </div>

            </div>
            <div class="d-flex flex-column flex-md-row align-items-center justify-content-between pt-4 border-top" style="border-top-color: rgba(40, 90, 72, 0.15) !important;">
                <p class="small mb-0">© 2026 Verdant Digital Group. All Rights Reserved.</p>
                <div class="d-flex gap-4 mt-3 mt-md-0">

                    <a href="#" class="text-decoration-none small" style="color:#a0b8ad;">
                        Privacy Policy
                    </a>

                    <a href="#" class="text-decoration-none small" style="color:#a0b8ad;">
                        Terms of Engagement
                    </a>

                    <a href="../admin/login.php" class="text-decoration-none small"
                        style="color:#408A71;font-weight:600;">
                        <i data-lucide="shield-check"></i>
                        Admin Dashboard
                    </a>

                </div>
            </div>
        </div>
    </footer>

    <!-- Scroll-to-Top Button -->
    <button class="scroll-to-top-btn" aria-label="Scroll to top">
        <i data-lucide="arrow-up"></i>
    </button>

    <!-- Lucide Icons CDN -->
    <script src="https://unpkg.com/lucide@latest"></script>
    <script>
        lucide.createIcons();
    </script>
    <!-- Bootstrap 5 JS CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Custom Script -->
    <script src="js/script.js"></script>
    
    <?php
    if(isset($_GET['contact']))
    {
    ?>
    <script>
    document.addEventListener("DOMContentLoaded",function(){
        alert("Thank you! Your consultation request has been sent successfully.");
    });
    </script>
    <?php
    }
    ?>

    <?php
    if(isset($_GET['review']))
    {
    ?>
    <script>
    document.addEventListener("DOMContentLoaded",function(){
        alert("Thank you! Your review has been submitted successfully.");
    });
    </script>
    <?php
    }
    ?>
</body>
</html>