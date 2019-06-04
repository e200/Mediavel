<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMediaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('media', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->index()->nullable();
            $table->string('path');
            $table->json('meta')->nullable();
            $table->string('mime_type')->nullable();

            $table->unsignedInteger('mediable_id')->nullable();
            $table->string('mediable_type')->nullable();

            $table->unsignedInteger('media_collection_id')->nullable();
            $table
                ->foreign('media_collection_id')
                ->references('id')
                ->on('media_collections');

            $table->unsignedInteger('user_id')->nullable();

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
        Schema::dropIfExists('media');
    }
}