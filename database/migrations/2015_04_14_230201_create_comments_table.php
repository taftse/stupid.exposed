<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

class CreateCommentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('comments',function(Blueprint $table){
            $table->increments('id');
            $table->string('slug');
            $table->integer('post_id');
            $table->integer('user_id');
            $table->integer('parent_comment_id');
            $table->integer('rating');
            $table->text('comment');
            $table->boolean('flagged');
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
		Schema::drop('comments');
	}

}
