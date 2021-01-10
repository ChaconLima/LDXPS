<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVendorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendors', function (Blueprint $table) {
            $table->uuid('CDVEND', 36)->comment('Código do Vendedor')->primary();
            $table->string('DSNOME', 50)->comment('Nome do Vendedor');
            $table->integer('CDTAB')->comment('Código da tabela de preços padrão');
            $table->date('DTNASC')->comment('Data de Nascimento');
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
        Schema::dropIfExists('vendors');
    }
}
