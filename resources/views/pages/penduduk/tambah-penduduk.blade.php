<x-layout>
  <div class="pagetitle">
    <h1>Tambah Data Warga</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Home</a></li>          
        <li class="breadcrumb-item active"><a href="/datapenduduk">Source Data</a></li>
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
                <input type="text" name="nik" id="nik" required/>
            </div>                                                  
            <div class="form-group-full">
                <label for="nama">Nama</label>
                <input type="text" name="nama" id="nama" required/>
            </div>                       
            <div class="form-group-full">
                <label for="no-kk">No KK</label>
                <input type="text" name="noKK" id="no-kk" required/>
            </div>
            <div class="form-group-full">
                <label for="tempat-lahir">Tempat Lahir</label>
                <input type="text" name="tempatLahir" id="tempat-lahir" required/>
            </div>
            <div class="form-group">
                <label for="ttl">Tanggal Lahir</label>
                <div class="col-sm-10">
                    <input type="date" name="ttl" class="form-control" required>
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
                    <label for="alamat">Alamat</label>
                    <div class="form-select">
                        <select name="alamat" id="alamat" onchange="setRW()" required>
                            <option value=""></option>
                            <option value="Manggungmangu">Manggungmangu</option>
                            <option value="Parakan">Parakan</option>
                            <option value="Tambirejo">Tambirejo</option>
                        </select>
                        <span class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span>
                    </div>
                </div>
                <div class="form-group-rw">
                    <label for="rw">RW</label>
                    <div class="form-select">
                        <select name="rw" id="rw" required>
                            <option value=""></option>
                            <option id="rw1" value="1">1</option>
                            <option id="rw2" value="2">2</option>
                            <option id="rw3" value="3">3</option>
                        </select>
                        <span class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span>
                    </div>
                </div>
                <div class="form-group-rt" >
                    <label for="rt">RT</label>
                    <div class="form-select">
                        <select name="rt" id="rt" required>
                            <option value=""></option>
                            <option id="rt1" value="1">1</option>
                            <option id="rt2" value="2">2</option>
                            <option id="rt3" value="3">3</option>
                            <option id="rt4" value="4">4</option>
                            <option id="rt5" value="5">5</option>
                            <option id="rt6" value="6">6</option>
                            <option id="rt7" value="7">7</option>
                            <option id="rt8" value="8">8</option>
                            <option id="rt9" value="9">9</option>
                            <option id="rt10" value="10">10</option>
                            <option id="rt11" value="11">11</option>
                            <option id="rt12" value="12">12</option>
                            <option id="rt13" value="13">13</option>
                            <option id="rt14" value="14">14</option>
                            <option id="rt15" value="15">15</option>
                            <option id="rt16" value="16">16</option>
                            <option id="rt17" value="17">17</option>
                            <option id="rt18" value="18">18</option>
                            <option id="rt19" value="19">19</option>
                            <option id="rt20" value="20">20</option>
                            <option id="rt21" value="21">21</option>
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