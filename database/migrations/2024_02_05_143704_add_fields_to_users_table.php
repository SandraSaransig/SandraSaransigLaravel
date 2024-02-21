<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */

     //Migracion para añadir el nombre de usuario, fehc ade nacimiento y rol a la tabla de usuarios
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            //
            $table->string('username')->after('id')->unique();
            $table->date('birthday');
            $table->enum('rol',['user','admin'])
                ->default('user')
                ->after('password');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
};
