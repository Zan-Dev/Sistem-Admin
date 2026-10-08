import { initLayout } from './components/layout';
import { initTooltips, initValidation } from './components/forms';
import { initQuill, initTinyMCE } from './components/editors';
import { initDataTable, initEchartsResize } from './components/tables-charts';

import { initAlamatRw } from './pages/alamat-rw-rt';
import { initAutoFill } from './pages/autofill-penduduk';
import { initWizard } from './pages/wizard';
import { initDynamicRows } from './pages/dynamic-rows';

document.addEventListener('DOMContentLoaded', () => {
  // Template / layout
  initLayout();
  initTooltips();
  initValidation();
  initQuill();
  initTinyMCE();
  initDataTable();
  setTimeout(initEchartsResize, 200);

  // Fitur aplikasi
  initAlamatRw();
  initAutoFill();
  initWizard();
  initDynamicRows();
});
