<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableRecargas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Recargas', function (Blueprint $table) {
            $table->id('id_recarga',20)->unique();
            $table->integer('numero_tarjeta');
            $table->integer('cv_tarjeta');
            $table->double('cantidad');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table__recargas');
    }
}
