<x-layout>
    <div class="pagetitle">
      <h1>Surat Keterangan Usaha</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Surat Keterangan Usaha</li>
        </ol>
      </nav>
    </div>

    <!-- End Page Title -->    
    <section class="section dashboard">
        <div class="row">
      
          <!-- Left side columns -->
          <div class="col-lg-8">                                                               
                    <div class="container-flex">
                      <div class="signup-content">                
                        <div class="signup-form">
                          <form action="{{ route('SPTJMDownload') }}" method="POST" class="register-form" id="register-form">   
                            @csrf
                            <h2>SPTJM Pasutri</h2> 
                            {{-- Form Data Yang Menyatakan --}}
                            <div class="page" id="yang-menyatakan"> 
                              <div style="width: 100%; display: flex; justify-content: start;">
                                <div class="title-container-page">
                                  <h6 style="text-align: center; margin-top:5px;">Yang Menyatakan</h6>
                                </div>
                              </div>                                                                                                                  
                              <div class="container-page">
                                <div class="form-group-full">
                                  <label for="nik">NIK</label>
                                  <select name="nik" id="nik" onchange="auto_fill()" required>
                                      <option value=""></option>
                                    @foreach($penduduk as $data)
                                      <option value="{{ $data->nik }}">{{ $data->nik }}</option>
                                    @endforeach
                                  </select>
                                </div>                           
                                <div class="form-group-full">
                                    <label for="nama">Nama</label>
                                    <input type="text" name="nama" id="nama" required/>
                                </div>                       
                                <div class="form-group-full">
                                    <label for="tempatLahir">Tempat Lahir</label>
                                    <input type="text" name="tempatLahir" id="tempatLahir" required/>
                                </div>
                                <div class="form-row">
                                    <div class="form-group">
                                        <label for="tanggaLahir">Tanggal Lahir</label>
                                        <div class="col-sm-10">
                                            <input type="date" name="tanggalLahir" id="tanggalLahir" class="form-control" required>
                                        </div>
                                    </div>       
                                    <div class="form-group">
                                        <label for="pekerjaan">Pekerjaan</label>
                                        <div class="form-select">
                                            <select name="pekerjaan" id="pekerjaan" required>
                                                @foreach($pekerjaan as $kerja)
                                                    <option id="pekerjaan" value="{{ $kerja->id }}">{{ $kerja->pekerjaan }}</option>
                                                @endforeach
                                            </select>
                                            <span class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span>
                                        </div>
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
                                  <button class="submit" type="button" onclick="showPage('istri')">Selanjutnya</button>                                                                                                                   
                                </div>
                              </div>                              
                            </div>

                            {{-- Form Data Istri --}}
                            <div class="page hidden" id="istri" >         
                              <div style="width: 100%; display: flex; justify-content: center;">
                                <div class="title-container-page">
                                  <h6 style="vertical-align: middle; margin-top:5px;">Data Istri</h6>
                                </div>   
                              </div>                                                                                                       
                              <div class="container-page">
                                <div class="form-group-full">
                                  <label for="nik">NIK</label>
                                  <select name="nikIstri" id="nikIstri" onchange="auto_fill_form_istri()" required>
                                      <option value=""></option>
                                    @foreach($penduduk as $data)
                                      <option value="{{ $data->nik }}">{{ $data->nik }}</option>
                                    @endforeach
                                  </select>
                                </div>                           
                                <div class="form-group-full">
                                    <label for="namaIstri">Nama</label>
                                    <input type="text" name="namaIstri" id="namaIstri" required/>
                                </div>                       
                                <div class="form-group-full">
                                    <label for="tempatLahirIstri">Tempat Lahir</label>
                                    <input type="text" name="tempatLahirIstri" id="tempatLahirIstri" required/>
                                </div>
                                <div class="form-row">
                                    <div class="form-group">
                                        <label for="tanggaLahirIstri">Tanggal Lahir</label>
                                        <div class="col-sm-10">
                                            <input type="date" name="tanggalLahirIstri" id="tanggalLahirIstri" class="form-control" required>
                                        </div>
                                    </div>       
                                    <div class="form-group">
                                        <label for="pekerjaanIstri">Pekerjaan</label>
                                        <div class="form-select">
                                            <select name="pekerjaanIstri" id="pekerjaanIstri" required>
                                                @foreach($pekerjaan as $kerja)
                                                    <option id="pekerjaanIstri" value="{{ $kerja->id }}">{{ $kerja->pekerjaan }}</option>
                                                @endforeach
                                            </select>
                                            <span class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span>
                                        </div>
                                    </div>   
                                </div>                              
                                <div class="form-row">
                                    <div class="form-group">
                                        <label for="alamatIstri">Alamat</label>
                                        <div class="form-select">
                                            <select name="alamatIstri" id="alamatIstri" onchange="setRW()" required>
                                                <option value=""></option>
                                                <option value="Manggungmangu">Manggungmangu</option>
                                                <option value="Parakan">Parakan</option>
                                                <option value="Tambirejo">Tambirejo</option>
                                            </select>
                                            <span class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span>
                                        </div>
                                    </div>
                                    <div class="form-group-rw">
                                        <label for="rwIstri">RW</label>
                                        <div class="form-select">
                                            <select name="rwIstri" id="rwIstri" required>
                                                <option value=""></option>
                                                <option id="rw1" value="1">1</option>
                                                <option id="rw2" value="2">2</option>
                                                <option id="rw3" value="3">3</option>
                                            </select>
                                            <span class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span>
                                        </div>
                                    </div>
                                    <div class="form-group-rt" >
                                        <label for="rtIstri">RT</label>
                                        <div class="form-select">
                                            <select name="rtIstri" id="rtIstri" required>
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
                                  <button class="submit" type="button" onclick="showPage('yang-menyatakan')">Kembali</button>                                                         
                                  <button class="submit" type="button" onclick="showPage('suami')">Selanjutnya</button>                                                           
                                </div>
                              </div>
                            </div>

                            {{-- Form Data Suami --}}
                            <div class="page hidden" id="suami"> 
                              <div style="width: 100%; display: flex; justify-content: end;">
                                <div class="title-container-page">
                                  <h6 style="text-align: center; margin-top:5px;">Data Suami</h6>
                                </div>
                              </div>                                                                                                         
                              <div class="container-page">
                                <div class="form-group-full">
                                  <label for="nikSuami">NIK</label>
                                  <select name="nikSuami" id="nikSuami" onchange="auto_fill_form_suami()" required>
                                      <option value=""></option>
                                    @foreach($penduduk as $data)
                                      <option value="{{ $data->nik }}">{{ $data->nik }}</option>
                                    @endforeach
                                  </select>
                                </div>                           
                                <div class="form-group-full">
                                    <label for="namaSuami">Nama</label>
                                    <input type="text" name="namaSuami" id="namaSuami" required/>
                                </div>                       
                                <div class="form-group-full">
                                    <label for="tempatLahirSuami">Tempat Lahir</label>
                                    <input type="text" name="tempatLahirSuami" id="tempatLahirSuami" required/>
                                </div>
                                <div class="form-row">
                                    <div class="form-group">
                                        <label for="tanggaLahirSuami">Tanggal Lahir</label>
                                        <div class="col-sm-10">
                                            <input type="date" name="tanggalLahirSuami" id="tanggalLahirSuami" class="form-control" required>
                                        </div>
                                    </div>       
                                    <div class="form-group">
                                        <label for="pekerjaanSuami">Pekerjaan</label>
                                        <div class="form-select">
                                            <select name="pekerjaanSuami" id="pekerjaanSuami" required>
                                                @foreach($pekerjaan as $kerja)
                                                    <option id="pekerjaanSuami" value="{{ $kerja->id }}">{{ $kerja->pekerjaan }}</option>
                                                @endforeach
                                            </select>
                                            <span class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span>
                                        </div>
                                    </div>   
                                </div>                              
                                <div class="form-row">
                                    <div class="form-group">
                                        <label for="alamatSuami">Alamat</label>
                                        <div class="form-select">
                                            <select name="alamatSuami" id="alamatSuami" onchange="setRW()" required>
                                                <option value=""></option>
                                                <option value="Manggungmangu">Manggungmangu</option>
                                                <option value="Parakan">Parakan</option>
                                                <option value="Tambirejo">Tambirejo</option>
                                            </select>
                                            <span class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span>
                                        </div>
                                    </div>
                                    <div class="form-group-rw">
                                        <label for="rwSuami">RW</label>
                                        <div class="form-select">
                                            <select name="rwSuami" id="rwSuami" required>
                                                <option value=""></option>
                                                <option id="rw1" value="1">1</option>
                                                <option id="rw2" value="2">2</option>
                                                <option id="rw3" value="3">3</option>
                                            </select>
                                            <span class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span>
                                        </div>
                                    </div>
                                    <div class="form-group-rt" >
                                        <label for="rtSuami">RT</label>
                                        <div class="form-select">
                                            <select name="rtSuami" id="rtSuami" required>
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
                                  <button class="submit" type="button" onclick="showPage('istri')">Kembali</button>                                                            
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
          <div class="col-lg-4">
      
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
      
          </div>
          <!-- End Right side columns -->
      
        </div>
    </section>
  </x-layout>