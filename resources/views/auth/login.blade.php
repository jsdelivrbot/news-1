@extends('layouts.frontend')

@section('content')
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="zm-section bg-white pt-40 pb-70" style="width:700px;margin:0 auto;">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-md-5">
                        <div class="section-title-2 mb-40">
                            <h3 class="inline-block uppercase">Kullanıcı Girişi</h3>
                            <p>Aşağıdaki formu Doldurarak Hızlıca Giriş Yapın</p>
                        </div>
                    </div>
                </div>
                <div class="registation-form-wrap">
                    <form action="#">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">

                                <div class="single-input">
                                    <label>Email</label>
                                    <input id="email" type="email"
                                           class="{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email"
                                           value="{{ old('email') }}" required>

                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>


                                <div class="single-input">
                                    <label>Şifreniz</label>
                                    <input id="password" type="password"
                                           class="{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password"
                                           required>

                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>

                                <div class="single-input">

                                    <input type="checkbox"
                                           name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Beni Hatırla') }}
                                </div>
                            </div>

                        </div>

                        <div class="row ">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Giriş') }}
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Şifremi Unuttum') }}
                                </a>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>

    </form>
@endsection
