<?php
$current_page = basename($_SERVER['PHP_SELF']);
?>
<header class="sticky-header">
    <div class="container">
        <!-- Hamburger Button (Moved to Start) -->
        <button class="mobile-menu-btn" aria-label="Toggle Menu">
            <span></span>
            <span></span>
            <span></span>
        </button>

        <div class="logo">
            <a href="./">
                <img src="assets/img/logo.jpeg" alt="Ramani Infosys Logo">
            </a>
        </div>

        <nav class="nav-menu">
            <ul>
                <li><a href="services.php"
                        class="<?php echo ($current_page == 'services.php') ? 'active' : ''; ?>">Services</a></li>
                <li><a href="our-work.php" class="<?php echo ($current_page == 'our-work.php') ? 'active' : ''; ?>">Our
                        Work</a></li>
                <li><a href="who-we-are.php"
                        class="<?php echo ($current_page == 'who-we-are.php') ? 'active' : ''; ?>">Who we are</a></li>
                <li><a href="portfolio.php"
                        class="<?php echo ($current_page == 'portfolio.php') ? 'active' : ''; ?>">Portfolio</a></li>
            </ul>
        </nav>

        <div class="header-actions">
            <a href="#" class="btn btn-outline">Get A Free Audit</a>
            <a href="contact-us.php" class="btn btn-primary">Get in Touch</a>
        </div>
    </div>
</header>

<!-- Mobile Navigation Drawer -->
<div class="mobile-nav-overlay"></div>
<div class="mobile-nav-drawer">
    <div class="mobile-nav-logo">
        <a href="./">
            <img src="assets/img/logo.jpeg" alt="Ramani Infosys Logo">
        </a>
    </div>
    <ul class="mobile-nav-list">
        <li><a href="services.php" class="<?php echo ($current_page == 'services.php') ? 'active' : ''; ?>">Services</a>
        </li>
        <li><a href="our-work.php" class="<?php echo ($current_page == 'our-work.php') ? 'active' : ''; ?>">Our Work</a>
        </li>
        <li><a href="who-we-are.php" class="<?php echo ($current_page == 'who-we-are.php') ? 'active' : ''; ?>">Who we
                are</a></li>
        <li><a href="portfolio.php"
                class="<?php echo ($current_page == 'portfolio.php') ? 'active' : ''; ?>">Portfolio</a></li>
    </ul>
    <div class="mobile-cta-actions">
        <a href="#" class="btn btn-outline" style="width: 100%; text-align: center;">Get A Free Audit</a>
        <a href="contact-us.php" class="btn btn-primary" style="width: 100%; text-align: center;">Get in Touch</a>
    </div>
</div>