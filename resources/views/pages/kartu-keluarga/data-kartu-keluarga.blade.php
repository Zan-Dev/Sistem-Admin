<x-layout>        

    <div class="pagetitle">
      <h1>Data Kartu Keluarga</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>          
          <li class="breadcrumb-item active">Kartu Keluarga</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section>
        <div class="row">
            <div class="col-lg 12">
                <div class="card">            
                    <div class="card-body">
                        <h5 class="card-title">Data Kartu Keluarga</h5>
                        <a href="{{ route('tambahKartuKeluarga') }}" class="btn btn-primary btn-small">Tambah Data</a>
                        <div class="table-container">
                            <table class="table table-striped" id="table-1">
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
                                            <td>{{ $kk->nikKepalaKeluarga }}</td>
                                            <td>{{ $kk->kepalaKeluarga?->nama ?? "Null"}}</td>
                                            <td>{{ $kk->alamat }}</td>
                                            <td>{{ $kk->rt }}</td>
                                            <td>{{ $kk->rw }}</td>
                                            <td>
                                                <a href="#" class="btn btn-warning">Edit</a>
                                                <form action="#" method="POST" style="display: inline-block;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</button>
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