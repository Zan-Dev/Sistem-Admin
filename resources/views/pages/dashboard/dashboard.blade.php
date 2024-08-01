<x-layout>
  <div class="pagetitle">
    <h1>Dashboard</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item active">Dashboard</li>
      </ol>
    </nav>
  </div>
  <!-- End Page Title -->    
  <section class="section dashboard">
    <div class="row">
  
      <!-- Left side columns -->
      <div class="col-lg-8">
        <div class="row">
          
          <div class="col-xxl-4 col-md-6">
            <div class="card info-card sales-card height-card">          
              <a href="{{ route('sku') }}" class="">
                <div class="card-body align-items-center">                
                    <h5 class="card-title">SURAT KETERANGAN USAHA</h5>
                    <div class="d-flex align-items-center justify-content-center">
                      <div class="card-icon rounded-circle d-flex align-items-center justify-content-center fixed-icon-heigh">
                        <i class="bi bi-cart"></i>
                      </div>                  
                    </div>                  
                </div>
              </a>
            </div>
          </div>
          
          <div class="col-xxl-4 col-md-6">
            <a href="{{ route('sp') }}" class="">
              <div class="card info-card revenue-card height-card">                
                <div class="card-body">                
                    <h5 class="card-title">SURAT PENGANTAR</h5>
                    <div class="d-flex align-items-center justify-content-center">
                      <div class="card-icon rounded-circle d-flex align-items-center justify-content-center fixed-icon-heigh">
                        <i class="bi bi-currency-dollar"></i>
                      </div>                  
                    </div>                  
                </div>
              </div>
            </a>
          </div>
          
          <div class="col-xxl-4 col-md-6">
            <div class="card info-card revenue-card height-card">   
              <a href="{{ route('surat-pengantar') }}" class="">
                <div class="card-body">
                  <h5 class="card-title">F1.01</h5>                
    
                  <div class="d-flex align-items-center justify-content-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-currency-dollar"></i>
                    </div>                  
                  </div>
                </div>
              </a>                           
            </div>
          </div>
  
          <div class="col-xxl-4 col-md-6">
            <div class="card info-card revenue-card height-card">                
              <div class="card-body">
                <h5 class="card-title">F2.01 (SURAT KETERANGAN LAHIR)</h5>
  
                <div class="d-flex align-items-center justify-content-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center fixed-icon-heigh">
                    <i class="bi bi-currency-dollar"></i>
                  </div>                  
                </div>
              </div>
  
            </div>
          </div>
  
          <div class="col-xxl-4 col-md-6">
            <div class="card info-card revenue-card height-card">                
              <div class="card-body">
                <h5 class="card-title">SURAT PERNYATAAN PERUBAHAN ELEMEN DATA KEPENDUDUKAN</h5>
  
                <div class="d-flex align-items-center justify-content-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-currency-dollar"></i>
                  </div>                
                </div>
              </div>
  
            </div>
          </div>
  
          <div class="col-xxl-4 col-md-6">
            <div class="card info-card revenue-card height-card">                
              <div class="card-body">
                <h5 class="card-title">PENDAFTARAN PERPINDAHAN PENDUDUK</h5>
  
                <div class="d-flex align-items-center justify-content-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-currency-dollar"></i>
                  </div>                 
                </div>
              </div>
  
            </div>
          </div>
  
          <div class="col-xxl-4 col-md-6">
            <div class="card info-card revenue-card height-card">                
              <div class="card-body">
                <h5 class="card-title">SPTJM KELAHIRAN</h5>
  
                <div class="d-flex align-items-center justify-content-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-currency-dollar"></i>
                  </div>                  
                </div>
              </div>
  
            </div>
          </div>
      
          <div class="col-xxl-4 col-md-6">
            <a href="{{ route('sptjmPasutri') }}" >
              <div class="card info-card revenue-card height-card">                
                <div class="card-body">
                  <h5 class="card-title">SPTJM PASUTRI</h5>
                  <div class="d-flex align-items-center justify-content-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-currency-dollar"></i>
                    </div>                
                  </div>
                </div>
              </div>
           </a>
          </div>
  
          <div class="col-xxl-4 col-md-6">
            <div class="card info-card revenue-card height-card">                
              <div class="card-body">
                <h5 class="card-title">SURAT KETERANGAN KEMATIAN</h5>
  
                <div class="d-flex align-items-center justify-content-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-currency-dollar"></i>
                  </div>                  
                </div>
              </div>
  
            </div>
          </div>
  
          <div class="col-xxl-4 col-xl-12">
            <div class="card info-card revenue-card height-card">                
              <div class="card-body">
                <h5 class="card-title">SURAT PERNYATAAN MENGGUNAKAN ALAMAT RUMAH MILIK SENDIRI (SPMARMS)</h5>
  
                <div class="d-flex align-items-center justify-content-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-currency-dollar"></i>
                  </div>                  
                </div>
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