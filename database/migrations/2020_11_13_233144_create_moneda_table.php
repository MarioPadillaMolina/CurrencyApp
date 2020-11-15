<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMonedaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('moneda', function (Blueprint $table) {
            $table->id();//autonumérico
            
            $table->string('name', 50);
            $table->string('symbol', 6);
            $table->string('zone', 80);
            $table->decimal('value', 6, 2); //con respecto al euro
            $table->date('creationdate') -> nullable(); //puede ser null
            $table->timestamps();
            
            //La pareja nombre moneda, país moneda es única.
            $table->unique(['id', 'zone']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('moneda');
    }
}
