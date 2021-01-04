@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 mx-auto">
            <div class="alert alert-primary" role="alert">
                
                <a class="h5" data-toggle="collapse" href="#user" role="button" aria-expanded="false" aria-controls="collapseExample">
                    Informasi akun user : <b>klik disini</b>
                </a>
                <div class="collapse multi-collapse" id="user">
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">Email</th>
                            <th scope="col">Password</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>linda@gmail.com</td>
                            <td>182410102040</td>
                          </tr>
                          <tr>
                            <td>mylian@gmail.com</td>
                            <td>182410102048</td>
                          </tr>
                          <tr>
                            <td>sarah@gmail.com</td>
                            <td>182410102050</td>
                          </tr>
                        </tbody>
                    </table>
                    <p><b>Catatan</b> : Akun user bisa dibuat di <a href="{{ route('register') }}" class="font-italic"><b>Register</b></a></p>
                </div>
            </div>
        </div>
        <div class="col-md-6 mx-auto">
            <div class="alert alert-primary" role="alert">
                
                <a class="h5" data-toggle="collapse" href="#admin" role="button" aria-expanded="false" aria-controls="collapseExample">
                    Informasi akun admin : <b>klik disini</b>
                </a>
                <div class="collapse multi-collapse" id="admin">
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">Email</th>
                            <th scope="col">Password</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>admin@gmail.com</td>
                            <td>admin</td>
                          </tr>
                          <tr>
                            <td>182410102040@gmail.com</td>
                            <td>admin</td>
                          </tr>
                          <tr>
                            <td>182410102048@gmail.com</td>
                            <td>admin</td>
                          </tr>
                          <tr>
                            <td>182410102050@gmail.com</td>
                            <td>admin</td>
                          </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card" style="background-color: #a7c5eb">
                <div class="h5 card-header font-weight-bold ">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Alamat Email') }}</label>

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

                        {{-- <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div> --}}

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    {{-- <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a> --}}
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
