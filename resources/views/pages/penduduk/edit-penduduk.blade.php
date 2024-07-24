<x-layout>
  <div class="pagetitle">
    <h1>Edit Data Warga</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Home</a></li>          
        <li class="breadcrumb-item active"><a href="/datapenduduk">Source Data</a></li>
        <li class="breadcrumb-item active">Edit Data Warga</li>
      </ol>
    </nav>
  </div>

  <div class="section">
    <div class="container-form">
      <div class="signup-content">                
        <div class="signup-form">
          <form action="{{ route('datapenduduk.update', $penduduk->id) }}" method="POST" class="register-form" id="register-form">   
            @csrf
            <h2>Edit Data Warga</h2>                          
            <div class="form-group-full">
                <label for="nik">NIK</label>
                <input type="text" name="nik" id="nik" value="{{ $penduduk->nik }}" required/>
            </div>                                                  
            <div class="form-group-full">
                <label for="nama">Nama</label>
                <input type="text" name="nama" id="nama" value="{{ $penduduk->nama }}" required/>
            </div>                       
            <div class="form-group-full">
                <label for="no-kk">No KK</label>
                <input type="text" name="noKK" id="no-kk" value="{{ $penduduk->noKK }}" required/>
            </div>
            <div class="form-group-full">
                <label for="tempat-lahir">Tempat Lahir</label>
                <input type="text" name="tempatLahir" id="tempat-lahir" value="{{ $penduduk->tempatLahir }}" required/>
            </div>
            <div class="form-group">
                <label for="ttl">Tanggal Lahir</label>
                <div class="col-sm-10">
                    <input type="date" name="ttl" class="form-control" value="{{ $penduduk->ttl }}" required>
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
            </div>
            <div class="form-row">
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <div class="form-select">
                        <select name="alamat" id="alamat" onchange="setRW()" required>
                            <option value=""></option>
                            <option value="Manggungmangu" {{ $penduduk->alamat === 'Manggungmangu' ? 'selected' : '' }}>Manggungmangu</option>
                            <option value="Parakan" {{ $penduduk->alamat === 'Parakan' ? 'selected' : '' }}>Parakan</option>
                            <option value="Tambirejo" {{ $penduduk->alamat === 'Tambirejo' ? 'selected' : '' }}>Tambirejo</option>
                        </select>
                        <span class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span>
                    </div>
                </div>
                <div class="form-group-rw">
                    <label for="rw">RW</label>
                    <div class="form-select">
                        <select name="rw" id="rw" required>
                            <option value=""></option>
                            <option id="rw1" value="1" {{ $penduduk->rw === 1 ? 'selected' : '' }}>1</option>
                            <option id="rw2" value="2" {{ $penduduk->rw === 2 ? 'selected' : '' }}>2</option>
                            <option id="rw3" value="3" {{ $penduduk->rw === 3 ? 'selected' : '' }}>3</option>
                        </select>
                        <span class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span>
                    </div>
                </div>
                <div class="form-group-rt" >
                    <label for="rt">RT</label>
                    <div class="form-select">
                        <select name="rt" id="rt" required>
                            <option value=""></option>
                            <option id="rt1" value="1" {{ $penduduk->rt === 1 ? 'selected' : '' }}>1</option>
                            <option id="rt2" value="2" {{ $penduduk->rt === 2 ? 'selected' : '' }}>2</option>
                            <option id="rt3" value="3" {{ $penduduk->rt === 3 ? 'selected' : '' }}>3</option>
                            <option id="rt4" value="4" {{ $penduduk->rt === 4 ? 'selected' : '' }}>4</option>
                            <option id="rt5" value="5" {{ $penduduk->rt === 5 ? 'selected' : '' }}>5</option>
                            <option id="rt6" value="6" {{ $penduduk->rt === 6 ? 'selected' : '' }}>6</option>
                            <option id="rt7" value="7" {{ $penduduk->rt === 7 ? 'selected' : '' }}>7</option>
                            <option id="rt8" value="8" {{ $penduduk->rt === 8 ? 'selected' : '' }}>8</option>
                            <option id="rt9" value="9" {{ $penduduk->rt === 9 ? 'selected' : '' }}>9</option>
                            <option id="rt10" value="10" {{ $penduduk->rt === 10 ? 'selected' : '' }}>10</option>
                            <option id="rt11" value="11" {{ $penduduk->rt === 11 ? 'selected' : '' }}>11</option>
                            <option id="rt12" value="12" {{ $penduduk->rt === 12 ? 'selected' : '' }}>12</option>
                            <option id="rt13" value="13" {{ $penduduk->rt === 13 ? 'selected' : '' }}>13</option>
                            <option id="rt14" value="14" {{ $penduduk->rt === 14 ? 'selected' : '' }}>14</option>
                            <option id="rt15" value="15" {{ $penduduk->rt === 15 ? 'selected' : '' }}>15</option>
                            <option id="rt16" value="16" {{ $penduduk->rt === 16 ? 'selected' : '' }}>16</option>
                            <option id="rt17" value="17" {{ $penduduk->rt === 17 ? 'selected' : '' }}>17</option>
                            <option id="rt18" value="18" {{ $penduduk->rt === 18 ? 'selected' : '' }}>18</option>
                            <option id="rt19" value="19" {{ $penduduk->rt === 19 ? 'selected' : '' }}>19</option>
                            <option id="rt20" value="20" {{ $penduduk->rt === 20 ? 'selected' : '' }}>20</option>
                            <option id="rt21" value="21" {{ $penduduk->rt === 21 ? 'selected' : '' }}>21</option>
                        </select>
                        <span class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span>
                    </div>
                </div>
            </div>     
            <div class="form-submit">                               
              <button type="button" class="kembali" onclick="window.history.back()">Kembali</button> 
              <button class="submit" id="submit">Simpan</button>                                                                                    
            </div>
          </form>
        </div>
      </div>
    </div>    
  </div>
</x-layout>