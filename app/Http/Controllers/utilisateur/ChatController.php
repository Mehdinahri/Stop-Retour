<?php

namespace App\Http\Controllers\utilisateur;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Chat;


class ChatController extends Controller
{
    public function index()
    {
        $nonlues=Chat::where('lue', 0)
        ->where('distin_id', Auth::id())
        ->get();
        foreach($nonlues as $lue){
            $lue->lue = 1;
            $lue->save();
        }
        $users = Chat::select('user_id','distin_id')->
         where("user_id",Auth::id())
        ->orWhere("distin_id",Auth::id())
        ->distinct()
        ->groupBy('user_id','distin_id')
        ->limit(50)
        ->get();
        return view('utilisateur.chat.index',['users'=>$users, 'user'=>Auth::user()]);
    }

    public function show($id)
    {
        $nonlues=Chat::where('lue', 0)
        ->where('distin_id', Auth::id())
        ->get();
        foreach($nonlues as $lue){
            $lue->lue = 1;
            $lue->save();
        }
        $messages=Chat::whereIn('user_id', [Auth::id(), $id])
        ->whereIn('distin_id', [Auth::id(), $id])
        ->limit(50)
        ->get();
        $user=User::find($id);
        return view('utilisateur.chat.show',['user'=>Auth::user(),"dist"=>$user, "messages"=>$messages]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'message' => 'bail|required',
            'distin_id' => 'bail|required',
        ]);

        $chat              = new Chat();
        $chat->message     = $request->message;
        $chat->user_id     = Auth::id();
        $chat->distin_id   = $request->distin_id;
        $chat->save();
        $nonlues=Chat::where('lue', 0)
        ->where('distin_id', Auth::id())
        ->get();
        foreach($nonlues as $lue){
            $lue->lue = 1;
            $lue->save();
        }
        return back();
    }
}
