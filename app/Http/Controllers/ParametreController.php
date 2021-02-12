<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Parametre;
use Illuminate\Support\Facades\DB;
class ParametreController extends Controller
{
    
    public function index(){
        $id = 1;
        return view('admin.parametre',['params'=> Parametre::find($id)]);
    }
    
    public function enregistrer(Request $request){
        
        $id = 1;
        $params = Parametre::find($id);
        if($params){
            $params->facebook  = $request->input('facebook');
            $params->instagram = $request->input('instagram');
            $params->youtube   = $request->input('youtube');
            $params->apropos_1 = $request->input('apropos_1');
            $params->apropos_title_1 = $request->input('apropos_title_1');
            $params->apropos_2 = $request->input('apropos_2');
            $params->apropos_title_2 = $request->input('apropos_title_2');
            $params->apropos_3 = $request->input('apropos_3');
             $params->apropos_title_3 = $request->input('apropos_title_3');
            $params->apropos_4 = $request->input('apropos_4');
            $params->apropos_title_4 = $request->input('apropos_title_4');
            $params->save();
        }else{
            $params = new Parametre;
            $params->facebook  = $request->input('facebook');
            $params->instagram = $request->input('instagram');
            $params->youtube   = $request->input('youtube');
            $params->apropos_1 = $request->input('apropos_1');
            $params->apropos_title_1 = $request->input('apropos_title_1');
            $params->apropos_2 = $request->input('apropos_2');
            $params->apropos_title_2 = $request->input('apropos_title_2');
            $params->apropos_3 = $request->input('apropos_3');
             $params->apropos_title_3 = $request->input('apropos_title_3');
            $params->apropos_4 = $request->input('apropos_4');
            $params->apropos_title_4 = $request->input('apropos_title_4');
            $params->save();
        }
        
        // $request->validate([
        //     'facebook'  => 'url',
        //     'instagram' => 'url',
        //     'youtube'   => 'url',
        //     'apropos_1' => 'min:50',
        //     'apropos_2' => 'min:50',
        //     'apropos_3' => 'min:50',
        //     'apropos_4' => 'min:50',
        // ]);

        // DB::table('parametres')
        // ->where('id','=',1)
        // ->updateOrInsert(
        //     ['facebook'  => $request->facebook],
        //     ['instagram' => $request->instagram],
        //     ['youtube'   => $request->youtube],
        //     ['apropos_1' => $request->apropos_1],
        //     ['apropos_2' => $request->apropos_2],
        //     ['apropos_3' => $request->apropos_3],
        //     ['apropos_4' => $request->apropos_4]
        // );
            // DB::update("update parametres set facebook = ?,instagram = ?,youtube = ?,apropos_1 = ?,apropos_2 = ?,apropos_3 = ?,apropos_4 = ?, where id = :id",
            // ['id' => 1, $request->facebook,$request->instagram,$request->youtube,$request->apropos_1,$request->apropos_2,$request->apropos_3,$request->apropos_4]);
        return redirect()->back();
    }

}
