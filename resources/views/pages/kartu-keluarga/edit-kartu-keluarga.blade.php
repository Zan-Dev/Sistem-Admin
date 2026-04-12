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
      <div class="signup-content">                
        <div class="signup-form">
          <form id="edit-form-{{$kk->noKK}}" class="edit-form" action="{{ route('dataKartuKeluarga.update', $kk->noKK) }}" method="POST" >   
            @csrf
            @method('PUT')
            <h2>Edit Data Kartu Keluarga</h2>                          
            <div class="form-group-full">
                <label for="noKK">Nomor KK</label>
                <input type="text" name="noKK" id="noKK" value="{{$kk->noKK}}" readonly />
                @if ($errors->has('noKK'))
                <span class="text-danger">{{ $errors->first('noKK') }}</span>
                @endif
            </div>                                                  
            <div class="form-group-full">
                <label for="nikKepalaKeluarga">NIK Kepala Keluarga</label>
                <input type="text" name="nikKepalaKeluarga" id="nikKepalaKeluarga" value="{{ $kk->nikKepalaKeluarga }}" required/>
                @if ($errors->has('nikKepalaKeluarga'))
                <span class="text-danger">{{ $errors->first('nikKepalaKeluarga') }}</span>
                @endif
            </div>    
                <div class="form-row">
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
                    <div class="form-group-rw">
                        <label for="rw">RW</label>
                        <div class="form-select">
                            <select name="rw" id="rw" required>
                                <option value=""></option>
                                <option id="rw1" value="1" {{ $kk->rw === 1 ? 'selected' : '' }}>1</option>
                                <option id="rw2" value="2" {{ $kk->rw === 2 ? 'selected' : '' }}>2</option>
                                <option id="rw3" value="3" {{ $kk->rw === 3 ? 'selected' : '' }}>3</option>
                            </select>
                            <span class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span>
                        </div>
                    </div>
                    <div class="form-group-rt" >
                        <label for="rt">RT</label>
                        <div class="form-select">
                            <select name="rt" id="rt" required>
                                <option value=""></option>
                                <option id="rt1" value="1" {{ $kk->rt === 1 ? 'selected' : '' }}>1</option>
                                <option id="rt2" value="2" {{ $kk->rt === 2 ? 'selected' : '' }}>2</option>
                                <option id="rt3" value="3" {{ $kk->rt === 3 ? 'selected' : '' }}>3</option>
                                <option id="rt4" value="4" {{ $kk->rt === 4 ? 'selected' : '' }}>4</option>
                                <option id="rt5" value="5" {{ $kk->rt === 5 ? 'selected' : '' }}>5</option>
                                <option id="rt6" value="6" {{ $kk->rt === 6 ? 'selected' : '' }}>6</option>
                                <option id="rt7" value="7" {{ $kk->rt === 7 ? 'selected' : '' }}>7</option>
                                <option id="rt8" value="8" {{ $kk->rt === 8 ? 'selected' : '' }}>8</option>
                                <option id="rt9" value="9" {{ $kk->rt === 9 ? 'selected' : '' }}>9</option>
                                <option id="rt10" value="10" {{ $kk->rt === 10 ? 'selected' : '' }}>10</option>
                                <option id="rt11" value="11" {{ $kk->rt === 11 ? 'selected' : '' }}>11</option>
                                <option id="rt12" value="12" {{ $kk->rt === 12 ? 'selected' : '' }}>12</option>
                                <option id="rt13" value="13" {{ $kk->rt === 13 ? 'selected' : '' }}>13</option>
                                <option id="rt14" value="14" {{ $kk->rt === 14 ? 'selected' : '' }}>14</option>
                                <option id="rt15" value="15" {{ $kk->rt === 15 ? 'selected' : '' }}>15</option>
                                <option id="rt16" value="16" {{ $kk->rt === 16 ? 'selected' : '' }}>16</option>
                                <option id="rt17" value="17" {{ $kk->rt === 17 ? 'selected' : '' }}>17</option>
                                <option id="rt18" value="18" {{ $kk->rt === 18 ? 'selected' : '' }}>18</option>
                                <option id="rt19" value="19" {{ $kk->rt === 19 ? 'selected' : '' }}>19</option>
                                <option id="rt20" value="20" {{ $kk->rt === 20 ? 'selected' : '' }}>20</option>
                                <option id="rt21" value="21" {{ $kk->rt === 21 ? 'selected' : '' }}>21</option>
                            </select>
                            <span class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span>
                        </div>
                    </div>
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