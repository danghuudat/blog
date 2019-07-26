<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLichMosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lich_mos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('stt');
            $table->date('ngay');
            $table->text('tenbenhnhan');
            $table->integer('tuoi');
            $table->text('khoa');
            $table->text('chandoan');
            $table->text('ppphauthuat');
            $table->text('bsphauthuat');
            $table->text('ppvocamvagiamdau');
            $table->text('bsgayme');
            $table->time('giomodukien');
            $table->text('trangthaicuabenhnhan');

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
        Schema::dropIfExists('lich_mos');
    }
}
