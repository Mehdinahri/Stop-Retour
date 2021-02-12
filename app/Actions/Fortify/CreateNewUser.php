<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Mail;
use App\Mail\InscriptionForm;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        
        
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'tel' => ['required', 'min:10', 'max:10', 'unique:users'],
            'ville' => ['string'],
            'nom' => ['required'],
            'prenom' => ['required'],
            'adresse' => ['string'],
            'password' => $this->passwordRules(),
        ])->validate();

        self::sendEmail($input);
        return User::create([
            'name' =>       $input['name'],
            'email' =>      $input['email'],
            'tel' =>        $input['tel'],
            'nom' =>        $input['nom'],
            'prenom' =>     $input['prenom'],
            'ville' =>      $input['ville'],
            'count' =>    20,
            'adresse' =>      $input['adresse'],
            'password' =>   Hash::make($input['password']),
        ]);
        
    }
    
    public function sendEmail($data)
    {
        Mail::to($data['email'])->send(new InscriptionForm($data));
        return back()->with(['message' => 'Email successfully sent!']);
    }
}
