<x-layout>
  <div class="pagetitle">
    <h1>Tambah Data Warga</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>          
        <li class="breadcrumb-item active"><a href="{{ route('dataPenduduk') }}">Source Data</a></li>
        <li class="breadcrumb-item active">Tambah Data Warga</li>
      </ol>
    </nav>
  </div>

  <div class="section">
    <div class="container-form">
      <div class="signup-content">                
        <div class="signup-form">
          <form action="{{ route('dataPenduduk.submit') }}" method="POST" class="register-form" id="register-form">   
            @csrf        
            <h2>Tambah Data Warga</h2>      
            
            <!-- DUMMY -->
            <input type="hidden" name="kk_dummy_number" id="kk_dummy_number" value="0" />

            <!-- NIK -->
            <div class="form-group-full">
                <label for="nik">NIK</label>
                <input type="text" name="nik" id="nik" value="{{ old('nik') }}" required/>
                @if ($errors->has('nik'))
                  <span class="text-danger">{{ $errors->first('nik') }}</span>
                @endif
            </div>
            
            <!-- NAMA -->
            <div class="form-group-full">
                <label for="nama">Nama</label>
                <input type="text" name="nama" id="nama" value="{{ old('nama') }}" required/>
            </div>      
            
            <!-- NO KK -->
            <div class="form-group-full">
                <label for="kkId">No KK</label>
                <input type="text" name="kkId" id="kkId" required value="{{ old('kkId') }}" />
            </div>

            <!-- STATUS HUBUNGAN -->
            <div class="form-group-full">
                <label for="statusHubungan">Status Hubungan Dalam Keluarga</label>
                <select name="statusHubungan" id="statusHubungan" required>
                  <option value="" disabled selected>-- Pilih Status --</option>
                  <option value="Kepala Keluarga" {{ old('statusHubungan') == 'Kepala Keluarga' ? 'selected' : '' }}>Kepala Keluarga</option>
                  <option value="Istri" {{ old('statusHubungan') == 'Istri' ? 'selected' : '' }}>Istri</option>
                  <option value="Anak" {{ old('statusHubungan') == 'Anak' ? 'selected' : '' }}>Anak</option>
                  <option value="Menantu" {{ old('statusHubungan') == 'Menantu' ? 'selected' : '' }}>Menantu</option>
                  <option value="Cucu" {{ old('statusHubungan') == 'Cucu' ? 'selected' : '' }}>Cucu</option>
                  <option value="Orang Tua" {{ old('statusHubungan') == 'Orang Tua' ? 'selected' : '' }}>Orang Tua</option>
                  <option value="Mertua">Mertua</option>
                  <option value="Famili Lain">Famili Lain</option>
                </select>
            </div>

            <!-- TEMPAT LAHIR -->
            <div class="form-group-full">
                <label for="tempat-lahir">Tempat Lahir</label>
                <input type="text" name="tempatLahir" id="tempat-lahir" value="{{ old('tempatLahir') }}" required/>
            </div>
            
            <div class="form-row">

              <!-- TANGGAL LAHIR -->
              <div class="form-group">
                <label for="tanggalLahir">Tanggal Lahir</label>
                <div class="col-sm-10">
                    <input type="date" name="tanggalLahir" class="form-control" value="{{ old('tanggalLahir') }}" required>
                </div>
              </div>

              <!-- AGAMA  -->
              <div class="form-group">
                <label for="agama">Agama</label>
                <div class="form-select">
                    <select name="agama" id="agama" required>                                                
                        <option value="Islam" {{ old('agama') == 'Islam' ? 'selected' : '' }}>Islam</option>
                        <option value="Hindu" {{ old('agama') == 'Hindu' ? 'selected' : '' }}>Hindu</option>
                        <option value="Budha" {{ old('agama') == 'Budha' ? 'selected' : '' }}>Budha</option>
                        <option value="Kristen" {{ old('agama') == 'Kristen' ? 'selected' : '' }}>Kristen</option>
                        <option value="Katholik" {{ old('agama') == 'Katholik' ? 'selected' : '' }}>Katholik</option>
                        <option value="Konghucu" {{ old('agama') == 'Konghucu' ? 'selected' : '' }}>Konghucu</option>                                            
                    </select>
                    <span class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span>
                </div>
              </div>
            </div>    
            
            <!-- JENIS KELAMIN -->
            <div class="form-radio">
                <div class="label-form-radio">
                  <label for="gender" class="radio-label">Jenis Kelamin</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="jenisKelamin" id="gridRadios1" value="Laki-laki" {{ old('jenisKelamin') == 'Laki-laki' ? 'checked' : '' }} required>
                    <label class="form-check-label" for="gridRadios1">
                      Laki-laki
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="jenisKelamin" id="gridRadios2" value="Perempuan" {{ old('jenisKelamin') == 'Perempuan' ? 'checked' : '' }} required>
                    <label class="form-check-label" for="gridRadios2">
                      Perempuan
                    </label>
                  </div>                                  
            </div>    
            
            <!-- STATUS PERKAWINAN -->
            <div class="form-radio">
                <div class="label-form-radio">
                  <label for="status-perkawinan" class="radio-label">Status Perkawinan</label>
                </div>                
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="statusPerkawinan" id="gridRadios1" value="Sudah" {{ old('statusPerkawinan') == 'Sudah' ? 'checked' : '' }} required>
                  <label class="form-check-label" for="gridRadios1">
                    Sudah
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="statusPerkawinan" id="gridRadios2" value="Belum" {{ old('statusPerkawinan') == 'Belum' ? 'checked' : '' }} required>
                  <label class="form-check-label" for="gridRadios2">
                    Belum
                  </label>
                </div>   
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="statusPerkawinan" id="gridRadios2" value="Pernah" {{ old('statusPerkawinan') == 'Pernah' ? 'checked' : '' }} required>
                    <label class="form-check-label" for="gridRadios2">
                      Pernah
                    </label>
                  </div>                                                
            </div>      
                      
            <div class="form-row">

              <!-- PEKERJAAN -->
              <div class="form-group">
                <label for="pekerjaan">Pekerjaan</label>
                <div class="form-select">
                    <select name="pekerjaan" id="pekerjaan" required>
                        @foreach($pekerjaan as $kerja)
                            <option value="{{ $kerja->id }}" {{ old('pekerjaan') == $kerja->id ? 'selected' : '' }}>{{ $kerja->pekerjaan }}</option>
                        @endforeach
                    </select>
                    <span class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span>
                </div>
              </div>

              <!-- KEWARGANEGARAAN -->
              <div class="form-group">
                  <label for="kewarganegaraan">Kewarganegaraan</label>
                  <div class="form-select">
                    <select name="kewarganegaraan" id="kewarganegaraan" required>                    
                        <option id="idn" value="Indonesia" {{ old('kewarganegaraan') == 'Indonesia' ? 'selected' : '' }}>Indonesia</option>
                        <option id="wna" value="WNA" {{ old('kewarganegaraan') == 'WNA' ? 'selected' : '' }}>WNA</option>                    
                    </select>                  
                  </div>
              </div>
            </div>                           
            <div class="form-submit">                               
              <button type="button" class="kembali" onclick="window.history.back()">Kembali</button> 
              <button class="submit" id="btn-submit">Tambah</button>                                                                                    
            </div>
          </form>
        </div>
      </div>
    </div>    
  </div>
  </x-layout>

  <script>
      @if(session('error'))    
        Swal.fire({            
            icon: 'error',
            'title': 'Gagal Simpan',
            text: '{{ session('error') }}',            
            confirmButtonText: 'OK'
        });    
      @endif

      @if(session('confirm_dummy_kk'))    
        Swal.fire({            
          icon: 'warning',
          title: 'KK Tidak Ditemukan',
          html: @json(session('confirm_dummy_kk')),
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Simpan',
          cancelButtonText: 'Batal'
        }).then((result) => {
          if (result.isConfirmed) {
            // 1. Ubah nilai hidden input menjadi 1 (setuju)
            document.getElementById('kk_dummy_number').value = '1';
            
            // 2. Submit ulang form secara otomatis
            document.getElementById('register-form').submit();
          }
        });
      @endif  

      @if ($errors->any())
        Swal.fire({
            icon: 'error',
            title: 'Gagal Validasi',
            html: '{!! implode("<br>", $errors->all()) !!}',
            confirmButtonText: 'OK'
        });
      @endif
  </script>

