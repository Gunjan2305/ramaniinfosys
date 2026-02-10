<?php
// case-study-details.php

$case_studies = [
    'global-retail-platform' => [
        'title' => 'Global Retail Platform',
        'subtitle' => 'E-Commerce | Angular',
        'image' => 'assets/img/success-brand -1.jpeg',
        'video' => 'assets/video/banner-video.mp4',
        'description' => 'A comprehensive digital transformation for a leading global retailer, enhancing user experience and streamlining operations.',
        'challenge' => 'The client struggled with a legacy system that was slow, difficult to scale, and offered a poor user experience on mobile devices. They needed a robust, high-performance platform to handle millions of concurrent users.',
        'solution' => 'We engineered a Progressive Web App (PWA) using Angular and a microservices architecture. This ensured lightning-fast load times, offline capabilities, and a seamless omnichannel experience. We integrated AI-driven recommendations to personalize the shopping journey.',
        'results' => [
            '45% Increase in Mobile Conversion',
            '2.5M+ Daily Active Users',
            '99.99% Uptime During Peak Sales'
        ]
    ],
    'secure-banking-app' => [
        'title' => 'Secure Banking App',
        'subtitle' => 'FinTech | .NET Core',
        'image' => 'assets/img/success-brand -2.jpeg',
        'description' => 'Next-generation mobile banking application focusing on security, speed, and intuitive financial management.',
        'challenge' => 'Security vulnerabilities and a cluttered interface were causing customer churn. The client needed a fortress-level secure app that was also easy for non-tech-savvy users to navigate.',
        'solution' => 'Leveraging .NET Core for the backend, we built a highly secure, encrypted API layer. The frontend was redesigned with a focus on minimalism and accessibility. Biometric authentication and real-time fraud detection were implemented.',
        'results' => [
            'Zero Security Breaches',
            '30% Increase in User Retention',
            'Award for Best UX in FinTech'
        ]
    ],
    'patient-care-system' => [
        'title' => 'Patient Care System',
        'subtitle' => 'Healthcare | Azure',
        'image' => 'assets/img/success-brand-3.jpeg',
        'description' => 'A cloud-based healthcare management system connecting patients, doctors, and facilities in real-time.',
        'challenge' => 'Fragmented data across different departments led to delays in patient care and administrative errors. Data privacy (HIPAA compliance) was a major concern.',
        'solution' => 'We developed a centralized, cloud-native solution on Microsoft Azure. It ensures secure data sharing between authorized personnel, real-time patient monitoring, and automated appointment scheduling. Full HIPAA compliance was baked into the architecture.',
        'results' => [
            '50% Reduction in Admin Time',
            'Real-time Data Access',
            '100% HIPAA Compliant'
        ]
    ],
    'luxury-lifestyle-brand' => [
        'title' => 'Luxury Lifestyle Brand',
        'subtitle' => 'Shopify Plus | Design',
        'image' => 'assets/img/image2.webp',
        'description' => 'Custom Shopify Plus experience for a high-end fashion retailer with immersive visuals.',
        'challenge' => 'The brand needed a unique digital presence that reflected their high-end status while maintaining high performance. They wanted to move away from standard templates to a bespoke experience.',
        'solution' => 'We built a custom Shopify Plus theme with WebGL interactions and optimized asset loading. The design focuses on visual storytelling while ensuring a seamless checkout process.',
        'results' => [
            '30% Increase in AOV',
            'Fast Load Times',
            'Strong Brand Alignment'
        ]
    ],
    'analytics-dashboard' => [
        'title' => 'Analytics Dashboard',
        'subtitle' => 'SaaS | React',
        'image' => 'assets/img/image-1.webp',
        'description' => 'Real-time analytics dashboard for marketing agencies to track campaign performance.',
        'challenge' => 'Marketing agencies struggled with fragmented data across multiple platforms, leading to inefficient reporting and delayed insights.',
        'solution' => 'We built a unified React-based dashboard that aggregates data from various APIs in real-time. The interface allows for custom report generation and data visualization.',
        'results' => [
            'Unified Data View',
            'Real-time Reporting',
            'User Friendly Interface'
        ]
    ],
    'immersive-campaign' => [
        'title' => 'Immersive Campaign',
        'subtitle' => 'Digital Experience | Motion',
        'video' => 'assets/video/banner-video.mp4',
        'image' => 'assets/img/image-1.webp',
        'description' => 'Award-winning digital campaign featuring interactive video and motion graphics.',
        'challenge' => 'Engagement rates were low with traditional static campaigns. The client wanted to create a buzz and increase brand awareness through an innovative digital experience.',
        'solution' => 'We created an interactive video experience using advanced motion graphics and web technologies. Users can interact with the content, driving higher engagement and shareability.',
        'results' => [
            'High Engagement',
            'Viral Reach',
            'Award Winning Design'
        ]
    ]
];

$id = isset($_GET['id']) ? $_GET['id'] : '';
$study = isset($case_studies[$id]) ? $case_studies[$id] : null;

if (!$study) {
    // Redirect or show not found
    header("Location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php echo $study['title']; ?> - Case Study
    </title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/lines.css">
    <link rel="stylesheet" href="assets/css/footer.css">
    <link rel="stylesheet" href="assets/css/audit_modal.css">

    <link rel="icon" type="image/jpeg" href="assets/img/favicon.jpeg">
    <link rel="shortcut icon" type="image/jpeg" href="assets/img/favicon.jpeg">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>
        .cs-hero {
            height: 60vh;
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
            background: #000;
            color: #fff;
            text-align: center;
        }

        .cs-hero-bg {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            opacity: 0.4;
            z-index: 1;
        }

        .cs-hero-content {
            position: relative;
            z-index: 2;
            max-width: 800px;
            padding: 20px;
        }

        .cs-hero h1 {
            font-size: 3.5rem;
            margin-bottom: 1rem;
            background: linear-gradient(90deg, #fff, #aaa);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .cs-hero .subtitle {
            font-size: 1.2rem;
            color: var(--primary-color);
            margin-bottom: 2rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 2px;
        }

        .cs-content-section {
            padding: 80px 0;
            background: #050505;
            color: #ddd;
        }

        .cs-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 60px;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .cs-block h2 {
            font-size: 2rem;
            color: #fff;
            margin-bottom: 1.5rem;
            border-bottom: 2px solid var(--primary-color);
            display: inline-block;
            padding-bottom: 10px;
        }

        .cs-block p {
            line-height: 1.8;
            font-size: 1.1rem;
            color: #aaa;
        }

        .cs-results {
            background: #111;
            padding: 60px 0;
            margin-top: 60px;
        }

        .results-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
            text-align: center;
        }

        .results-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 30px;
            margin-top: 40px;
        }

        .result-card {
            background: rgba(255, 255, 255, 0.05);
            padding: 30px;
            border-radius: 15px;
            border: 1px solid rgba(255, 255, 255, 0.1);
            transition: transform 0.3s ease;
        }

        .result-card:hover {
            transform: translateY(-10px);
            border-color: var(--primary-color);
        }

        .result-card h3 {
            font-size: 1.5rem;
            color: var(--primary-color);
            margin-bottom: 0.5rem;
        }

        .btn-back {
            display: inline-block;
            margin-top: 40px;
            padding: 10px 30px;
            border: 1px solid var(--primary-color);
            color: var(--primary-color);
            text-decoration: none;
            border-radius: 30px;
            transition: all 0.3s;
        }

        .btn-back:hover {
            background: var(--primary-color);
            color: #000;
        }

        @media (max-width: 768px) {
            .cs-grid {
                grid-template-columns: 1fr;
                gap: 40px;
            }

            .results-grid {
                grid-template-columns: 1fr;
            }

            .cs-hero h1 {
                font-size: 2.5rem;
            }
        }
    </style>
</head>

<body>

    <header class="sticky-header">
        <div class="container">
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

    <!-- Case Study Hero -->
    <section class="cs-hero">
        <?php if (isset($study['video']) && $study['video']): ?>
            <video autoplay muted loop playsinline class="cs-hero-bg">
                <source src="<?php echo $study['video']; ?>" type="video/mp4">
            </video>
        <?php else: ?>
            <img src="<?php echo $study['image']; ?>" alt="<?php echo $study['title']; ?>" class="cs-hero-bg">
        <?php endif; ?>

        <div class="cs-hero-content">
            <div class="subtitle">
                <?php echo $study['subtitle']; ?>
            </div>
            <h1>
                <?php echo $study['title']; ?>
            </h1>
            <p>
                <?php echo $study['description']; ?>
            </p>
        </div>
    </section>

    <!-- Main Content -->
    <section class="cs-content-section">
        <div class="cs-grid">
            <div class="cs-block">
                <h2>The Challenge</h2>
                <p>
                    <?php echo $study['challenge']; ?>
                </p>
            </div>
            <div class="cs-block">
                <h2>Our Solution</h2>
                <p>
                    <?php echo $study['solution']; ?>
                </p>
            </div>
        </div>
    </section>

    <!-- Results Section -->
    <section class="cs-results">
        <div class="results-container">
            <h2>Key Results</h2>
            <div class="results-grid">
                <?php foreach ($study['results'] as $result): ?>
                    <div class="result-card">
                        <h3>➜</h3>
                        <p>
                            <?php echo $result; ?>
                        </p>
                    </div>
                <?php endforeach; ?>
            </div>
            <a href="index.php" class="btn-back">Back to Home</a>
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
                <a href="contact-us.php" class="btn-footer-cta">Get In Touch</a>
            </div>

            <!-- 2. Main Content -->
            <div class="footer-main">
                <div class="footer-brand-info footer-col-wrapper">
                    <div class="footer-logo">ramaniinfosys</div>
                    <div class="footer-contact-item">
                        <span>218 Thornridge Cir. Syracuse, Connecticut 35624</span>
                    </div>
                    <div class="footer-contact-item">
                        <span>A-306, RJD Business Hub, Katargam, Surat, 395004</span>
                    </div>
                    <div class="footer-contact-item">
                        <span>+91 9998579403</span>
                    </div>
                    <div class="footer-contact-item">
                        <span>hello@ramaniinfosys.com</span>
                    </div>
                    <!-- Social Icons -->
                    <div class="footer-social-links">
                        <a href="#" class="social-btn">FB</a>
                        <a href="#" class="social-btn">LI</a>
                        <a href="#" class="social-btn">TW</a>
                        <a href="#" class="social-btn">IG</a>
                    </div>
                </div>

                <div class="footer-col footer-col-wrapper">
                    <h4>Shopify Services</h4>
                    <ul class="footer-links">
                        <li><a href="#">Shopify Store Design & Development</a></li>
                        <li><a href="#">Migrate to Shopify</a></li>
                        <li><a href="#">Customize an Existing Shopify Store</a></li>
                        <li><a href="#">Shopify Plus Services</a></li>
                    </ul>
                </div>

                <div class="footer-col footer-col-wrapper">
                    <h4>Ramani Insights</h4>
                    <ul class="footer-links">
                        <li><a href="services.php">Explore Services</a></li>
                        <li><a href="our-work.php">Our Work</a></li>
                        <li><a href="who-we-are.php">Who we are</a></li>
                        <li><a href="portfolio.php">Portfolio</a></li>
                    </ul>
                </div>

                <div class="footer-col footer-col-wrapper">
                    <h4>GCC Countries</h4>
                    <ul class="footer-links">
                        <li><a href="#">UAE</a></li>
                        <li><a href="#">Saudi Arabia</a></li>
                        <!-- etc -->
                    </ul>
                </div>

            </div>

            <div class="footer-bottom">
                <div>© 2025, Ramani Software Agency</div>
                <div><a href="privacy-policy.php" class="footer-policy-link">Privacy Policy</a></div>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script>
        const mobileBtn = document.querySelector('.mobile-menu-btn');
        const mobileDrawer = document.querySelector('.mobile-nav-drawer');
        const mobileOverlay = document.querySelector('.mobile-nav-overlay');

        if (mobileBtn) {
            mobileBtn.addEventListener('click', () => {
                mobileBtn.classList.toggle('active');
                mobileDrawer.classList.toggle('active');
                mobileOverlay.classList.toggle('active');
            });
        }
        if (mobileOverlay) {
            mobileOverlay.addEventListener('click', () => {
                mobileBtn.classList.remove('active');
                mobileDrawer.classList.remove('active');
                mobileOverlay.classList.remove('active');
            });
        }
    </script>
</body>

</html>