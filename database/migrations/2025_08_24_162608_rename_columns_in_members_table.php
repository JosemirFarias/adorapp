<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('members', function (Blueprint $table) {

            $table->renameColumn('nome', 'name');
            $table->renameColumn('funcao', 'function');
            $table->renameColumn('data_nascimento', 'birth_date');
            $table->renameColumn('email', 'e-mail');
            $table->renameColumn('senha', 'password');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('members', function (Blueprint $table) {

            $table->renameColumn('name', 'nome');
            $table->renameColumn('function', 'funcao');
            $table->renameColumn('birth_date', 'data_nascimento');
            $table->renameColumn('e-mail', 'email');
            $table->renameColumn('password', 'senha');
        });
    }
};
