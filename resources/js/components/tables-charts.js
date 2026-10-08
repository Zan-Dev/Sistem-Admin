import { select } from '../utils/dom';

/** DataTables (butuh global `$` dan plugin DataTables). */
export function initDataTable() {
  if (!select('#data-table')) return;

  const table = $('#data-table').DataTable({
    scrollX: true,
    paging: true,
    searching: true,
    lengthMenu: [5, 10, 25, 50, 100],
    fixedHeader: true,
    fixedColumns: true,
    autoWidth: true, // sebelumnya salah ketik: autoWidht
  });

  $(window).on('resize', () => {
    setTimeout(() => {
      table.columns.adjust();
      table.fixedHeader.adjust();
    }, 100);
  });
}

/** Resize otomatis semua ECharts saat #main berubah ukuran. */
export function initEchartsResize() {
  const main = select('#main');
  if (!main || typeof echarts === 'undefined') return;

  new ResizeObserver(() => {
    select('.echart', true).forEach((el) => {
      echarts.getInstanceByDom(el)?.resize();
    });
  }).observe(main);
}
