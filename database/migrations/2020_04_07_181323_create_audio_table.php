<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAudioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('audio', function (Blueprint $table) {
            $table->id();
            $table->string('provider')->default('itsourspace');
            $table->string('url')->nullable();
            $table->string('title')->nullable();
            $table->string('artist')->nullable();
            $table->string('album')->nullable();
            $table->longText('embed_html')->nullable();
            $table->longText('embed_url')->nullable();
            $table->json('metadata')->nullable();
            $table->json('attribution')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('audio');
    }
}
