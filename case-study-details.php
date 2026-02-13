<?php
// case-study-details.php

$case_studies = [
    'global-retail-platform' => [
        'title' => 'Global Retail Platform',
        'subtitle' => 'E-Commerce | Angular',
        'image' => 'assets/img/brand_success_story_main.svg',

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
        'image' => 'assets/img/brand_success_story_fintech.svg',
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
        'image' => 'assets/img/brand_success_story_healthcare.svg',
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
        'image' => 'assets/img/brand_success_story_luxury.svg',
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
        'image' => 'assets/img/brand_success_story_analytics.svg',
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

        'image' => 'assets/img/brand_success_story_immersive.svg',
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
    <link rel="stylesheet" href="assets/css/style3.css">


    <link rel="icon" type="image/jpeg" href="assets/img/favicon.jpeg">
    <link rel="shortcut icon" type="image/jpeg" href="assets/img/favicon.jpeg">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>
        .cs-hero {
            min-height: 80vh;
            padding-top: 140px;
            /* Space for fixed header */
            padding-bottom: 60px;
            background: #000;
            color: #fff;
            position: relative;
        }

        .cs-hero-container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 20px;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 60px;
            align-items: center;
        }

        /* First Div: Image/Video */
        .cs-hero-media {
            position: relative;
            width: 100%;
            height: 500px;
            /* Fixed height for consistency */
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.5);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .cs-hero-media img,
        .cs-hero-media video {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }

        /* Second Div: Content */
        .cs-hero-content {
            text-align: left;
        }

        .cs-hero h1 {
            font-size: 3.5rem;
            margin-bottom: 1.5rem;
            line-height: 1.1;
            background: linear-gradient(90deg, #fff, #aaa);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .cs-hero .subtitle {
            font-size: 1.1rem;
            color: var(--primary-color);
            margin-bottom: 1.5rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 2px;
            display: inline-block;
            background: rgba(0, 191, 255, 0.1);
            /* Subtle badge bg */
            padding: 8px 16px;
            border-radius: 50px;
        }

        .cs-hero p {
            font-size: 1.2rem;
            color: #ccc;
            line-height: 1.8;
            max-width: 600px;
        }

        /* Restored Content Section Styles */
        .cs-content-section {
            padding: 50px 0;
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
            padding: 50px 0;
        }

        .results-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
            text-align: center;
        }

        .results-container h2 {
            font-size: 2.5rem;
            margin-bottom: 2rem;
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
            text-align: center;
            /* Center content in card */
        }

        .result-card:hover {
            transform: translateY(-10px);
            border-color: var(--primary-color);
        }

        .result-card h3 {
            font-size: 2rem;
            /* Larger arrow/icon */
            color: var(--primary-color);
            margin-bottom: 1rem;
            display: block;
        }

        .result-card p {
            font-size: 1.1rem;
            color: #fff;
            font-weight: 500;
        }

        .btn-back {
            display: inline-block;
            margin-top: 60px;
            padding: 12px 35px;
            border: 1px solid var(--primary-color);
            color: var(--primary-color);
            text-decoration: none;
            border-radius: 50px;
            font-weight: 500;
            transition: all 0.3s;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .btn-back:hover {
            background: var(--primary-color);
            color: #000;
            box-shadow: 0 0 20px rgba(0, 191, 255, 0.3);
        }

        @media (max-width: 1024px) {
            .cs-hero-container {
                grid-template-columns: 1fr;
                gap: 40px;
                text-align: center;
            }

            .cs-hero-content {
                text-align: center;
                order: 2;
                /* Content below image on tablets if desired, or remove to keep above */
            }

            .cs-hero-media {
                height: 400px;
                order: 1;
            }

            .cs-hero p {
                margin: 0 auto;
            }
        }

        @media (max-width: 768px) {
            .cs-hero {
                padding-top: 120px;
            }

            .cs-hero h1 {
                font-size: 2.5rem;
            }

            .cs-hero-media {
                height: 300px;
            }

            .cs-grid {
                grid-template-columns: 1fr;
                gap: 40px;
            }

            .results-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>

<body>

    <?php include 'includes/header.php'; ?>

    <!-- Case Study Hero -->
    <section class="cs-hero">
        <div class="cs-hero-container">
            <!-- First Div: Media -->
            <div class="cs-hero-media">
                <?php if (isset($study['video']) && $study['video']): ?>
                    <video autoplay muted loop playsinline>
                        <source src="<?php echo $study['video']; ?>" type="video/mp4">
                    </video>
                <?php else: ?>
                    <img src="<?php echo $study['image']; ?>" alt="<?php echo $study['title']; ?>">
                <?php endif; ?>
            </div>

            <!-- Second Div: Content -->
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
    <?php include 'includes/footer.php'; ?>
</body>

</html>