  /**
 * Helper DOM kecil yang dipakai di banyak modul.
 */
export const select = (selector, all = false) => {
  const s = selector.trim();
  return all ? [...document.querySelectorAll(s)] : document.querySelector(s);
};

/** Pasang event listener; aman dipanggil walau elemen tidak ada di halaman. */
export const on = (type, selector, listener, all = false) => {
  const target = select(selector, all);
  if (!target || (all && !target.length)) return;
  (all ? target : [target]).forEach((el) => el.addEventListener(type, listener));
};

/** Jalankan listener saat scroll DAN sekali langsung saat dipasang. */
export const onScroll = (listener) => {
  document.addEventListener('scroll', listener);
  listener();
};
