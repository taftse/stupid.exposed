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

			// These columns are needed for Baum's Nested Set implementation to work.
			// Column names may be changed, but they *must* all exist and be modified
			// in the model.
			// Take a look at the model scaffold comments for details.
			// We add indexes on parent_id, lft, rgt columns by default.
			$table->increments('id');
			$table->string('uid');

			// Baum Required fields
			$table->integer('parent_id')->nullable()->index();
			$table->integer('lft')->nullable()->index();
			$table->integer('rgt')->nullable()->index();
			$table->integer('depth')->nullable();


			$table->integer('commentable_id')
				->unsigned()
				->nullable()
				->index();
			$table->string('commentable_type')
				->nullable()
				->index();
			$table->integer('user_id')->index();

			$table->string('title')->nullable();
			$table->text('body');

            $table->integer('rating');
            $table->boolean('flagged')->default(0);
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
