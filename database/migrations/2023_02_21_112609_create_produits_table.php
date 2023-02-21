<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProduitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();
        Schema::create('produits', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code')->unique(true);
            $table->string('ref');
            $table->string('description', 500)->nullable();
            $table->float('prix')->default(0);
            $table->unsignedInteger('categorie_produit_id')->default(0);
            $table->timestamps();

            $table->foreign('categorie_produit_id')->on('categorie_produits')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produits');
    }
}
