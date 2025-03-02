@extends('adminlte::auth.auth-page', ['auth_type' => 'login'])

@section('auth_header', __('Авторизация'))

@section('auth_body')
    <form action="{{ route('auth.login') }}" method="POST">
        @csrf

        <div class="input-group mb-3">
            <input type="email" name="email" class="form-control" placeholder="{{ __('Email') }}" autofocus required value="{{ old('email') }}">
            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-envelope"></span>
                </div>
            </div>
        </div>

        <div class="input-group mb-3">
            <input type="password" name="password" class="form-control" placeholder="{{ __('Пароль') }}" required>
            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-lock"></span>
                </div>
            </div>
        </div>
        @error('email')
        <span class="text-danger">{{ $message }}</span>
        @enderror

        <div class="row">
            <div class="col-8">
                <div class="icheck-primary">
                    <input type="checkbox" id="remember_me" name="remember">
                    <label for="remember_me">{{ __('Запомнить меня') }}</label>
                </div>
            </div>

            <div class="col-4">
                <button type="submit" class="btn btn-primary btn-block">{{ __('Войти') }}</button>
            </div>
        </div>
    </form>
@endsection
