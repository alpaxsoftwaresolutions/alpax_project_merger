<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAuthenticationItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('authentication_items', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('abs_id');
            $table->integer('role')->default(1);
            $table->integer('isVisible');
            $table->integer('isReadable');
            $table->integer('isWritable');
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
        Schema::dropIfExists('authentication_items');
    }
}
