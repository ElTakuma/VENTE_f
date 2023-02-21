<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Commande;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function getClient()
    {
        $client = Client::find(1);
        $client->user;
        $client->commandes;

        return response($client);
    }

    public function getCommande()
    {
        $commande = Commande::find(1)->load('produits');
        return response($commande);
    }
}
