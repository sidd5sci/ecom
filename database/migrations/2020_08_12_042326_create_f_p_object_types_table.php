<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFPObjectTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('f_p_object_types', function (Blueprint $table) {
            $table->bigIncrements('object_type_id');
            $table->biginteger('parent_id')->nullable();
            $table->string('name')->nullable();
            $table->text('description')->nullable();
            $table->string('alias')->nullable();
            $table->text('flags')->nullable();
            $table->text('properties')->nullable();
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
        Schema::dropIfExists('f_p_object_types');
    }
}
