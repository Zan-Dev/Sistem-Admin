<x-layout>
    <div class="pagetitle">
    <h1>Tambah Data Kartu Keluarga</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>          
        <li class="breadcrumb-item active"><a href="{{ route('dataKartuKeluarga') }}">Data KK</a></li>
        <li class="breadcrumb-item active">Tambah Data Kartu Keluarga</li>
      </ol>
    </nav>
  </div>

  <div class="seciton">
    <div class="container-form">
        <div class="signup-content">
            <div class="signup-form">
                <form action="{{ route('dataKartuKeluarga.submit') }}" method="POST" class="register-form" id="register-form">
                    @csrf
                    <h2>Tambah Data Kartu Keluarga</h2>
                    <div class="form-group-full">
                        <label for="noKK">Nomor KK</label>
                        <input type="text" name="noKK" id="noKK" required/>
                        @if ($errors->has('noKK'))
                        <span class="text-danger">{{ $errors->first('noKK') }}</span>
                        @endif
                    </div>                                                  
                    <div class="form-group-full">
                        <label for="nikKepalaKeluarga">NIK Kepala Keluarga</label>
                        <input type="text" name="nikKepalaKeluarga" id="nikKepalaKeluarga" required/>
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
</x-layout>

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