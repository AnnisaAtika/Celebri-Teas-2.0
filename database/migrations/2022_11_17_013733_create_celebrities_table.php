<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('celebrities', function (Blueprint $table) {
            $table->id();
            $table->string('star');

            $table->string('title1');
            $table->text('body1');
            $table->string('attachment1')->nullable();
            $table->string('attachment2')->nullable();

            $table->string('title2');
            $table->text('body2');
            $table->string('attachment3')->nullable();
            $table->string('attachment4')->nullable();

            $table->string('title3');
            $table->text('body3');
            $table->string('attachment5')->nullable();

            $table->string('title4');
            $table->text('body4');

            $table->foreignId('user_id')->constrained('users')->nullable();
             
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
        Schema::dropIfExists('celebrities');
    }
};
