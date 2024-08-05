<x-layout>
    <div class="pagetitle">
      <h1>Perubahan Elemen Data Kependudukan</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
          <li class="breadcrumb-item active">Perubahan Elemen Data Kependudukan</li>
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
                          <form action="{{ route('PerubahanElemenDownload') }}" method="POST" class="register-form" id="register-form">   
                            @csrf
                            <h2>Perubahan Elemen Data Kependudukan</h2>                                    
                            {{-- Form Data Yang Mengajukan --}}
                            <div class="page" id="1"> 
                              <div style="width: 100%; display: flex; justify-content: start;">
                                <div class="title-container-page">
                                  <h6 style="text-align: center; margin-top:5px;">Yang Mengajukan</h6>
                                </div>
                              </div>                                                                                                                  
                              <div class="container-page">
                                <div class="form-group-full">
                                    <label for="nik_1">NIK</label>
                                    <select name="nik_1" id="nik_1" onchange="auto_fill_1()" required>
                                        <option value=""></option>
                                      @foreach($penduduk as $data)
                                        <option value="{{ $data->nik }}">{{ $data->nik }}</option>
                                      @endforeach
                                    </select>
                                </div>
                                <div class="form-group-full">
                                    <label for="noKK_1">No KK</label>
                                    <input type="text" name="noKK_1" id="noKK_1" required/>
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
                                <div class="form-submit">                                                             
                                    <button class="submit" type="button" onclick="showPage('2')">Selanjutnya</button>
                                </div>
                              </div>                              
                            </div>

                            {{-- Form Rincian KK --}}
                            <div class="page hidden" id="2" >         
                                <div style="width: 100%; display: flex; justify-content: start;">
                                    <div class="title-container-page">
                                      <h6 style="text-align: center; margin-top:5px;">Rincian KK</h6>
                                    </div>
                                </div>                                                                                                                  
                                <div class="container-page">
                                    <div class="form-row">
                                      <div class="form-group">
                                        <label for="nik_2">NIK</label>
                                        <select name="nik_2" id="nik_2" onchange="auto_fill_2()" required>
                                            <option value=""></option>
                                          @foreach($penduduk as $data)
                                            <option value="{{ $data->nik }}">{{ $data->nik }}</option>
                                          @endforeach
                                        </select>
                                      </div>
                                      <div class="form-group">
                                        <label for="nama_2">Nama</label>
                                        <input type="text" name="nama_2" id="nama_2" required/>
                                      </div>
                                      <div class="form-group">
                                        <label for="shdk_2">Status</label>
                                        <input type="text" name="shdk_2" id="shdk_2" required/>
                                      </div>
                                    </div>         
                                    <button type="button" onclick="addRow()">Tambah Kolom</button>                                  
                                    <div class="form-submit">                                                             
                                        <button class="submit" type="button" onclick="showPage('1')">Sebelumnya</button>
                                        <button class="submit" type="button" onclick="showPage('3')">Selanjutnya</button>
                                    </div>
                                </div>    
                            </div>

                            {{-- Form Elemen Yang Diubah --}}
                            <div class="page hidden" id="3"> 
                                <div style="width: 100%; display: flex; justify-content: start;">
                                    <div class="title-container-page">
                                      <h6 style="text-align: center; margin-top:5px;">Elemen Yang Diubah</h6>
                                    </div>
                                </div>                                                                                                                  
                                <div class="container-page">
                                    <div class="form-group-full">
                                        <label for="nik_3">NIK</label>
                                        <select name="nik_3" id="nik_3" onchange="auto_fill_3()" required>
                                            <option value=""></option>
                                          @foreach($penduduk as $data)
                                            <option value="{{ $data->nik }}">{{ $data->nik }}</option>
                                          @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group-full">
                                        <label for="noKK_3">No KK</label>
                                        <input type="text" name="noKK_3" id="noKK_3" required/>
                                    </div>
                                    <div class="form-group-full">
                                        <label for="nama_3">Nama</label>
                                        <input type="text" name="nama_3" id="nama_3" required/>
                                    </div>                       
                                    <div class="form-group-full">
                                        <label for="tempatLahir_3">Tempat Lahir</label>
                                        <input type="text" name="tempatLahir_3" id="tempatLahir_3" required/>
                                    </div>
                                    <div class="form-group">
                                        <label for="tanggaLahir_3">Tanggal Lahir</label>
                                        <div class="col-sm-10">
                                            <input type="date" name="tanggalLahir_3" id="tanggalLahir_3" class="form-control" required>
                                        </div>
                                    </div> 
                                    <div class="form-row">
                                        <div class="form-group">
                                            <label for="alamat_3">Alamat</label>
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
                                        <button class="submit" type="button" onclick="showPage('2')">Sebelumnya</button>                                                                                               
                                        <button class="submit" id="submit">Buat</button>
                                    </div>
                                </div>
                            </div>
                          </form>
                        </div>
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