@extends('layouts.form-auth')

@section('title')
    Register
@endsection

@section('form')
    <style>
        input:invalid:focus {
            background:#ffdcdc;
        }
    </style>
    <div class="login100-form validate-form">
    <form class="login100-form" method="POST" action="{{ route('register') }}" id="registerForm">
        @csrf
        <x-jet-validation-errors class="mb-4" />
        <div id="firstAuth">
            <span class="login100-form-title">
                S'inscrire
            </span>
            <small>(*) Champ Obligatoire</small>
            <div class="wrap-input100">
                <x-jet-input id="name" class="block mt-1 w-full input100" type="text" name="name" :value="old('name')" placeholder="Nom du store ou magasin*" required autofocus autocomplete="name" />
                <span class="focus-input100"></span>
                <span class="symbol-input100">
                    <i class="fa fa-user" aria-hidden="true"></i>
                </span>
            </div>

            <div class="wrap-input100">
                <x-jet-input id="email" class="block mt-1 w-full input100" onblur="duplicateEmail(this)" type="email*" name="email" placeholder="Email*" :value="old('email')" required />
                <span class="focus-input100"></span>
                <span class="symbol-input100">
                    <i class="fa fa-envelope" aria-hidden="true"></i>
                </span>
            </div>
            <div class="alert text-danger d-none" id="emailchamps" role="alert">
                -Email existe déjà
               </div>

            <div class="container-login100-form-btn">
                <div class="alert text-danger d-none" id="touschamps" role="alert">
                    -Merci de remplir tous les champs
                   </div>
                <a class="login100-form-btn" id="suivant">
                    Suivant
                </a>
            </div>

        </div>

        <div id="secondAuth" class="d-none">
            <span class="login100-form-title">
                S'inscrire
            </span>
            <div class="wrap-input100">
                <x-jet-input id="nom" class="block mt-1 w-full input100" type="text" name="nom" placeholder="Nom*"  :value="old('nom')" required autofocus autocomplete="nom" />
                <span class="focus-input100"></span>
                <span class="symbol-input100">
                    <i class="fa fa-user" aria-hidden="true"></i>
                </span>
            </div>

            <div class="wrap-input100">
                <x-jet-input id="prenom" class="block mt-1 w-full input100" type="text" name="prenom" placeholder="Prenom*"  :value="old('prenom')" required />
                <span class="focus-input100"></span>
                <span class="symbol-input100">
                    <i class="fa fa-user" aria-hidden="true"></i>
                </span>
            </div>

            <div class="wrap-input100">
                <x-jet-input id="tel" class="block mt-1 w-full input100" type="tel" onblur="duplicatePhone(this)" name="tel" placeholder="Téléphone* Ex:'0600660066'" :value="old('tel')" maxlength="10" minlength="10" required />
                <span class="focus-input100"></span>
                <span class="symbol-input100">
                    <i class="fa fa-phone" aria-hidden="true"></i>
                </span>
            </div>
            <div class="alert text-danger d-none" id="telchamps" role="alert">
                -Téléphone existe déjà
               </div>

            <div class="wrap-input100">
                <x-jet-input id="ville" class="block mt-1 w-full input100" type="text" name="ville" placeholder="Ville"  autocomplete="current-ville" />
                <span class="focus-input100"></span>
                <span class="symbol-input100">
                    <i class="fa fa-city" aria-hidden="true"></i>
                </span>
            </div>

            <div class="wrap-input100">
                <x-jet-input id="adresse" class="block mt-1 w-full input100" type="text" name="adresse" placeholder="Aadresse"   autocomplete="adresse" />
                <span class="focus-input100"></span>
                <span class="symbol-input100">
                    <i class="fa fa-address-book" aria-hidden="true"></i>
                </span>
            </div>

            <div class="wrap-input100">
                <x-jet-input id="password" class="block mt-1 w-full input100" type="password" name="password" placeholder="Mot de passe*" required autocomplete="current-password" />
                <span class="focus-input100"></span>
                <span class="symbol-input100">
                    <i class="fa fa-lock" aria-hidden="true"></i>
                </span>
            </div>

            <div class="wrap-input100">
                <x-jet-input id="password_confirmation" class="block mt-1 w-full input100" type="password" name="password_confirmation" placeholder="Confirmer le mot de passe*" required autocomplete="new-password" />
                <span class="focus-input100"></span>
                <span class="symbol-input100">
                    <i class="fa fa-lock" aria-hidden="true"></i>
                </span>
            </div>

            <div class="container-login100-form-btn">
                <div>
                    <input type="checkbox" id="conditions" name="conditions">
                    <label for="conditions" style="font-size: 13px;">J'accepte <a href="">les conditions d'utilisation</a></label>
                  </div>
                  <div class="alert text-danger d-none" id="allchamps" role="alert">
                    -Merci de remplir tous les champs
                   </div>
                  
                <div class="alert text-danger d-none" id="conditionsalert" role="alert">
                     -Vous devez accepter les conditions d'utilisation
                    </div>
                <a class="login100-form-btn" id='sendCodeVerify'>
                    Enregistrer
                </a>
            </div>
            <div class="container-login100-form-btn">
                <a class="login100-form-btn" id="retour">
                    Retour
                </a>
            </div>
        </div>


         <div class="text-center p-t-12">
            <span class="txt1">
                En vous inscrivant, vous confirmez que vous avez lu et accepté nos 
            </span>
            <a class="txt2" href="{{ route('Conditions-générales') }}">
                conditions générales d'utilisation
            </a>
        </div> 
        <div class="text-center p-t-136">
            <a class="txt2" href="{{ route('login') }}">
                Vous avez déjà un compte?
                <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
            </a>
        </div>

    </form>

    <div id="thirdAuth" class="d-none">
        <div class="login100-form">
            <span class="login100-form-title">
                Un SMS de confirmation  a été envoyé sur votre téléphone. Merci de le renseigner ci-dessous
            </span>
            <div class="wrap-input100">
                <x-jet-input  class="block mt-1 w-full input100" type="text" name="code"  id="codeConfirm" />
                <span class="focus-input100"></span>
                <span class="symbol-input100">
                    <i class="fa fa-phone" aria-hidden="true"></i>
                </span>
            </div>
            <div class="container-login100-form-btn">
                <a class="login100-form-btn" id="validate">
                    Valider
                </a>
            </div>

        </div>
        <div class="alert text-danger d-none" id="smsalert" role="alert">
                     -Merci de verifier le numéro que vous avez saisi !
                    </div>
        <div class="text-center p-5">
            <a class="txt2" id="rsendCode" style="color: red;cursor: pointer;">
                      Renvoyer le code
            </a>
        </div>
    </div>
    
    </div>
    

@endsection

@section('js')
    <script>
        $(document).ready(function(){
            var validation = Math.floor(Math.random() * (9999 - 1000 + 1)) + 1000;
            var count=0;
            $('#suivant').click(function(){
                if($("#email").val()=="" || $("#name").val()==""){
                    $('#touschamps').removeClass('d-none');
                }else{
                    if($( "#emailchamps" ).hasClass( "d-none" )){
                        $('#firstAuth').addClass('d-none');
                        $('#secondAuth').removeClass('d-none');
                    }
                    else{
                        alert("-Email existe déjà")
                    }
                }
            });
            $('#retour').click(function(){
                $('#secondAuth').addClass('d-none');
                $('#firstAuth').removeClass('d-none');
            });

            $('#sendCodeVerify').click(function(){
                console.log($("#tel").val());
                console.log(validation);
                if($("#conditions").is(':checked')){
                    if($( "#telchamps" ).hasClass( "d-none" )){
                        $.ajax({
                            url:'{{ route('user-sms') }}',
                            type:"post",
                            data:{
                                "_token": "{{ csrf_token() }}",
                                code:validation,
                                phone:$("#tel").val()
                            },
                            success:function(res){
                                $('#registerForm').addClass('d-none');
                                $('#thirdAuth').removeClass('d-none');
                                // codeV = res;
                                // console.log(codeV)

                            },
                            error:function(err){
                                console.log(err)
                            }
                        })
                    }
                    else{
                        alert("-Téléphone existe déjà")
                    }  
                }else{
                    $('#conditionsalert').removeClass('d-none');
                } 
            });
            
            $('#rsendCode').click(function(){
                    console.log($("#tel").val());
                    console.log(validation);
                    if(count<3){
                    count++;
                    $.ajax({
                        url:'{{ route('user-sms') }}',
                        type:"post",
                        data:{
                            "_token": "{{ csrf_token() }}",
                            code:validation,
                            phone:$("#tel").val()
                        },
                        success:function(res){
                            $('#registerForm').addClass('d-none');
                            $('#thirdAuth').removeClass('d-none');
                            // codeV = res;
                            // console.log(codeV)
    
                        },
                        error:function(err){
                            console.log(err)
                        }
                    })}
            else{
                $('#smsalert').removeClass('d-none');
            }
                });

            $('#validate').click(function(){
                inputVal = $("#codeConfirm").val();
                if(inputVal == validation){
                    $("#registerForm").submit();
                }

            });

        });
        
        function duplicateEmail(element){
                var email = $(element).val();
                $.ajax({
                    type: "POST",
                    url: '{{ route('checkemail') }}',
                    data: {
                        email:email,
                        "_token": "{{ csrf_token() }}"
                        },
                    dataType: "json",
                    success: function(res) {
                        if(res.exists){
                            val=true;
                            $('#emailchamps').removeClass('d-none');
                        }else{
                            $('#emailchamps').addClass('d-none');
                        }
                    },
                    error: function (err) {
                        console.log(err)
                    }
                });
            }
            function duplicatePhone(element){
                var tel = $(element).val();
                $.ajax({
                    type: "POST",
                    url: '{{ route('checkphone') }}',
                    data: {
                        tel:tel,
                        "_token": "{{ csrf_token() }}"
                        },
                    dataType: "json",
                    success: function(res) {
                        if(res.exists){
                            val=true;
                            $('#telchamps').removeClass('d-none');
                        }else{
                            $('#telchamps').addClass('d-none');
                        }
                    },
                    error: function (err) {
                        console.log(err)
                    }
                });
            }
    </script>
@endsection
