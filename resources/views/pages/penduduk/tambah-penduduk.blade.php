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
            <div class="form-group-full">
                <label for="nik">NIK</label>
                <input type="text" name="nik" id="nik" required value="{{ session('pending_kk.nik') ?? old('nik') }}"/>
                @if ($errors->has('nik'))
                  <span class="text-danger">{{ $errors->first('nik') }}</span>
                @endif
            </div>                                                  
            <div class="form-group-full">
                <label for="nama">Nama</label>
                <input type="text" name="nama" id="nama" required/>
            </div>                       
            <div class="form-group-full">
                <label for="kkId">No KK</label>
                <input type="text" name="kkId" id="kkId" required value="{{ session('pending_kk.kkId') ?? old('kkId') }}" />
            </div>
            <div class="form-group-full">
                <label for="statusHubungan">Status Hubungan Dalam Keluarga</label>
                <select name="statusHubungan" id="statusHubungan" required>
                  <option value="" disabled selected>-- Pilih Status --</option>
                  <option value="Kepala Keluarga" {{ old('statusHubungan') == 'Kepala Keluarga' ? 'selected' : '' }}>Kepala Keluarga</option>
                  <option value="Istri">Istri</option>
                  <option value="Anak">Anak</option>
                  <option value="Menantu">Menantu</option>
                  <option value="Cucu">Cucu</option>
                  <option value="Orang Tua">Orang Tua</option>
                  <option value="Mertua">Mertua</option>
                  <option value="Famili Lain">Famili Lain</option>
                </select>
            </div>
            <div class="form-group-full">
                <label for="tempat-lahir">Tempat Lahir</label>
                <input type="text" name="tempatLahir" id="tempat-lahir" required/>
            </div>
            <div class="form-row">
              <div class="form-group">
                <label for="tanggalLahir">Tanggal Lahir</label>
                <div class="col-sm-10">
                    <input type="date" name="tanggalLahir" class="form-control" required>
                </div>
              </div>
              <div class="form-group">
                <label for="agama">Agama</label>
                <div class="form-select">
                    <select name="agama" id="agama" required>                                                
                        <option value="Islam">Islam</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Budha">Budha</option>
                        <option value="Kristen">Kristen</option>
                        <option value="Katholik">Katholik</option>
                        <option value="Konghucu">Konghucu</option>                                            
                    </select>
                    <span class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span>
                </div>
              </div>
            </div>            
            <div class="form-radio">
                <div class="label-form-radio">
                  <label for="gender" class="radio-label">Jenis Kelamin</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="jenisKelamin" id="gridRadios1" value="Laki-laki" checked>
                    <label class="form-check-label" for="gridRadios1">
                      Laki-laki
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="jenisKelamin" id="gridRadios2" value="Perempuan">
                    <label class="form-check-label" for="gridRadios2">
                      Perempuan
                    </label>
                  </div>                                  
            </div>              
            <div class="form-radio">
                <div class="label-form-radio">
                  <label for="status-perkawinan" class="radio-label">Status Perkawinan</label>
                </div>                
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="statusPerkawinan" id="gridRadios1" value="Sudah" checked>
                  <label class="form-check-label" for="gridRadios1">
                    Sudah
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="statusPerkawinan" id="gridRadios2" value="Belum">
                  <label class="form-check-label" for="gridRadios2">
                    Belum
                  </label>
                </div>   
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="statusPerkawinan" id="gridRadios2" value="Pernah">
                    <label class="form-check-label" for="gridRadios2">
                      Pernah
                    </label>
                  </div>                                                
            </div>         
            <div class="form-row">
              <div class="form-group">
                <label for="pekerjaan">Pekerjaan</label>
                <div class="form-select">
                    <select name="pekerjaan" id="pekerjaan" required>
                        @foreach($pekerjaan as $kerja)
                            <option value="{{ $kerja->id }}">{{ $kerja->pekerjaan }}</option>
                        @endforeach
                    </select>
                    <span class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span>
                </div>
              </div>
              <div class="form-group">
                  <label for="kewarganegaraan">Kewarganegaraan</label>
                  <div class="form-select">
                    <select name="kewarganegaraan" id="kewarganegaraan" required>                    
                        <option id="idn" value="Indonesia">Indonesia</option>
                        <option id="wna" value="WNA">WNA</option>                    
                    </select>                  
                  </div>
              </div>
            </div>               
            <div class="form-row">
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <div class="form-select">
                        <select name="alamat" id="alamat" onchange="setRW()" required>
                            <option value=""></option>
                            <option value="Manggungmangu" {{ (old('alamat') ?? session('pending_kk.alamat')) == "Manggungmangu" ? 'selected' : '' }}>Manggungmangu</option>
                            <option value="Parakan" {{ (old('alamat') ?? session('pending_kk.alamat')) == "Parakan" ? 'selected' : '' }}>Parakan</option>
                            <option value="Tambirejo" {{ (old('alamat') ?? session('pending_kk.alamat')) == "Tambirejo" ? 'selected' : '' }}>Tambirejo</option>
                        </select>
                        <span class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span>
                    </div>
                </div>
                <div class="form-group-rw">
                    <label for="rw">RW</label>
                    <div class="form-select">
                        <select name="rw" id="rw" required>
                            <option value=""></option>
                            <option id="rw1" value="1" {{ (old('rw') ?? session('pending_kk.rw')) == "1" ? 'selected' : '' }}>1</option>
                            <option id="rw2" value="2" {{ (old('rw') ?? session('pending_kk.rw')) == "2" ? 'selected' : '' }}>2</option>
                            <option id="rw3" value="3" {{ (old('rw') ?? session('pending_kk.rw')) == "3" ? 'selected' : '' }}>3</option>
                        </select>
                        <span class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span>
                    </div>
                </div>
                <div class="form-group-rt" >
                    <label for="rt">RT</label>
                    <div class="form-select">
                        <select name="rt" id="rt" required>
                            <option value=""></option>
                            <option id="rt1" value="1" {{ (old('rt') ?? session('pending_kk.rt')) == "1" ? 'selected' : '' }}>1</option>
                            <option id="rt2" value="2" {{ (old('rt') ?? session('pending_kk.rt')) == "2" ? 'selected' : '' }}>2</option>
                            <option id="rt3" value="3" {{ (old('rt') ?? session('pending_kk.rt')) == "3" ? 'selected' : '' }}>3</option>
                            <option id="rt4" value="4" {{ (old('rt') ?? session('pending_kk.rt')) == "4" ? 'selected' : '' }}>4</option>
                            <option id="rt5" value="5" {{ (old('rt') ?? session('pending_kk.rt')) == "5" ? 'selected' : '' }}>5</option>
                            <option id="rt6" value="6" {{ (old('rt') ?? session('pending_kk.rt')) == "6" ? 'selected' : '' }}>6</option>
                            <option id="rt7" value="7" {{ (old('rt') ?? session('pending_kk.rt')) == "7" ? 'selected' : '' }}>7</option>
                            <option id="rt8" value="8" {{ (old('rt') ?? session('pending_kk.rt')) == "8" ? 'selected' : '' }}>8</option>
                            <option id="rt9" value="9" {{ (old('rt') ?? session('pending_kk.rt')) == "9" ? 'selected' : '' }}>9</option>
                            <option id="rt10" value="10" {{ (old('rt') ?? session('pending_kk.rt')) == "10" ? 'selected' : '' }}>10</option>
                            <option id="rt11" value="11" {{ (old('rt') ?? session('pending_kk.rt')) == "11" ? 'selected' : '' }}>11</option>
                            <option id="rt12" value="12" {{ (old('rt') ?? session('pending_kk.rt')) == "12" ? 'selected' : '' }}>12</option>
                            <option id="rt13" value="13" {{ (old('rt') ?? session('pending_kk.rt')) == "13" ? 'selected' : '' }}>13</option>
                            <option id="rt14" value="14" {{ (old('rt') ?? session('pending_kk.rt')) == "14" ? 'selected' : '' }}>14</option>
                            <option id="rt15" value="15" {{ (old('rt') ?? session('pending_kk.rt')) == "15" ? 'selected' : '' }}>15</option>
                            <option id="rt16" value="16" {{ (old('rt') ?? session('pending_kk.rt')) == "16" ? 'selected' : '' }}>16</option>
                            <option id="rt17" value="17" {{ (old('rt') ?? session('pending_kk.rt')) == "17" ? 'selected' : '' }}>17</option>
                            <option id="rt18" value="18" {{ (old('rt') ?? session('pending_kk.rt')) == "18" ? 'selected' : '' }}>18</option>
                            <option id="rt19" value="19" {{ (old('rt') ?? session('pending_kk.rt')) == "19" ? 'selected' : '' }}>19</option>
                            <option id="rt20" value="20" {{ (old('rt') ?? session('pending_kk.rt')) == "20" ? 'selected' : '' }}>20</option>
                            <option id="rt21" value="21" {{ (old('rt') ?? session('pending_kk.rt')) == "21" ? 'selected' : '' }}>21</option>
                        </select>
                        <span class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span>
                    </div>
                </div>
            </div>     
            <div class="form-submit">                               
              <button type="button" class="kembali" onclick="window.history.back()">Kembali</button> 
              <button class="submit" id="submit">Tambah</button>                                                                                    
            </div>
          </form>
        </div>
      </div>
    </div>    
  </div>
</x-layout>

@if(session('error'))
    <script>
        Swal.fire({            
            icon: 'error',
            'title': 'Gagal Simpan',
            text: '{{ session('error') }}',            
            confirmButtonText: 'OK'
        });
    </script>
@endif
