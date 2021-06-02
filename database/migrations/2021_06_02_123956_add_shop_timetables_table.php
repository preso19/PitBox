<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddShopTimetablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shop_timetables', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('shop_id');
            $table->foreign('shop_id')
                ->references('id')
                ->on('shops')
                ->onDelete('cascade');

            $table->boolean('monday')->default(false);
            $table->boolean('tuesday')->default(false);
            $table->boolean('wednesday')->default(false);
            $table->boolean('thursday')->default(false);
            $table->boolean('friday')->default(false);
            $table->boolean('sunday')->default(false);
            $table->time('monday_start')->nullable();
            $table->time('monday_end')->nullable();
            $table->time('tuesday_start')->nullable();
            $table->time('tuesday_end')->nullable();
            $table->time('wednesday_start')->nullable();
            $table->time('wednesday_end')->nullable();
            $table->time('thursday_start')->nullable();
            $table->time('thursday_end')->nullable();
            $table->time('friday_start')->nullable();
            $table->time('friday_end')->nullable();
            $table->time('sunday_start')->nullable();
            $table->time('sunday_end')->nullable();
            $table->json('dates_off')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shop_timetables');
    }
}
