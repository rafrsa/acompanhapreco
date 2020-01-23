<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableProdutos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('produtos')) {
            Schema::create('produtos', function (Blueprint $table) {
                $table->increments('produto_id');
                $table->string('produto_nome');
                $table->boolean('produto_ativo');
                $table->integer('provedor_id')->unsigned();
                $table->foreign('provedor_id')->references('provedor_id')->on('provedores');
                $table->integer('usuario_id')->unsigned();
                $table->foreign('usuario_id')->references('usuario_id')->on('usuarios');
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produtos');
    }
}
