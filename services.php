<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Advanced SEO: Phase 5 - Conversion-Optimized Service Pages -->
    <title>Enterprise Development Services | .NET, Angular, React & Shopify Experts - Ramani Infosys</title>
    <meta name="description"
        content="End-to-end software development services. We specialize in .NET Core, Angular, React, and Shopify Plus solutions for scalable, high-performance web applications.">

    <!-- Canonical Tag -->
    <link rel="canonical" href="https://ramaniinfosys.com/services" />

    <link rel="stylesheet" href="assets/css/style3.css">

    <link rel="icon" type="image/jpeg" href="assets/img/favicon.jpeg">
    <link rel="shortcut icon" type="image/jpeg" href="assets/img/favicon.jpeg">
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css" />
    <!-- Google Fonts for premium look -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Advanced SEO: Phase 7 - Schema Markup (Service) -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Service",
      "serviceType": "Software Development",
      "provider": {
        "@type": "Organization",
        "name": "Ramani Infosys"
      },
      "areaServed": {
        "@type": "Country",
        "name": "Global"
      },
      "hasOfferCatalog": {
        "@type": "OfferCatalog",
        "name": "Development Services",
        "itemListElement": [
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "Shopify Development"
            }
          },
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "Custom .NET Software"
            }
          },
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "Angular & React Web Apps"
            }
          }
        ]
      }
    }
    </script>
</head>

<body>

    <?php include 'includes/header.php'; ?>

    <!-- Hero Section (New Standard Layout) -->
    <section class="service-hero-section">
        <div class="hero-bg-accent"></div>
        <div class="hero-bg-accent-2"></div>

        <div class="service-hero-content">
            <h1>Expert Solutions for <br><span class="highlight">Modern Businesses</span></h1>
            <p>We combine strategic thinking with engineering excellence to build scalable .NET, Angular, and e-commerce
                platforms.</p>
            <div class="hero-actions" style="padding: 0px 5px">
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
                                <img src="assets/img/brand_success_story_fintech.svg" class="vc-main-img"
                                    alt=".NET Main">
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
                                <img src="assets/img/brand_success_story_main.svg" class="vc-main-img"
                                    alt="Angular Visual">
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
    <?php include 'includes/footer.php'; ?>

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
    </script>

</body>

</html>