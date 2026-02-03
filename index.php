<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ramani Infosys - Digital Solutions</title>
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
            <!-- Hamburger Button (Moved to Start) -->
            <button class="mobile-menu-btn" aria-label="Toggle Menu">
                <span></span>
                <span></span>
                <span></span>
            </button>

            <div class="logo">
                <a href="index.php">
                    <img src="assets/img/logo.jpeg" alt="Ramani Infosys Logo">
                </a>
            </div>

            <nav class="nav-menu">
                <ul>
                    <li><a href="services.php">Services</a></li>
                    <li><a href="#">Our Work</a></li>
                    <li><a href="#">Who we are</a></li>
                    <li><a href="#">Resources</a></li>
                </ul>
            </nav>

            <div class="header-actions">
                <a href="#" class="btn btn-outline">Get A Free Audit</a>
                <a href="#" class="btn btn-primary">Get in Touch</a>
            </div>
        </div>
    </header>

    <!-- Mobile Navigation Drawer -->
    <div class="mobile-nav-overlay"></div>
    <div class="mobile-nav-drawer">
        <ul class="mobile-nav-list">
            <li><a href="services.php">Services</a></li>
            <li><a href="#">Our Work</a></li>
            <li><a href="#">Who we are</a></li>
            <li><a href="#">Resources</a></li>
        </ul>
        <div class="mobile-cta-actions">
            <a href="#" class="btn btn-outline" style="width: 100%; text-align: center;">Get A Free Audit</a>
            <a href="#" class="btn btn-primary" style="width: 100%; text-align: center;">Get in Touch</a>
        </div>
    </div>

    <!-- Hero Section -->
    <section class="hero-section">
        <!-- Vertical Background Lines -->
        <div class="vertical-lines">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>

        <div class="hero-container">
            <!-- Left Side: Content -->
            <div class="hero-content">
                <h1>Premier <span class="highlight">.NET & Angular</span> <br> Development Agency</h1>
                <p>We partner with enterprise brands to build scalable, high-performance web applications. From legacy
                    modernization to cloud-native platforms, our experts deliver robust solutions that drive digital
                    transformation.</p>
                <a href="services.php" class="btn btn-primary btn-large">Explore Services</a>
            </div>

            <!-- Right Side: Visuals -->
            <div class="hero-visuals">
                <!-- Rotating Disc Background -->
                <div class="rotating-disc"></div>

                <!-- Visual Stack: Small > Medium > Big (Video) -->
                <div class="visual-stack">
                    <div class="card card-small">
                        <img src="assets/img/image2.webp" alt="Small Preview">
                    </div>
                    <div class="card card-medium">
                        <img src="assets/img/image-1.webp" alt="Medium Preview">
                    </div>
                    <div class="card card-large">
                        <video autoplay muted loop playsinline poster="">
                            <source src="assets/video/banner-video.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Technology Slider Section -->
    <section class="tech-slider-section">
        <div class="tech-slider-wrapper">
            <!-- Track contains double the items for seamless loop -->
            <div class="tech-track">
                <!-- Set 1 -->
                <div class="tech-item"><span>🔷</span> .NET Core</div>
                <div class="tech-item"><span>🅰️</span> Angular</div>
                <div class="tech-item"><span>☁️</span> Azure</div>
                <div class="tech-item"><span>⚛️</span> React</div>
                <div class="tech-item"><span>🟢</span> Node.js</div>
                <div class="tech-item"><span>💾</span> SQL Server</div>
                <div class="tech-item"><span>🔧</span> TypeScript</div>
                <div class="tech-item"><span>🚀</span> DevOps</div>

                <!-- Set 2 (Duplicate) -->
                <div class="tech-item"><span>🔷</span> .NET Core</div>
                <div class="tech-item"><span>🅰️</span> Angular</div>
                <div class="tech-item"><span>☁️</span> Azure</div>
                <div class="tech-item"><span>⚛️</span> React</div>
                <div class="tech-item"><span>🟢</span> Node.js</div>
                <div class="tech-item"><span>💾</span> SQL Server</div>
                <div class="tech-item"><span>🔧</span> TypeScript</div>
                <div class="tech-item"><span>🚀</span> DevOps</div>
            </div>
        </div>
    </section>

    <!-- Case Study Section -->
    <section class="case-study-section">
        <div class="section-header">
            <h2 class="section-title">Inside Our <span class="highlight">.NET & Angular</span> Agency’s <br> Brand
                Success Stories</h2>
        </div>

        <div class="swiper mySwiper case-slider-container">
            <div class="swiper-wrapper case-slider-track">
                <!-- Slide 1 (Video) -->
                <div class="swiper-slide case-card">
                    <div class="case-media">
                        <img src="assets/img/success-brand -1.jpeg" alt="Case Study 2">
                        <div class="case-overlay">
                            <div class="case-info">
                                <div class="case-tags">
                                    <span class="tag">E-Commerce</span>
                                    <span class="tag">Angular</span>
                                </div>
                                <h3>Global Retail Platform</h3>
                            </div>
                            <a href="#" class="btn-case">View Case Study</a>
                        </div>
                    </div>
                </div>

                <!-- Slide 2 (Image) -->
                <div class="swiper-slide case-card">
                    <div class="case-media">
                        <img src="assets/img/success-brand -2.jpeg" alt="Case Study 2">
                        <div class="case-overlay">
                            <div class="case-info">
                                <div class="case-tags">
                                    <span class="tag">FinTech</span>
                                    <span class="tag">.NET Core</span>
                                </div>
                                <h3>Secure Banking App</h3>
                            </div>
                            <a href="#" class="btn-case">View Case Study</a>
                        </div>
                    </div>
                </div>

                <!-- Slide 3 (Image) -->
                <div class="swiper-slide case-card">
                    <div class="case-media">
                        <img src="assets/img/success-brand-3.jpeg" alt="Case Study 3">
                        <div class="case-overlay">
                            <div class="case-info">
                                <div class="case-tags">
                                    <span class="tag">Healthcare</span>
                                    <span class="tag">Azure</span>
                                </div>
                                <h3>Patient Care System</h3>
                            </div>
                            <a href="#" class="btn-case">View Case Study</a>
                        </div>
                    </div>
                </div>

                <!-- Slide 1 Copy -->
                <div class="swiper-slide case-card">
                    <div class="case-media">
                        <video autoplay muted loop playsinline>
                            <source src="assets/video/banner-video.mp4" type="video/mp4">
                        </video>
                        <div class="case-overlay">
                            <div class="case-info">
                                <div class="case-tags">
                                    <span class="tag">E-Commerce</span>
                                    <span class="tag">Angular</span>
                                </div>
                                <h3>Global Retail Platform</h3>
                            </div>
                            <a href="#" class="btn-case">View Case Study</a>
                        </div>
                    </div>
                </div>

                <!-- Slide 2 Copy -->
                <div class="swiper-slide case-card">
                    <div class="case-media">
                        <img src="assets/img/image2.webp" alt="Case Study 2">
                        <div class="case-overlay">
                            <div class="case-info">
                                <div class="case-tags">
                                    <span class="tag">FinTech</span>
                                    <span class="tag">.NET Core</span>
                                </div>
                                <h3>Secure Banking App</h3>
                            </div>
                            <a href="#" class="btn-case">View Case Study</a>
                        </div>
                    </div>
                </div>

                <!-- Slide 3 Copy -->
                <div class="swiper-slide case-card">
                    <div class="case-media">
                        <img src="assets/img/image-1.webp" alt="Case Study 3">
                        <div class="case-overlay">
                            <div class="case-info">
                                <div class="case-tags">
                                    <span class="tag">Healthcare</span>
                                    <span class="tag">Azure</span>
                                </div>
                                <h3>Patient Care System</h3>
                            </div>
                            <a href="#" class="btn-case">View Case Study</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Navigation -->
            <button class="slider-nav prev-btn">&#10094;</button>
            <button class="slider-nav next-btn">&#10095;</button>
        </div>
    </section>

    <!-- Services Accordion Section -->
    <section class="services-accordion-section">
        <div class="container-accordion">
            <h2 class="accordion-title">What We Do as a Shopify Agency</h2>

            <!-- Item 1 -->
            <div class="accordion-item active">
                <div class="accordion-header">
                    <span>Shopify Store Design & Development</span>
                    <span class="accordion-icon"></span>
                </div>
                <div class="accordion-content">
                    <div class="drawer-layout">
                        <div class="drawer-text">
                            <h3>Shopify Store Design & Development</h3>
                            <p>Every great store starts with a story, and we help bring yours to life. At Ramani, we've
                                helped DTC, B2B, and enterprise brands turn their ideas into high-performing Shopify
                                stores. As a trusted Shopify agency, we offer everything from strategy to development.
                            </p>
                            <a href="#" class="btn-drawer">Explore More</a>
                        </div>
                        <div class="drawer-visual">
                            <div class="visual-collage-container">
                                <img src="assets/img/image2.webp" class="vc-main-img" alt="Main Visual">
                                <img src="assets/img/success-brand -1.jpeg" class="vc-small-img-1" alt="Small 1">
                                <img src="assets/img/success-brand -2.jpeg" class="vc-small-img-2" alt="Small 2">
                            </div>
                        </div>
                        <div class="drawer-features">
                            <ul>
                                <li>Shopify Custom Development</li>
                                <li>Shopify Landing Page Build</li>
                                <li>Shopify UX/UI Design Services</li>
                                <li>High-Converting Shopify Stores</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Item 2 -->
            <div class="accordion-item">
                <div class="accordion-header">
                    <span>Migrate to Shopify</span>
                    <span class="accordion-icon"></span>
                </div>
                <div class="accordion-content">
                    <div class="drawer-layout">
                        <div class="drawer-text">
                            <h3>Migrate to Shopify</h3>
                            <p>Seamlessly migrate your store to Shopify with zero downtime. We handle data, design, and
                                functionality transfer, ensuring your SEO rankings are preserved.</p>
                            <a href="#" class="btn-drawer">Explore More</a>
                        </div>
                        <div class="drawer-visual">
                            <div class="visual-collage-container">
                                <img src="assets/img/image-1.webp" class="vc-main-img" alt="Main Visual">
                                <img src="assets/img/success-brand-3.jpeg" class="vc-small-img-1" alt="Small 1">
                                <img src="assets/img/image2.webp" class="vc-small-img-2" alt="Small 2">
                            </div>
                        </div>
                        <div class="drawer-features">
                            <ul>
                                <li>Zero Data Loss</li>
                                <li>SEO Preservation</li>
                                <li>Complete Platform Re-platforming</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Item 3 -->
            <div class="accordion-item">
                <div class="accordion-header">
                    <span>Customize an Existing Shopify Store</span>
                    <span class="accordion-icon"></span>
                </div>
                <div class="accordion-content">
                    <div class="drawer-layout">
                        <div class="drawer-text">
                            <h3>Customize Your Store</h3>
                            <p>Enhance your existing store with custom features, themes, and apps tailored to your
                                business needs. We help you unlock the full potential of your store.</p>
                            <a href="#" class="btn-drawer">Explore More</a>
                        </div>
                        <div class="drawer-visual">
                            <div class="visual-collage-container">
                                <img src="assets/img/success-brand -1.jpeg" class="vc-main-img" alt="Main Visual">
                                <img src="assets/img/success-brand -2.jpeg" class="vc-small-img-1" alt="Small 1">
                            </div>
                        </div>
                        <div class="drawer-features">
                            <ul>
                                <li>Theme Customization</li>
                                <li>App Integration</li>
                                <li>Performance Optimization</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Item 4 -->
            <div class="accordion-item">
                <div class="accordion-header">
                    <span>Shopify Plus Services</span>
                    <span class="accordion-icon"></span>
                </div>
                <div class="accordion-content">
                    <div class="drawer-layout">
                        <div class="drawer-text">
                            <h3>Shopify Plus Services</h3>
                            <p>Enterprise-grade solutions for high-volume merchants. Scalable, reliable, and designed
                                for growth.</p>
                            <a href="#" class="btn-drawer">Explore More</a>
                        </div>
                        <div class="drawer-visual">
                            <div class="visual-collage-container">
                                <img src="assets/img/image2.webp" class="vc-main-img" alt="Main Visual">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Item 5 -->
            <div class="accordion-item">
                <div class="accordion-header">
                    <span>Shopify B2B & Wholesale</span>
                    <span class="accordion-icon"></span>
                </div>
                <div class="accordion-content">
                    <div class="drawer-layout">
                        <div class="drawer-text">
                            <h3>Shopify B2B & Wholesale</h3>
                            <p>Streamline your B2B operations with Shopify's wholesale channel. Custom pricing, bulk
                                ordering, and more.</p>
                            <a href="#" class="btn-drawer">Explore More</a>
                        </div>
                        <div class="drawer-visual">
                            <div class="visual-collage-container">
                                <img src="assets/img/image-1.webp" class="vc-main-img" alt="Main Visual">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Item 6 -->
            <div class="accordion-item">
                <div class="accordion-header">
                    <span>Shopify Audits</span>
                    <span class="accordion-icon"></span>
                </div>
                <div class="accordion-content">
                    <div class="drawer-layout">
                        <div class="drawer-text">
                            <h3>Shopify Audits</h3>
                            <p>Identify areas for improvement with a comprehensive audit of your Shopify store. Improve
                                speed, SEO, and conversions.</p>
                            <a href="#" class="btn-drawer">Explore More</a>
                        </div>
                        <div class="drawer-visual">
                            <div class="visual-collage-container">
                                <img src="assets/img/success-brand -1.jpeg" class="vc-main-img" alt="Main Visual">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- Stats Grid Section -->
    <section class="stats-grid-section">
        <div class="stats-container">
            <!-- Left Block: Clients -->
            <div class="stat-card clients-block">
                <div class="clients-header">
                    <h2>200+</h2>
                    <p>Happy Clients In 30+ Countries</p>
                </div>
                <div class="clients-grid">
                    <!-- Text placeholdes for logos -->
                    <div class="client-item"><span class="client-text">Handvark</span></div>
                    <div class="client-item"><span class="client-text">Jida</span></div>
                    <div class="client-item"><span class="client-text">Stai</span></div>
                    <div class="client-item"><span class="client-text">Herbal House</span></div>
                    <div class="client-item"><span class="client-text">Original Shop</span></div>
                    <div class="client-item"><span class="client-text">Noodc</span></div>
                    <div class="client-item"><span class="client-text">Blanket Hoodie</span></div>
                    <div class="client-item"><span class="client-text">HappySmile</span></div>
                    <div class="client-item"><span class="client-text">Huppy</span></div>
                    <div class="client-item"><span class="client-text">Oliver Furniture</span></div>
                    <div class="client-item"><span class="client-text">Coffydoor</span></div>
                    <div class="client-item"><span class="client-text">Mode Cold</span></div>
                </div>
            </div>

            <!-- Right Side Area -->
            <div class="right-content-area">
                <!-- Top Row -->
                <div class="info-row">
                    <div class="stat-card info-text-card">
                        <span class="section-label">• Inside Ramani Infosys</span>
                        <p>Serving ecommerce brands around the world, our Shopify agency designs, builds, and scales
                            impactful experiences on Shopify and Shopify Plus.</p>
                    </div>
                    <div class="stat-card green-stat-card">
                        <div class="badge">Results we've delivered</div>
                        <h3>50+</h3>
                        <p>Shopify Migrations with zero downtime</p>
                    </div>
                </div>

                <!-- Bottom Row -->
                <div class="stats-row">
                    <div class="stat-card mini-stat-card">
                        <div class="stat-icon">
                            <img src="assets/img/cart.svg" alt="cart">
                        </div>
                        <div>
                            <h4>230+</h4>
                            <p>Shopify Stores Built</p>
                        </div>
                    </div>
                    <div class="stat-card mini-stat-card">
                        <div class="stat-icon">
                            <img src="assets/img/Experince.svg" alt="experience">
                        </div>
                        <div>
                            <h4>8+</h4>
                            <p>Years of Getting It Right</p>
                        </div>
                    </div>
                    <div class="stat-card mini-stat-card">
                        <div class="stat-icon">
                            <img src="assets/img/team.svg" alt="experience">
                        </div>
                        <div>
                            <h4>70+</h4>
                            <p>In house Shopify Experts</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Technology Partners Section -->
    <section class="partners-section">
        <div class="partners-container">
            <div class="partners-header">
                <h2>Technology Partners</h2>
                <p>We team up with industry leaders, keeping our clients at the forefront of eCommerce innovation.</p>
            </div>

            <div class="partners-grid">
                <!-- Card 1: Shopify -->
                <div class="partner-card">
                    <div class="partner-logo-area logo-shopify">
                        <span>🛍️ shopify</span>
                    </div>
                    <p>The world's best online stores are built on Shopify.</p>
                </div>

                <!-- Card 2: Rebuy -->
                <div class="partner-card">
                    <div class="partner-logo-area logo-rebuy">
                        <span>∞ REBUY</span>
                    </div>
                    <p>AI-driven personalized shopping experiences.</p>
                </div>

                <!-- Card 3: Recharge -->
                <div class="partner-card">
                    <div class="partner-logo-area logo-recharge">
                        <span>⚡ recharge</span>
                    </div>
                    <p>All-in-one solution for subscription growth & retention.</p>
                </div>

                <!-- Card 4: Klaviyo -->
                <div class="partner-card">
                    <div class="partner-logo-area logo-klaviyo">
                        <span>klaviyo</span>
                    </div>
                    <p>Klaviyo CRM: Unified marketing, service, and analytics.</p>
                </div>
            </div>

            <!-- Bottom Ticker -->
            <div class="partners-ticker-wrapper">
                <div class="partners-track">
                    <!-- Original Set -->
                    <span class="ticker-item">Sell</span>
                    <span class="ticker-item">Siena</span>
                    <span class="ticker-item">Tapcart</span>
                    <span class="ticker-item">Ordergroove</span>
                    <span class="ticker-item">ROUTE</span>
                    <span class="ticker-item">Glew.</span>
                    <span class="ticker-item">Matrixify</span>
                    <span class="ticker-item">Okendo</span>
                    <span class="ticker-item">Nosto</span>

                    <!-- Duplicated Set for Infinite Loop -->
                    <span class="ticker-item">Sell</span>
                    <span class="ticker-item">Siena</span>
                    <span class="ticker-item">Tapcart</span>
                    <span class="ticker-item">Ordergroove</span>
                    <span class="ticker-item">ROUTE</span>
                    <span class="ticker-item">Glew.</span>
                    <span class="ticker-item">Matrixify</span>
                    <span class="ticker-item">Okendo</span>
                    <span class="ticker-item">Nosto</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Experts Section -->
    <section class="experts-section">
        <div class="experts-container">
            <!-- Left Side: Copy -->
            <div class="experts-content">
                <h2 class="experts-title">Big Plans? Our Shopify Plus Experts Are In.</h2>
                <div class="experts-description">
                    <p>We're not in the business of just building "pretty" websites. As a leading <strong>Shopify Plus
                            e-commerce development agency</strong>, we build stores that actually work. We are talking
                        about sites that are fast, easy to use, optimized for conversions, and built with your growth in
                        mind.</p>
                    <p>As an official Shopify Plus agency, we've helped 500+ brands across globe move faster, sell
                        smarter, and grow stronger.</p>
                    <p>Need a store that performs fast and adapts easily as you grow? We've got your back. Want to go
                        DTC? We'll help you stand out. Selling wholesale? Our <strong>Shopify Plus solutions</strong>
                        are built to deliver the best B2B ecommerce experience for your customers.</p>
                    <p>We work like an extension of your team - thoughtful, practical, and focused on what really
                        matters. You get no fancy talk. Just solid strategy, smart design, and the kind of services that
                        help your brand grow.</p>
                </div>
                <a href="#" class="btn-experts">Explore More</a>
            </div>

            <!-- Right Side: Visual Collage -->
            <div class="experts-visuals">
                <div class="visual-grid">
                    <!-- Decor/Background Floating Cards -->
                    <div class="v-card card-tl">
                        <img src="assets/img/success-brand -1.jpeg" alt="Preview 1">
                    </div>
                    <div class="v-card card-tr">
                        <img src="assets/img/image2.webp" alt="Preview 2">
                    </div>

                    <!-- Center Main Card (Sales Chart Mockup) -->
                    <div class="v-card card-center">
                        <div class="chart-header">
                            <span class="chart-title">Total sales</span>
                            <span class="icon-search">🔍</span>
                        </div>
                        <div class="chart-body">
                            <div class="chart-value">$249,983 <span class="chart-growth">⬆ 36%</span></div>
                            <div style="font-size: 0.8rem; color: #999; margin-bottom: 1rem;">$10k</div>
                            <!-- Simple SVG Wave graph -->
                            <svg viewBox="0 0 100 40" class="chart-svg" width="100%" height="50" fill="none"
                                stroke="#63b3ed" stroke-width="2" style="overflow: visible;">
                                <path d="M0,35 Q10,25 20,30 T40,20 T60,35 T80,10 T100,25" />
                                <circle cx="40" cy="20" r="3" fill="#63b3ed" />
                                <circle cx="80" cy="10" r="3" fill="#63b3ed" />
                            </svg>
                            <div class="chart-dates">
                                <span>Jun 6</span>
                                <span>Jun 14</span>
                                <span>Jun 22</span>
                                <span>Jul 5</span>
                            </div>
                            <div style="font-size: 0.7rem; color: #aaa; margin-top: 5px; text-align: center;">
                                — Jun 6–Jul 5, 2023 ··· May 7–Jun 5, 2023
                            </div>
                        </div>
                    </div>

                    <div class="v-card card-bl">
                        <img src="assets/img/success-brand-3.jpeg" alt="Preview 3">
                    </div>
                    <div class="v-card card-br">
                        <img src="assets/img/image-1.webp" alt="Preview 4">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Resources Section -->
    <section class="resources-section">
        <div class="resources-container">
            <h2 class="resources-title">Shopify & Shopify Plus Resources</h2>
            <div class="resources-grid">
                <!-- Card 1 -->
                <div class="resource-card">
                    <div class="resource-visual">
                        <img src="assets/img/resource_blog_dubai.png" alt="Development Cost Dubai">
                    </div>
                    <p class="resource-caption">Ecommerce Website Development Cost In Dubai (2026 Edition)</p>
                </div>

                <!-- Card 2 -->
                <div class="resource-card">
                    <div class="resource-visual">
                        <img src="assets/img/resource_blog_products.png" alt="What to sell">
                    </div>
                    <p class="resource-caption">What to Sell on Shopify: 10 Smart Ideas (2026 Edition)</p>
                </div>

                <!-- Card 3 -->
                <div class="resource-card">
                    <div class="resource-visual">
                        <img src="assets/img/resource_blog_platforms.png" alt="Best Platforms">
                    </div>
                    <p class="resource-caption">Best Ecommerce Platforms for Modern Businesses In 2026</p>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="faq-section">
        <div class="faq-container">
            <div class="faq-header">
                <h2 class="faq-title">Answers to Your Questions, All in One Place</h2>
                <p class="faq-subtitle">If you can't find an answer that you're looking for, feel free to drop us a
                    line.</p>
                <a href="#" class="btn-faq-contact">Get In Touch</a>
            </div>

            <div class="faq-list">
                <!-- Item 1 -->
                <div class="faq-item">
                    <button class="faq-question">
                        <span>Shopify vs. Shopify Plus – Which one is right for our business?</span>
                        <div class="faq-icon">+</div>
                    </button>
                    <div class="faq-answer">
                        <p>Shopify is great for small to medium-sized businesses, while Shopify Plus is designed for
                            high-volume enterprise brands. Plus offers unlimited staff accounts, advanced automation
                            with Shopify Flow, customizable checkout, and higher API limits.</p>
                    </div>
                </div>

                <!-- Item 2 -->
                <div class="faq-item">
                    <button class="faq-question">
                        <span>What is the typical timeline to launch a Shopify store?</span>
                        <div class="faq-icon">+</div>
                    </button>
                    <div class="faq-answer">
                        <p>A standard Shopify build typically takes 4–8 weeks, while complex Shopify Plus
                            implementations with custom integrations may take 3–6 months depending on requirements.</p>
                    </div>
                </div>

                <!-- Item 3 -->
                <div class="faq-item">
                    <button class="faq-question">
                        <span>Can our existing site be migrated to Shopify without losing any data?</span>
                        <div class="faq-icon">+</div>
                    </button>
                    <div class="faq-answer">
                        <p>Yes, we specialize in seamless migrations. We transfer products, customers, orders, and SEO
                            settings (redirects) to ensure you don't lose traffic or data during the transition.</p>
                    </div>
                </div>

                <!-- Item 4 -->
                <div class="faq-item">
                    <button class="faq-question">
                        <span>What are the benefits of working with a Shopify Partner agency?</span>
                        <div class="faq-icon">+</div>
                    </button>
                    <div class="faq-answer">
                        <p>As a Shopify Partner, we have access to exclusive development tools, priority support, and
                            beta features. We follow best practices to ensure your store is scalable, secure, and
                            optimized for sales.</p>
                    </div>
                </div>

                <!-- Item 5 -->
                <div class="faq-item">
                    <button class="faq-question">
                        <span>Can your Shopify Plus agency help with international Shopify stores and multi-currency
                            setup?</span>
                        <div class="faq-icon">+</div>
                    </button>
                    <div class="faq-answer">
                        <p>Absolutely. We set up Shopify Markets to handle multi-currency, multi-language, and
                            international domains, ensuring a localized experience for your global customers.</p>
                    </div>
                </div>

                <!-- Item 6 -->
                <div class="faq-item">
                    <button class="faq-question">
                        <span>What is Shopify Headless and do we need to use it for our store?</span>
                        <div class="faq-icon">+</div>
                    </button>
                    <div class="faq-answer">
                        <p>Headless commerce separates the frontend (design) from the backend (Shopify). It offers
                            ultimate design freedom and speed but comes with higher complexity. We can help assess if
                            it's the right move for your brand.</p>
                    </div>
                </div>

                <!-- Item 7 -->
                <div class="faq-item">
                    <button class="faq-question">
                        <span>How can a Shopify store be optimized for better SEO rankings?</span>
                        <div class="faq-icon">+</div>
                    </button>
                    <div class="faq-answer">
                        <p>We implement technical SEO best practices including site speed optimization, structured data,
                            clean URL structures, and mobile responsiveness to improve your search visibility.</p>
                    </div>
                </div>

                <!-- Item 8 -->
                <div class="faq-item">
                    <button class="faq-question">
                        <span>Does your agency help with Shopify B2B and wholesale solutions?</span>
                        <div class="faq-icon">+</div>
                    </button>
                    <div class="faq-answer">
                        <p>Yes, leveraging Shopify Plus B2B features, we can build portal experiences with custom price
                            lists, net payment terms, and bulk ordering capabilities.</p>
                    </div>
                </div>

                <!-- Item 9 -->
                <div class="faq-item">
                    <button class="faq-question">
                        <span>Can Shopify stores integrate with ERP, CRM, and other third party tools?</span>
                        <div class="faq-icon">+</div>
                    </button>
                    <div class="faq-answer">
                        <p>Shopify has a robust API. We integrate with major ERPs (NetSuite, SAP), CRMs (Saleforce,
                            HubSpot), and marketing tools (Klaviyo) to synchronize your data automatically.</p>
                    </div>
                </div>

                <!-- Item 10 -->
                <div class="faq-item">
                    <button class="faq-question">
                        <span>How secure is Shopify for online transactions and customer data?</span>
                        <div class="faq-icon">+</div>
                    </button>
                    <div class="faq-answer">
                        <p>Shopify is Level 1 PCI DSS compliant, meaning it meets the highest standards for data
                            security. It handles all security patches and server maintenance for you.</p>
                    </div>
                </div>

                <!-- Item 11 -->
                <div class="faq-item">
                    <button class="faq-question">
                        <span>Why should we work with a Shopify website development agency instead of building the store
                            ourselves?</span>
                        <div class="faq-icon">+</div>
                    </button>
                    <div class="faq-answer">
                        <p>While DIY is possible, an agency brings expertise in UX design, custom coding, conversion
                            rate optimization, and scalability, saving you time and ensuring a professional,
                            high-converting result.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- CTA & Testimonial Section -->
    <section class="cta-testimonial-section">
        <div class="ctat-container">
            <!-- Top Banner -->
            <div class="ctat-banner">
                <h2>We work with brands across the UK, USA, Canada, Australia, UAE, and more.</h2>
                <a href="#" class="btn-get-started">Get started with us today</a>
            </div>

            <!-- Main Content Area -->
            <div class="ctat-content-area">
                <!-- Background Image -->
                <img src="assets/img/testimonial_bg_office.png" alt="Office Background" class="ctat-bg-image">

                <!-- Left Info Layer -->
                <div class="ctat-left-info">
                    <h2 class="ctat-reviews-title">200+</h2>
                    <div class="ctat-stars">★★★★★ Reviews</div>
                    <p class="ctat-small-text">We're Shopify Plus experts focused on building fast, sales-driven stores
                        that put your growth into motion.</p>
                </div>

                <!-- Right Card Layer -->
                <div class="ctat-card-container">
                    <div class="ctat-card-content">
                        <div class="ctat-user-profile">
                            <img src="assets/img/testimonial_user_avatar.png" alt="Jonathon" class="ctat-avatar">
                            <div class="ctat-user-info">
                                <h4>Jonathon</h4>
                                <div style="color: #000; font-size: 0.8rem;">★★★★★</div>
                            </div>
                        </div>
                        <p class="ctat-testimonial-text">"We came to Ramani Shopify Agency with a rough idea, and they
                            turned it into something way beyond what we imagined. The team was fast, responsive, and
                            knew Shopify inside out."</p>

                        <div class="ctat-stats-row">
                            <div class="ctat-stat">
                                <h3>18%</h3>
                                <p>Traffic Increased</p>
                            </div>
                            <div class="ctat-stat">
                                <h3>32%</h3>
                                <p>Sales Increased in 60 days</p>
                            </div>
                        </div>
                    </div>
                    <div class="ctat-phone-visual">
                        <img src="assets/img/testimonial_phone_mockup.png" alt="Mobile Store">
                    </div>
                </div>
            </div>

            <!-- Bottom Ticker Strip -->
            <div class="ctat-ticker-strip">
                <div class="ctat-ticker-label"><span>Why work with Ramani</span></div>
                <div class="ctat-ticker-track">
                    <div class="ctat-ticker-item">Shopify & Shopify Plus Experts</div>
                    <div class="ctat-ticker-item">Built for Performance & Conversions</div>
                    <div class="ctat-ticker-item">Smooth Collaboration, Start to Launch</div>
                    <div class="ctat-ticker-item">Scalable Setup for Long-Term Growth</div>
                    <div class="ctat-ticker-item">Trusted by DTC & B2B Brands</div>
                    <div class="ctat-ticker-item">Always On Time, On Scope</div>
                    <!-- Duplicate for loop -->
                    <div class="ctat-ticker-item">Shopify & Shopify Plus Experts</div>
                    <div class="ctat-ticker-item">Built for Performance & Conversions</div>
                    <div class="ctat-ticker-item">Smooth Collaboration, Start to Launch</div>
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
                <a href="#" class="btn-footer-cta">Get In Touch</a>
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
                        <li><a href="#">Our Work</a></li>
                        <li><a href="#">Who we are</a></li>
                        <li><a href="#">Get a Free Audit</a></li>
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
                <div>© 2025, Ramani Shopify Agency</div>
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
            const heroSection = document.querySelector('.hero-section');
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
</body>

</html>