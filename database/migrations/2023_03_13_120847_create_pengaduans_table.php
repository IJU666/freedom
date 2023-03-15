<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengaduansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengaduans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('masyarakat_id');
            $table->foreignId('petugas_id')->nullable();
            $table->foreignId('user_id')->nullable();
            $table->string('klasifikasi');
            $table->string('laporan');
            $table->date('tglkejadian');
            $table->string('alamat');
            $table->string('status');
            $table->string('lampiran')->nullable();
            $table->string('tanggapan')->nullable();
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
        Schema::dropIfExists('pengaduans');
    }
}
