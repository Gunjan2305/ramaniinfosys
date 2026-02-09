document.addEventListener('DOMContentLoaded', () => {
    const auditModal = document.getElementById('auditModal');
    // If modal is not in DOM (e.g. somehow failed to load), do nothing
    if (!auditModal) return;

    const closeBtn = document.querySelector('.audit-modal-close');
    const auditForm = document.getElementById('auditForm');
    const successMsg = document.getElementById('auditSuccess');
    const modalHeader = document.querySelector('.audit-modal-header');

    // Trigger Buttons (Get A Free Audit & Shopify Audits)
    // Select all links acting as buttons that contain "Get A Free Audit" text (case insensitive)
    const triggerBtns = Array.from(document.querySelectorAll('a, button')).filter(btn => {
        const text = btn.textContent.trim().toLowerCase();
        return text.includes('get a free audit') || text.includes('shopify audits');
    });

    function openModal(e) {
        e.preventDefault();
        auditModal.classList.add('active');
        document.body.style.overflow = 'hidden'; // Prevent background scroll
    }

    function closeModal() {
        auditModal.classList.remove('active');
        document.body.style.overflow = '';
        // Reset form after delay
        setTimeout(() => {
            auditForm.style.display = 'block';
            successMsg.style.display = 'none';
            if (modalHeader) modalHeader.style.display = 'block';
            auditForm.reset();
            const submitBtn = auditForm.querySelector('.audit-submit-btn');
            if (submitBtn) {
                submitBtn.disabled = false;
                submitBtn.textContent = 'Submit & Download Brochure';
            }
        }, 300);
    }

    triggerBtns.forEach(btn => {
        btn.addEventListener('click', openModal);
    });

    if (closeBtn) closeBtn.addEventListener('click', closeModal);

    // Close on outside click
    auditModal.addEventListener('click', (e) => {
        if (e.target === auditModal) {
            closeModal();
        }
    });

    // Handle Form Submission
    if (auditForm) {
        auditForm.addEventListener('submit', (e) => {
            e.preventDefault();

            const submitBtn = auditForm.querySelector('.audit-submit-btn');
            const originalText = submitBtn.textContent;
            submitBtn.textContent = 'Processing...';
            submitBtn.disabled = true;

            const formData = new FormData(auditForm);

            fetch('send-audit', {
                method: 'POST',
                body: formData
            })
                .then(response => response.json())
                .then(data => {
                    if (data.status === 'success') {
                        // Show success state
                        auditForm.style.display = 'none';
                        if (modalHeader) modalHeader.style.display = 'none';
                        successMsg.style.display = 'block';

                        // Trigger Download
                        const downloadLink = document.getElementById('manualDownloadStep');
                        if (downloadLink) downloadLink.click();
                    } else {
                        alert('Error: ' + (data.message || 'Something went wrong.'));
                        submitBtn.textContent = originalText;
                        submitBtn.disabled = false;
                    }
                })
                .catch(error => {
                    console.error('Error:', error);

                    // Fallback for demo purposes if PHP fails locally (optional)
                    // But better to show error.
                    // alert('An error occurred while sending the request.');

                    // Since we are likely on a local server without mail setup, let's simulate success if it fails with 500 but "works" otherwise
                    // For now, consistent error handling is better.
                    submitBtn.textContent = originalText;
                    submitBtn.disabled = false;
                    alert('Request failed. This may be due to a local server configuration issue. Please check the console for details.');
                });
        });
    }
});
