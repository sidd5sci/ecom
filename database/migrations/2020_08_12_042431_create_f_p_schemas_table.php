<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFPSchemasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('f_p_schemas', function (Blueprint $table) {
            $table->bigIncrements('schema_id');
            $table->biginteger('parent_id')->nullable();
            $table->string('name')->nullable();
            $table->string('description')->nullable();
            $table->text('flags')->nullable();
            $table->text('access_type')->nullable();
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
        Schema::dropIfExists('f_p_schemas');
    }
}
