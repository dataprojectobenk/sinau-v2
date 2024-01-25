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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->integer('nisn')->nullable()->unique();
            $table->integer('nis')->nullable()->unique();
            $table->string('nama',50)->nullable();
            $table->text('alamat')->nullable();
            $table->date('tanggalLahir')->nullable();
            $table->enum('jenisKelamin',['L','P'])->default('L');
            $table->enum('agama',['Islam','Kristen','Katholik','Budha','Hindu'])->default('Islam');
            $table->string('noHp',13)->nullable();
            $table->string('email',100)->nullable();
            $table->string('asalSekolah',100)->nullable();
            $table->string('password')->default(Hash::make('12345678'));
            $table->tinyInteger('group_id')->nullable();
            $table->tinyInteger('ayah_id')->nullable();
            $table->tinyInteger('ibu_id')->nullable();
            $table->tinyInteger('wali_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
