<?php

namespace App\Http\Controllers\utilisateur;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Client;
use App\Models\Reclamation;
use App\Models\Historique;
use App\Models\Paiement;
use Carbon\Carbon;



class ClientController extends Controller
{
    public function verifyCanUserConsultation(){
        $mytime = Carbon::now();
        $verifyPaiement = Paiement::where('user_id',Auth::id())->where('valid',1)->first();

        if($verifyPaiement !==null){
            return false;
        }else{
            return (date_diff($mytime, Auth::user()->created_at)->days);
        }
    }
    
    public function index(){
        return view('utilisateur.client.index',['user'=>Auth::user(),'canUseConsultation'=>self::verifyCanUserConsultation()]);
    }

    public function store(Request $request){

        $request->validate([
            'numTel'        => 'bail|max:10|min:10',
            'nom'           => 'bail',
            'ville'         => 'bail',
            'commentaire'   => 'bail|required|min:10'
        ]);

        $clienExist = Client::where('numTel', $request->numTel)
        ->with('reclamations')
        ->withCount('reclamations')
        ->first();

        if(empty($clienExist)){
            $request->validate([
                'numTel'        => 'bail|unique:clients|max:10|min:10',
                'nom'           => 'bail',
                'ville'         => 'bail',
                'commentaire'   => 'bail|required|min:10'
            ]);
            $client                     = new Client();
            $client->numTel             = $request->input('numTel');
            $client->nom                = $request->input('nom');
            $client->ville              = $request->input('ville');
            $client->user_id            = $request->input('user_id');
            $client->save();
        }

        $verify = empty($clienExist) ? $client : $clienExist ;
        if($verify->reclamations_count < 2){
            $reclamation                = new Reclamation();
            $reclamation->commentaire   = $request->input('commentaire');
            $reclamation->user_id       = $request->input('user_id');
            $reclamation->client_id     = empty($clienExist) ? $client->id : $clienExist->id;
            $reclamation->save();
    
            return redirect()->back()->with('success1', 'Déclaration a été effectuée'); 
        }

        return redirect()->back()->with('success3', 'Vous avez atteint la limite minimale de signalement pour une personne');
    }

    public function search(){
        if(isset($_GET['search'])){

            $client = Client::where('numTel',$_GET['search'])->with('reclamations')->withCount('reclamations')->first();
            $user   = Auth::user();

            if($client){
                if($user->count > 0 || $user->illimite == 1){
                    if($user->id !== $client->user_id && $user->illimite == 0){
                        $user->count = $user->count -1 ;
                        $user->save();
                    }
                    $historique             = new Historique();
                    $historique->user_id    = Auth::user()->id;
                    $historique->tel_client  = $client->numTel;
                    $historique->save();
                    return view('utilisateur.client.index', ['user'=>Auth::user(),'client' => $client,'can'=>$this->verifyUserreclamation($client),'canUseConsultation'=>self::verifyCanUserConsultation()]);
                }else{
                    $message = "!! charger votre solde pour faire cette opération";
                    return view('utilisateur.client.index',['user'=>Auth::user(),'message'=>$message,'canUseConsultation'=>self::verifyCanUserConsultation()]);
                }

            }
            
            if(empty($client)){
                $client1                     = new Client();
                $client1->numTel             = $_GET['search'];
                $client1->ville              = 'inconnu';
                $client1->user_id            = Auth::id();
                $client1->save();
                $user->count = $user->count -1 ;
                $user->save();
                return view('utilisateur.client.index', ['user'=>Auth::user(),'client' => $client1,'can'=>$this->verifyUserreclamation($client1),'canUseConsultation'=>self::verifyCanUserConsultation()]);
            }
        }
        $message = "Cette Client n'existe pas dans la base de donné,vous pouvez l'ajouter";
        return view('utilisateur.client.index',['user'=>Auth::user(),'message'=>$message,'canUseConsultation'=>self::verifyCanUserConsultation()]);
    }

    public function addReclamation(Request $request)
    {
        $client = Client::find($request->input('client'));
        if($client->reclamations){
            foreach($client->reclamations as $reclamation){
                if($reclamation->user_id == $request->input('user')){
                    return redirect()->back();
                }
            }
        }
        
        $request->validate([
            'commentaire' => 'required|min:10',
        ]);
        $reclamation                = new Reclamation();
        $reclamation->user_id       = $request->input('user');
        $reclamation->commentaire   = $request->input('commentaire');
        $client->reclamations()->save($reclamation);
        return redirect()->back();
    }

    private function verifyUserreclamation($client){
        if($client->reclamations){
            foreach($client->reclamations as $reclamation){
                if($reclamation->user_id === Auth::id()){
                    return false;
                }
            }
        }
        return true;
    }

    public function profile()
    {
        return view('utilisateur.profile.index',['user' => Auth::user()]);
    }
    
    //declaration modif

    public function showRclamation(Reclamation $reclamation){
        $date = Carbon::parse($reclamation->created_at);

        $diff = $date->diffInHours(Carbon::now());
        if($diff>24){
            //return redirect()->route('utilisateur.index');
        }
        return view('utilisateur.client.editreclamation',['reclamation'=>$reclamation,'user'=>Auth::user()]);
    }
    public function updateRclamation(Request $request, Reclamation $reclamation)
    {
        $request->validate([
            'commentaire'   => 'bail|required|min:10'
        ]);
        $date = Carbon::parse($reclamation->created_at);

        $diff = $date->diffInHours(Carbon::now());
        if($diff>24){
            return redirect()->route('utilisateur.index');
        }
        $reclamation->commentaire=$request->commentaire;
        $reclamation->save();
        return back()->with('success', 'Declaration a été Modifié!');
    }

    //end declaration modif
}
