<x-layout>
    <div class="pagetitle">
      <h1>Pendaftaran Akta</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
          <li class="breadcrumb-item active">Pendaftaran Akta</li>
        </ol>
      </nav>
    </div>

    <!-- End Page Title -->    
    <section class="section dashboard">
        <div class="row">
      
          <!-- Left side columns -->
          <div class="col-md-12" style="margin-bottom: 50px;">                                                               
            <div class="container-flex">
              <div class="signup-content">                
                <div class="signup-form">
                  <form action="{{ route('PendaftaranAktaDownload') }}" method="POST" class="register-form" id="register-form">   
                    @csrf
                    <h2>Formulir Pendaftaran Akta</h2> 
                    {{-- Form Data Anak --}}
                    <div class="page" id="1"> 
                      <div style="width: 100%; display: flex; justify-content: start;">
                        <div class="title-container-page">
                          <h6 style="text-align: center; margin-top:5px;">Data Anak</h6>
                        </div>
                      </div>                                                                                                                  
                      <div class="container-page">
                        <div class="form-group-full">
                          <label for="nik_1">NIK Anak</label>
                          <select name="nik_1" id="nik_1" onchange="auto_fill_1()" required>
                              <option value=""></option>
                            @foreach($penduduk as $data)
                              <option value="{{ $data->nik }}">{{ $data->nik }}</option>
                            @endforeach
                          </select>
                        </div>                           
                        <div class="form-group-full">
                            <label for="nama_1">Nama Anak</label>
                            <input type="text" name="nama_1" id="nama_1" required/>
                        </div>                       
                        <div class="form-group-full">
                            <label for="tempatLahir_1">Tempat Lahir Anak</label>
                            <input type="text" name="tempatLahir_1" id="tempatLahir_1" required/>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="tanggaLahir_1">Tanggal Lahir Anak</label>
                                <div class="col-sm-10">
                                    <input type="date" name="tanggalLahir_1" id="tanggalLahir_1" class="form-control" required>
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
                              <label for="gender" class="radio-label">Jenis Kelamin Anak</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="jenisKelamin" id="gridRadios3" value="Laki-laki" checked>
                                <label class="form-check-label" for="gridRadios1">
                                  Laki-laki
                                </label>
                              </div>
                              <div class="form-check">
                                <input class="form-check-input" type="radio" name="jenisKelamin" id="gridRadios3" value="Perempuan">
                                <label class="form-check-label" for="gridRadios2">
                                  Perempuan
                                </label>
                              </div>                                  
                        </div>                                                                                            
                        <div class="form-row">
                            <div class="form-group">
                                <label for="anakKe">Anak Ke</label>
                                <input type="text" name="anakKe" id="anakKe" required/>
                            </div>   
                            <div class="form-group">
                                <label for="tempatDilahirkan">Tempat Dilahirkan</label>                                   
                                <input type="text" name="tempatDilahirkan" id="tempatDilahirkan" required>                                      
                            </div>                                     
                        </div>   
                        <div class="form-group">
                            <label for="penolongKelahiran">Penolong Kelahiran</label>                                    
                            <input type="text" name="penolongKelahiran" id="penolongKelahiran" required>                                    
                        </div>                                                                                                   
                        <div class="form-submit">                                                             
                          <button class="submit" type="button" onclick="showPage('2')">Selanjutnya</button>                                                                                                                   
                        </div>
                      </div>                              
                    </div>
                    {{-- Form Data Ibu --}}
                    <div class="page hidden" id="2" >         
                      <div style="width: 100%; display: flex; justify-content: center;">
                        <div class="title-container-page">
                          <h6 style="vertical-align: middle; margin-top:5px;">Data Ibu</h6>
                        </div>   
                      </div>                                                                                                       
                      <div class="container-page">
                        <div class="form-group-full">
                          <label for="nik_2">NIK Ibu</label>
                          <select name="nik_2" id="nik_2" onchange="auto_fill_2()" required>
                              <option value=""></option>
                            @foreach($penduduk as $data)
                              <option value="{{ $data->nik }}">{{ $data->nik }}</option>
                            @endforeach
                          </select>
                        </div>                           
                        <div class="form-group-full">
                            <label for="nama_2">Nama Ibu</label>
                            <input type="text" name="nama_2" id="nama_2" required/>
                        </div>                                                                                   
                        <div class="form-group-full">
                            <label for="tempatLahir_2">Tempat Lahir Ibu</label>
                            <input type="text" name="tempatLahir_2" id="tempatLahir_2" required/>
                        </div>                             
                        <div class="form-group">
                            <label for="tanggaLahir_2">Tanggal Lahir Ibu</label>
                            <div class="col-sm-10">
                                <input type="date" name="tanggalLahir_2" id="tanggalLahir_2" class="form-control" required>
                            </div>
                        </div>                                                                                                      
                        <div class="form-row">
                            <div class="form-group">
                                <label for="alamat_2">Alamat Ibu</label>
                                <div class="form-select">
                                    <select name="alamat_2" id="alamat_2" onchange="setRW()" required>
                                        <option value=""></option>
                                        <option value="Manggungmangu">Manggungmangu</option>
                                        <option value="Parakan">Parakan</option>
                                        <option value="Tambirejo">Tambirejo</option>
                                    </select>
                                    <span class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span>
                                </div>
                            </div>
                            <div class="form-group-rw">
                                <label for="rw_2">RW</label>
                                <div class="form-select">
                                    <select name="rw_2" id="rw_2" required>
                                        <option value=""></option>
                                        <option id="rw1" value="1">1</option>
                                        <option id="rw2" value="2">2</option>
                                        <option id="rw3" value="3">3</option>
                                    </select>
                                    <span class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span>
                                </div>
                            </div>
                            <div class="form-group-rt" >
                                <label for="rt_2">RT</label>
                                <div class="form-select">
                                    <select name="rt_2" id="rt_2" required>
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
                          <button class="submit" type="button" onclick="showPage('1')">Kembali</button>                                                         
                          <button class="submit" type="button" onclick="showPage('3')">Selanjutnya</button>                                                           
                        </div>
                      </div>
                    </div>
                    {{-- Form Data Ayah --}}
                    <div class="page hidden" id="3"> 
                      <div style="width: 100%; display: flex; justify-content: end;">
                        <div class="title-container-page">
                          <h6 style="text-align: center; margin-top:5px;">Data Ayah</h6>
                        </div>
                      </div>                                                                                                         
                      <div class="container-page">
                        <div class="form-group-full">
                          <label for="nik_3">NIK Ayah</label>
                          <select name="nik_3" id="nik_3" onchange="auto_fill_3()" required>
                              <option value=""></option>
                            @foreach($penduduk as $data)
                              <option value="{{ $data->nik }}">{{ $data->nik }}</option>
                            @endforeach
                          </select>
                        </div>                           
                        <div class="form-group-full">
                            <label for="nama_3">Nama Ayah</label>
                            <input type="text" name="nama_3" id="nama_3" required/>
                        </div>                       
                        <div class="form-group-full">
                            <label for="tempatLahir_3">Tempat Lahir Ayah</label>
                            <input type="text" name="tempatLahir_3" id="tempatLahir_3" required/>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="tanggaLahir_3">Tanggal Lahir Ayah</label>
                                <div class="col-sm-10">
                                    <input type="date" name="tanggalLahir_3" id="tanggalLahir_3" class="form-control" required>
                                </div>
                            </div>                                           
                        </div>                              
                        <div class="form-row">
                            <div class="form-group">
                                <label for="alamat_3">Alamat Ayah</label>
                                <div class="form-select">
                                    <select name="alamat_3" id="alamat_3" onchange="setRW()" required>
                                        <option value=""></option>
                                        <option value="Manggungmangu">Manggungmangu</option>
                                        <option value="Parakan">Parakan</option>
                                        <option value="Tambirejo">Tambirejo</option>
                                    </select>
                                    <span class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span>
                                </div>
                            </div>
                            <div class="form-group-rw">
                                <label for="rw_3">RW</label>
                                <div class="form-select">
                                    <select name="rw_3" id="rw_3" required>
                                        <option value=""></option>
                                        <option id="rw1" value="1">1</option>
                                        <option id="rw2" value="2">2</option>
                                        <option id="rw3" value="3">3</option>
                                    </select>
                                    <span class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span>
                                </div>
                            </div>
                            <div class="form-group-rt" >
                                <label for="rt_3">RT</label>
                                <div class="form-select">
                                    <select name="rt_3" id="rt_3" required>
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
                          <button class="submit" type="button" onclick="showPage('2')">Kembali</button>                                                            
                          <button class="submit" type="button" onclick="showPage('4')">Selanjutnya</button>                                                                                                                                                                             
                        </div>
                      </div>
                    </div> 
                    {{-- Form Yang Melaporkan --}}
                    <div class="page hidden" id="4"> 
                        <div style="width: 100%; display: flex; justify-content: end;">
                          <div class="title-container-page">
                            <h6 style="text-align: center; margin-top:5px;">Yang Melaporkan</h6>
                          </div>
                        </div>                                                                                                         
                        <div class="container-page">
                          <div class="form-group-full">
                            <label for="nik_4">NIK</label>
                            <select name="nik_4" id="nik_4" onchange="auto_fill_4()" required>
                                <option value=""></option>
                              @foreach($penduduk as $data)
                                <option value="{{ $data->nik }}">{{ $data->nik }}</option>
                              @endforeach
                            </select>
                          </div>                           
                          <div class="form-group-full">
                              <label for="nama_4">Nama</label>
                              <input type="text" name="nama_4" id="nama_4" required/>
                          </div>                       
                          <div class="form-group-full">
                              <label for="tempatLahir_4">Tempat Lahir</label>
                              <input type="text" name="tempatLahir_4" id="tempatLahir_4" required/>
                          </div>
                          <div class="form-row">
                              <div class="form-group">
                                  <label for="tanggaLahir_4">Tanggal Lahir</label>
                                  <div class="col-sm-10">
                                      <input type="date" name="tanggalLahir_4" id="tanggalLahir_4" class="form-control" required>
                                  </div>
                              </div>                                           
                          </div>           
                          <div class="form-group">
                            <label for="pekerjaan_4">Pekerjaan</label>
                            <div class="form-select">
                                <select name="pekerjaan_4" id="pekerjaan_4" required>
                                  @foreach($pekerjaan as $kerja)
                                  <option value="{{ $kerja->id }}" id="pekerjaan_4">{{ $kerja->pekerjaan }}</option>
                              @endforeach
                                </select>
                                <span class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span>
                            </div>
                          </div>                   
                          <div class="form-row">
                              <div class="form-group">
                                  <label for="alamat_4">Alamat</label>
                                  <div class="form-select">
                                      <select name="alamat_4" id="alamat_4" onchange="setRW()" required>
                                          <option value=""></option>
                                          <option value="Manggungmangu">Manggungmangu</option>
                                          <option value="Parakan">Parakan</option>
                                          <option value="Tambirejo">Tambirejo</option>
                                      </select>
                                      <span class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span>
                                  </div>
                              </div>
                              <div class="form-group-rw">
                                  <label for="rw_4">RW</label>
                                  <div class="form-select">
                                      <select name="rw_4" id="rw_4" required>
                                          <option value=""></option>
                                          <option id="rw1" value="1">1</option>
                                          <option id="rw2" value="2">2</option>
                                          <option id="rw3" value="3">3</option>
                                      </select>
                                      <span class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span>
                                  </div>
                              </div>
                              <div class="form-group-rt" >
                                  <label for="rt_4">RT</label>
                                  <div class="form-select">
                                      <select name="rt_4" id="rt_4" required>
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
                        <div class="form-group-full">
                            <label for="hubungan">Hubungan Dengan ybs</label>
                            <input type="text" name="hubungan" id="hubungan" required/>
                        </div>
                        <div class="form-group-full">
                            <label for="kodePos">Kode Pos</label>
                            <input type="text" name="kodePos" id="kodePos" required/>
                        </div>                                                                        
                          <div class="form-submit">  
                            <button class="submit" type="button" onclick="showPage('3')">Kembali</button>                                                            
                            <button class="submit" type="button" onclick="showPage('5')">Selanjutnya</button>                                                                                                                                                                             
                          </div>
                        </div>
                    </div>                             
                    {{-- Form Data Perkawinan --}}
                    <div class="page hidden" id="5"> 
                        <div style="width: 100%; display: flex; justify-content: end;">
                          <div class="title-container-page">
                            <h6 style="text-align: center; margin-top:5px;">Data Perkawinan</h6>
                          </div>
                        </div>                                                                                                         
                        <div class="container-page">
                            <div class="form-group-full">
                                <label for="nap">Nomor Akta Perkawinan</label>
                                <input type="text" name="nap" id="nap" required/>
                            </div>                           
                            <div class="form-group">
                                <label for="tap">Tanggal Akta Perkawinan</label>
                                <div class="col-sm-10">
                                    <input type="date" name="tap" id="tap" class="form-control" required>
                                </div>
                            </div>                       
                            <div class="form-group-full">
                                <label for="perkawinanSah">Perkawinan Sah Di</label>
                                 <input type="text" name="perkawinanSah" id="perkawinanSah" required/>
                            </div>                                  
                            <div class="form-group">
                                <label for="penerbit">Diterbitkan Oleh</label>                                        
                                <input type="text" name="penerbit" id="penerbit" required>                                    
                            </div>                                                                                                                                                                                                                  
                          <div class="form-submit">  
                            <button class="submit" type="button" onclick="showPage('4')">Kembali</button>
                            <button class="submit" type="button" onclick="showPage('6')">Selanjutnya</button>                                                                                                                     
                          </div>
                        </div>
                    </div>
                    {{-- Form Saksi --}}
                    <div class="page hidden" id="6"> 
                        <div style="width: 100%; display: flex; justify-content: end;">
                          <div class="title-container-page">
                            <h6 style="text-align: center; margin-top:5px;">Saksi</h6>
                          </div>
                        </div>                                                                                                         
                        <div class="container-page">
                            <div style="width: 100%; text-align:center">
                                <b>SAKSI I</b>                                    
                            </div>                                    
                            <div class="form-group-full">
                              <label for="nik_saksi_1">NIK</label>
                              <select name="nik_saksi_1" id="nik_saksi_1" onchange="auto_fill_saksi_1()" required>
                                  <option value=""></option>
                                @foreach($penduduk as $data)
                                  <option value="{{ $data->nik }}">{{ $data->nik }}</option>
                                @endforeach
                              </select>
                            </div>                           
                            <div class="form-group-full">
                                <label for="nama_saksi_1">Nama</label>
                                <input type="text" name="nama_saksi_1" id="nama_saksi_1" required/>
                            </div>                       
                            <div class="form-group-full">
                                <label for="tempatLahir_saksi_1">Tempat Lahir</label>
                                <input type="text" name="tempatLahir_saksi_1" id="tempatLahir_saksi_1" required/>
                            </div>
                            <div class="form-row">
                                <div class="form-group">
                                    <label for="tanggalLahir_saksi_1">Tanggal Lahir</label>
                                    <div class="col-sm-10">
                                        <input type="date" name="tanggalLahir_saksi_1" id="tanggalLahir_saksi_1" class="form-control" required>
                                    </div>
                                </div>                                           
                            </div>                              
                            <div class="form-row">
                                <div class="form-group">
                                    <label for="alamat_saksi_1">Alamat</label>
                                    <div class="form-select">
                                        <select name="alamat_saksi_1" id="alamat_saksi_1" onchange="setRW()" required>
                                            <option value=""></option>
                                            <option value="Manggungmangu">Manggungmangu</option>
                                            <option value="Parakan">Parakan</option>
                                            <option value="Tambirejo">Tambirejo</option>
                                        </select>
                                        <span class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span>
                                    </div>
                                </div>
                                <div class="form-group-rw">
                                    <label for="rw_saksi_1">RW</label>
                                    <div class="form-select">
                                        <select name="rw_saksi_1" id="rw_saksi_1" required>
                                            <option value=""></option>
                                            <option id="rw1" value="1">1</option>
                                            <option id="rw2" value="2">2</option>
                                            <option id="rw3" value="3">3</option>
                                        </select>
                                        <span class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span>
                                    </div>
                                </div>
                                <div class="form-group-rt" >
                                    <label for="rt_saksi_1">RT</label>
                                    <div class="form-select">
                                        <select name="rt_saksi_1" id="rt_saksi_1" required>
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
                                                               
                            <div style="width: 100%; text-align:center">
                                <b>SAKSI II</b>                                    
                            </div> 
                            <div class="form-group-full">
                                <label for="nik_saksi_2">NIK</label>
                                <select name="nik_saksi_2" id="nik_saksi_2" onchange="auto_fill_saksi_2()" required>
                                    <option value=""></option>
                                  @foreach($penduduk as $data)
                                    <option value="{{ $data->nik }}">{{ $data->nik }}</option>
                                  @endforeach
                                </select>
                              </div>                           
                              <div class="form-group-full">
                                  <label for="nama_saksi_2">Nama</label>
                                  <input type="text" name="nama_saksi_2" id="nama_saksi_2" required/>
                              </div>                       
                              <div class="form-group-full">
                                  <label for="tempatLahir_saksi_2">Tempat Lahir</label>
                                  <input type="text" name="tempatLahir_saksi_2" id="tempatLahir_saksi_2" required/>
                              </div>
                              <div class="form-row">
                                  <div class="form-group">
                                      <label for="tanggalLahir_saksi_2">Tanggal Lahir</label>
                                      <div class="col-sm-10">
                                          <input type="date" name="tanggalLahir_saksi_2" id="tanggalLahir_saksi_2" class="form-control" required>
                                      </div>
                                  </div>                                           
                              </div>                              
                              <div class="form-row">
                                  <div class="form-group">
                                      <label for="alamat_saksi_2">Alamat</label>
                                      <div class="form-select">
                                          <select name="alamat_saksi_2" id="alamat_saksi_2" onchange="setRW()" required>
                                              <option value=""></option>
                                              <option value="Manggungmangu">Manggungmangu</option>
                                              <option value="Parakan">Parakan</option>
                                              <option value="Tambirejo">Tambirejo</option>
                                          </select>
                                          <span class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span>
                                      </div>
                                  </div>
                                  <div class="form-group-rw">
                                      <label for="rw_saksi_2">RW</label>
                                      <div class="form-select">
                                          <select name="rw_saksi_2" id="rw_saksi_2" required>
                                              <option value=""></option>
                                              <option id="rw1" value="1">1</option>
                                              <option id="rw2" value="2">2</option>
                                              <option id="rw3" value="3">3</option>
                                          </select>
                                          <span class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span>
                                      </div>
                                  </div>
                                  <div class="form-group-rt" >
                                      <label for="rt_saksi_2">RT</label>
                                      <div class="form-select">
                                          <select name="rt_saksi_2" id="rt_saksi_2" required>
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
                            <button class="submit" type="button" onclick="showPage('5')">Kembali</button>                                    
                            <button class="submit" id="submit">Buat</button>                                                                                    
                          </div>
                        </div>
                    </div> 
                  </form>
                </div>
              </div>
            </div>                                
          </div>
          <!-- End Left side columns -->
      
          <!-- Right side columns -->
          {{-- <div class="col-md-12 mt-10">
      
            <!-- Recent Activity -->
            <div class="card">
              <div class="filter">
                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                  <li class="dropdown-header text-start">
                    <h6>Filter</h6>
                  </li>
      
                  <li><a class="dropdown-item" href="#">Today</a></li>
                  <li><a class="dropdown-item" href="#">This Month</a></li>
                  <li><a class="dropdown-item" href="#">This Year</a></li>
                </ul>
              </div>
      
              <div class="card-body">
                <h5 class="card-title">Recent Activity <span>| Today</span></h5>
      
                <div class="activity">
      
                  <div class="activity-item d-flex">
                    <div class="activite-label">32 min</div>
                    <i class='bi bi-circle-fill activity-badge text-success align-self-start'></i>
                    <div class="activity-content">
                      Quia quae rerum <a href="#" class="fw-bold text-dark">explicabo officiis</a> beatae
                    </div>
                  </div><!-- End activity item-->
      
                  <div class="activity-item d-flex">
                    <div class="activite-label">56 min</div>
                    <i class='bi bi-circle-fill activity-badge text-danger align-self-start'></i>
                    <div class="activity-content">
                      Voluptatem blanditiis blanditiis eveniet
                    </div>
                  </div><!-- End activity item-->
      
                  <div class="activity-item d-flex">
                    <div class="activite-label">2 hrs</div>
                    <i class='bi bi-circle-fill activity-badge text-primary align-self-start'></i>
                    <div class="activity-content">
                      Voluptates corrupti molestias voluptatem
                    </div>
                  </div><!-- End activity item-->
      
                  <div class="activity-item d-flex">
                    <div class="activite-label">1 day</div>
                    <i class='bi bi-circle-fill activity-badge text-info align-self-start'></i>
                    <div class="activity-content">
                      Tempore autem saepe <a href="#" class="fw-bold text-dark">occaecati voluptatem</a> tempore
                    </div>
                  </div><!-- End activity item-->
      
                  <div class="activity-item d-flex">
                    <div class="activite-label">2 days</div>
                    <i class='bi bi-circle-fill activity-badge text-warning align-self-start'></i>
                    <div class="activity-content">
                      Est sit eum reiciendis exercitationem
                    </div>
                  </div><!-- End activity item-->
      
                  <div class="activity-item d-flex">
                    <div class="activite-label">4 weeks</div>
                    <i class='bi bi-circle-fill activity-badge text-muted align-self-start'></i>
                    <div class="activity-content">
                      Dicta dolorem harum nulla eius. Ut quidem quidem sit quas
                    </div>
                  </div><!-- End activity item-->
      
                </div>
      
              </div>
            </div>
            <!-- End Recent Activity --> 
      
          </div> --}}
          <!-- End Right side columns -->

          <div class="col-md-12 mb-9"></div>        
          <div class="col-md-12 mb-9"></div>        
      
        </div>
    </section>
  </x-layout>