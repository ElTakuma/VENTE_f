<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommandeProduitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commande_produits', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('commande_id')->nullable(false);
            $table->unsignedInteger('produit_id')->nullable(false);
            $table->integer('qty');
            $table->float('prix_total');
            $table->timestamps();

            $table->foreign('commande_id')->on('commandes')->references('id');
            $table->foreign('produit_id')->on('produits')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('commande_produits');
    }
}
