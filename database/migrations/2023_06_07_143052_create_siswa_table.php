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
        Schema::create('siswa', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('nisn');
            $table->unsignedbiginteger('user_id')->require();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('restrict');
            $table->unsignedbiginteger('kelas_id')->require();
            $table->foreign('kelas_id')->references('id')->on('kelas')->onDelete('restrict');
            $table->date('ttl');
            $table->enum('gender', ['pria', 'wanita']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('siswa', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
            $table->dropColumn('user_id');
            $table->dropForeign(['kelas_id']);
            $table->dropColumn('kelas_id');
        });
        Schema::dropIfExists('siswa');
    }
};
