@extends('layouts.form-auth')

@section('title')
    Réinitialiser Mot de passe
@endsection

@section('form')
<div class="login100-form validate-form">

        <form method="POST" action="{{ route('password.update') }}">
            @csrf
             <x-jet-validation-errors class="mb-4" />
             <span class="login100-form-title">
                Réinitialiser votre mot de passe
            </span>

            <input type="hidden" name="token" value="{{ $request->route('token') }}">

            <div class="wrap-input100 validate-input">
                <x-jet-input id="email" class="block mt-1 w-full" class="block mt-1 w-full input100" type="email" name="email" :value="old('email', $request->email)" required autofocus />
                <span class="focus-input100"></span>
                <span class="symbol-input100">
                    <i class="fa fa-envelope" aria-hidden="true"></i>
                </span>
            </div>
            <div class="wrap-input100 validate-input">
                <x-jet-input id="password" class="block mt-1 w-full" class="block mt-1 w-full input100" type="password" placeholder="Mot de passe*" name="password" required autocomplete="new-password" />
                <span class="focus-input100"></span>
                <span class="symbol-input100">
                    <i class="fa fa-lock" aria-hidden="true"></i>
                </span>
            </div>

            <div class="wrap-input100 validate-input">
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" class="block mt-1 w-full input100" type="password" placeholder="Confirmer le mot de passe*" name="password_confirmation" required autocomplete="new-password" />
                <span class="focus-input100"></span>
                <span class="symbol-input100">
                    <i class="fa fa-lock" aria-hidden="true"></i>
                </span>
            </div>

            <div class="container-login100-form-btn">
                <button class="login100-form-btn">
                    Réinitialiser
                </button>
            </div>
        </form>
        </div>
@endsection

