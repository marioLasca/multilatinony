<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateColumnParametroPrecios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('parametros', function (Blueprint $table) {
            //
            $table->string('pais');
            $table->double('precio_envio',8,2);
            $table->double('precio_carga',8,2);
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('parametros', function (Blueprint $table) {
            //
            $table->dropColumn('pais');
            $table->dropColumn('precio_envio');
            $table->dropColumn('precio_carga');
        });
    }
}
