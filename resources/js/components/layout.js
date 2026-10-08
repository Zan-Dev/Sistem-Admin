import { select, on, onScroll } from '../utils/dom';

/** Tambah/hapus class pada elemen sesuai posisi scroll. */
const toggleClassOnScroll = (el, className, offset = 100) => {
  if (!el) return;
  onScroll(() => el.classList.toggle(className, window.scrollY > offset));
};

/** Tandai link navbar yang section-nya sedang tampil. */
const initNavbarActiveLinks = () => {
  const links = select('#navbar .scrollto', true);
  if (!links.length) return;

  onScroll(() => {
    const position = window.scrollY + 200;
    links.forEach((link) => {
      if (!link.hash) return;
      const section = select(link.hash);
      if (!section) return;
      const inView =
        position >= section.offsetTop &&
        position <= section.offsetTop + section.offsetHeight;
      link.classList.toggle('active', inView);
    });
  });
};

export function initLayout() {
  on('click', '.toggle-sidebar-btn', () =>
    document.body.classList.toggle('toggle-sidebar')
  );
  on('click', '.search-bar-toggle', () =>
    select('.search-bar').classList.toggle('search-bar-show')
  );

  toggleClassOnScroll(select('#header'), 'header-scrolled');
  toggleClassOnScroll(select('.back-to-top'), 'active');
  initNavbarActiveLinks();
}
