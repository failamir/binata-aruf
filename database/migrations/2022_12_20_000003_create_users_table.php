<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('email')->nullable()->unique();
            $table->string('password')->nullable();
            $table->string('name')->nullable();
            $table->string('nama_panggilan')->nullable();
            $table->datetime('email_verified_at')->nullable();
            $table->string('umur')->nullable();
            $table->boolean('approved')->default(0)->nullable();
            $table->string('remember_token')->nullable();
            $table->string('tempt_tanggal_lahir')->nullable();
            $table->string('alamat_asal')->nullable();
            $table->string('domisili')->nullable();
            $table->string('pekerjaan')->nullable();
            $table->string('status')->nullable();
            $table->string('suku')->nullable();
            $table->integer('tinggi_badan')->nullable();
            $table->integer('berat_badan')->nullable();
            $table->string('warna_kulit')->nullable();
            $table->string('nomor')->nullable();
            $table->string('no_wa')->nullable();
            $table->string('alamat_email')->nullable();
            $table->string('akun_instagram')->nullable();
            $table->string('akun_facebook')->nullable();
            $table->string('telegram')->nullable();
            $table->string('twiter')->nullable();
            $table->string('tik_tok')->nullable();
            $table->string('web')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
