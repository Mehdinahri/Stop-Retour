<?php

namespace App\Http\Controllers\utilisateur;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Mail;
use App\Mail\UpdateProfile;

class ProfileController extends Controller
{
    
    
    public function store(Request $request){

        
        $request->validate([
            'name'           => 'required',
            'ville'         => 'min:2',
            'adresse'       => 'min:6',
            'image'         => 'nullable|mimes:jpeg,jpg,gif,png'
        ]);

        $user = User::find(Auth::user()->id);
        
        if($request->input('password') !== null && Hash::check($request->input('oldpassword'),$user->password)){
            $user->name      = $request->input('name');
            $user->ville    = $request->input('ville');
            $user->adresse   = $request->input('adresse');
            $user->password = Hash::make($request->input('password'));
            $user->profile_photo_path = $this->storePhotoIfExist($request);
            $user->save();
            
            $data = [
              'password'    => $request->input('password'),
              'email'       => $user->email,
              'nom'         => $user->nom,  
            ];
            self::sendEmail($data);
            
            return redirect()->back()->with('success', 'la modification a été effectuée');
        }else{
            
                $user->name      = $request->input('name');
                $user->ville    = $request->input('ville');
                $user->adresse  = $request->input('adresse');
                $user->profile_photo_path = $this->storePhotoIfExist($request);
                $user->save();
                
            
            return redirect()->back()->with('success', 'la modification a été effectuée');
        }
    }
    
    public function sendEmail($data)
    {
        Mail::to($data['email'])->send(new UpdateProfile($data));
        return back()->with(['message' => 'Email successfully sent!']);
    }

    private function storePhotoIfExist($file){

        if ($file->hasFile('image')){
            $imageName = '/storage/profile-photos/'.time().'.'.$file->image->getClientOriginalExtension(); 
            $file->image->move(public_path('storage/profile-photos/'), $imageName);
            return ($imageName !==null) ? $imageName : 'https://picsum.photos/200';
        }
        return Auth::user()->profile_photo_path;
    }

    public function destroy()
    {
        User::destroy(Auth::id());
        return redirect('home');
    }
}
