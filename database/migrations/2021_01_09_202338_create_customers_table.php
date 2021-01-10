<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->uuid('CDCL', 36)->comment('Código do Cliente')->primary();
            $table->string('DSNOME', 50)->comment('Nome do Cliente');
            $table->char('IDTIPO',2)->comment(' PF - Pessoa Física e PJ - Pessoa Jurídica')->default('PF');
            $table->char('CDVEND',36)->comment('Código do Vendedor')->nullable($value = true);
            $table->decimal('DSLIM',15,2)->comment('Limite de Crédito');
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
        Schema::dropIfExists('customers');
    }
}
