<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Who We Are - Ramani Infosys</title>
    <link rel="stylesheet" href="assets/css/style1.css">


    <link rel="icon" type="image/jpeg" href="assets/img/favicon.jpeg">
    <link rel="shortcut icon" type="image/jpeg" href="assets/img/favicon.jpeg">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>

<body>

    <?php include 'includes/header.php'; ?>

    <!-- Hero Section -->
    <section class="about-hero">
        <div class="container mobille-header">
            <h1>We Build Digital <br> Experiences That Matter</h1>
            <p>Ramani Infosys is a global team of developers, designers, and strategists committed to pushing the
                boundaries of what's possible on the web.</p>
        </div>
        <div class="scroll-down">
            <svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2"
                stroke-linecap="round" stroke-linejoin="round">
                <path d="M7 13l5 5 5-5M7 6l5 5 5-5" />
            </svg>
        </div>
    </section>

    <!-- Our Story Section -->
    <section class="section-padding">
        <div class="container">
            <div class="story-grid">
                <div class="story-content reveal-on-scroll">
                    <h2>Our Story</h2>
                    <p>It all started in 2015 with a simple idea: to bridge the gap between complex technology and
                        business
                        growth. What began as a small group of three passionate freelance developers in a shared
                        apartment
                        has blossomed into Ramani Infosys, a premier digital transformation agency.</p>
                    <p>Over the years, we encountered every challenge imaginable—from scaling high-traffic e-commerce
                        platforms during Black Friday sales to migrating legacy banking systems to the cloud without a
                        second of downtime. Each challenge forged our expertise and strengthened our resolve.</p>
                    <p>Today, we stand proud as a team of over 50 dedicated professionals. We are official Shopify Plus
                        Partners, Microsoft Silver Partners, and recognized leaders in modern web development. But
                        despite
                        our growth, our core mission remains unchanged: <strong>We don't just write code; we engineer
                            success for your business.</strong></p>
                </div>
                <div class="story-image reveal-on-scroll">
                    <img src="assets/img/testimonial_bg_office.png" alt="Our Team at Work">
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Banner -->
    <div class="stats-banner reveal-on-scroll">
        <div class="container" style="justify-content: center;">
            <div class="stats-flex">
                <div class="stat-item">
                    <span class="stat-number">10+</span>
                    <span class="stat-label">Years Experience</span>
                </div>
                <div class="stat-item">
                    <span class="stat-number">230+</span>
                    <span class="stat-label">Projects Delivered</span>
                </div>
                <div class="stat-item">
                    <span class="stat-number">50+</span>
                    <span class="stat-label">Team Members</span>
                </div>
                <div class="stat-item">
                    <span class="stat-number">30+</span>
                    <span class="stat-label">Countries Served</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Core Values Section -->
    <section class="section-padding">
        <div class="container mobille-header">
            <h2 class="section-title reveal-on-scroll">Our Core Values</h2>
            <div class="values-grid">
                <!-- Value 1 -->
                <div class="value-card reveal-on-scroll">
                    <div class="value-icon">💡</div>
                    <h3>Innovation First</h3>
                    <p>The digital landscape changes daily. We stay ahead of the curve, constantly mastering new
                        frameworks like React, Next.js, and .NET Core to ensure your solution is future-proof.</p>
                </div>
                <!-- Value 2 -->
                <div class="value-card reveal-on-scroll">
                    <div class="value-icon">🤝</div>
                    <h3>Client Partnership</h3>
                    <p>We view ourselves as an extension of your internal team. We hold weekly sprints, transparent code
                        reviews, and honest strategy sessions. Your KPIs are our KPIs.</p>
                </div>
                <!-- Value 3 -->
                <div class="value-card reveal-on-scroll">
                    <div class="value-icon">🛡️</div>
                    <h3>Integrity & Trust</h3>
                    <p>No hidden fees, no tech jargon designed to confuse. We build relationships based on radical
                        transparency and delivering exactly what we promise, on time.</p>
                </div>
                <!-- Value 4 -->
                <div class="value-card reveal-on-scroll">
                    <div class="value-icon">🚀</div>
                    <h3>Excellence</h3>
                    <p>Good isn't enough. We obsess over site speed, code cleanliness, and pixel-perfect design. We
                        strive for excellence in every interaction.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Timeline / History Section (New) -->
    <section class="section-padding" style="background: #0e0e0e;">
        <div class="container mobille-header">
            <h2 class="section-title reveal-on-scroll">Our Journey</h2>
            <div class="story-content reveal-on-scroll" style="text-align: center; max-width: 800px; margin: 0 auto;">
                <p><strong>2015:</strong> Founded Ramani Infosys in Surat with a focus on .NET development.</p>
                <div style="width: 2px; height: 30px; background: #333; margin: 10px auto;"></div>
                <p><strong>2017:</strong> Expanded into E-Commerce, launching our first 10 Shopify stores.</p>
                <div style="width: 2px; height: 30px; background: #333; margin: 10px auto;"></div>
                <p><strong>2019:</strong> Reached 100+ clients and opened our first international office liaison.</p>
                <div style="width: 2px; height: 30px; background: #333; margin: 10px auto;"></div>
                <p><strong>2022:</strong> Became official Shopify Plus Partners.</p>
                <div style="width: 2px; height: 30px; background: #333; margin: 10px auto;"></div>
                <p><strong>2025:</strong> Celebrating 10 years of digital excellence with a team of 50+ experts.</p>
            </div>
        </div>
    </section>



    <!-- Footer -->
    <?php include 'includes/footer.php'; ?>
    
    <script>
        // Reveal on Scroll Animation with Fallback
        document.addEventListener('DOMContentLoaded', () => {
            const observerOptions = {
                threshold: 0.1, // Trigger when 10% visible
                rootMargin: "0px"
            };

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('active');
                        observer.unobserve(entry.target);
                    }
                });
            }, observerOptions);

            const revealElements = document.querySelectorAll('.reveal-on-scroll');

            // Check if IntersectionObserver is working, otherwise force show
            if (!('IntersectionObserver' in window)) {
                revealElements.forEach(el => el.classList.add('active'));
            } else {
                revealElements.forEach(el => observer.observe(el));
            }
        });
    </script>
    <!-- Audit Modal Logic -->
    <script src="assets/js/audit-modal.js"></script>
    <?php include 'includes/audit-modal.php'; ?>
</body>

</html>