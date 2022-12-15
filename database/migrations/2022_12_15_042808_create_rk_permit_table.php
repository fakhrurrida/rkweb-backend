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
        if (!Schema::hasTable('rk_permit')){
            Schema::create('rk_permit', function (Blueprint $table) {
                $table->id();
                $table->string('nama', 100);
                $table->string('nrp', 100);
                $table->string('sub_kontraktor', 100);
                $table->string('jabatan', 100);
                $table->string('pas_foto', 100);
                $table->string('kompetensi', 100);
                $table->string('status', 100);
                $table->date('masa_berlaku', 100);
                $table->string('aktivitas_terakhir', 100);
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
        Schema::dropIfExists('rk_permit');
    }
};
