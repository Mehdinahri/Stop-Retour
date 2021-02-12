<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
    */
    protected $fillable = [
        'nom',
        'email',
        'ville',
        'numTel',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function reclamations()
    {
        return $this->hasMany(Reclamation::class);
    }

}
