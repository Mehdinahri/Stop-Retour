<?php



namespace App\Models;



use Illuminate\Contracts\Auth\MustVerifyEmail;

use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Foundation\Auth\User as Authenticatable;

use Illuminate\Notifications\Notifiable;

use Laravel\Fortify\TwoFactorAuthenticatable;

use Laravel\Jetstream\HasProfilePhoto;

use Laravel\Sanctum\HasApiTokens;

use Illuminate\Database\Eloquent\SoftDeletes;

use App\Models\Ticket;

use App\Models\Paiement;

use Carbon\Carbon;

use Illuminate\Support\Facades\Auth;



class User extends Authenticatable

{

    use HasApiTokens;

    use HasFactory;

    use HasProfilePhoto;

    use Notifiable;

    use TwoFactorAuthenticatable;

    use SoftDeletes;







    /**

     * The attributes that are mass assignable.

     *

     * @var array

     */

    protected $fillable = [

        'name',

        'email',

        'password',

        'tel',

        'ville',

        'adresse',

        'count',

        'nom',

        'prenom',

    ];



    /**

     * The attributes that should be hidden for arrays.

     *

     * @var array

     */

    protected $hidden = [

        'password',

        'remember_token',

        'two_factor_recovery_codes',

        'two_factor_secret',

    ];



    /**

     * The attributes that should be cast to native types.

     *

     * @var array

     */

    protected $casts = [

        'email_verified_at' => 'datetime',

    ];



    /**

     * The accessors to append to the model's array form.

     *

     * @var array

     */

    protected $appends = [

        'profile_photo_url',

    ];



    public function adminlte_image()

    {

        return 'http://stop-retour.com/stopretour/public'.$this->profile_photo_path;

    }



    public function adminlte_desc()

    {

        return $this->role == 1 ? 'Admin':'Utilisateur';

    }

    

    public function adminlte_profile_url()

    {

        return 'user/profile';

    }



    public function clients()

    {

        return $this->hasMany(Client::class);

    }



    public function reclamations()

    {

        return $this->hasMany(Reclamation::class);

    }



    public function packs()

    {

        return $this->hasMany(Pack::class);

    }



    public function tickets()

    {

        return $this->hasMany(Ticket::class);

    }



    public static function getUserTickets($user){

        return Ticket::orderBy('created_at','desc')->where('user_id',$user->id)->limit(4)->get();

    }

    public static function noneLue($user){

        return Chat::where('lue', 0)

        ->where('distin_id', $user->id)

        ->count();

    }
    public static function verifyCanUserConsultation(){

        $mytime = Carbon::now();

        $verifyPaiement = Paiement::where('user_id',Auth::id())->where('valid',1)->first();



        if($verifyPaiement !==null){

            return false;

        }else{

            return (date_diff($mytime, Auth::user()->created_at)->days);

        }

    }



}

