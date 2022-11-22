@extends('layouts.app')

@section('content')
<div class="container">
    <br><br><br>
    <section class="vh-80">
        <div class="container-fluid h-custom">
            <div class="row d-flex justify-content-center align-items-center h-80">
                <div class="col-md-9 col-lg-6 col-xl-5">
                    <img src="{{asset('assets/dist/assets/img/icon.png')}}"
                    class="img-fluid" alt="Sample image">
                </div>
                <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                    <h1 class="section-heading text-uppercase"><b>LOGIN</b></h2><br>
                        <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <!-- Email input -->
                            <div class="form-outline mb-4">
                                <input name="email" type="email" id="form3Example3" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus
                                placeholder="Enter a valid email address" />
                                <label class="form-label" for="form3Example3">Email address</label>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>                   
                                @enderror
                            </div>

                            <!-- Password input -->
                            <div class="form-outline mb-3">
                                <input name="password" type="password" id="form3Example4" class="form-control form-control-lg @error('password') is-invalid @enderror" name="password" required autocomplete="current-password"
                                placeholder="Enter password" />
                                <label class="form-label" for="form3Example4">Password</label>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="d-flex justify-content-between align-items-center">
                                <!-- Checkbox -->
                                <div class="form-check mb-0">
                                <input class="form-check-input me-2" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} />
                                <label class="form-check-label" for="form2Example3">
                                    Remember me
                                </label>
                                </div>
                            </div>

                            <div class="text-center text-lg-start mt-4 pt-2">
                                <button type="submit" class="btn btn-primary btn-lg"
                                style="width: 410px;">Login
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
