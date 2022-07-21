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
        Schema::create('Psicologa', function (Blueprint $table) {
            $table->unsignedBigInteger('idpsicologa');
            $table->primary('idpsicologa');

            $table->unsignedBigInteger('IDAlunopac');
            $table->foreign('IDAlunopac')->references('matricula_aluno')->on('AlunoPaciente');
            $table->string('nome');


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
        Schema::dropIfExists('Psicologa');
    }
};
