<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Ramani Infosys</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/lines.css">
    <link rel="stylesheet" href="assets/css/footer.css">
    <link rel="stylesheet" href="assets/css/audit_modal.css">
    <link rel="stylesheet" href="assets/css/contact.css">

    <link rel="icon" type="image/jpeg" href="assets/img/favicon.jpeg">
    <link rel="shortcut icon" type="image/jpeg" href="assets/img/favicon.jpeg">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>

<body>

    <header class="sticky-header">
        <div class="container">
            <!-- Hamburger Button -->
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
                    <li><a href="services.php">Services</a></li>
                    <li><a href="our-work.php">Our Work</a></li>
                    <li><a href="who-we-are.php">Who we are</a></li>
                    <li><a href="portfolio.php">Portfolio</a></li>
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
            <li><a href="services.php">Services</a></li>
            <li><a href="our-work.php">Our Work</a></li>
            <li><a href="who-we-are.php">Who we are</a></li>
            <li><a href="portfolio.php">Portfolio</a></li>
        </ul>
        <div class="mobile-cta-actions">
            <a href="#" class="btn btn-outline" style="width: 100%; text-align: center;">Get A Free Audit</a>
            <a href="contact-us.php" class="btn btn-primary" style="width: 100%; text-align: center;">Get in Touch</a>
        </div>
    </div>

    <!-- Contact Hero Section -->
    <section class="contact-hero">
        <div class="container">
            <h1>Let's Build Something <br> Amazing Together</h1>
            <p>Have a project in mind? We'd love to hear about it. Fill out the form below and our team will get back to
                you within 24 hours.</p>
        </div>
    </section>

    <!-- Contact Form Section -->
    <section class="contact-form-section">
        <div class="container">
            <div class="contact-form-wrapper">
                <form id="contactForm" method="POST" action="send-contact.php">
                    <div class="form-grid">
                        <div class="form-group">
                            <label for="fullName">Full Name <span class="required">*</span></label>
                            <input type="text" id="fullName" name="fullName" required placeholder="John Doe">
                        </div>

                        <div class="form-group">
                            <label for="email">Email Address <span class="required">*</span></label>
                            <input type="email" id="email" name="email" required placeholder="john@company.com">
                        </div>

                        <div class="form-group">
                            <label for="website">Website URL (Optional)</label>
                            <input type="url" id="website" name="website" placeholder="https://yourcompany.com">
                        </div>

                        <div class="form-group">
                            <label for="requirement">Requirement / Subject <span class="required">*</span></label>
                            <input type="text" id="requirement" name="requirement" required
                                placeholder="e.g. E-commerce Development, Mobile App...">
                        </div>

                        <div class="form-group full-width">
                            <label for="message">Message <span class="required">*</span></label>
                            <textarea id="message" name="message" required rows="5"
                                placeholder="Tell us more about your project goals, timeline, and budget..."></textarea>
                        </div>
                    </div>

                    <button type="submit" class="btn-submit">Send Message</button>
                </form>
                <div id="contactSuccess" class="success-message" style="display: none;">
                    <h3>Thank You!</h3>
                    <p>Your message has been sent successfully. We'll be in touch soon.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="site-footer">
        <div class="footer-container">
            <!-- 1. Header CTA -->
            <div class="footer-cta-bar">
                <div class="footer-cta-text">
                    <h2>Ready to get started?<br><span>Let's talk.</span></h2>
                </div>
                <!-- Already on contact page, maybe scroll to top or link to email -->
                <a href="#contactForm" class="btn-footer-cta">Get In Touch</a>
            </div>

            <!-- 2. Main Content -->
            <div class="footer-main">
                <!-- Column 1: Brand -->
                <div class="footer-brand-info footer-col-wrapper">
                    <div class="footer-logo">ramaniinfosys</div>

                    <!-- USA Address -->
                    <div class="footer-contact-item">
                        <svg class="footer-icon-flag" viewBox="0 0 640 480">
                            <path fill="#bd3d44" d="M0 0h640v480H0z" />
                            <path stroke="#fff" stroke-width="37"
                                d="M0 55.3h640M0 129h640M0 202.8h640M0 276.5h640M0 350.2h640M0 424h640" />
                            <path fill="#192f5d" d="M0 0h249.8v249.8H0z" />
                            <path fill="#fff"
                                d="M22 22h10v10H22zM52 22h10v10H52zM82 22h10v10H82zM112 22h10v10H112zM142 22h10v10H142z" />
                        </svg>
                        <span>218 Thornridge Cir. Syracuse, Connecticut 35624</span>
                    </div>

                    <!-- India Address -->
                    <div class="footer-contact-item">
                        <svg class="footer-icon-flag" viewBox="0 0 640 480">
                            <path fill="#f93" d="M0 0h640v160H0z" />
                            <path fill="#fff" d="M0 160h640v160H0z" />
                            <path fill="#138808" d="M0 320h640v160H0z" />
                            <circle cx="320" cy="240" r="60" fill="none" stroke="#000088" stroke-width="10" />
                        </svg>
                        <span>A-306, RJD Business Hub, Katargam, Surat, 395004</span>
                    </div>

                    <!-- Phone -->
                    <div class="footer-contact-item">
                        <svg class="footer-icon" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M6.62 10.79c1.44 2.83 3.76 5.15 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z" />
                        </svg>
                        <span>+91 9998579403</span>
                    </div>

                    <!-- Email -->
                    <div class="footer-contact-item">
                        <svg class="footer-icon" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z" />
                        </svg>
                        <span>hello@ramaniinfosys.com</span>
                    </div>

                    <!-- Social Icons -->
                    <div class="footer-social-links">
                        <a href="#" class="social-btn"><svg width="18" height="18" fill="currentColor"
                                viewBox="0 0 24 24">
                                <path
                                    d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                            </svg></a>
                        <a href="#" class="social-btn"><svg width="18" height="18" fill="currentColor"
                                viewBox="0 0 24 24">
                                <path
                                    d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                            </svg></a>
                        <a href="#" class="social-btn"><svg width="18" height="18" fill="currentColor"
                                viewBox="0 0 24 24">
                                <path
                                    d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" />
                            </svg></a>
                        <a href="#" class="social-btn"><svg width="16" height="16" fill="currentColor"
                                viewBox="0 0 24 24">
                                <path
                                    d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z" />
                            </svg></a>
                    </div>
                </div>

                <!-- Column 2: Services -->
                <div class="footer-col footer-col-wrapper">
                    <h4>Shopify Services</h4>
                    <ul class="footer-links">
                        <li><a href="#">Shopify Store Design & Development</a></li>
                        <li><a href="#">Migrate to Shopify</a></li>
                        <li><a href="#">Customize an Existing Shopify Store</a></li>
                        <li><a href="#">Shopify Plus Services</a></li>
                        <li><a href="#">Shopify B2B & Wholesale</a></li>
                        <li><a href="#">Shopify Audits</a></li>
                    </ul>
                </div>

                <!-- Column 3: Insights -->
                <div class="footer-col footer-col-wrapper">
                    <h4>Ramani Insights</h4>
                    <ul class="footer-links">
                        <li><a href="services.php">Explore Services</a></li>
                        <li><a href="our-work.php">Our Work</a></li>
                        <li><a href="who-we-are.php">Who we are</a></li>
                        <li><a href="portfolio.php">Portfolio</a></li>
                        <li><a href="#">Get In Touch</a></li>
                        <li><a href="#">Book a call</a></li>
                    </ul>
                </div>

                <!-- Column 4: Countries -->
                <div class="footer-col footer-col-wrapper">
                    <h4>GCC Countries</h4>
                    <ul class="footer-links">
                        <li><a href="#">UAE</a></li>
                        <li><a href="#">Saudi Arabia</a></li>
                        <li><a href="#">Qatar</a></li>
                        <li><a href="#">Bahrain</a></li>
                        <li><a href="#">Oman</a></li>
                        <li><a href="#">Kuwait</a></li>
                    </ul>
                </div>
            </div>

            <!-- 3. Partner Strip -->
            <div class="footer-partners-strip">
                <div class="fps-stat-box">
                    <span class="fps-stars">★★★★★</span>
                    <span class="fps-stat-text">200+ Reviews</span>
                </div>
                <div class="fps-marquee">
                    <div class="fps-track">
                        <img src="assets/img/footer_ticker_logos.png" alt="Partners">
                        <img src="assets/img/footer_ticker_logos.png" alt="Partners">
                        <img src="assets/img/footer_ticker_logos.png" alt="Partners">
                        <img src="assets/img/footer_ticker_logos.png" alt="Partners">
                    </div>
                </div>
            </div>

            <!-- 4. Bottom -->
            <div class="footer-bottom">
                <div>© 2025, Ramani Software Agency</div>
                <div class="footer-country-links">
                    <a href="#">USA</a> •
                    <a href="#">CANADA</a> •
                    <a href="#">UK</a> •
                    <a href="#">AUSTRALIA</a>
                </div>
                <div><a href="privacy-policy.php" class="footer-policy-link">Privacy Policy</a></div>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script>
        // Force page to start at the top on reload
        if (history.scrollRestoration) {
            history.scrollRestoration = 'manual';
        } else {
            window.onbeforeunload = function () {
                window.scrollTo(0, 0);
            }
        }
        window.onload = function () {
            window.scrollTo(0, 0);
        }

        // Mobile Menu
        const mobileBtn = document.querySelector('.mobile-menu-btn');
        const mobileDrawer = document.querySelector('.mobile-nav-drawer');
        const mobileOverlay = document.querySelector('.mobile-nav-overlay');

        if (mobileBtn) {
            mobileBtn.addEventListener('click', () => {
                mobileBtn.classList.toggle('active');
                mobileDrawer.classList.toggle('active');
                mobileOverlay.classList.toggle('active');
                document.body.style.overflow = mobileDrawer.classList.contains('active') ? 'hidden' : '';
            });
        }

        if (mobileOverlay) {
            mobileOverlay.addEventListener('click', () => {
                mobileBtn.classList.remove('active');
                mobileDrawer.classList.remove('active');
                mobileOverlay.classList.remove('active');
                document.body.style.overflow = '';
            });
        }

        // Handle Contact Form
        const contactForm = document.getElementById('contactForm');
        const contactSuccess = document.getElementById('contactSuccess');

        if (contactForm) {
            contactForm.addEventListener('submit', (e) => {
                e.preventDefault();

                const submitBtn = contactForm.querySelector('.btn-submit');
                const originalText = submitBtn.textContent;
                submitBtn.textContent = 'Sending...';
                submitBtn.disabled = true;

                const formData = new FormData(contactForm);

                fetch('send-contact', {
                    method: 'POST',
                    body: formData
                })
                    .then(response => response.json())
                    .then(data => {
                        if (data.status === 'success') {
                            contactForm.style.display = 'none';
                            contactSuccess.style.display = 'block';
                        } else {
                            alert(data.message || 'Error sending message.');
                            submitBtn.textContent = originalText;
                            submitBtn.disabled = false;
                        }
                    })
                    .catch(error => {
                        console.error(error);
                        // alert('Error sending message. Please try again.');
                        alert('Error sending message. This may be due to a local server configuration issue. Please check the console for details.');
                        submitBtn.textContent = originalText;
                        submitBtn.disabled = false;
                    });
            });
        }
    </script>

    <!-- Audit Modal Logic -->
    <script src="assets/js/audit-modal.js"></script>
    <?php include 'includes/audit-modal.php'; ?>

</body>

</html>