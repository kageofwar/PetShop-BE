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
        Schema::table('produtos', function (Blueprint $table){
            $table->string('porte')->nullable()->after('categoria');
            $table->string('idade')->nullable()->after('categoria');
            $table->string('racas')->nullable()->after('categoria');
            $table->string('quantidade')->nullable()->after('categoria');
            $table->string('sabor')->nullable()->after('categoria');
            $table->string('marca')->nullable()->after('categoria');

            $table->string('descricao')->nullable()->after('categoria');
            $table->string('ingredientes')->nullable()->after('categoria');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('produtos', function (Blueprint $table){
            $table->dropColumn('porte');
            $table->dropColumn('idade');
            $table->dropColumn('racas');
            $table->dropColumn('quantidade');
            $table->dropColumn('sabor');
            $table->dropColumn('marca');

            $table->dropColumn('descricao');
            $table->dropColumn('ingredientes');
        });
    }
};
