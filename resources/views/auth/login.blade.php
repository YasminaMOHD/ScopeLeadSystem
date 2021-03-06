@extends('layouts.app')

@section('content')
<div class="container">
            <div class="card card-login mx-auto mt-5">
                <div class="card-header">Login<br></div>
                <div class="card-body">
                    <form method="post" action="{{ route('login') }}">
                      @csrf
                      <div class="form-group mb-3">
                            {{-- <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label> --}}

                            {{-- <div class="col-md-6"> --}}
                          <input type="email" id="inputEmail" placeholder="Email address" name="email" class="form-control @error('email') is-invalid @enderror " value="{{ old('email') }}">

                          @error('email')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                            {{-- </div> --}}
                      </div>
                      <div class="form-group mb-3">
                        {{-- <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label> --}}

                        {{-- <div class="col-md-6"> --}}
                          <input type="password" id="inputPassword" placeholder="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                          @error('password')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                            {{-- </div> --}}
                      </div>
                      <div class="form-geroup mb-3">
                        <div class="col-md-12 offset-md-12">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                        </div>
                      </div>
                      <div class="row mb-0">
                        <div class="col-md-12 offset-md-12">
                            <button type="submit" class="btn btn-primary w-100">
                                {{ __('Login') }}
                            </button>

                            {{-- @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif --}}
                        </div>
                    </div>
                    </form>
                </div>
            </div>
</div>
@endsection
