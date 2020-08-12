<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFPPramsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('f_p_params', function (Blueprint $table) {
            $table->bigIncrements('param_id');
            $table->biginteger('attr_id')->nullable();
            $table->biginteger('object_id')->nullable();
            $table->text('value')->nullable();
            $table->integer('show_order')->nullable();
            $table->integer('priority')->nullable();
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
        Schema::dropIfExists('f_p_prams');
    }
}
