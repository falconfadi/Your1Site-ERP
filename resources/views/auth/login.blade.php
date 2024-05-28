@extends('layouts.app')
@section('title'){{__('locale.Login')}}@endsection
@section('auth')
    <div class="auth-inner pt-3">
        <div class="card mb-0">

            <div class="card-head text-center">
                @if (Session::has('error'))
                    <div class="alert alert-danger alert-dismissible fade show m-1" role="alert">
                        <div class="alert-body">
                            {{ Session::get('error') }}
                        </div>
                    </div>
                @endif
                <a href="#" class="brand-logo mb-0">
                    {{-- <svg viewBox="0 0 139 95" version="1.1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" height="28">
                        <defs>
                            <linearGradient id="linearGradient-1" x1="100%" y1="10.5120544%" x2="50%"
                                y2="89.4879456%">
                                <stop stop-color="#000000" offset="0%"></stop>
                                <stop stop-color="#FFFFFF" offset="100%"></stop>
                            </linearGradient>
                            <linearGradient id="linearGradient-2" x1="64.0437835%" y1="46.3276743%" x2="37.373316%"
                                y2="100%">
                                <stop stop-color="#EEEEEE" stop-opacity="0" offset="0%"></stop>
                                <stop stop-color="#FFFFFF" offset="100%"></stop>
                            </linearGradient>
                        </defs>
                        <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g id="Artboard" transform="translate(-400.000000, -178.000000)">
                                <g id="Group" transform="translate(400.000000, 178.000000)">
                                    <path class="text-primary" id="Path"
                                        d="M-5.68434189e-14,2.84217094e-14 L39.1816085,2.84217094e-14 L69.3453773,32.2519224 L101.428699,2.84217094e-14 L138.784583,2.84217094e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L6.71554594,44.4188507 C2.46876683,39.9813776 0.345377275,35.1089553 0.345377275,29.8015838 C0.345377275,24.4942122 0.230251516,14.560351 -5.68434189e-14,2.84217094e-14 Z"
                                        style="fill: currentColor"></path>
                                    <path id="Path1"
                                        d="M69.3453773,32.2519224 L101.428699,1.42108547e-14 L138.784583,1.42108547e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L32.8435758,70.5039241 L69.3453773,32.2519224 Z"
                                        fill="url(#linearGradient-1)" opacity="0.2"></path>
                                    <polygon id="Path-2" fill="#000000" opacity="0.049999997"
                                        points="69.3922914 32.4202615 32.8435758 70.5039241 54.0490008 16.1851325">
                                    </polygon>
                                    <polygon id="Path-21" fill="#000000" opacity="0.099999994"
                                        points="69.3922914 32.4202615 32.8435758 70.5039241 58.3683556 20.7402338">
                                    </polygon>
                                    <polygon id="Path-3" fill="url(#linearGradient-2)" opacity="0.099999994"
                                        points="101.428699 0 83.0667527 94.1480575 130.378721 47.0740288"></polygon>
                                </g>
                            </g>
                        </g>
                    </svg> --}}
                    {{-- <h2 class="brand-text text-primary ms-1">ERP</h2> --}}
                    <img src="{{asset('images/logo/black.png')}}" width="200px">
                </a>

                {{-- <h4 class="card-title mb-1">Welcome</h4> --}}
                <p class="card-text pb-1">Please sign-in to your account</p>
            </div>
            <div class="card-body pt-0">
                <form class="auth-login-form" id="loginForm" action="{{ route('login') }} " method="POST">
                    @csrf
                    <div class="mb-1">
                        <label for="email" class="form-label">{{ __('locale.Email') }}</label>
                        <input type="text" name="email" tabindex="1" autofocus=""
                            class="form-control @error('email') is-invalid @enderror" id="email"
                            placeholder="{{ __('locale.Email') }}" aria-describedby="email"
                            value="{{ old('email') ?? 'admin@admin.com' }}" required>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="mb-1">
                        <div class="d-flex justify-content-between">
                            <label class="form-label" for="password">{{ __('locale.Password') }}</label>
                            <a href="{{ route('password.request') }}">
                                <small>{{ __('locale.Forgot_Password') }}</small>
                            </a>
                        </div>
                        <div class="input-group input-group-merge form-password-toggle">
                            <input type="password" id="password" name="password" tabindex="2"
                                placeholder="{{ __('locale.Password') }}"aria-describedby="password"
                                class="form-control @error('password') is-invalid @enderror" required value="password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <button id="BTNdarbi" types="submit" onclickc="device_token()"
                        class="btn btn-primary w-100 waves-effect waves-float waves-light" tabindex="4">Sign in</button>
                </form>
            </div>
        </div>
    </div>
@endsection
