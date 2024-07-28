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