<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Advanced SEO: Phase 9 - EEAT & Local Business Context -->
    <title>Contact Ramani Infosys | Get a Quote for Shopify & Software Development</title>
    <meta name="description"
        content="Ready to scale your business? Contact Ramani Infosys for a free consultation on Shopify development, custom software, and app solutions. Based in India, serving clients globally.">

    <!-- Canonical Tag -->
    <link rel="canonical" href="https://ramaniinfosys.com/contact-us" />

    <link rel="stylesheet" href="assets/css/style3.css">

    <link rel="icon" type="image/jpeg" href="assets/img/favicon.jpeg">
    <link rel="shortcut icon" type="image/jpeg" href="assets/img/favicon.jpeg">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Advanced SEO: Phase 7 - Schema Markup (LocalBusiness) -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "ContactPage",
      "mainEntity": {
        "@type": "LocalBusiness",
        "name": "Ramani Infosys",
        "image": "https://ramaniinfosys.com/assets/img/logo.jpeg",
        "telephone": "+91-9998579403",
        "email": "hello@ramaniinfosys.com",
        "address": {
          "@type": "PostalAddress",
          "streetAddress": "A-306, RJD Business Hub, Katargam",
          "addressLocality": "Surat",
          "postalCode": "395004",
          "addressCountry": "IN"
        },
        "url": "https://ramaniinfosys.com/contact-us"
      }
    }
    </script>
</head>

<body>

    <?php include 'includes/header.php'; ?>

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
    <?php include 'includes/footer.php'; ?>

    <!-- Scripts -->
    <script>
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