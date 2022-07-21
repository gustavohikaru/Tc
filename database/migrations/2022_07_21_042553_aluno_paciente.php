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
        Schema::create('AlunoPaciente', function (Blueprint $table) {
            $table->unsignedBigInteger('matricula_aluno');
            $table->foreign('matricula_aluno')->references('matricula')->on('alunos');
            $table->string('stats');
        
            $table->string('avaliacaofinal');
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
        Schema::dropIfExists('AlunoPaciente');
    }
};
