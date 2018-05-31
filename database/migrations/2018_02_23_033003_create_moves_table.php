<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMovesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('moves', function (Blueprint $table) {
            $table->increments('id');
            $table->string('customer_id')->nullable();
            $table->string('hardware_id')->nullable();
            $table->string('user_id')->nullable();
            $table->string('quantity')->nullable();
            $table->string('supervisor')->nullable();
            $table->string('entry_comment')->nullable();
            $table->string('comment_close')->nullable();
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
        Schema::dropIfExists('moves');
    }
}
