<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('elis_stats', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->string('nrp');
            $table->string('jabatan');
            $table->integer('jumlah_masuk');
            $table->integer('jumlah_offsite_offduty');
            $table->integer('abcg_plan');
            $table->integer('abcg_act');
            $table->integer('inspeksi_plan');
            $table->integer('inspeksi_act');
            $table->integer('sidak_plan');
            $table->integer('sidak_act');
            $table->integer('observasi_plan');
            $table->integer('observasi_act');
            $table->integer('pd_plan');
            $table->integer('pd_act');
            $table->integer('pc_plan');
            $table->integer('pc_act');
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
        Schema::dropIfExists('elis_stats');
    }
};
