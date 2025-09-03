<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->renameColumn('role', 'function');
        });

        DB::statement("ALTER TABLE users ALTER COLUMN function DROP DEFAULT");
        DB::statement("CREATE TYPE function_type AS ENUM ('leader','member')");
        DB::statement("ALTER TABLE users ALTER COLUMN function TYPE function_type USING function::text::function_type");
        DB::statement("ALTER TABLE users ALTER COLUMN function SET DEFAULT 'member'");

        // Renomear coluna 'skills' para 'instruments'
        Schema::table('users', function (Blueprint $table) {
            $table->renameColumn('skills', 'instruments');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->renameColumn('function', 'role');
        });

        // Alterar a coluna 'role' de volta para VARCHAR
        DB::statement("ALTER TABLE users ALTER COLUMN role TYPE VARCHAR");

        // Remover o enum 'function_type'
        DB::statement("DROP TYPE IF EXISTS function_type");

        // Reverter o nome da coluna 'instruments' para 'skills'
        Schema::table('users', function (Blueprint $table) {
            $table->renameColumn('instruments', 'skills');
        });
    }
};
