<?php



namespace App\Http\Controllers\utilisateur;



use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\Ticket;

use App\Mail\TicketForm2;

use Mail;





class TickettController extends Controller

{

    public function index(){

        return view('utilisateur.ticket.index',['user'=>Auth::user()]);

    }



    public function store(Request $request){

        $request->validate([

            'objet'         => 'required',

            'priorite'      => 'required',

            'departement'   => 'required',

            'message'       => 'required'

        ]);

        

        $ticket              = new Ticket();

        $ticket->objet       = $request->objet;

        $ticket->priorite    = $request->priorite;

        $ticket->departement = $request->departement;

        $ticket->message     = $request->message;

        $ticket->lue         = 1;

        $ticket->user_id     = Auth::id();

        $ticket->save();

        

        Mail::to("contact@stop-retour.com")->send(new TicketForm2($ticket));



        return back()->with('success', 'Votre requête a été envoyée avec succès. Un conseiller vous répondra dans les meilleures délais');

    }



    public function show($id){

        $ticket = Ticket::findOrFail($id);

        $user   = Auth::user();

        return view('utilisateur.ticket.show',['ticket'=> $ticket,'user' => $user]);

    }

    public function all()

    {

        $tickets2 = Auth::user()->tickets;

        return view('utilisateur.ticket.all', ['tickets2' => $tickets2, 'user'=>Auth::user()]);



    }



}

