import { select, on } from '../utils/dom';

// Tambah wilayah baru cukup dengan menambah satu baris di sini.
const WILAYAH = {
  Manggungmangu: { rw: '1', hiddenRt: ['19', '20', '21'] },
  Parakan: { rw: '2', hiddenRt: ['19', '20', '21'] },
  Tambirejo: { rw: '3', onlyRt: '21' },
};

export function setRW() {
  const alamat = select('#alamat');
  const rwSelect = select('#rw');
  const rtSelect = select('#rt');
  if (!alamat || !rwSelect || !rtSelect) return;

  const config = WILAYAH[alamat.value];
  if (!config) return;

  rwSelect.querySelectorAll('option').forEach((opt) => {
    opt.selected = opt.value === config.rw;
    opt.hidden = opt.value !== config.rw;
  });

  rtSelect.querySelectorAll('option').forEach((opt) => {
    if (config.onlyRt) {
      opt.hidden = opt.value !== config.onlyRt;
      opt.selected = opt.value === config.onlyRt;
    } else {
      opt.hidden = config.hiddenRt.includes(opt.value);
    }
  });
}

export function initAlamatRw() {
  on('change', '#alamat', setRW);
}
