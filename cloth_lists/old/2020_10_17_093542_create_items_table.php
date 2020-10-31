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
            $table->integer('user_id');
            $table->string('img_name')->nullable();
            $table->integer('quantity')->nullable();
            $table->string('brand')->nullable();
            $table->string('gender')->nullable();
            $table->integer('casual')->nullable();
            $table->integer('suit')->nullable();
            $table->integer('swimsuit')->nullable();
            $table->integer('sports')->nullable();
            $table->integer('leisure')->nullable();
            $table->integer('tops')->nullable();
            $table->integer('jacket')->nullable();
            $table->integer('vest')->nullable();
            $table->integer('pants')->nullable();
            $table->integer('socks')->nullable();
            $table->integer('necktie')->nullable();
            $table->integer('gloves')->nullable();
            $table->integer('swim_wear')->nullable();
            $table->integer('swim_cap')->nullable();
            $table->integer('swim_goggles')->nullable();
            $table->integer('shoes')->nullable();
            $table->integer('under_wear')->nullable();
            $table->integer('bag')->nullable();
            $table->integer('hat')->nullable();
            $table->integer('watch')->nullable();
            $table->integer('accessory')->nullable();
            $table->integer('item')->nullable();
            $table->integer('other')->nullable();
            $table->string('shoe_size')->nullable();
            $table->string('cloth_size')->nullable();
            $table->integer('favorite')->nullable();
            $table->integer('release')->nullable();
            $table->integer('price')->nullable();
            $table->integer('spring')->nullable();
            $table->integer('summer')->nullable();
            $table->integer('fall')->nullable();
            $table->integer('winter')->nullable();
            $table->integer('sunny')->nullable();
            $table->integer('cloudy')->nullable();
            $table->integer('rainy')->nullable();
            $table->integer('snowy')->nullable();
            $table->integer('buy_year')->nullable();
            $table->integer('buy_month')->nullable();
            $table->string('name');
            $table->string('description')->nullable();
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
