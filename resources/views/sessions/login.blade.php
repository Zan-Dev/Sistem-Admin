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
                    <img src="{{ asset("assets/img/login.jpg") }}" alt="login" class="login-card-img">
                </div>
                <div class="col-md-6">
                    <div class="card-body">
                        <div">
                            <img src="{{ asset('assets/img/logo.jpg') }}" alt="logo" class="logo">
                        </div>
                        <p class="login-card-description">Sign into your account</p>
                        <form action="{{ route('login') }}" method="POST">
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
</x-layout-session>