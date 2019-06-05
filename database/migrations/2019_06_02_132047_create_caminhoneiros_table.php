<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCaminhoneirosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('caminhoneiros');
        Schema::dropIfExists('tipos_caminhoes');
        Schema::create('tipos_caminhoes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('tipo', 50);
            $table->timestamps();
        });
        Schema::create('caminhoneiros', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->boolean('veiculo_proprio');
            $table->string('nome', 100);
            $table->integer('idade');
            $table->string('sexo', 1);
            $table->string('tipo_cnh', 1);
            $table->bigInteger('tipo_caminhao_id')->unsigned();
            $table->foreign('tipo_caminhao_id')
                ->references('id')
                ->on('tipos_caminhoes')
                ->onDelete('cascade');
            $table->boolean('carregado');
            $table->bigInteger('origem_id')->unsigned();
            $table->foreign('origem_id')
                ->references('id')
                ->on('locais')
                ->onDelete('cascade');
            $table->decimal('origem_latitude', 10, 7);;
            $table->decimal('origem_longitude', 10, 7);;
            $table->bigInteger('destino_id')->unsigned();
            $table->foreign('destino_id')
                ->references('id')
                ->on('locais')
                ->onDelete('cascade');
            $table->decimal('destino_latitude', 10, 7);;
            $table->decimal('destino_longitude', 10, 7);;
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {        
        Schema::dropIfExists('caminhoneiros');
        Schema::dropIfExists('tipos_caminhoes');
    }
}
