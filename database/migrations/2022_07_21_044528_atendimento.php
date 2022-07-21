<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Atendimento', function (Blueprint $table) {
            $table->increments('id')->autoIncrement();
            $table->unsignedBigInteger('idpacientealuno');
            $table->foreign('idpacientealuno')->references('matricula_aluno')->on('AlunoPaciente');
            $table->unsignedBigInteger('idpsi');
            $table->foreign('idpsi')->references('idpsicologa')->on('Psicologa');
            $table->date('data',10);
            $table->time('horario',6);
            $table->string('indicacao',20);
            $table->string('motivo',20);
            $table->longText('observacoes');
            $table->timestamp('last_used_at')->nullable();
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
        Schema::dropIfExists('Atendimento');
    }
};
