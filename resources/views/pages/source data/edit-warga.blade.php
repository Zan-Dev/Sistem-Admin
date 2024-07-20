<x-layout>
    <div class="pagetitle">
      <h1>Edit Data Warga</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/">Home</a></li>          
          <li class="breadcrumb-item active"><a href="/sourcedata">Source Data</a></li>
          <li class="breadcrumb-item active">Edit Data Warga</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    
    <div class="container-form">
        <div class="signup-content">                
            <div class="signup-form">
                <form method="POST" class="register-form" id="register-form">
                    <h2>Tambah Data Warga</h2>                        
                    <div class="form-group-full">
                        <label for="nik">NIK</label>
                        <input type="text" name="nik" id="nik" required/>
                    </div>                            
                    </div>
                    <div class="form-group-full">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" id="nama" required/>
                    </div>                       
                    <div class="form-group-full">
                        <label for="no-kk">No KK</label>
                        <input type="text" name="no-kk" id="no-kk" required/>
                    </div>
                    <div class="form-group-full">
                        <label for="tempat-lahir">Tempat Lahir</label>
                        <input type="text" name="tempat-lahir" id="tempat-lahir" required/>
                    </div>
                    <div class="form-group-full">
                        <label for="ttl">Tanggal Lahir</label>
                        <div class="col-sm-10">
                            <input type="date" name="ttl" class="form-control">
                        </div>
                    </div>

                    <div class="form-radio">
                        <label for="gender" class="radio-label">Jenis Kelamin</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="radio-gender" id="gridRadios1" value="option1" checked>
                            <label class="form-check-label" for="gridRadios1">
                              Laki-laki
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="radio-gender" id="gridRadios2" value="option2">
                            <label class="form-check-label" for="gridRadios2">
                              Perempuan
                            </label>
                          </div>                                  
                    </div>

                    <div class="form-radio">
                        <label for="status-perkawinan" class="radio-label">Status Perkawinan</label>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="radio-sp" id="gridRadios1" value="option1" checked>
                          <label class="form-check-label" for="gridRadios1">
                            Sudah
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="radio-sp" id="gridRadios2" value="option2">
                          <label class="form-check-label" for="gridRadios2">
                            Belum
                          </label>
                        </div>   
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="radio-sp" id="gridRadios2" value="option2">
                            <label class="form-check-label" for="gridRadios2">
                              Pernah
                            </label>
                          </div>                                                
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <div class="form-select">
                                <select name="alamat" id="alamat">
                                    <option value=""></option>
                                    <option value="mg">Manggungmangu</option>
                                    <option value="pn">Parakan</option>
                                    <option value="tm">Tambirejo</option>
                                </select>
                                <span class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span>
                            </div>
                        </div>
                        <div class="form-group-rw">
                            <label for="rw">RW</label>
                            <div class="form-select">
                                <select name="rw" id="rw">
                                    <option value=""></option>
                                    <option value="rw1">1</option>
                                    <option value="rw2">2</option>
                                    <option value="rw3">3</option>
                                </select>
                                <span class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span>
                            </div>
                        </div>
                        <div class="form-group-rt">
                            <label for="rt">RT</label>
                            <div class="form-select">
                                <select name="rt" id="rt">
                                    <option value=""></option>
                                    <option value="rt1">1</option>
                                    <option value="rt2">2</option>
                                    <option value="rt3">3</option>
                                    <option value="rt4">4</option>
                                    <option value="rt5">5</option>
                                    <option value="rt6">6</option>
                                    <option value="rt7">7</option>
                                    <option value="rt8">8</option>
                                    <option value="rt9">9</option>
                                    <option value="rt10">10</option>
                                    <option value="rt11">11</option>
                                    <option value="rt12">12</option>
                                    <option value="rt13">13</option>
                                    <option value="rt14">14</option>
                                    <option value="rt15">15</option>
                                    <option value="rt16">16</option>
                                    <option value="rt17">17</option>
                                    <option value="rt18">18</option>
                                    <option value="rt19">19</option>
                                    <option value="rt20">20</option>
                                    <option value="rt21">21</option>
                                </select>
                                <span class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span>
                            </div>
                        </div>
                    </div>     
                    <div class="form-submit">
                        <button class="kembali" onclick="navigateTo('/sourcedata')">Kembali</button>                            
                        <input type="submit" value="Edit" class="submit" name="edit" id="edit" />
                    </div>
                </form>
            </div>
        </div>
    </div>    
</x-layout>