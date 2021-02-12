<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    use HasFactory;
    protected $fillable = [
        'message',
        'distin_id ',
        'user_id '
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function distin()
    {
        return $this->belongsTo(User::class, 'distin_id');
    }
}
