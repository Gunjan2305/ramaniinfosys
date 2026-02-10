<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services - Ramani Infosys</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/lines.css">
    <link rel="stylesheet" href="assets/css/slider.css">
    <link rel="stylesheet" href="assets/css/case_study.css">
    <link rel="stylesheet" href="assets/css/services_accordion.css">
    <link rel="stylesheet" href="assets/css/stats_grid.css">
    <link rel="stylesheet" href="assets/css/partners.css">
    <link rel="stylesheet" href="assets/css/experts.css">
    <link rel="stylesheet" href="assets/css/resources.css">
    <link rel="stylesheet" href="assets/css/faq.css">
    <link rel="stylesheet" href="assets/css/cta_testimonial.css">
    <link rel="stylesheet" href="assets/css/footer.css">
    <link rel="stylesheet" href="assets/css/services.css">
    <link rel="stylesheet" href="assets/css/audit_modal.css">

    <link rel="icon" type="image/jpeg" href="assets/img/favicon.jpeg">
    <link rel="shortcut icon" type="image/jpeg" href="assets/img/favicon.jpeg">
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css" />
    <!-- Google Fonts for premium look -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>

<body>

    <header class="sticky-header">
        <div class="container">
            <!-- Hamburger Button (Moved to Start for Left Align) -->
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
                    <li><a href="services.php" class="active"
                            style="color: var(--primary-color); font-weight: 600;">Services</a></li>
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
            <li><a href="services.php" class="active">Services</a></li>
            <li><a href="our-work.php">Our Work</a></li>
            <li><a href="who-we-are.php">Who we are</a></li>
            <li><a href="portfolio.php">Portfolio</a></li>
        </ul>
        <div class="mobile-cta-actions">
            <a href="#" class="btn btn-outline" style="width: 100%; text-align: center;">Get A Free Audit</a>
            <a href="contact-us.php" class="btn btn-primary" style="width: 100%; text-align: center;">Get in Touch</a>
        </div>
    </div>

    <!-- Hero Section (New Standard Layout) -->
    <section class="service-hero-section">
        <div class="hero-bg-accent"></div>
        <div class="hero-bg-accent-2"></div>

        <div class="service-hero-content">
            <h1>Expert Solutions for <br><span class="highlight">Modern Businesses</span></h1>
            <p>We combine strategic thinking with engineering excellence to build scalable .NET, Angular, and e-commerce
                platforms.</p>
            <div class="hero-actions">
                <a href="#services-grid" class="btn btn-primary btn-large">Our Capabilities</a>
                <a href="#process" class="btn btn-outline btn-large" style="margin-left: 16px;">How We Work</a>
            </div>
        </div>
    </section>

    <!-- Services Grid (Standard Cards) -->
    <section class="services-grid-section" id="services-grid">
        <div class="services-grid-container">
            <!-- Card 1: .NET -->
            <div class="service-card">
                <div class="service-icon">🔷</div>
                <h3>.NET Development</h3>
                <p>Enterprise-grade manufacturing of web applications using .NET Core, ensuring high performance,
                    security, and scalability for large organizations.</p>
                <a href="#dotnet" class="service-link" onclick="openAccordion('dotnet')">Learn about .NET →</a>
            </div>

            <!-- Card 2: Angular -->
            <div class="service-card">
                <div class="service-icon">🅰️</div>
                <h3>Angular Solutions</h3>
                <p>Building dynamic, responsive Single Page Applications (SPAs) and complex front-end interfaces that
                    provide seamless user experiences.</p>
                <a href="#angular" class="service-link" onclick="openAccordion('angular')">View Angular Work →</a>
            </div>

            <!-- Card 3: ReactJS -->
            <div class="service-card">
                <div class="service-icon">⚛️</div>
                <h3>ReactJS & Node.js</h3>
                <p>Full-stack JavaScript development for modern, fast, and interactive web applications using the latest
                    MERN stack technologies.</p>
                <a href="#react" class="service-link" onclick="openAccordion('react')">Explore React →</a>
            </div>

            <!-- Card 4: Shopify -->
            <div class="service-card">
                <div class="service-icon">🛍️</div>
                <h3>Shopify Stores</h3>
                <p>Custom Shopify store design and development to launch your brand with a stunning, high-converting
                    online presence.</p>
                <a href="#shopify" class="service-link" onclick="openAccordion('shopify')">Shopify Services →</a>
            </div>

            <!-- Card 5: Shopify Plus -->
            <div class="service-card">
                <div class="service-icon">➕</div>
                <h3>Shopify Plus</h3>
                <p>Scalable enterprise e-commerce solutions, B2B channels, and custom automation for high-volume
                    merchants.</p>
                <a href="#shopify" class="service-link" onclick="openAccordion('shopify')">Shopify Plus →</a>
            </div>

            <!-- Card 6: Azure/Cloud -->
            <div class="service-card">
                <div class="service-icon">☁️</div>
                <h3>Cloud & DevOps</h3>
                <p>Azure cloud integration, migration, and DevOps strategies to streamline your deployment and
                    infrastructure management.</p>
                <a href="contact-us.php" class="service-link">Cloud Solutions →</a>
            </div>
        </div>
    </section>

    <!-- Process Section (New) -->
    <section class="process-section" id="process">
        <div class="process-container">
            <div class="process-header">
                <h2>Our Development Process</h2>
                <p>A proven methodology to deliver quality results on time.</p>
            </div>
            <div class="process-steps">
                <div class="process-step">
                    <div class="step-number">01</div>
                    <h4>Discovery</h4>
                    <p>We analyze your requirements, business goals, and technical constraints.</p>
                </div>
                <div class="process-step">
                    <div class="step-number">02</div>
                    <h4>Design</h4>
                    <p>Creating intuitive UI/UX and robust architectural blueprints.</p>
                </div>
                <div class="process-step">
                    <div class="step-number">03</div>
                    <h4>Build</h4>
                    <p>Agile development with regular updates and code reviews.</p>
                </div>
                <div class="process-step">
                    <div class="step-number">04</div>
                    <h4>Scale</h4>
                    <p>Launch, support, and continuous optimization for growth.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Existing Accordion (Retained for standard animation preference) -->
    <section class="services-accordion-section">
        <div class="container-accordion">
            <h2 class="accordion-title">Deep Dive: Our Expertise</h2>
            <p style="text-align: center; max-width: 600px; margin: 0 auto 40px; color: #666;">
                Explore the specific technologies and deliverables we offer for each of our core services.
            </p>

            <!-- Item 1: .NET Development -->
            <div class="accordion-item active" id="dotnet">
                <div class="accordion-header">
                    <span>.NET Development</span>
                    <span class="accordion-icon"></span>
                </div>
                <div class="accordion-content">
                    <div class="drawer-layout">
                        <div class="drawer-text">
                            <h3>Enterprise .NET Solutions</h3>
                            <p>We build robust, secure, and scalable enterprise applications using .NET Core and the
                                latest Microsoft technologies.
                                Perfect for large-scale systems requiring high performance and reliability.</p>
                            <a href="#" class="btn-drawer">Learn More</a>
                        </div>
                        <div class="drawer-visual">
                            <div class="visual-collage-container">
                                <img src="assets/img/success-brand -2.jpeg" class="vc-main-img" alt=".NET Main">
                            </div>
                        </div>
                        <div class="drawer-features">
                            <ul>
                                <li>Custom .NET Core Development</li>
                                <li>Legacy Migration & Modernization</li>
                                <li>Azure Cloud Integration</li>
                                <li>Microservices Architecture</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Item 2: Angular Development -->
            <div class="accordion-item" id="angular">
                <div class="accordion-header">
                    <span>Angular Development</span>
                    <span class="accordion-icon"></span>
                </div>
                <div class="accordion-content">
                    <div class="drawer-layout">
                        <div class="drawer-text">
                            <h3>Modern Front-End with Angular</h3>
                            <p>Create dynamic, responsive, and feature-rich Single Page Applications (SPAs) with
                                Angular.
                                We specialize in building complex dashboards and interactive user interfaces.</p>
                            <a href="#" class="btn-drawer">Learn More</a>
                        </div>
                        <div class="drawer-visual">
                            <div class="visual-collage-container">
                                <img src="assets/img/success-brand -1.jpeg" class="vc-main-img" alt="Angular Visual">
                            </div>
                        </div>
                        <div class="drawer-features">
                            <ul>
                                <li>Single Page Applications (SPA)</li>
                                <li>Progressive Web Apps (PWA)</li>
                                <li>Real-time Data Visualization</li>
                                <li>Enterprise Dashboard Development</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Item 3: ReactJS & NodeJS -->
            <div class="accordion-item" id="react">
                <div class="accordion-header">
                    <span>ReactJS & NodeJS</span>
                    <span class="accordion-icon"></span>
                </div>
                <div class="accordion-content">
                    <div class="drawer-layout">
                        <div class="drawer-text">
                            <h3>Full-Stack JavaScript</h3>
                            <p>Leverage the power of the MERN/MEAN stack. We build fast, scalable, and modern web
                                applications
                                using ReactJS for the frontend and NodeJS for high-performance backend services.</p>
                            <a href="#" class="btn-drawer">Learn More</a>
                        </div>
                        <div class="drawer-visual">
                            <div class="visual-collage-container">
                                <img src="assets/img/image-1.webp" class="vc-main-img" alt="React Node Visual">
                            </div>
                        </div>
                        <div class="drawer-features">
                            <ul>
                                <li>Custom React Component Libraries</li>
                                <li>NodeJS API Development</li>
                                <li>Real-time Chat & Notifications</li>
                                <li>Server-Side Rendering (Next.js)</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Item 4: Shopify & Shopify Plus -->
            <div class="accordion-item" id="shopify">
                <div class="accordion-header">
                    <span>Shopify & Shopify Plus</span>
                    <span class="accordion-icon"></span>
                </div>
                <div class="accordion-content">
                    <div class="drawer-layout">
                        <div class="drawer-text">
                            <h3>E-Commerce Excellence</h3>
                            <p>From custom themes to complex enterprise setups on Shopify Plus. We handle everything:
                                design, development, migration, and scaling your online store.</p>
                            <a href="#" class="btn-drawer">Learn More</a>
                        </div>
                        <div class="drawer-visual">
                            <div class="visual-collage-container">
                                <img src="assets/img/image2.webp" class="vc-main-img" alt="Shopify Visual">
                            </div>
                        </div>
                        <div class="drawer-features">
                            <ul>
                                <li>Custom Theme Development</li>
                                <li>Shopify Apps & Private Apps</li>
                                <li>Shopify Plus B2B Solutions</li>
                                <li>Seamless Platform Migration</li>
                            </ul>
                        </div>
                    </div>
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
                    <h2>230+ brands, $3.5B+ in sales.<br><span>You could be next!</span></h2>
                </div>
                <a href="contact-us.php" class="btn-footer-cta">Get In Touch</a>
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
                            <!-- Stars simplified -->
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
                        <li><a href="contact-us.php">Get In Touch</a></li>
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

            <!-- 3. Partner Strip (Updated) -->
            <div class="footer-partners-strip">
                <div class="fps-stat-box">
                    <span class="fps-stars">★★★★★</span>
                    <span class="fps-stat-text">200+ Reviews</span>
                </div>
                <div class="fps-marquee">
                    <div class="fps-track">
                        <!-- Repeating these 4 times to ensure seamless loop -->
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

    <!-- Footer End -->

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"></script>

    <script>
        // Open Accordion Function
        function openAccordion(id) {
            // Remove active from all
            document.querySelectorAll('.accordion-item').forEach(item => {
                item.classList.remove('active');
                // Also collapse the content if it was open
                const content = item.querySelector('.accordion-content');
                if (content) {
                    content.style.maxHeight = null;
                }
            });

            // Activate target
            const target = document.getElementById(id);
            if (target) {
                target.classList.add('active');
                // Expand the content
                const content = target.querySelector('.accordion-content');
                if (content) {
                    content.style.maxHeight = content.scrollHeight + "px";
                }

                // Scroll to target with offset
                const yOffset = -100; // Header height offset
                const y = target.getBoundingClientRect().top + window.pageYOffset + yOffset;
                window.scrollTo({ top: y, behavior: 'smooth' });
            }
        }

        // Handle hash in URL on page load
        window.addEventListener('DOMContentLoaded', () => {
            if (window.location.hash) {
                const hash = window.location.hash.substring(1); // Remove '#'
                openAccordion(hash);
            }
        });

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

        // Fade out hero section on scroll
        window.addEventListener('scroll', function () {
            const heroSection = document.querySelector('.service-hero-section');
            if (heroSection) {
                const scrollPosition = window.scrollY;
                const heroHeight = heroSection.offsetHeight;

                // Calculate opacity: 1 at top, 0 when scrolled past hero
                let opacity = 1 - (scrollPosition / (heroHeight * 0.8));

                // Clamp values
                if (opacity < 0) opacity = 0;
                if (opacity > 1) opacity = 1;

                heroSection.style.opacity = opacity;

                // Subtle scale effect
                const scale = 1 - (scrollPosition / (heroHeight * 3));
                if (scale > 0.9) {
                    heroSection.style.transform = `scale(${scale})`;
                }
            }
        });

        // Initialize Swiper
        var swiper = new Swiper(".mySwiper", {
            effect: "coverflow",
            grabCursor: true,
            centeredSlides: true,
            slidesPerView: "auto",
            coverflowEffect: {
                rotate: 50,
                stretch: 0,
                depth: 100,
                modifier: 1,
                slideShadows: true,
            },
            navigation: {
                nextEl: ".next-btn",
                prevEl: ".prev-btn",
            },
            loop: true,
        });

        // Intersection Observer for Sections (Fade In from Bottom)
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                }
            });
        }, { threshold: 0.1 });

        const caseSection = document.querySelector('.case-study-section');
        if (caseSection) observer.observe(caseSection);

        const statsSection = document.querySelector('.stats-grid-section');
        if (statsSection) observer.observe(statsSection);

        const partnersSection = document.querySelector('.partners-section');
        if (partnersSection) observer.observe(partnersSection);

        // Animate Accordion Items on Scroll
        const accordionItems = document.querySelectorAll('.accordion-item');
        accordionItems.forEach((item, index) => {
            // Add a staggered delay for a ripple effect
            item.style.transitionDelay = `${index * 0.1}s`;
            observer.observe(item);
        });

        // Animate Client Items on Scroll (Stats Grid)
        const clientItems = document.querySelectorAll('.client-item');
        clientItems.forEach((item, index) => {
            // Staggered delay for clients grid (reset count for every row/group if needed, or simple linear stagger)
            // Using a simple modulo stagger or small delay to keep it snappy
            item.style.transitionDelay = `${(index % 3) * 0.1}s`; // Stagger by column
            observer.observe(item);
        });

        // Accordion Functionality
        const accordions = document.querySelectorAll('.accordion-item');

        accordions.forEach(el => {
            const header = el.querySelector('.accordion-header');
            header.addEventListener('click', () => {
                // Close other accordions? (Optional, but often standard)
                // Uncomment below if you want only one open at a time                 /*                 accordions.forEach(otherEl => {                     if (otherEl !== el) {                         otherEl.classList.remove('active');                     }                 });                 */

                el.classList.toggle('active');
            });
        });
        // Accordion Functionality for FAQ
        const faqQuestions = document.querySelectorAll('.faq-question');

        faqQuestions.forEach(question => {
            question.addEventListener('click', () => {
                const item = question.closest('.faq-item');
                const answer = item.querySelector('.faq-answer');
                const icon = item.querySelector('.faq-icon');

                // Check if already active
                const isActive = item.classList.contains('active');

                // Close all other FAQs (Optional - if you want Accordion behavior where only one is open)
                document.querySelectorAll('.faq-item').forEach(otherItem => {
                    if (otherItem !== item) {
                        otherItem.classList.remove('active');
                        otherItem.querySelector('.faq-answer').style.maxHeight = null;
                        // Reset icon rotation if needed handled by CSS but usually good to ensure cleanup
                    }
                });

                // Toggle current
                item.classList.toggle('active');

                if (!isActive) {
                    answer.style.maxHeight = answer.scrollHeight + "px";
                } else {
                    answer.style.maxHeight = null;
                }
            });
        });
        // Mobile Menu Logic
        const mobileBtn = document.querySelector('.mobile-menu-btn');
        const mobileDrawer = document.querySelector('.mobile-nav-drawer');
        const mobileOverlay = document.querySelector('.mobile-nav-overlay');

        if (mobileBtn) {
            mobileBtn.addEventListener('click', () => {
                mobileBtn.classList.toggle('active');
                mobileDrawer.classList.toggle('active');
                mobileOverlay.classList.toggle('active');
                document.body.style.overflow = mobileDrawer.classList.contains('active') ? 'hidden' : ''; // Prevent background scroll
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
    </script>
    <!-- Audit Modal Logic -->
    <script src="assets/js/audit-modal.js"></script>
    <?php include 'includes/audit-modal.php'; ?>
</body>

</html>