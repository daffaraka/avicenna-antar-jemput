<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenjemputanHariansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penjemputan_harians', function (Blueprint $table) {
            $table->id();
            $table->foreignId('siswa_id');
            $table->foreignId('pic_id');
            $table->string('nama_penjemput')->nullable();

            $table->string('type_ojol')->nullable();
            $table->string('nama_ojol')->nullable();
            $table->string('plat_ojol')->nullable();

            $table->dateTime('waktu_dijemput')->nullable();
            $table->dateTime('confirm_pic_at')->nullable();
            $table->dateTime('confirm_satpam_at')->nullable();
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
        Schema::dropIfExists('penjemputan_siswas');
    }
}
