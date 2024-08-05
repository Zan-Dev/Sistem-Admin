<x-layout>
    <div class="pagetitle">
      <h1>Tambah User</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>          
          <li class="breadcrumb-item active"><a href="{{ route('users') }}">Users</a></li>
          <li class="breadcrumb-item active">Tambah User</li>
        </ol>
      </nav>
    </div>
  
    <div class="section">
      <div class="container-form">
        <div class="signup-content">                
          <div class="signup-form">
            <form action="{{ route('user.submit') }}" method="POST" id="register-form">   
              @csrf
              <h2>Tambah User</h2>                                                                                         
              <div class="form-group-full">
                  <label for="name">Nama</label>
                  <input type="text" class="form-control" name="name" id="name" value="{{ old('name') }}" required/>
                  @error('name')
                    <div class="alert-danger">
                      {{ $message }}
                    </div>
                  @enderror
              </div>                       
              <div class="form-group-full">
                  <label for="email">Email</label>
                  <input class="form-control" type="email" name="email" id="email" value="{{ old('email') }}" required/>
                  @error('email')
                    <div class="danger">
                      {{ $message }}
                    </div>
                  @enderror
              </div>
              <div class="form-group-full">
                  <label for="password">Password</label>
                  <input type="password" name="password" id="password"  required/>
                  @error('password')
                    <div class="danger">
                      {{ $message }}
                    </div>
                  @enderror
              </div>              
              <div class="form-row">
                  <div class="form-group">
                      <label for="role">Role</label>
                      <div class="form-select">
                        <select id="role" name="role">
                          <option value="Admin" {{ old('role') == 'Admin' ? 'selected' : '' }}>Admin</option>
                          <option value="User" {{ old('role') == 'User' ? 'selected' : '' }}>User</option>
                        </select>                       
                        <span class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span>
                          @error('role')
                              <div>{{ $message }}</div>
                          @enderror
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