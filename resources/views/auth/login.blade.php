<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ url('plugin/bootstrap/css/bootstrap.css') }}" />
    <link rel="stylesheet" href="{{ url('css/app/main.css') }}" />
    <link href="https://fonts.googleapis.com/css?family=Assistant:200,400,700&&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700&display=swap" rel="stylesheet" />
</head>
<body>
    <main class="login-container">
        <div class="container">
            <div class="row page-login d-flex align-items-center">
                
                <div class="section-left col-12 col-md-6">
                    <h1 class="mb-4">
                        We explore the new<br> 
                        life much better
                    </h1>
                    <img src="{{ url('images/hero-login.png') }}" class="w-75 d-none d-sm-flex">
                </div>
                
                <div class="section-right col-12 col-md-4">
                    <div class="card">
                        <div class="card-body">
                            
                            <div class="text-center">
                                <img src="{{ url('images/logo.png') }}" class="w-50 mb-4">
                            </div>
                            
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email address</label>
                                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputPassword1">Password</label>
                                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="form-group form-check">
                                    <input type="checkbox" class="form-check-input" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="remember">Remember me</label>
                                </div>

                                <button type="submit" class="btn btn-login btn-block">Log In</button>
                                
                                @if (Route::has('password.request'))
                                <a href="{{ route('password.request') }}" class="">
                                    <p class="text-center mt-4">Forgot password ?</p>
                                </a>
                                @endif

                            </form>
                        </div>

                        <div class="card-footer text-center">
                            Don't have an account ?
                            <a href="{{ route('register') }}" class="btn btn-register">Sign Up</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="{{ url('plugin/retina/retina.js') }}"></script>
    <script src="{{ url('plugin/jquery/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ url('plugin/bootstrap/js/bootstrap.js')}}"></script>
</body>
</html>