import { select, on } from '../utils/dom';

// Halaman yang dianggap "maju" (slide ke kanan), sama seperti logika lama.
const FORWARD_PAGES = ['2', '3', '4', '5', '6'];

export function showPage(pageId) {
  const next = document.getElementById(pageId);
  if (!next) return;

  const current = select('.page.active');
  if (current) {
    current.classList.remove('active');
    current.classList.add('hidden', FORWARD_PAGES.includes(pageId) ? 'right' : 'left');
  }

  next.classList.remove('hidden', 'left', 'right');
  next.classList.add('active');
}

/**
 * Pakai di Blade:  <button type="button" data-page="2">Lanjut</button>
 */
export function initWizard() {
  if (!select('.page')) return;
  on('click', '[data-page]', (e) => showPage(e.currentTarget.dataset.page), true);
  showPage('1');
}
