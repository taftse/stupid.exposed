<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

class CreateRatingsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ratings',function(Blueprint $table){
            $table->increments('id');
			$table->morphs('rateable');
            $table->integer('user_id')->index();
            $table->integer('rating');
            $table->timestamps();
            $table->softDeletes();
			$table->index('rateable_id');
			$table->index('rateable_type');
        });
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('ratings');
	}

}
