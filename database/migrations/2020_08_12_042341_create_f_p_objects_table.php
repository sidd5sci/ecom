<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFPObjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('f_p_objects', function (Blueprint $table) {
            $table->bigIncrements('object_id');
            $table->biginteger('object_type_id')->nullable();
            $table->biginteger('schema_id')->nullable();
            $table->string('name')->nullable();
            $table->text('description')->nullable();
            $table->biginteger('parent_id')->nullable();
            $table->integer('order_no')->nullable();
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
        Schema::dropIfExists('f_p_objects');
    }
}
