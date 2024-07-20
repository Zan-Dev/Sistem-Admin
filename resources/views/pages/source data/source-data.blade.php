<x-layout>
    <div class="pagetitle">
      <h1>Source Data</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/">Home</a></li>          
          <li class="breadcrumb-item active">Source Data</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card"> 
            <div class="card-body">
              <h5 class="card-title">Datatables</h5>              
              <a href="/tambahwarga" type="button" class="btn btn-primary btn-small"><i class="bx bxs-plus-square"></i> Tambah Data</a>
              <div class="table-container">
                <!-- Table with stripped rows -->
                <table id="example" class="display nowrap table datatable table-font" style="width:100%">
                  <thead>
                    <tr>
                      <th>NIK</th>
                      <th>Nama</th>
                      <th>No KK</th>
                      <th>Tempat Lahir</th>
                      <th>Tanggal Lahir</th>
                      <th>Status Perkawinan</th>
                      <th>Jenis Kelamin</th>
                      <th>Alamat</th>
                      <th>RT</th>
                      <th>RW</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($residents as $resident)
                      <tr>
                        <td>{{ $resident['nik'] }}</td>
                        <td>{{ $resident['nama'] }}</td>
                        <td>{{ $resident['noKK'] }}</td>
                        <td>{{ $resident['tempatLahir'] }}</td>
                        <td>{{ $resident['ttl'] }}</td>
                        <td>{{ $resident['statusPerkawinan'] }}</td>                      
                        <td>{{ $resident['jenisKelamin'] }}</td>
                        <td>{{ $resident['alamat'] }}</td>
                        <td>{{ $resident['rt'] }}</td>
                        <td>{{ $resident['rw'] }}</td>
                        <td><button type="button" class="btn btn-warning btn-small"><i class="bx bx-edit"></i></button> | <button type="button" class="btn btn-danger btn-small"><i class="bx bxs-trash-alt"></i></button></td>
                      </tr>
                    @endforeach                    
                  </tbody>
                </table>
                <!-- End Table with stripped rows -->
              </div>  
            </div>
          </div>

        </div>
      </div>
    </section>
</x-layout>