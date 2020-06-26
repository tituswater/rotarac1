<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdrrsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adrrs', function (Blueprint $table) {
            $table->id('adrr_id');
            $table->string('adrr_email');
            $table->string('adrr_zone');
            $table->string('adrr_tenure_start');
            $table->string('adrr_tenure_end');
            $table->string('_token');
            $table->integer('status')->default(0);
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
        Schema::dropIfExists('adrrs');
    }
}
