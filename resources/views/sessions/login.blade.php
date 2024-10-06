<x-layout-session>    
    @if (session('loginError'))
        <div class="alert alert-danger alert-dismissible alert-position fade show " role="alert">
            {{ session('loginError') }}              
        </div>          
    @endif
    <div class="container" style="display: flex; justify-content: center; align-items: center;">       
        <div class="login-card">
            <div class="row-card">
                <div class="col-left">                    
                    <div class="slideshow-container">
                        <div class="slides">                                            
                            <img src="{{ asset('assets/img/slide-show-1.jpg') }}" alt="login" class="login-card-img">
                            <img src="{{ asset('assets/img/slide-show-2.jpg') }}" alt="login" class="login-card-img">
                            <img src="{{ asset('assets/img/slide-show-3.jpg') }}" alt="login" class="login-card-img">
                        </div>
                    </div>                                        
                </div>
                <div class="col-right custom-width">         
                        <div class="centered-div">
                            <p class="login-card-description">Sistem Pelayanan Desa Manggungmangu</p>
                        </div>                                   
                        <div style="width: 100%; text-align: center; margin-bottom: 20px; vertical-align: middle">
                            <img src="{{ asset('assets/img/logo.jpg') }}" alt="logo" class="logo">
                        </div>                        
                        <div class="centered-div">                           
                            <form action="{{ route('login') }}" method="POST" >
                                @csrf
                                <div class="form-group-login">                                    
                                    <input type="email" name="email" id="email" class="form-control" placeholder="Email address" required autofocus>
                                </div>
                                <div class="form-group-login mb-4">                                    
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