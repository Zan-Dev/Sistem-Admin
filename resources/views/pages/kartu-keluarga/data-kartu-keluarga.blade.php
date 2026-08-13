@php
  use Carbon\Carbon;
  Carbon::setLocale('id');
@endphp
<x-layout>

    <div class="pagetitle">
      <h1>Data Kartu Keluarga</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>          
          <li class="breadcrumb-item active">Kartu Keluarga</li>
        </ol>
      </nav>
    </div>
<!-- End Page Title -->

    <section>
        <div class="row">
            <div class="col-lg 12">
                <div class="card">            
                    <div class="card-body">
                        <h5 class="card-title">Data Kartu Keluarga</h5>
                        <a href="{{ route('tambahKartuKeluarga') }}" class="btn btn-primary btn-small">Tambah Data</a>
                        <div class="table-container">
                            <table id="example" class="display nowrap table data-table" id="table-1">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nomor KK</th>
                                        <th>NIK Kepala Keluarga</th>
                                        <th>Nama Kepala Keluarga</th>
                                        <th>Alamat</th>
                                        <th>RT</th>
                                        <th>RW</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($dataKK as $kk)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $kk->noKK }}</td>                                
                                            <td>{{ $kk->kepalaKeluarga->nik ?? "Belum Terdaftar" }}</td>
                                            <td>{{ $kk->kepalaKeluarga->nama ?? "Belum Terdaftar"}}</td>
                                            <td>{{ $kk->alamat }}</td>
                                            <td>{{ $kk->rt }}</td>
                                            <td>{{ $kk->rw }}</td>
                                            <td>
                                                <a href="{{ route('dataKartuKeluarga.edit', $kk->noKK) }}" class="btn btn-warning">Edit</a>
                                                <form id="delete-form-{{ $kk->noKK }}" action="{{ route('dataKartuKeluarga.delete', $kk->noKK) }}" method="POST" style="display: inline-block;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="button" class="btn btn-danger btn-small delete-confirm" data-id="{{ $kk->noKK }}">
                                                        <i class="bx bxs-trash-alt"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
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

  @if(session('success'))
    Swal.fire({
        icon: 'success',
        title: 'Sukses',
        text: '{{ session('success') }}',
        timer: 3000,
        showConfirmButton: false
    });
  @endif

  @if(session('error'))
    Swal.fire({
        icon: 'error',
        title: 'Error',
        text: '{{ session('error') }}',
        timer: 3000,
        showConfirmButton: false
    });
  @endif
</script>