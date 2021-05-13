<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAdicionalesToMarcasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('productos', function(Blueprint $table ){
            $table->unsignedBigInteger('marcaid')->after('id');
            
            //Remuevo el ForeignKey por errores que necesito revisar
            //Integrity constraint violation: 1452 Cannot add or update a child row:

            //$table->foreign('marcaid')->references('id')->on('marcas');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('productos', function (Blueprint $table) {
            $table->dropColumn('fecembarque');
        });
    }
}
