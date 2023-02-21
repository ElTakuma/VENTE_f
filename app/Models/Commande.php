<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Commande extends Model
{
    use HasFactory, Notifiable;

    public function produits()
    {
        return $this->belongsToMany(Produit::class, 'commande_produits')
            ->withPivot(['qty', 'prix_total']);
    }

    public function client()
    {
        return $this->belongsTo(Client::class, 'client_id');
    }
}
