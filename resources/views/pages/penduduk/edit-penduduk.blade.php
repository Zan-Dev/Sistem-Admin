<x-layout>
  <div class="pagetitle">
    <h1>Edit Data Warga</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>          
        <li class="breadcrumb-item active"><a href="{{ route('dataPenduduk') }}">Source Data</a></li>
        <li class="breadcrumb-item active">Edit Data Warga</li>
      </ol>
    </nav>
  </div>

  <div class="section">
    <div class="container-form">
      <div class="signup-content">                
        <div class="signup-form">
          <form id="edit-form-{{$penduduk->nik}}" class="edit-form" action="{{ route('dataPenduduk.update', $penduduk->nik) }}" method="POST" >   
            @csrf
            @method('PUT')
            <h2>Edit Data Warga</h2>                          
            <div class="form-group-full required">
                <label for="nik">NIK</label>
                <input style="background-color: rgb(228, 226, 226)" type="text" name="nik" id="nik" value="{{ $penduduk->nik }}" readonly>
            </div>                                                  
            <div class="form-group-full">
                <label for="nama">Nama</label>
                <input type="text" name="nama" id="nama" value="{{ $penduduk->nama }}" required/>
                @error('nama')
                  <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>                       
            <div class="form-group-full">
                <label for="kkId">No KK</label>
                <input type="text" name="kkId" id="kkId" value="{{ $penduduk->kkId }}" autocomplete="off" required/>
                <div id="kkList" style="position: absolute; width: parent;"></div>
                @error('noKK')
                  <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group-full">                
                <label for="statusHubungan">Status Hubungan Dalam Keluarga</label>                
                <select name="statusHubungan" id="statusHubungan" required>
                  <option value="" disabled selected>-- Pilih Status --</option>
                  <option value="Kepala Keluarga" {{ $penduduk->statusHubungan === 'Kepala Keluarga' ? 'selected' : '' }}>Kepala Keluarga</option>
                  <option value="Istri" {{ $penduduk->statusHubungan === 'Istri' ? 'selected' : '' }}>Istri</option>
                  <option value="Anak" {{ $penduduk->statusHubungan === 'Anak' ? 'selected' : '' }}>Anak</option>                  
                  <option value="Cucu" {{ $penduduk->statusHubungan === 'Cucu' ? 'selected' : '' }}>Cucu</option>
                  <option value="Orang Tua" {{ $penduduk->statusHubungan === 'Orang Tua' ? 'selected' : '' }}>Orang Tua</option>
                  <option value="Mertua" {{ $penduduk->statusHubungan === 'Mertua' ? 'selected' : '' }}>Mertua</option>
                  <option value="Famili Lain" {{ $penduduk->statusHubungan === 'Famili Lain' ? 'selected' : '' }}>Famili Lain</option>
                </select>
                @error('statusHubungan')
                  <div class="text-danger">{{ $message }}</div>
                @enderror 
            </div>

            <div class="form-row">
                <div class="form-group-full">                                               
                  <label for="statusHidup">Status Hidup</label>
                  <select name="statusHidup" id="statusHidup" required>
                    <option value="" disabled selected>-- Pilih Status --</option>
                    <option value="Hidup" {{ $penduduk->statusHidup === 'Hidup' ? 'selected' : '' }}>Hidup</option>
                    <option value="Meninggal" {{ $penduduk->statusHidup === 'Meninggal' ? 'selected' : '' }}>Meninggal</option>
                  </select>
                  @error('statusHidup')
                    <div class="text-danger">{{ $message }}</div>
                  @enderror
                </div>
                
                <div class="form-group" style="margin-left: 15px;">
                  <label for="tanggalMeninggal">Tanggal Meninggal</label>
                  <div class="col-sm-10">
                      <input type="date" name="tanggalMeninggal" class="form-control" value="{{ $penduduk->tanggalMeninggal }}" required>
                      @error('tanggalMeninggal')
                        <div class="text-danger">{{ $message }}</div>
                      @enderror
                  </div>
                </div>
            </div>
            
            <div class="form-group-full">
                <label for="tempat-lahir">Tempat Lahir</label>
                <input type="text" name="tempatLahir" id="tempat-lahir" value="{{ $penduduk->tempatLahir }}" required/>
                @error('tempatLahir')
                  <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-row">
              <div class="form-group">
                <label for="ttl">Tanggal Lahir</label>
                <div class="col-sm-10">
                    <input type="date" name="tanggalLahir" class="form-control" value="{{ $penduduk->tanggalLahir }}" required>
                    @error('tanggalLahir')
                      <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
              </div>
              <div class="form-group">
                <label for="agama">Agama</label>
                <div class="form-select">
                    <select name="agama" id="agama" required>
                        <option value=""></option>
                        <option value="Islam" {{ $penduduk->agama === 'Islam' ? 'selected' : '' }}>Islam</option>
                        <option value="Hindu" {{ $penduduk->agama === 'Hindu' ? 'selected' : '' }}>Hindu</option>
                        <option value="Budha" {{ $penduduk->agama === 'Budha' ? 'selected' : '' }}>Budha</option>
                        <option value="Kristen" {{ $penduduk->agama === 'Kristen' ? 'selected' : '' }}>Kristen</option>
                        <option value="Katholik" {{ $penduduk->agama === 'Katholik' ? 'selected' : '' }}>Katholik</option>
                        <option value="Konghucu" {{ $penduduk->agama === 'Konghucu' ? 'selected' : '' }}>Konghucu</option>                                            
                    </select>
                    <span class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span>
                </div>
                @error('agama')
                  <div class="text-danger">{{ $message }}</div>
                @enderror
              </div>
            </div>              
            <div class="form-radio">
                <div class="label-form-radio">
                  <label for="gender" class="radio-label">Jenis Kelamin</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="jenisKelamin" id="gridRadios1" value="Laki-laki" {{ $penduduk->jenisKelamin === 'Laki-laki' ? 'checked' : '' }}>
                    <label class="form-check-label" for="gridRadios1">
                      Laki-laki
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="jenisKelamin" id="gridRadios2" value="Perempuan" {{ $penduduk->jenisKelamin === 'Perempuan' ? 'checked' : '' }}>
                    <label class="form-check-label" for="gridRadios2">
                      Perempuan
                    </label>
                  </div>                                  
                  @error('jenisKelamin')
                    <div class="text-danger">{{ $message }}</div>
                  @enderror
            </div>
            <div class="form-radio">
                <div class="label-form-radio">
                  <label for="status-perkawinan" class="radio-label">Status Perkawinan</label>
                </div>                
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="statusPerkawinan" id="gridRadios1" value="Sudah" {{ $penduduk->statusPerkawinan === 'Sudah' ? 'checked' : '' }}>
                  <label class="form-check-label" for="gridRadios1">
                    Sudah
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="statusPerkawinan" id="gridRadios2" value="Belum" {{ $penduduk->statusPerkawinan === 'Belum' ? 'checked' : '' }}>
                  <label class="form-check-label" for="gridRadios2">
                    Belum
                  </label>
                </div>   
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="statusPerkawinan" id="gridRadios2" value="Pernah" {{ $penduduk->statusPerkawinan === 'Pernah' ? 'checked' : '' }}>
                    <label class="form-check-label" for="gridRadios2">
                      Pernah
                    </label>
                  </div> 
                @error('statusPerkawinan')
                  <div class="text-danger">{{ $message }}</div>
                @enderror                                               
            </div>
            <div class="form-row">
              <div class="form-group">
                <label for="pekerjaan">Pekerjaan</label>
                <div class="form-select">
                    <select name="pekerjaan" id="pekerjaan" required>
                        @foreach($pekerjaan as $kerja)
                            <option value="{{ $kerja->id }}" {{ $kerja->id === $penduduk->pekerjaan_id ? 'selected' : '' }}>{{ $kerja->pekerjaan }}</option>
                        @endforeach
                    </select>
                    <span class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span>
                </div>
                @error('pekerjaan')
                  <div class="text-danger">{{ $message }}</div>
                @enderror
              </div>
              <div class="form-group">
                <label for="kewarganegaraan">Kewarganegaraan</label>
                <div class="form-select">
                  <select name="kewarganegaraan" id="kewarganegaraan" required>                    
                      <option id="idn" value="Indonesia" {{ $penduduk->kewarganegaraan === 'Indonesia' ? 'selected' : '' }}>Indonesia</option>
                      <option id="wna" value="WNA" {{ $penduduk->kewarganegaraan === 'WNA' ? 'selected' : '' }}>WNA</option>                    
                  </select>                  
                </div>
                @error('kewarganegaraan')
                  <div class="text-danger">{{ $message }}</div>
                @enderror
              </div>              
            </div>                        
            </div>     
            <div class="form-submit">                               
              <button type="button" class="kembali" onclick="window.history.back()">Kembali</button>               
              <button class="submit submit-confirm" data-id="{{ $penduduk->nik}}">Simpan</button>                                                                                    
            </div>
          </form>
        </div>
      </div>
    </div>    
  </div>
</x-layout>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    document.querySelector('.submit-confirm').addEventListener('click', function(event) {
      event.preventDefault(); // Mencegah form submit secara langsung
      let id = this.getAttribute('data-id'); // Mendapatkan ID dari atribut data-id      

      Swal.fire({
          title: 'Yakin ingin menyimpan perubahan?',
          text: "Perubahan akan disimpan!",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Ya, simpan!',
          cancelButtonText: 'Batal'
      }).then((result) => {
          if (result.isConfirmed) {                        
              document.getElementById('edit-form-' + id).submit();              
          }
      });
    });
  });

  @if(session('success'))
      Swal.fire({
          icon: 'success',
          title: 'Sukses',
          text: '{{ session('success') }}',
      });
  @endif
  
  @if(session('error'))
      Swal.fire({
          icon: 'error',
          title: 'Error',
          text: '{{ session('error') }}',
      });
  @endif

  // --- Logika Autocomplete No KK ---
  $('#kkId').on('keyup', function() {
      let query = $(this).val();
      if (query.length > 2) { // Mulai mencari setelah mengetik minimal 3 karakter
          $.ajax({
              url: "{{ route('dataKartuKeluarga.search') }}", // Pastikan nama route ini sesuai
              method: "GET",
              data: { query: query },
              success: function(data) {
                  let html = '<ul class="dropdown-menu" style="display:block; width:100%; border: 1px solid #ccc; background: #812c2c; list-style: none; padding: 0; margin: 0;">';
                  
                  if(data.length > 0) {
                      data.forEach(function(item) {
                          let namaKepala = item.kepala_keluarga ? ` - <small>(${item.kepala_keluarga.nama})</small>` : '';
                          html += `<li class="p-2 search-item" style="cursor:pointer; padding: 10px; border-bottom: 1px solid #eee;" data-kk="${item.noKK}">
                                      <strong>${item.noKK}</strong> ${namaKepala}
                                   </li>`;
                      });
                  } else {
                      html += '<li class="p-2" style="padding: 10px;">Data tidak ditemukan</li>';
                  }
                  
                  html += '</ul>';
                  $('#kkList').fadeIn().html(html);
              }
          });
      } else {
          $('#kkList').fadeOut();
      }
  });

  // Pilih data saat diklik
  $(document).on('click', '.search-item', function() {
      let selectedKK = $(this).attr('data-kk');
      $('#kkId').val(selectedKK); // Masukkan ke input
      $('#kkList').fadeOut(); // Sembunyikan list
  });

  // Sembunyikan list jika klik di mana saja selain input
  $(document).click(function(e) {
      if (!$(e.target).closest('#kkId').length) {
          $('#kkList').fadeOut();
      }
  });  
</script>