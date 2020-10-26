<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->nullable();
            $table->string('gender')->nullable();
            $table->string('casual')->nullable();
            $table->string('formal')->nullable();
            $table->string('loungewear')->nullable();
            $table->string('sports')->nullable();
            $table->string('leisure')->nullable();
            $table->string('genre')->nullable();
            $table->string('category');
            $table->string('brand')->nullable();
            $table->integer('quantity')->nullable();
            $table->integer('cloth_size')->nullable();
            $table->integer('show_size')->nullable();
            $table->integer('price')->nullable();
            $table->integer('buy_month')->nullable();
            $table->integer('buy_year')->nullable();
            $table->integer('sunny')->nullable();
            $table->integer('cloudy')->nullable();
            $table->integer('snowy')->nullable();
            $table->integer('rainy')->nullable();
            $table->integer('fall')->nullable();
            $table->integer('summer')->nullable();
            $table->integer('spring')->nullable();
            $table->integer('winter')->nullable();
            $table->integer('favorite')->nullable();
            $table->integer('release')->nullable();
            $table->string('name')->nullable();
            $table->string('dexcription')->nullable();
            $table->string('img_name')->nullable();
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
        Schema::dropIfExists('items');
    }
}
