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
        Schema::create('conference_user', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('conference_id');

            $table->primary(['user_id', 'conference_id']);

            $table->set('status',['requested','granted', 'denied'])->nullable();

            $table->foreign('user_id')->references('id')
                ->on('users')
                ->onDelete('cascade');

            $table->foreign('conference_id')->references('id')
                ->on('conferences')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('conference_user');
    }
};
