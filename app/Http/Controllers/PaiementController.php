<?php



namespace App\Http\Controllers;



use App\Models\Paiement;
use App\Models\User;
use App\Models\Pack;
use Carbon\Carbon;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use URL;
use Mail;
use App\Mail\Paie;


class PaiementController extends Controller

{

    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */ 

   

    public function index()

    {

        return view('paiement.index',['paiements'=>Paiement::cursor()]);

    }



    /**

     * Store a newly created resource in storage.

     *

     * @param  \Illuminate\Http\Request  $request

     * @return \Illuminate\Http\Response

     */

    public function store(Request $request)

    {
              
        $_POST['okUrl'] = URL::to('paiement-valid/'.$request->pack_id);

		$_POST['failUrl'] = URL::to('Fail-paie/'.$request->pack_id);
        
		$_POST['callbackUrl'] = URL::to('callback');

        $_POST['shopurl'] = URL::to('profile-user');

        return view('pack.send',['paiement' => $request]);

    }



    /**

     * Update the specified resource in storage.

     *

     * @param  \Illuminate\Http\Request  $request

     * @param  \App\Models\Pack  $pack

     * @return \Illuminate\Http\Response

     */

    public function update($id)

    {
        if(Paiement::where('Order_id',$_POST['ReturnOid'])->first()){
            return view('utilisateur.profile.index',['user' => Auth::user(), "danger"=>"La facture a déjà été payée"]);
        }

            $paie = new Paiement();

            $paie->user_id = Auth::id();

            $paie->pack_id = $id;
            
            $paie->valid=1;

            $paie->Order_id = $_POST['ReturnOid'];

            $paie->save();

            $pack = Pack::find($id);
            $user = Auth::user();
            $user->count += $pack->solde;
            $user->save();

            $paie->pack = $pack;

            Mail::to(Auth::user()->email)->send(new Paie($paie));

            return view('utilisateur.profile.index',['user' => Auth::user(), "success"=>"Le paiement est effectué"]);

    }
    public function Fail($id)

    {

        $user = Auth::user();

        $pack = Pack::find($id);

        $facture =Paiement::select('id')->orderBy('id', 'desc')->first();

        $now = date('Y-m-d', strtotime(Carbon::now()));

        if(!$facture){

            $facture=0;

        }

        return view('pack.show', ['pack' =>$pack, 'user' => $user, 'facture' => $facture, 'now' => $now, "danger"=>"paiement échoué"]);
    }

}

