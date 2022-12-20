<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactContactsTable extends Migration
{
    public function up()
    {
        Schema::create('contact_contacts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('contact_first_name')->nullable();
            $table->string('contact_name')->nullable();
            $table->date('tempat_tanggal_lahir')->nullable();
            $table->string('alamat_asal')->nullable();
            $table->string('domisili_saat_ini')->nullable();
            $table->string('pekerjaan')->nullable();
            $table->string('status')->nullable();
            $table->string('suku')->nullable();
            $table->integer('tinggi_badan')->nullable();
            $table->integer('berat_badan')->nullable();
            $table->string('warna_kulit')->nullable();
            $table->integer('nomor_handphone')->nullable();
            $table->integer('nomor_whats_app')->nullable();
            $table->string('alamat_email')->nullable();
            $table->string('akun_instagram')->nullable();
            $table->string('akun_facebook')->nullable();
            $table->string('akun_telegram')->nullable();
            $table->string('akun_twitter')->nullable();
            $table->string('akun_tiktok')->nullable();
            $table->string('web')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
