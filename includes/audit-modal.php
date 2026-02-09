<div class="audit-modal-overlay" id="auditModal">
    <div class="audit-modal-content">
        <button class="audit-modal-close" aria-label="Close Modal">&times;</button>

        <div class="audit-modal-header">
            <h2>Get Your Free Audit</h2>
            <p>Answer a few questions to help us understand your needs, and download our exclusive brochure.</p>
        </div>

        <form id="auditForm">
            <div class="audit-form-group">
                <label for="auditName">Full Name</label>
                <input type="text" id="auditName" name="name" required placeholder="John Doe">
            </div>

            <div class="audit-form-group">
                <label for="auditEmail">Work Email</label>
                <input type="email" id="auditEmail" name="email" required placeholder="john@company.com">
            </div>

            <div class="audit-form-group">
                <label for="auditWebsite">Company Website</label>
                <input type="url" id="auditWebsite" name="website" placeholder="https://company.com">
            </div>

            <div class="audit-form-group">
                <label for="auditChallenges">What are your main challenges?</label>
                <textarea id="auditChallenges" name="challenges" rows="3"
                    placeholder="Tell us what you're struggling with..."></textarea>
            </div>

            <button type="submit" class="audit-submit-btn">Submit & Download Brochure</button>
        </form>

        <div class="audit-success-message" id="auditSuccess">
            <div class="audit-success-icon">✓</div>
            <h3>Thank You!</h3>
            <p>Your audit request has been received.</p>
            <p>Your download should start automatically.</p>
            <a href="assets/brochure.pdf" download="Ramani_Infosys_Brochure.pdf" class="audit-download-link"
                id="manualDownloadStep">Click here if download doesn't start</a>
        </div>
    </div>
</div>