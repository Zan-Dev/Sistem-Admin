<x-layout>
    <div class="pagetitle">
      <h1>Surat Keterangan Usaha</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
          <li class="breadcrumb-item active">Surat Keterangan Usaha</li>
        </ol>
      </nav>
    </div>

    <!-- End Page Title -->    
    <section class="section dashboard">
        <div class="row">
      
          <!-- Left side columns -->
          <div class="col-lg-8">
            <div class="row">                                                     
                    <div class="container-flex">
                      <div class="signup-content">                
                        <div class="signup-form">
                          <form action="{{ route('skuDownload') }}" method="POST" class="register-form" id="register-form">   
                            @csrf
                            <h2>Buat Surat Keterangan Usaha</h2>                          
                            <div class="form-group-full">
                              <label for="nik_1">NIK</label>
                              <input type="text" name="nik_1" id="nik_1" list="NIKList" onchange="auto_fill_1()" required/>
                              <datalist id="NIKList">
                                @foreach($penduduk as $data)
                                <option value="{{ $data->nik }}">{{ $data->nik }}</option>
                                @endforeach
                              </datalist>
                            </div>
                            <div class="form-group-full">
                                <label for="nama_1">Nama</label>
                                <input type="text" name="nama_1" id="nama_1" required/>
                            </div>                       
                            <div class="form-group-full">
                                <label for="tempatLahir_1">Tempat Lahir</label>
                                <input type="text" name="tempatLahir_1" id="tempatLahir_1" required/>
                            </div>
                            <div class="form-group">
                                <label for="tanggaLahir_1">Tanggal Lahir</label>
                                <div class="col-sm-10">
                                    <input type="date" name="tanggalLahir_1" id="tanggalLahir_1" class="form-control" required>
                                </div>
                            </div>         
                            <div class="form-row">
                                <div class="form-group">
                                    <label for="alamat_1">Alamat</label>
                                    <div class="form-select">
                                        <select name="alamat_1" id="alamat_1" onchange="setRW()" required>
                                            <option value=""></option>
                                            <option value="Manggungmangu">Manggungmangu</option>
                                            <option value="Parakan">Parakan</option>
                                            <option value="Tambirejo">Tambirejo</option>
                                        </select>
                                        <span class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span>
                                    </div>
                                </div>
                                <div class="form-group-rw">
                                    <label for="rw_1">RW</label>
                                    <div class="form-select">
                                        <select name="rw_1" id="rw_1" required>
                                            <option value=""></option>
                                            <option id="rw1" value="1">1</option>
                                            <option id="rw2" value="2">2</option>
                                            <option id="rw3" value="3">3</option>
                                        </select>
                                        <span class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span>
                                    </div>
                                </div>
                                <div class="form-group-rt" >
                                    <label for="rt_1">RT</label>
                                    <div class="form-select">
                                        <select name="rt_1" id="rt_1" required>
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
                            <div class="form-row">
                                <div class="form-group">
                                    <label for="agama_1">Agama</label>
                                    <div class="form-select">
                                        <select name="agama_1" id="agama_1" required>
                                            <option value=""></option>
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
                                <div class="form-group">
                                  <label for="pekerjaan_1">Pekerjaan</label>
                                  <div class="form-select">
                                      <select name="pekerjaan_1" id="pekerjaan_1" required>
                                          @foreach($pekerjaan as $kerja)
                                              <option value="{{ $kerja->id }}" id="pekerjaan_1">{{ $kerja->pekerjaan }}</option>
                                          @endforeach
                                      </select>
                                      <span class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span>
                                  </div>
                              </div>                                     
                            </div>                                                                                                                                        
                            <div class="form-group-full">
                                <label for="usaha">Usaha</label>
                                <input type="text" name="usaha" id="usaha" required/>
                            </div>   
                            <div class="form-group-full">
                              <label for="ttd">TTD Perangkat Desa</label>
                              <div class="form-select">
                                  <select name="ttdPerangkat" id="ttdPerangkat" required>
                                      @foreach($pegawai as $pegawai)
                                          <option id="ttdPerangkat" value="{{ $pegawai->nik }}">{{ $pegawai->jabatan }}</option>
                                      @endforeach
                                  </select>
                                  <span class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span>
                              </div>
                            </div> 
                            <div class="form-submit">                                                             
                              <button class="submit" id="submit">Buat</button>                                                                                    
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>                    
            </div>
          </div>
          <!-- End Left side columns -->
      
          <!-- Right side columns -->
          {{-- <div class="col-lg-4">
      
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
      
        </div>
      </section>
  </x-layout>