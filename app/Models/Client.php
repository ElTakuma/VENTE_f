<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Client extends Model
{
    use HasFactory, Notifiable;

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function commandes()
    {
        return $this->hasMany(Commande::class);
    }
}
