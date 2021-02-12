@extends('layouts.form-auth')

@section('title')
    Mot de passe oublié
@endsection

@section('form')
    <div class="login100-form validate-form">
        @if (session('status'))
        <div class="mb-4 font-medium text-sm text-green-600">
            {{ session('status') }}
        </div>
        @endif
        
        <form method="POST" class="login100-form validate-form" action="{{ route('password.email') }}">
            @csrf
            <div class="wrap-input100 validate-input">
                <b>Mot de passe oublié?</b> <br>
                Entrez votre votre adresse e-mail et vous recevrez un e-mail contenant le lien de réinitialisation du mot de passe.
            </div>
    
            @if (session('status'))
                <div class="wrap-input100 validate-input">
                    {{ session('status') }}
                </div>
            @endif
    
            <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                <x-jet-input id="email" class="block mt-1 w-full input100" type="email" name="email" :value="old('email')" required autofocus />
                <span class="focus-input100"></span>
                <span class="symbol-input100">
                    <i class="fa fa-envelope" aria-hidden="true"></i>
                </span>
            </div>

            <div class="container-login100-form-btn">
                <button class="login100-form-btn">
                    Envoyer
                </button>
            </div>
        </form>
        <div class="wrap-input100 validate-input">
            <x-jet-validation-errors class="mb-4" />
        </div>
    </div>
@endsection
