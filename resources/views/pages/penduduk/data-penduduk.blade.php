@php
  use Carbon\Carbon;
  Carbon::setLocale('id');
@endphp
<x-layout>
    <div class="pagetitle">
      <h1>Source Data</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>          
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
              <a href="{{ route('tambahPenduduk') }}" type="button" class="btn btn-primary btn-small"><i class="bx bxs-plus-square"></i> Tambah Data</a>
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
                      <th>Kewarganegaraan</th>
                      <th>Agama</th>
                      <th>Pekerjaan</th>
                      <th>Alamat</th>
                      <th>RT</th>
                      <th>RW</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>                    
                    @foreach ($penduduk as $data)
                      <tr>
                        <td>{{ $data['nik'] }}</td>
                        <td>{{ $data['nama'] }}</td>
                        <td>{{ $data['noKK'] }}</td>
                        <td>{{ $data['tempatLahir'] }}</td>
                        <td>{{ Carbon::parse($data['tanggalLahir'])->translatedFormat('d F Y') }}</td>
                        <td>{{ $data['statusPerkawinan'] }}</td>                      
                        <td>{{ $data['jenisKelamin'] }}</td>
                        <td>{{ $data['kewarganegaraan'] }}</td>
                        <td>{{ $data['agama'] }}</td>
                        <td>{{ $data->pekerjaan->pekerjaan }}</td>
                        <td>{{ $data['alamat'] }}</td>
                        <td>{{ $data['rt'] }}</td>
                        <td>{{ $data['rw'] }}</td>
                        <td>
                          <a href="{{ route('dataPenduduk.edit', $data->id) }}"><button type="button" class="btn btn-warning btn-small"><i class="bx bx-edit"></i></button></a> 
                          |                           
                          <form id="delete-form-{{ $data->id }}" action="{{ route('dataPenduduk.delete', $data->id) }}" method="POST" style="display: inline">
                            @csrf
                            @method('DELETE')
                            <button type="button" class="btn btn-danger btn-small delete-confirm" data-id="{{ $data->id }}">
                              <i class="bx bxs-trash-alt"></i>
                            </button>
                          </form>                        
                        </td>
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

<script>
  document.querySelectorAll('.delete-confirm').forEach(button => {
    button.addEventListener('click', function() {
        let id = this.getAttribute('data-id');

        Swal.fire({
            title: 'Yakin ingin menghapus?',
            text: "Data yang dihapus tidak bisa dikembalikan!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Ya, hapus!',
            cancelButtonText: 'Batal'
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById('delete-form-' + id).submit();
            }
        });
    });
  });
</script>