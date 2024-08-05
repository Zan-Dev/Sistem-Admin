<x-layout-session>
    <div class="container">
        @if (session('loginError'))
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
              {{ session('loginError') }}              
          </div>          
        @endif
        <div class="login-card">
            <div class="row">
                <div class="col-md-5">
                    <div class="slideshow-container">
                        <div class="mySlides fade">                        
                            <img src="{{ asset("assets/img/pict-1.jpg") }}" alt="login" class="login-card-image">
                        </div>
                        <div class="mySlides fade">                        
                            <img src="{{ asset("assets/img/pict-1.jpg") }}" alt="login" class="login-card-image">
                        </div>
                        <div class="mySlides fade">                        
                            <img src="{{ asset("assets/img/pict-1.jpg") }}" alt="login" class="login-card-image">
                        </div>
                    </div>                    
                </div>
                <div class="col-md-7" style="text-align: center">
                    <div class="card-body">
                        <p class="login-card-description">Sistem Pelayanan Manggungmaangu</p>
                        <div style="width: 100%; text-align: center">
                            <img src="{{ asset('assets/img/logo.jpg') }}" alt="logo" class="logo">
                        </div>                        
                        <div class="centered-div">
                            <form action="{{ route('login') }}" method="POST" >
                                @csrf
                                <div class="form-group-login">
                                    <label for="email" class="sr-only">Email</label>
                                    <input type="email" name="email" id="email" class="form-control" placeholder="Email address" required>
                                </div>
                                <div class="form-group-login mb-4">
                                    <label for="password" class="sr-only">Password</label>
                                    <input type="password" name="password" id="password" class="form-control" placeholder="***********" required>
                                </div>
                                <input name="login" id="login" class="btn btn-block login-btn mb-4" type="submit" value="Login">
                            </form>                                            
                        </div>
                    </div>
                </div>
            </div>
        </div>        
    </div>
</x-layout-session>