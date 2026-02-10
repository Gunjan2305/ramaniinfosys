<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio - Ramani Infosys</title>
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

    <!-- Portfolio Header -->
    <section class="portfolio-header">
        <div class="container mobille-header">
            <h1>Our Portfolio</h1>
            <p>A curated showcase of our finest work across e-commerce, web development, and digital design.</p>
        </div>
    </section>

    <!-- Filters -->
    <section class="portfolio-content">
        <div class="container">
            <div class="portfolio-filters">
                <button class="filter-btn active" data-filter="all">All Projects</button>
                <button class="filter-btn" data-filter="shopify">Shopify</button>
                <button class="filter-btn" data-filter="dotnet">.NET / Angular</button>
                <button class="filter-btn" data-filter="design">Design</button>
            </div>

            <div class="portfolio-slider-wrapper">
                <button class="slider-nav prev" aria-label="Previous Project">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path d="M15 18l-6-6 6-6" />
                    </svg>
                </button>

                <div class="portfolio-grid">
                    <!-- Item 1: Shopify -->
                    <div class="portfolio-item Shopify" data-category="shopify">
                        <img src="assets/img/image2.webp" alt="Shopify Store" class="portfolio-thumb">
                        <div class="portfolio-overlay">
                            <span class="portfolio-cat">Shopify</span>
                            <h3 class="portfolio-title">Sustainable Fashion</h3>
                        </div>
                    </div>

                    <!-- Item 2: .NET -->
                    <div class="portfolio-item DotNet" data-category="dotnet">
                        <img src="assets/img/success-brand -1.jpeg" alt=".NET App" class="portfolio-thumb">
                        <div class="portfolio-overlay">
                            <span class="portfolio-cat">.NET Core</span>
                            <h3 class="portfolio-title">Fintech Dashboard</h3>
                        </div>
                    </div>

                    <!-- Item 3: Design -->
                    <div class="portfolio-item Design" data-category="design">
                        <img src="assets/img/image-1.webp" alt="Design UI" class="portfolio-thumb">
                        <div class="portfolio-overlay">
                            <span class="portfolio-cat">UI/UX Design</span>
                            <h3 class="portfolio-title">SaaS Landing Page</h3>
                        </div>
                    </div>

                    <!-- Item 4: Shopify -->
                    <div class="portfolio-item Shopify" data-category="shopify">
                        <img src="assets/img/success-brand -2.jpeg" alt="Shopify Plus" class="portfolio-thumb">
                        <div class="portfolio-overlay">
                            <span class="portfolio-cat">Shopify Plus</span>
                            <h3 class="portfolio-title">Global Retailer</h3>
                        </div>
                    </div>

                    <!-- Item 5: Angular -->
                    <div class="portfolio-item DotNet" data-category="dotnet">
                        <img src="assets/img/success-brand-3.jpeg" alt="Angular App" class="portfolio-thumb">
                        <div class="portfolio-overlay">
                            <span class="portfolio-cat">Angular</span>
                            <h3 class="portfolio-title">Healthcare Portal</h3>
                        </div>
                    </div>

                    <!-- Item 6: Motion -->
                    <div class="portfolio-item Design" data-category="design">
                        <video autoplay muted loop playsinline class="portfolio-thumb"
                            style="object-fit: cover; width: 100%; height: 100%;">
                            <source src="assets/video/banner-video.mp4" type="video/mp4">
                        </video>
                        <div class="portfolio-overlay">
                            <span class="portfolio-cat">Motion Design</span>
                            <h3 class="portfolio-title">Interactive Campaign</h3>
                        </div>
                    </div>
                </div>

                <button class="slider-nav next" aria-label="Next Project">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path d="M9 18l6-6-6-6" />
                    </svg>
                </button>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php include 'includes/footer.php'; ?>
    
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


        // Filter Logic
        const filterBtns = document.querySelectorAll('.filter-btn');
        const items = document.querySelectorAll('.portfolio-item');
        const sliderGrid = document.querySelector('.portfolio-grid');

        filterBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                // Active class
                filterBtns.forEach(b => b.classList.remove('active'));
                btn.classList.add('active');

                const filter = btn.getAttribute('data-filter');

                items.forEach(item => {
                    // Check if 'all' or matches category
                    // Note: original code checked `item.getAttribute('data-category') === filter`.
                    // But wait, the loop below inside the original code was:
                    // if (filter === 'all' || item.getAttribute('data-category') === filter) { ... }
                    // However, we need to iterate over items. Let's fix the logic to match the original intent properly.
                    
                    if (filter === 'all' || item.getAttribute('data-category') === filter) {
                        item.style.display = 'block';
                        // Add fade in animation if desired
                        item.style.opacity = '0';
                        setTimeout(() => item.style.opacity = '1', 50);
                    } else {
                        item.style.display = 'none';
                    }
                });

                // Reset scroll position when filtering
                if (sliderGrid) {
                    sliderGrid.scrollTo({
                        left: 0,
                        behavior: 'smooth'
                    });
                }
            });
        });

        // Add opacity transition to items for filter effect
        items.forEach(item => {
            item.style.transition = 'opacity 0.3s ease';
        });

        // Slider Navigation Logic
        const prevBtn = document.querySelector('.slider-nav.prev');
        const nextBtn = document.querySelector('.slider-nav.next');

        if (sliderGrid && prevBtn && nextBtn) {
            nextBtn.addEventListener('click', () => {
                const scrollAmount = 400 + 30; // Item width + gap
                sliderGrid.scrollBy({
                    left: scrollAmount,
                    behavior: 'smooth'
                });
            });

            prevBtn.addEventListener('click', () => {
                const scrollAmount = 400 + 30; // Item width + gap
                sliderGrid.scrollBy({
                    left: -scrollAmount,
                    behavior: 'smooth'
                });
            });
        }
    </script>
    <!-- Audit Modal Logic -->
    <script src="assets/js/audit-modal.js"></script>
    <?php include 'includes/audit-modal.php'; ?>
</body>

</html>