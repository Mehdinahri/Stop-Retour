<?php



use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;

use App\Http\Controllers\ClientController;

use App\Http\Controllers\ReclamationController;

use App\Http\Controllers\HistoriqueController;

use App\Http\Controllers\UtilisateurController;

use App\Http\Controllers\DashboardController;

use App\Http\Controllers\PackController;

use App\Http\Controllers\TicketController;

use App\Http\Controllers\ReponseController;

use App\Http\Controllers\PaiementController;

use App\Http\Controllers\SendSMSController;

use App\Http\Controllers\ParametreController;



use App\Http\Controllers\utilisateur\ProfileController;

use App\Http\Controllers\utilisateur\PackUserController;

use App\Http\Controllers\utilisateur\ChatController;

use App\Http\Controllers\utilisateur\TickettController  as TicketController2;

use App\Http\Controllers\utilisateur\ClientController  as ClientController2;



use App\Models\Pack;

use App\Models\Parametre;

/*

|--------------------------------------------------------------------------

| Web Routes

|--------------------------------------------------------------------------

|

| Here is where you can register web routes for your application. These

| routes are loaded by the RouteServiceProvider within a group which

| contains the "web" middleware group. Now create something great!

|

*/

Route::post('/callback', function () {

    return view('callback');

})->name('callback');

Route::get('/', function () {

    $params = Parametre::find(1);

    $packs= Pack::where("active",1)->orderBy('prix')->get();

    return view('welcome', ['packs' => $packs,'params'=>$params]);

})->name('welcome');

Route::get('/Conditions-générales', function () {

    $params = Parametre::find(1);

    return view('conditions', ['params'=>$params]);

})->name('Conditions-générales');

Route::get('/Conditions-Vente', function () {

    $params = Parametre::find(1);

    return view('Vente', ['params'=>$params]);

})->name('Conditions-Vente');


// Route::post('/',[WelcomeController::class,'index']);

Route::post('/user/send-sms',[UserController::class,'sendSMS'])->name('user-sms');

Route::post('/contact-us',[SendSMSController::class,'contactus'])->name('contact-us');

Route::get('validate',function(){

    return view('auth.validate');

});

Route::post('/checkemail',[UserController::class,'checkEmail'])->name('checkemail');

Route::post('/checkphone',[UserController::class,'checkPhone'])->name('checkphone');

Route::group(['middleware' => 'admin'], function () {

    Route::get('/usersofdays',[UserController::class,'usersofdays']);
    Route::get('/clientsofdays',[UserController::class,'clientofdays']);
    Route::get('/reclamationsofdays',[UserController::class,'reclamationofdays']);
    Route::get('/ticketsofdays',[UserController::class,'ticketsofdays']);
    Route::get('/sommedesventes',[UserController::class,'sommedesventes']);
    

    Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');

    Route::get('/historique',[HistoriqueController::class,'index']);

    Route::resource('/user',UserController::class)->only(['index','destroy']);

    Route::put('/user-make-admin',[UserController::class,'makeAdmin'])->name('user.make.admin');

    Route::resource('/client',ClientController::class)->only(['index','store','show']);

    Route::post('/client-search',[ClientController::class,'search'])->name('client.search');

    Route::post('/reclamation/{reclamation}',[ReclamationController::class,'addReclamation'])->name('addReclamation');

    Route::resource('/reclamation',ReclamationController::class)->only(['index','store','edit','update']);



    Route::delete('/reclamation-destroy/{reclamation}',[ReclamationController::class,'delete'])->name('reclamation.delete');

    Route::get('/client-show/{client}',[ClientController::class,'show'])->name('client.show');

    Route::get('/user-show/{user}',[UserController::class,'show'])->name('user.show');

    Route::resource('/pack',PackController::class);

    Route::resource('/paiement',PaiementController::class);

    Route::resource('/ticket',TicketController::class);

    Route::resource('/reponse',ReponseController::class);

    Route::get('/contact-user/{user}',[TicketController::class,'contact'])->name('ticket.contact');

    Route::post('/contact-user',[TicketController::class,'store2'])->name('ticket.contact.store');

    Route::post('/parametre-save',[ParametreController::class,'enregistrer'])->name('parametre-enregistrer');

    Route::get('/parametre',[ParametreController::class,'index'])->name('parametre-index');



});

Route::group(['middleware' =>['Moderator'] ], function () {

    Route::resource('moderator/ticket',TicketController::class); 

    Route::get('portail',[DashboardController::class,'index'])->name('dashboard');  

});

Route::group(['middleware' => 'auth'], function () {

    Route::resource('utilisateur-pack', PackUserController::class)->only('index','show');

    Route::resource('/ticket-user',TicketController2::class);

    Route::get('/ticket-user',[TicketController2::class,'index'])->name('ticket-user.index');

    Route::post('/ticket-user',[TicketController2::class,'store'])->name('ticket.store2');

    Route::get('/ticket-show/{ticket}',[TicketController2::class,'show'])->name('ticket.show2');

    Route::get('/historique-user',[HistoriqueController::class,'userIndex'])->name('historique-user.userIndex');

    Route::get('/utilisateur',[UtilisateurController::class,'index'])->name('utilisateur.index');

    Route::get('/client-user',[ClientController2::class,'index'])->name('client-user.index');

    Route::post('/client-user',[ClientController2::class,'store'])->name('client-user.store');

    Route::get('/client-user-search',[ClientController2::class,'search'])->name('client-user.search');

    Route::post('client-user/{reclamation}',[ClientController2::class,'addReclamation'])->name('client-user.reclamation');

    Route::resource('/reponse',ReponseController::class)->only(['store']);

    Route::get('/ticket-all',[TicketController2::class,'all'])->name('ticket.all');

    Route::get('profile-user', [ClientController2::class,'profile'])->name('profile-user.index');

    Route::post('profile-user/store',[ProfileController::class,'store'])->name('profile-user.store');

    Route::get('profile-user/destroy',[ProfileController::class,'destroy'])->name('profile-user.destroy');

    Route::put('declaration/{reclamation}',[ClientController2::class,'updateRclamation'])->name('reclamation.update');

    Route::get('declaration-show/{reclamation}',[ClientController2::class,'showRclamation'])->name('reclamation.show');

    

    Route::get('chat-show/{dist}',[ChatController::class,'show'])->name('message.show');

    Route::get('chat',[ChatController::class,'index'])->name('message.index');

    Route::put('chat/store',[ChatController::class,'store'])->name('message.store');

    

    

    Route::post('paiement',[PaiementController::class,'store'])->name('paiement.add');

    Route::post('paiement-valid/{pack}',[PaiementController::class,'update'])->name('paiement.valid');

    Route::get('Fail-paie/{pack}',[PaiementController::class,'Fail']);


});









