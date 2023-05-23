<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     *  Run the migrations.
     */
    public function up(): void
    {
        Schema::create('company_establishments', function (Blueprint $table) {
            $table->id();
            $table->integer('cod_unidade_cnes')->unique();
            $table->string('no_unidade')->unique();
            $table->string('ft_unidade');
            $table->string('end_logradouro');
            $table->string('end_numero');
            $table->string('end_bairro');
            $table->unsignedBigInteger('cidade_id');
            $table->string('end_latitude')->nullable();
            $table->string('end_longitude')->nullable();
            $table->unsignedBigInteger('tipo_estabelecimento_id');
            $table->unsignedBigInteger('nivel_atencao_id');
            $table->string('con_unidade_1')->nullable();
            $table->string('con_unidade_2')->nullable();
            $table->string('con_unidade_3')->nullable();
            $table->text('des_unidade')->nullable();
            $table->string('st_unidade')->default(true);
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('company_establishments');
    }
};