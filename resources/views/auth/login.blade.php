@extends('layouts.app')

@section('content')
<html class="no-js " lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<link rel="stylesheet" href="../assets/plugins/bootstrap/css/bootstrap.min.css">

<!-- Custom Css -->
<link rel="stylesheet" href="../resources/assets/css/main.css">
<link rel="stylesheet" href="../resources/assets/css/color_skins.css">
</head>

<body class="theme-cyan">
  <div class="authentication sidebar-collapse">
    <nav class="navbar navbar-expand-lg fixed-top navbar-transparent">
      <div class="container">
        <div class="navbar-collapse">
          <ul class="navbar-nav">
            <li class="nav-item"><a class="nav-link" href="index.html">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="javascript:void(0);">Search Result</a></li>
                    <li class="nav-item">
                        <a class="nav-link" title="Follow us on Twitter" href="javascript:void(0);" target="_blank">
                            <i class="zmdi zmdi-twitter"></i>
                            <span class="d-lg-none d-xl-none m-l-10">Twitter</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" title="Like us on Facebook" href="javascript:void(0);" target="_blank">
                            <i class="zmdi zmdi-facebook"></i>
                            <span class="d-lg-none d-xl-none m-l-10">Facebook</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" title="Follow us on Instagram" href="javascript:void(0);" target="_blank">
                            <i class="zmdi zmdi-instagram"></i>
                            <span class="d-lg-none d-xl-none m-l-10">Instagram</span>
                        </a>
                    </li>
            <li class="nav-item">
              <a class="nav-link btn btn-white btn-round" href="register">SIGN UP</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <br>
    <br>
      <div class="page-header">
          <div class="container">
            <div class="row justify-content-center">
          <div class="col-md-12 content-center">
              <div class="card-plain">
                <form class="form">
                  <div class="card-header">{{ __('Login') }}</div>

                  <div class="content">
                      <form method="POST" action="{{ route('login') }}">
                          @csrf

                          <div class="form-group row">
                              <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Username') }}</label>

                              <div class="col-md-6">
                                  <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                  @error('email')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                              </div>
                          </div>

                          <div class="form-group row">
                              <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                              <div class="col-md-6">
                                  <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                  @error('password')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                              </div>
                          </div>

                          <div class="form-group row">
                              <div class="col-md-6 offset-md-4">
                                  <div class="form-check">
                                      <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                      <label class="form-check-label" for="remember">
                                          {{ __('Remember Me') }}
                                      </label>
                                  </div>
                              </div>
                          </div>

                          <div class="form-group row mb-0">
                              <div class="col-md-8 offset-md-4">
                                  <button type="submit" class="btn btn-primary">
                                      {{ __('Login') }}
                                  </button>

                                  @if (Route::has('password.request'))
                                      <a class="btn btn-link" href="{{ route('password.request') }}">
                                          {{ __('Forgot Your Password?') }}
                                      </a>
                                  @endif
                              </div>
                          </div>
                      </form>
                  </div>
                </form>
              </div>
          </div>
      </div>
        </div>
      </div>
  </div>

</body>
@endsection
