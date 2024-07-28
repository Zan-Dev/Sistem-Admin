<x-layout>
    <div class="pagetitle">
      <h1>Users</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/">Home</a></li>          
          <li class="breadcrumb-item active">Users</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-8">

          <div class="card"> 
            <div class="card-body">
              <h5 class="card-title">Table Users</h5>              
              <a href="{{ route('user.tambah') }}" type="button" class="btn btn-primary btn-small"><i class="bx bxs-plus-square"></i> Tambah Data</a>
              <div class="table-container">
                <!-- Table with stripped rows -->
                <table id="example" class="display nowrap table datatable table-font" style="width:100%">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Nama</th>
                      <th>Email</th>
                      <th>Role</th>                                            
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($users as $user)
                      <tr>
                        <td>{{ $user['id'] }}</td>
                        <td>{{ $user['name'] }}</td>
                        <td>{{ $user['email'] }}</td>
                        <td>{{ $user['role'] }}</td>                        
                        <td>                          
                          <a href="{{ route('user.delete', $user->id) }}" class=""><button type="button" class="btn btn-danger btn-small"><i class="bx bxs-trash-alt"></i></button></a>
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