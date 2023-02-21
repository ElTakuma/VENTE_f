<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommandesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();
        Schema::create('commandes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code')->unique()->nullable(false);
            $table->unsignedInteger('client_id')->nullable(false);
            $table->unsignedInteger('vendeur_id')->nullable(false);
            $table->timestamps();

            $table->foreign('client_id')->on('clients')->references('id');
            $table->foreign('vendeur_id')->on('vendeurs')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('commandes');
    }
}
