import { select, on } from '../utils/dom.js';

/**
 * Baris dinamis. HTML-nya TIDAK boleh ditulis di file JS (Blade tidak diproses di sini),
 * jadi taruh sebagai <template> di Blade, pakai placeholder __INDEX__:
 *
 * <template id="row-template">
 *   <div class="form-row" id="row-__INDEX__">
 *     <select name="nik___INDEX__" id="nik___INDEX__" data-autofill="__INDEX__" required>
 *       <option value=""></option>
 *       @foreach($penduduk as $data)
 *         <option value="{{ $data->nik }}">{{ $data->nik }}</option>
 *       @endforeach
 *     </select>
 *     <input name="nama___INDEX__" id="nama___INDEX__" required>
 *     <input name="shdk___INDEX__" id="shdk___INDEX__" required>
 *     <button type="button" data-remove-row>Hapus</button>
 *   </div>
 * </template>
 * <button type="button" data-add-row>Tambah</button>
 */
export function initDynamicRows() {
  const container = select('#register-form');
  const template = select('#row-template');
  if (!container || !template) return;

  let rowCount = 1;

  on('click', '[data-add-row]', () => {
    const html = template.innerHTML.replaceAll('__INDEX__', rowCount++);
    container.insertAdjacentHTML('beforeend', html);
  });

  container.addEventListener('click', (e) => {
    e.target.closest('[data-remove-row]')?.closest('.form-row')?.remove();
  });
}
