import { select } from '../utils/dom';

/** Bootstrap tooltips (butuh global `bootstrap`). */
export function initTooltips() {
  select('[data-bs-toggle="tooltip"]', true).forEach(
    (el) => new bootstrap.Tooltip(el)
  );
}

/** Bootstrap form validation. */
export function initValidation() {
  select('.needs-validation', true).forEach((form) => {
    form.addEventListener('submit', (event) => {
      if (!form.checkValidity()) {
        event.preventDefault();
        event.stopPropagation();
      }
      form.classList.add('was-validated');
    });
  });
}
