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
        Schema::create('conference_grantstatus', function (Blueprint $table) {
            $table->unsignedBigInteger('conference_id');
            $table->unsignedBigInteger('grantstatus_id');


            $table->foreign('conference_id')->references('id')
                ->on('conferences')
                ->onDelete('cascade');

            $table->foreign('grantstatus_id')->references('id')
                ->on('grantstatuses')
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
        Schema::dropIfExists('conference_grant');
    }
};
