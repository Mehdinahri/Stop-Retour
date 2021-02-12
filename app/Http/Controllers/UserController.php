<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Client;
use App\Models\Reclamation;
use App\Models\Ticket;
use App\Models\Paiement;
class UserController extends Controller
{
    const apikey = 'bbdf670f7317c07dc7735a6ed6662a72-02b1f9ab-69e3-41b4-a46e-ce130c9322b6';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = User::paginate(3);
        return view('user.index',['users'=>$data]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::destroy($id);
        return redirect()->back();
    }

    public function makeAdmin(Request $request)
    {
        $request->validate([
            'count' => 'required',
        ]);
        $user        = User::find($request->id);
        
        if($request->illimite == 1){
            $user->illimite = 1;
        }else{
            $user->illimite = 0;
        }
        
        if($request->admine == 1){
            $user->role = 1;
        }elseif ($request->moderateur == 1){
            $user->role = 2;
        }else{
            $user->role = 0;
        }
        $user->count = $request->count;
        $user->save();
        return redirect()->back()->with('success', 'la modification a été effectuée!');
    }
    public function show(User $user)
    {
        return view('user.show', ['user' => $user]);
    }

    public function sendSMS(Request $request){
        $validate = $request->input('code');
        if(strlen ( $request->input('phone') )==10){
            $phone="212".substr($request->input('phone'), 1, 9);
        }
        $validate . " " . $phone;
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://9rknjy.api.infobip.com/sms/2/text/advanced',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS =>'{"messages":[{"from":"InfoSMS","destinations":[{"to":"'. $phone .'"}],"text":"Your code is :'.$validate.'"}]}',
            CURLOPT_HTTPHEADER => array(
                'Authorization: App '.self::apikey,
                'Content-Type: application/json',
                'Accept: application/json'
            ),
        ));

        $response = curl_exec($curl);
        curl_close($curl);
        return $response;
    }
    
    public function checkEmail(Request $request){
        $email = $request->input('email');
        $isExists = User::where('email',$email)->first();
        if($isExists){
            return response()->json(array("exists" => true));
        }else{
            return response()->json(array("exists" => false));
        }
    }
    public function checkPhone(Request $request){
        $tel = $request->input('tel');
        $isExists = User::where('tel',$tel)->first();
        if($isExists){
            return response()->json(array("exists" => true));
        }else{
            return response()->json(array("exists" => false));
        }
    }
    
    
    public function usersofdays(){

        $list = [];
        $data;
        $numberOfDate = (int)date("t");
        $year = date("Y");
        $month = date("m");
        $day = date("d");

        $users = User::where('created_at','>',$year.'-'.$month.'-01')
        ->where('created_at','<',$year.'-'.$month.'-'.$numberOfDate)
        ->get('created_at');

        for ($i=1; $i <= $numberOfDate ; $i++) {
            $data[$i] = isset($data[$i]) ? $data[$i] : 0;
        }

        foreach ($users as $key => $value) {
            $specificDate = strtotime($value->created_at);
            $specificDate = date('d', $specificDate);
            $index        = (int)$specificDate;
            $data[$index] = isset($data[$index]) ? $data[$index]+1 : 0;
        }

        for ($i=1; $i <= $numberOfDate ; $i++) {
            array_push($list,$data[$i]);
        }

        return $list;
    }

    public function clientofdays(){

        $list = [];
        $data;
        $numberOfDate = (int)date("t");
        $year = date("Y");
        $month = date("m");
        $day = date("d");


        $users = Client::where('created_at','>',$year.'-'.$month.'-01')
        ->where('created_at','<',$year.'-'.$month.'-'.$numberOfDate)
        ->get('created_at');

        for ($i=1; $i <= $numberOfDate ; $i++) {
            $data[$i] = isset($data[$i]) ? $data[$i] : 0;
        }

        foreach ($users as $key => $value) {
            $specificDate = strtotime($value->created_at);
            $specificDate = date('d', $specificDate);
            $index        = (int)$specificDate;
            $data[$index] = isset($data[$index]) ? $data[$index]+1 : 0;
        }

        for ($i=1; $i <= $numberOfDate ; $i++) {
            array_push($list,$data[$i]);
        }

        return $list;
    }
    
    public function reclamationofdays(){

        $list = [];
        $data;
        $numberOfDate = (int)date("t");
        $year = date("Y");
        $month = date("m");
        $day = date("d");


        $users = Reclamation::where('created_at','>',$year.'-'.$month.'-01')
        ->where('created_at','<',$year.'-'.$month.'-'.$numberOfDate)
        ->get('created_at');

        for ($i=1; $i <= $numberOfDate ; $i++) {
            $data[$i] = isset($data[$i]) ? $data[$i] : 0;
        }

        foreach ($users as $key => $value) {
            $specificDate = strtotime($value->created_at);
            $specificDate = date('d', $specificDate);
            $index        = (int)$specificDate;
            $data[$index] = isset($data[$index]) ? $data[$index]+1 : 0;
        }

        for ($i=1; $i <= $numberOfDate ; $i++) {
            array_push($list,$data[$i]);
        }

        return $list;
    }
    
    public function ticketsofdays(){
    
            $list = [];
            $data;
            $numberOfDate = (int)date("t");
            $year = date("Y");
            $month = date("m");
            $day = date("d");
    
    
            $users = Ticket::where('created_at','>',$year.'-'.$month.'-01')
            ->where('created_at','<',$year.'-'.$month.'-'.$numberOfDate)
            ->get('created_at');
    
            for ($i=1; $i <= $numberOfDate ; $i++) {
                $data[$i] = isset($data[$i]) ? $data[$i] : 0;
            }
    
            foreach ($users as $key => $value) {
                $specificDate = strtotime($value->created_at);
                $specificDate = date('d', $specificDate);
                $index        = (int)$specificDate;
                $data[$index] = isset($data[$index]) ? $data[$index]+1 : 0;
            }
    
            for ($i=1; $i <= $numberOfDate ; $i++) {
                array_push($list,$data[$i]);
            }
    
            return $list;
    }
        
    public function sommedesventes (){
            $list = [];
            $data;
            $numberOfDate = (int)date("t");
            $year = date("Y");
            $month = date("m");
            $day = date("d");
    
    
            $paiements = Paiement::where('created_at','>',$year.'-'.$month.'-01')
            ->where('created_at','<',$year.'-'.$month.'-'.$numberOfDate)
            ->with('pack')
            ->get('created_at');
    
            for ($i=1; $i <= $numberOfDate ; $i++) {
                $data[$i] = isset($data[$i]) ? $data[$i] : 0;
            }
    
            foreach ($paiements as $key => $value) {
                $specificDate = strtotime($value->created_at);
                $specificDate = date('d', $specificDate);
                $index        = (int)$specificDate;
                $data[$index] = isset($data[$index]) ? $value->prix  : $data[$index] + $value->prix;
            }
    
            for ($i=1; $i <= $numberOfDate ; $i++) {
                array_push($list,$data[$i]);
            }
    
            return $list;
    }
    

}
