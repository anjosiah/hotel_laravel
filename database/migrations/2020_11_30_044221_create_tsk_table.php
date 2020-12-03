<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTskTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tsk', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lengkap');
            $table->date('tgl_checkin');
            $table->date('tgl_checkout');
            $table->string('tipe_ruang');
            $table->integer('total');
            $table->string('status');
            $table->timestamps('wkt_checkin');
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
        Schema::dropIfExists('tsk');
    }
}
