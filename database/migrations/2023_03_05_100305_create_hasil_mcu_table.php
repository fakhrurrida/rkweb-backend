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
        if (!Schema::hasTable('hasil_mcu')){
            Schema::create('hasil_mcu', function (Blueprint $table) {
                $table->increments('id');
                $table->string('nrp');
                $table->integer('hasil');
                $table->longText('mcu_csv_file');
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hasil_mcu');
    }
};
