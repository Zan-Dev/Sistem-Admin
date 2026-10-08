/**
 * Satu fungsi untuk semua auto_fill_*.
 * Pakai di Blade:  <select id="nik_saksi_1" data-autofill="saksi_1"> ...
 * Field tujuan harus punya id: nama_saksi_1, noKK_saksi_1, dst.
 */
const ENDPOINT = '/get-penduduk';

// id-field di form  =>  key di JSON response
const FIELD_MAP = {
  nama: 'nama',
  noKK: 'noKK',
  tempatLahir: 'tempatLahir',
  tanggalLahir: 'tanggalLahir',
  alamat: 'alamat',
  rt: 'rt',
  rw: 'rw',
  agama: 'agama',
  pekerjaan: 'pekerjaan_id',
  kewarganegaraan: 'kewarganegaraan',
  shdk: 'shdk',
};

async function autoFill(suffix) {
  const nikInput = document.getElementById(`nik_${suffix}`);
  if (!nikInput?.value) return;

  try {
    const res = await fetch(`${ENDPOINT}?nik=${encodeURIComponent(nikInput.value)}`, {
      headers: { Accept: 'application/json' },
    });
    if (!res.ok) throw new Error(`HTTP ${res.status}`);
    const data = await res.json();

    Object.entries(FIELD_MAP).forEach(([fieldId, key]) => {
      const el = document.getElementById(`${fieldId}_${suffix}`);
      if (el && data[key] !== undefined) el.value = data[key] ?? '';
    });
  } catch (err) {
    console.error('Auto-fill gagal:', err);
  }
}

export function initAutoFill() {
  // Event delegation: ikut bekerja untuk baris yang ditambah dinamis.
  document.addEventListener('change', (e) => {
    const el = e.target.closest('[data-autofill]');
    if (el) autoFill(el.dataset.autofill);
  });
}
