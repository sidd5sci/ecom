<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFPAttributesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('f_p_attributes', function (Blueprint $table) {
            $table->bigIncrements('attribute_id');
            $table->biginteger('attr_type_id')->nullable(0);
            $table->biginteger('schema_id')->nullable(0);
            $table->string('name')->nullable();
            $table->string('description')->nullable();
            $table->text('access_type')->nullable();
            $table->integer('is_multiple')->nullable(0);
            $table->integer('show_order')->nullable();
            $table->text('flags')->nullable();
            $table->text('properties')->nullable();
            $table->text('params')->nullable();
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
        Schema::dropIfExists('f_p_attributes');
    }
}
