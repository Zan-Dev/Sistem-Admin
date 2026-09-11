<x-layout>
  <div class="pagetitle">
    <h1>Edit Kartu Keluarga</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>          
        <li class="breadcrumb-item active"><a href="{{ route('dataKartuKeluarga') }}">Source Data</a></li>
        <li class="breadcrumb-item active">Edit Data Kartu Keluarga</li>
      </ol>
    </nav>
  </div>

  <div class="section">
    <div class="container-form">
      <div class="signup-content" >                        
            <form id="edit-form-{{$kk->noKK}}" class="edit-form" action="{{ route('dataKartuKeluarga.update', $kk->noKK) }}" method="POST" >   
                @csrf
                @method('PUT')
                <h2>Edit Data Kartu Keluarga</h2>                          

                <!-- NO KK -->
                <div class="form-group-full">
                    <label for="noKK">Nomor KK</label>
                    <input type="text" name="noKK" id="noKK" value="{{$kk->noKK}}" readonly />
                    @if ($errors->has('noKK'))
                    <span class="text-danger">{{ $errors->first('noKK') }}</span>
                    @endif
                </div>                               

                <div class="form-row">

                    <!-- ALAMAT -->
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <div class="form-select">
                            <select name="alamat" id="alamat" onchange="setRW()" required>
                                <option value=""></option>
                                <option value="Manggungmangu" {{ $kk->alamat === 'Manggungmangu' ? 'selected' : '' }}>Manggungmangu</option>
                                <option value="Parakan" {{ $kk->alamat === 'Parakan' ? 'selected' : '' }}>Parakan</option>
                                <option value="Tambirejo" {{ $kk->alamat === 'Tambirejo' ? 'selected' : '' }}>Tambirejo</option>
                            </select>
                            <span class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span>
                        </div>
                    </div>

                    <!-- RW -->
                    <div class="form-group-rw">
                        <label for="rw">RW</label>
                        <div class="form-select">
                            <select name="rw" id="rw" required>
                                @for ($i=1; $i <= 3; $i++)
                                    <option value="{{ $i }}" {{ $kk->rw == $i ? 'selected' : '' }}>{{ $i }}</option>
                                @endfor                                                                
                            </select>
                            <span class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span>
                        </div>
                    </div>

                    <!-- RT -->
                    <div class="form-group-rt" >
                        <label for="rt">RT</label>
                        <div class="form-select">
                            <select name="rt" id="rt" required>
                                @for ($i=1; $i <= 21; $i++)
                                    <option value="{{ $i }}" {{ $kk->rt == $i ? 'selected' : '' }}>{{ $i }}</option>
                                @endfor
                            </select>                               
                            <span class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span>
                        </div>
                    </div>
                </div>                
                
                <h3>Anggota Keluaga</h3>
                <div class="table-container">
                  <table id="example" class="display nowrap table data-table" id="table-1">
                      <thead>
                          <tr>
                              <th>No</th>
                              <th>NIK</th>
                              <th>Nama</th>
                              <th>Status Hubungan</th>                                                            
                              <th>Aksi</th>
                          </tr>
                      </thead>
                      <tbody>
                          @foreach ($kk->anggotaKeluarga as $anggota)
                              <tr>
                                  <td>{{ $loop->iteration }}</td>
                                  <td>{{ $anggota->nik }}</td>
                                  <td>{{ $anggota->nama }}</td>
                                  <td>{{ $anggota->statusHubungan }}</td>
                                  <td>
                                      <a href="{{ route('dataPenduduk.edit', $anggota->nik) }}" class="btn btn-warning">Edit</a>
                                      <form id="delete-form-{{ $anggota->nik }}" action="{{ route('dataPenduduk.delete', $anggota->nik) }}" method="POST" style="display: inline-block;">
                                          @csrf
                                          @method('DELETE')
                                          <button type="button" class="btn btn-danger btn-small delete-confirm" data-id="{{ $anggota->nik }}">
                                              <i class="bx bxs-trash-alt"></i>
                                          </button>
                                      </form>
                                  </td>
                              </tr>
                          @endforeach
                      </tbody>
                  </table>
                </div>                

                <div class="form-submit">
                    <button type="button" class="kembali" onclick="window.history.back()">Kembali</button>               
                    <button class="submit submit-confirm" data-id="{{$kk->noKK}}">Simpan</button>                           
                </div>
            </form>
        </div>      
    </div>    
  </div>  
</div>
</x-layout>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    document.querySelector('.submit-confirm').addEventListener('click', function(event) {
      event.preventDefault(); // Mencegah form submit secara langsung
      let id = this.getAttribute('data-id'); // Mendapatkan ID dari atribut data-id      

      Swal.fire({
          title: 'Yakin ingin menyimpan perubahan?',
          text: "Perubahan akan disimpan!",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Ya, simpan!',
          cancelButtonText: 'Batal'
      }).then((result) => {
          if (result.isConfirmed) {
              document.getElementById('edit-form-' + id).submit();              
          }
      });
    });
  });
</script>

@if(session('error'))
    <script>
        Swal.fire({
        icon: 'error',
        title: '{{ session('error')}}',
        text: 'Tambahkan data NIK Kepala Keluaraga?',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Ya',
        cancelButtonText: 'Batal'
    }).then((result) => {
        if (result.isConfirmed) {            
            window.location.href = "{{ route('tambahPenduduk') }}";            
        }
    });
    </script>
@endif