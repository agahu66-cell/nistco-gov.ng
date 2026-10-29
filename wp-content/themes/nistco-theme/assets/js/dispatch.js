document.addEventListener('DOMContentLoaded', () => {
    const contactForm = document.querySelector('#contact form, .contact-section form');
    const submitBtn = document.getElementById('submitDispatchBtn');

    if (!contactForm) return;

    contactForm.addEventListener('submit', async (e) => {
        e.preventDefault();

        if (submitBtn) {
            submitBtn.textContent = 'Transmitting...';
            submitBtn.disabled = true;
        }

        const formData = {
            name: contactForm.querySelector('[name="name"]')?.value || '',
            email: contactForm.querySelector('[name="email"]')?.value || '',
            phone: contactForm.querySelector('[name="phone"]')?.value || '',
            subject: contactForm.querySelector('[name="subject"]')?.value || 'General Inquiry',
            message: contactForm.querySelector('[name="message"]')?.value || ''
        };

        try {
            const res = await fetch('/wp-json/nastco/v1/dispatch', {
                method: 'POST',
                headers: { 'Content-Type': 'application/json' },
                body: JSON.stringify(formData)
            });

            const result = await res.json();

            if (result.success) {
                alert('✔ Secure transmission successfully dispatched to executive telemetry.');
                contactForm.reset();
            } else {
                alert('✖ Transmission failed: ' + (result.message || 'Unknown error'));
            }
        } catch (err) {
            console.error('Dispatch error:', err);
            alert('✖ Network error connecting to Termii telemetry gateway.');
        } finally {
            if (submitBtn) {
                submitBtn.textContent = 'Secure Transmission';
                submitBtn.disabled = false;
            }
        }
    });
});
