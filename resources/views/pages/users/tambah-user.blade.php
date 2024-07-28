<x-layout>
    <div class="pagetitle">
      <h1>Tambah User</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/">Home</a></li>          
          <li class="breadcrumb-item active"><a href="/datapenduduk">Users</a></li>
          <li class="breadcrumb-item active">Tambah User</li>
        </ol>
      </nav>
    </div>
  
    <div class="section">
      <div class="container-form">
        <div class="signup-content">                
          <div class="signup-form">
            <form action="{{ route('user.submit') }}" method="POST" class="register-form" id="register-form">   
              @csrf
              <h2>Tambah User</h2>                                                                                         
              <div class="form-group-full">
                  <label for="nama">Nama</label>
                  <input type="text" name="name" id="nama" required/>
              </div>                       
              <div class="form-group-full">
                  <label for="email">Email</label>
                  <input type="email" name="email" id="email" required/>
              </div>
              <div class="form-group-full">
                  <label for="password">Password</label>
                  <input type="password" name="password" id="password" required/>
              </div>              
              <div class="form-row">
                  <div class="form-group">
                      <label for="role">Role</label>
                      <div class="form-select">
                          <select name="role" id="role" required>
                              <option value=""></option>
                              <option value="Admin">Admin</option>
                              <option value="User">User</option>                              
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