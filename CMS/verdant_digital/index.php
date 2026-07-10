<?php

require '../db.php';

$sql = "SELECT * FROM services LIMIT 3";
$result = mysqli_query($conn, $sql);

$sql = "SELECT * FROM team_members ORDER BY id ASC LIMIT 4";
$result1 = mysqli_query($conn, $sql);


$sql = "SELECT *
FROM testimonials
WHERE status='Approved'
ORDER BY id DESC
LIMIT 3";

$result2 = mysqli_query($conn, $sql);
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verdant Digital | Premium Website Design</title>
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
                <div class="p-2 bg-success rounded-3 d-flex align-items-center justify-content-center"
                    style="width: 2.25rem; height: 2.25rem; background-color: var(--primary-color) !important;">
                    <i data-lucide="leaf" style="color: var(--accent-color); width: 1.15rem; height: 1.15rem;"></i>
                </div>
                <div>
                    <span class="navbar-brand-text">VERDANT</span>
                    <span class="navbar-brand-sub">DIGITAL</span>
                </div>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
                aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 gap-4 me-4">
                    <li class="nav-item">
                        <a class="nav-link nav-link-custom active" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-custom" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-custom" href="services.php">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-custom" href="team.php">Team</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-custom" href="#testimonials">Testimonials</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-custom" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="hero-section">
        <div class="hero-glow"></div>
        <div class="container px-4">
            <div class="row align-items-center gy-5">
                <div class="col-lg-7 text-start">
                    <div class="d-inline-flex align-items-center gap-2 px-3 py-1.5 rounded-pill mb-4"
                        style="background-color: rgba(40, 90, 72, 0.2); border: 1px solid rgba(40, 90, 72, 0.4);">
                        <i data-lucide="award" style="color: var(--accent-color); width: 0.9rem; height: 0.9rem;"></i>
                        <span class="subheading text-white m-0" style="font-size: 0.65rem;">Premier Strategic
                            Advisory</span>
                    </div>
                    <h1 class="display-4 fw-bold mb-4" style="font-family: var(--font-headings); line-height: 1.15;">
                        Harmonize <span style="color: var(--accent-color);">Commercial Growth</span> with Sustainable
                        Design
                    </h1>
                    <p class="lead mb-5" style="color: #a0b8ad;">
                        Growing Businesses Through Digital Innovation.
                        Smart Strategies. Sustainable Success.
                    </p>
                    <div class="d-flex flex-wrap gap-3">
                        <a href="#contact" class="btn btn-primary-custom px-4 py-3 d-flex align-items-center gap-2">
                            Enquiries Solutions <i data-lucide="arrow-right" style="width: 1rem; height: 1rem;"></i>
                        </a>
                        <a href="services.php" class="btn btn-secondary-custom px-4 py-3">
                            Explore Services
                        </a>
                    </div>
                </div>
                <div class="col-lg-5 text-center">
                    <div class="position-relative p-2 rounded-4"
                        style="background: linear-gradient(to right, #285A48, #408A71, #B0E4CC) 1; border: 1px solid rgba(40, 90, 72, 0.3);">
                        <img src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?auto=format&fit=crop&q=80&w=800&h=800"
                            alt="Meeting" class="img-fluid rounded-3 shadow-lg" style="object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-5" style="border-top: 1px solid rgba(40, 90, 72, 0.15);">
        <div class="container px-4 py-5">
            <div class="row align-items-center gy-5">
                <div class="col-lg-5 text-start">
                    <span class="subheading d-block mb-3">01 / Founders Statement</span>
                    <h2 class="h1 fw-bold text-white mb-4" style="font-family: var(--font-headings);">
                        Designed for startups, entrepreneurs, and enterprises seeking reliable digital solutions
                    </h2>
                    <div class="mb-4" style="width: 80px; height: 2px; background-color: var(--primary-color);"></div>
                    <p class="mb-4">
                        "Growth begins with a vision.
                        Innovation turns that vision into reality.
                        Success is what we build together."
                    </p>
                </div>
                <div class="col-lg-7">
                    <div class="row g-4 text-start">
                        <div class="col-md-6">
                            <div class="card card-custom">
                                <div class="card-icon-container">
                                    <i data-lucide="users"></i>
                                </div>
                                <h3 class="h5 fw-bold text-white mb-3">Our Mission</h3>
                                <p class="card-text mb-0">
                                    To empower businesses with innovative digital solutions that inspire growth, build
                                    trust, and create lasting value.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card card-custom">
                                <div class="card-icon-container">
                                    <i data-lucide="sparkles"></i>
                                </div>
                                <h3 class="h5 fw-bold text-white mb-3">Our Vision</h3>
                                <p class="card-text mb-0">
                                    To become a trusted digital consulting partner, helping businesses embrace
                                    technology and succeed in an ever-evolving digital world.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Extended About Section -->
    <section class="py-5"
        style="background-color: #050b0a; border-top: 1px solid rgba(40, 90, 72, 0.15); border-bottom: 1px solid rgba(40, 90, 72, 0.15);">
        <div class="container px-4 py-5">
            <div class="row align-items-center gy-5 text-start">
                <div class="col-lg-6">
                    <h2 class="h1 fw-bold text-white mb-4" style="font-family: var(--font-headings);">Turning ambition
                        into digital achievement.</h2>
                    <div class="mb-4" style="width: 80px; height: 2px; background-color: var(--primary-color);"></div>
                    <p class="mb-3">
                        At Verdant Digital, we help businesses grow through innovative digital solutions and strategic
                        consulting. Our mission is to empower startups, small businesses, and enterprises with
                        technology-driven services that enhance their online presence, improve operational efficiency,
                        and accelerate business growth.
                    </p>
                    <p class="mb-4">
                        We specialize in web development, digital consulting, branding, UI/UX design, and customized
                        business solutions tailored to each client's unique goals. Our team combines creativity,
                        technical expertise, and industry insights to deliver high-quality, scalable, and user-focused
                        solutions.
                    </p>
                    <div class="d-flex gap-5">
                        <div>
                            <span class="d-block h2 fw-bold text-white mb-0">100+</span>
                            <span class="subheading" style="font-size: 0.55rem;">Happy Clients</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="rounded-4 overflow-hidden shadow-lg border border-success"
                        style="border-color: rgba(40, 90, 72, 0.3) !important;">
                        <img src="https://images.unsplash.com/photo-1497366216548-37526070297c?auto=format&fit=crop&q=80&w=800&h=600"
                            alt="Sustainable Office" class="img-fluid" style="object-fit: cover; aspect-ratio: 4/3;">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Preview Section -->
    <section class="py-5"
        style="background-color: #050b0a; border-top: 1px solid rgba(40, 90, 72, 0.15); border-bottom: 1px solid rgba(40, 90, 72, 0.15);">
        <div class="container px-4 py-5 text-start">
            <div class="d-flex flex-column flex-md-row align-items-md-end justify-content-between mb-5 gap-4">
                <div>
                    <span class="subheading d-block mb-3">02 / Core Practices</span>
                    <h2 class="h1 fw-bold text-white mb-0" style="font-family: var(--font-headings);">Specialized
                        Enterprise Solutions</h2>
                </div>
                <a href="services.php" class="subheading d-flex align-items-center gap-2 m-0 text-decoration-none"
                    style="color: var(--accent-color) !important;">
                    See Detailed Capabilities <i data-lucide="arrow-right" style="width: 1rem; height: 1rem;"></i>
                </a>
            </div>
            <div class="row g-4">

                <?php while ($row = mysqli_fetch_assoc($result)) { ?>

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
        </div>
    </section>

    <!-- Team Members Preview -->
    <section class="py-5" id="team">

        <div class="container px-4">

            <div class="text-center mb-5">

                <span class="subheading d-block mb-3">
                    OUR TEAM
                </span>

                <h2 class="display-5 text-white fw-bold">
                    Meet Our Experts
                </h2>

                <p class="lead">
                    Our experienced professionals help businesses grow through
                    strategy, innovation and technology.
                </p>

            </div>

            <div class="row g-4">

                <?php while ($row = mysqli_fetch_assoc($result1)) { ?>

                    <div class="col-lg-3 col-md-6">

                        <div class="card card-custom h-100 text-center">

                            <img src="../uploads/<?php echo htmlspecialchars($row['photo']); ?>" class="card-img-top"
                                style="height:250px;object-fit:cover;" alt="<?php echo htmlspecialchars($row['name']); ?>">

                            <div class="card-body">

                                <h4 class="text-white">

                                    <?php echo htmlspecialchars($row['name']); ?>

                                </h4>

                                <span class="subheading">

                                    <?php echo htmlspecialchars($row['designation']); ?>

                                </span>

                                <p class="small mt-3">

                                    <?php echo htmlspecialchars(substr($row['bio'], 0, 100)); ?>...

                                </p>

                            </div>

                        </div>

                    </div>

                <?php } ?>

            </div>

            <div class="text-center mt-5">

                <a href="team.php" class="btn btn-primary-custom">

                    View Complete Team

                </a>

            </div>

        </div>

    </section>

    <!-- Testimonials Carousel Section -->
    <section id="testimonials" class="py-5"
        style="background-color: #050b0a; border-top: 1px solid rgba(40, 90, 72, 0.15); border-bottom: 1px solid rgba(40, 90, 72, 0.15);">
        <div class="container px-4 py-5 text-center">
            <span class="subheading d-block mb-3">04 / Executive Appraisals</span>
            <h2 class="h1 fw-bold text-white mb-5" style="font-family: var(--font-headings);">Client Alignments</h2>

            <div class="position-relative mx-auto" style="max-width: 700px;">

                <!-- Full Testimonials List -->
                <div class="row g-5 text-start mt-5">
                    <div class="col-lg-12">
                        <div class="d-flex flex-column gap-4">
                            <?php while ($row = mysqli_fetch_assoc($result2)) { ?>

                                <div class="card-custom 4">

                                    <div class="testimonial-card h-100 p-4 rounded-4">

                                        <!-- Rating -->
                                        <div class="mb-3">

                                            <?php
                                            for ($i = 1; $i <= 5; $i++) {
                                                if ($i <= $row['rating']) {
                                                    echo '<i data-lucide="star" style="width:18px;height:18px;color:#FFD700;fill:#FFD700;"></i>';
                                                } else {
                                                    echo '<i data-lucide="star" style="width:18px;height:18px;color:#666;"></i>';
                                                }
                                            }
                                            ?>

                                        </div>

                                        <!-- Review -->
                                        <p class="fs-6 fst-italic mb-4">

                                            "<?php echo htmlspecialchars($row['review']); ?>"

                                        </p>

                                        <!-- User -->
                                        <div class="d-flex align-items-center gap-3">

                                            <div>

                                                <h6 class="text-white mb-0">

                                                    <?php echo htmlspecialchars($row['name']); ?>

                                                </h6>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-5">
        <div class="container px-4 py-5 text-start">
            <div class="text-center mb-5">
                <span class="subheading d-block mb-3">05 / COMMUNICATION</span>
                <h2 class="h1 fw-bold text-white mb-3"
                    style="font-family: var(--font-headings); max-width: 800px; margin: 0 auto; line-height: 1.15;">
                    Let's Build <span style="color: var(--accent-color);">Something Great</span>
                </h2>
                <p class="lead mx-auto" style="max-width: 600px;">
                    "Every successful digital transformation begins with a conversation. Tell us about your business
                    goals, challenges, or ideas, and our experts will help you craft practical, scalable, and
                    future-ready solutions tailored to your vision."
                </p>
            </div>

            <div class="row g-5">
                <!-- Info Column -->
                <div class="col-lg-5">
                    <h2 class="h3 text-white fw-bold mb-4" style="font-family: var(--font-headings);">Direct Coordinates
                    </h2>
                    <div class="mb-4" style="width: 60px; height: 2px; background-color: var(--primary-color);"></div>
                    <p class="mb-5">Our core advisory partner team is distributed strategically across global financial
                        and design corridors.</p>

                    <div class="d-flex flex-column gap-4 text-start">
                        <div class="d-flex gap-4 p-4 rounded-3"
                            style="background-color: #050b0a; border: 1px solid rgba(40, 90, 72, 0.25);">
                            <div class="p-2 rounded-3 bg-dark border border-success d-flex align-items-center justify-content-center shrink-0"
                                style="width: 2.75rem; height: 2.75rem; border-color: rgba(40, 90, 72, 0.4) !important;">
                                <i data-lucide="map-pin"
                                    style="color: var(--accent-color); width: 1.25rem; height: 1.25rem;"></i>
                            </div>
                            <div>
                                <h4 class="h6 text-white mb-1"
                                    style="font-family: var(--font-subheadings); font-weight: 700; font-size: 0.75rem; letter-spacing: 1px;">
                                    DELHI HEADQUARTERS</h4>
                                <p class="small mb-0">RWA Colony, Janakpuri
                                    Delhi, 110058</p>
                            </div>
                        </div>

                        <div class="d-flex gap-4 p-4 rounded-3"
                            style="background-color: #050b0a; border: 1px solid rgba(40, 90, 72, 0.25);">
                            <div class="p-2 rounded-3 bg-dark border border-success d-flex align-items-center justify-content-center shrink-0"
                                style="width: 2.75rem; height: 2.75rem; border-color: rgba(40, 90, 72, 0.4) !important;">
                                <i data-lucide="clock"
                                    style="color: var(--accent-color); width: 1.25rem; height: 1.25rem;"></i>
                            </div>
                            <div>
                                <h4 class="h6 text-white mb-1"
                                    style="font-family: var(--font-subheadings); font-weight: 700; font-size: 0.75rem; letter-spacing: 1px;">
                                    BUSINESS & INTAKE HOURS</h4>
                                <p class="small mb-1">Mon – Fri, 10:00 – 5:00 IST</p>
                            </div>
                        </div>

                        <div class="d-flex gap-4 p-4 rounded-3"
                            style="background-color: #050b0a; border: 1px solid rgba(40, 90, 72, 0.25);">
                            <div class="p-2 rounded-3 bg-dark border border-success d-flex align-items-center justify-content-center shrink-0"
                                style="width: 2.75rem; height: 2.75rem; border-color: rgba(40, 90, 72, 0.4) !important;">
                                <i data-lucide="phone"
                                    style="color: var(--accent-color); width: 1.25rem; height: 1.25rem;"></i>
                            </div>
                            <div>
                                <h4 class="h6 text-white mb-1"
                                    style="font-family: var(--font-subheadings); font-weight: 700; font-size: 0.75rem; letter-spacing: 1px;">
                                    VOICE COMMUNICATIONS</h4>
                                <p class="small mb-1">+91 77638-29528</p>
                                <p class="small mb-0">+91 78234-89234</p>
                            </div>
                        </div>

                        <div class="d-flex gap-4 p-4 rounded-3"
                            style="background-color: #050b0a; border: 1px solid rgba(40, 90, 72, 0.25);">
                            <div class="p-2 rounded-3 bg-dark border border-success d-flex align-items-center justify-content-center shrink-0"
                                style="width: 2.75rem; height: 2.75rem; border-color: rgba(40, 90, 72, 0.4) !important;">
                                <i data-lucide="mail"
                                    style="color: var(--accent-color); width: 1.25rem; height: 1.25rem;"></i>
                            </div>
                            <div>
                                <h4 class="h6 text-white mb-1"
                                    style="font-family: var(--font-subheadings); font-weight: 700; font-size: 0.75rem; letter-spacing: 1px;">
                                    EMAIL COMMUNICATIONS</h4>
                                <p class="small mb-0">hello@verdantdigital.ch</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Form Column -->
                <div class="col-lg-7">
                    <div class="p-5 rounded-4"
                        style="background-color: var(--bg-color); border: 1px solid rgba(40, 90, 72, 0.35);">
                        <h3 class="h4 text-white fw-bold mb-4" style="font-family: var(--font-headings);">Contact
                            Enquiries Request</h3>
                        <form id="advisory-contact-form" action="submit_enquiry.php" method="POST"
                            class="d-flex flex-column gap-3">
                            <div class="row g-3">
                                <div class="col-md-12">
                                    <label for="form-cname" class="subheading d-block mb-1.5"
                                        style="font-size: 0.55rem;">Full Name</label>
                                    <input type="text" id="form-cname" name="fullname" required
                                        placeholder="E.g., Charlotte Sterling"
                                        class="form-control bg-dark text-white border-success"
                                        style="font-size: 0.75rem; border-color: rgba(40, 90, 72, 0.3) !important;">
                                </div>
                            </div>
                            <div class="row g-3">
                                <div class="col-md-12">
                                    <label for="form-cemail" class="subheading d-block mb-1.5"
                                        style="font-size: 0.55rem;">Email</label>
                                    <input type="email" id="form-cemail" name="email" required
                                        placeholder="E.g., charlotte@aether.ch"
                                        class="form-control bg-dark text-white border-success"
                                        style="font-size: 0.75rem; border-color: rgba(40, 90, 72, 0.3) !important;">
                                </div>
                            </div>
                            <div>
                                <label for="form-cmessage" class="subheading d-block mb-1.5"
                                    style="font-size: 0.55rem;">Contact Enquiries</label>
                                <textarea id="form-cmessage" name="message" rows="4" required
                                    placeholder="Reviewing operational targets or current bottleneck parameters..."
                                    class="form-control bg-dark text-white border-success"
                                    style="font-size: 0.75rem; border-color: rgba(40, 90, 72, 0.3) !important; resize: none;"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary-custom w-100 mt-2">Submit Enquiry</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Professional Footer -->
    <footer class="py-5" style="background-color: #050b0a; border-top: 1px solid rgba(40, 90, 72, 0.15);">
        <div class="container px-4 py-4 text-start">
            <div class="row g-5 mb-5">
                <div class="col-lg-5">
                    <a class="d-flex align-items-center gap-2 text-decoration-none mb-4" href="index.php">
                        <div class="p-2 bg-success rounded-3 d-flex align-items-center justify-content-center"
                            style="width: 2rem; height: 2rem; background-color: var(--primary-color) !important;">
                            <i data-lucide="leaf" style="color: var(--accent-color); width: 1rem; height: 1rem;"></i>
                        </div>
                        <div>
                            <span class="navbar-brand-text h6 m-0 text-white">VERDANT</span>
                            <span class="navbar-brand-sub" style="font-size: 0.5rem;">DIGITAL</span>
                        </div>
                    </a>
                    <p class="mb-4">Engineered guidance for the contemporary enterprise. Harmonizing commercial growth
                        with sustainability and modern design paradigms.</p>
                </div>

                <div class="col-lg-7">
                    <!-- <div class="footer-review-card p-4 p-md-5 rounded-4"> -->
                    <div class="footer-review-card p-3 p-md-4 rounded-4 mx-auto" style="max-width:550px;">
                        <!-- <h2 class="h4 text-white mb-4" style="font-family: var(--font-headings);">Experience</h2> -->
                        <span class="navbar-brand-text h6 m-0 text-white">Share Your Experience</span>
                        <form action="submit_testimonial.php" method="POST" class="d-flex flex-column gap-2"
                            id="footer-review-form">
                            <div>
                                <label class="form-label text-white" for="footer-review-name">Full Name</label>
                                <input type="text" id="footer-review-name" name="name"
                                    class="form-control bg-dark text-white border-success footer-review-input"
                                    placeholder="Enter your name" required>
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
                                <textarea id="footer-review-text" name="review"
                                    class="form-control bg-dark text-white border-success footer-review-input" rows="4"
                                    placeholder="Write your review here..." required></textarea>
                            </div>

                            <button type="submit" class="btn btn-primary-custom w-100 py-2 footer-review-btn">
                                Submit Review
                            </button>
                        </form>
                    </div>
                </div>

            </div>
            <div class="d-flex flex-column flex-md-row align-items-center justify-content-between pt-4 border-top"
                style="border-top-color: rgba(40, 90, 72, 0.15) !important;">
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
</body>

</html>