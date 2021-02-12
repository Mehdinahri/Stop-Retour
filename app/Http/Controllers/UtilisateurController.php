<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Historique;
use App\Models\Reclamation;
use App\Models\User;
use App\Models\Client;

class UtilisateurController extends Controller
{
    public function index(){
        $reclamationCount = Auth::user()->reclamations->count();
        // $historique = Historique::cursor()->where('user_id',Auth::id());
        $historique = DB::table('historiques')->where('user_id',Auth::id())->limit(60)->get();
        return view('utilisateur.index',['historiques'=> $historique,'user'=> Auth::user(),'reclamations'=> $reclamationCount]);
    }
    


}
