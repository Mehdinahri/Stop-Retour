<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Client;
use App\Models\Reclamation;
use App\Models\User;
use App\Models\Ticket;

class DashboardController extends Controller
{
    public function index(){
        $client         = Client::count();
        $reclamation    = Reclamation::count();
        $user           = User::count();
        $ticket         = Ticket::count();
        return view('dashboard',compact(['client','reclamation','user','ticket']));
    }
}
