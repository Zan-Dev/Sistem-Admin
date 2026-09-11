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

                    <!-- NO KK -->
                    <div class="form-group-full">
                        <label for="noKK">Nomor KK</label>
                        <input type="text" name="noKK" id="noKK" required/>                        
                    </div>           
                    <!-- 
                    <div class="form-group-full">
                        <label for="nikKepalaKeluarga">NIK Kepala Keluarga</label>
                        <input type="text" name="nikKepalaKeluarga" id="nikKepalaKeluarga" required/>
                        @if ($errors->has('nikKepalaKeluarga'))
                        <span class="text-danger">{{ $errors->first('nikKepalaKeluarga') }}</span>
                        @endif
                    </div>    
                     -->
                    <div class="form-row">
                        <!-- ALAMAT -->
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

                        <!-- RW -->
                        <div class="form-group-rw">
                            <label for="rw">RW</label>
                            <div class="form-select">
                                <select name="rw" id="rw" required>
                                    @for ($i = 1; $i <=3; $i++)
                                        <option id="rw{{ $i }}" value="{{ $i }}">{{ $i }}</option>
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
                                    @for ($i = 1; $i <=21; $i++)
                                        <option id="rt{{ $i }}" value="{{ $i }}">{{ $i }}</option>
                                    @endfor                                                                    
                                </select>
                                <span class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span>
                            </div>
                        </div>

                    </div>
                    <div class="form-submit">
                        <button type="button" class="kembali" onclick="window.location.href='{{ route('dataKartuKeluarga') }}'">Kembali</button>
                        <button class="submit" id="submit">Tambah</button>                        
                    </div>
                </form>
            </div>
        </div>
    </div>
  </div>
</x-layout>

<script>
    @if ($errors->any())
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: '{{ $errors->first() }}',
        });
    @endif

    document.querySelectorAll('.submit').forEach(button => {
        button.addEventListener('click', function(event) {
            event.preventDefault();

            Swal.fire({
                title: 'Apakah Anda yakin?',
                text: "Pastikan data yang dimasukkan sudah benar.",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Ya, tambah!',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('register-form').submit();
                }
            });
        });
    });
        
</script>