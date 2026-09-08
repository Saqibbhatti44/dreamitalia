/* ==========================================================================
   Dream Italia UniPathways — Dynamic Form Submission Logic
   Works with Web3Forms / Formspree endpoints out of the box.
   Swap FORM_ENDPOINT below with your live endpoint before going live.
   ========================================================================== */

const FORM_ENDPOINT = 'https://api.web3forms.com/submit'; // Replace access_key in hidden field per form

document.addEventListener('DOMContentLoaded', () => {

  const forms = document.querySelectorAll('[data-lead-form]');

  forms.forEach((form) => {
    const submitBtn = form.querySelector('[data-submit-btn]');
    const successMsg = form.querySelector('[data-form-success]');
    const errorMsg = form.querySelector('[data-form-error]');
    const btnLabel = submitBtn ? submitBtn.querySelector('[data-btn-label]') : null;

    form.addEventListener('submit', async (e) => {
      e.preventDefault();

      if (errorMsg) errorMsg.classList.add('hidden');
      if (successMsg) successMsg.classList.add('hidden');

      const requiredFields = form.querySelectorAll('[required]');
      let valid = true;
      requiredFields.forEach((field) => {
        if (!field.value.trim()) {
          valid = false;
          field.classList.add('border-red-500');
        } else {
          field.classList.remove('border-red-500');
        }
      });

      if (!valid) {
        if (errorMsg) {
          errorMsg.textContent = 'Please complete all required fields.';
          errorMsg.classList.remove('hidden');
        }
        return;
      }

      const formData = new FormData(form);

      if (submitBtn) {
        submitBtn.disabled = true;
        submitBtn.classList.add('opacity-70', 'cursor-not-allowed');
        if (btnLabel) btnLabel.textContent = 'Submitting...';
      }

      try {
        const response = await fetch(form.getAttribute('action') || FORM_ENDPOINT, {
          method: 'POST',
          body: formData,
          headers: { Accept: 'application/json' },
        });

        const result = await response.json().catch(() => ({}));

        if (response.ok) {
          form.reset();
          if (successMsg) {
            successMsg.classList.remove('hidden');
            successMsg.textContent = "Grazie! Your assessment request has been received — our advisors will reach out on WhatsApp shortly.";
          }
          form.dispatchEvent(new CustomEvent('lead-form:success', { detail: result }));
        } else {
          throw new Error(result.message || 'Submission failed');
        }
      } catch (err) {
        if (errorMsg) {
          errorMsg.textContent = 'Something went wrong. Please try again or reach us directly on WhatsApp.';
          errorMsg.classList.remove('hidden');
        }
      } finally {
        if (submitBtn) {
          submitBtn.disabled = false;
          submitBtn.classList.remove('opacity-70', 'cursor-not-allowed');
          if (btnLabel) btnLabel.textContent = 'Check My Eligibility';
        }
      }
    });
  });

});
