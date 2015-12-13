<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddedFieldConstraint extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('content_pages', function(Blueprint $table)
		{
			//
			$table->integer('section_id')->unsigned()->nullable()->index();
            $table->foreign('section_id')->references('id')->on('sections')->onDelete('cascade');
			$table->integer('gallery_id')->unsigned()->nullable()->index();
            $table->foreign('gallery_id')->references('id')->on('galleries')->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('content_pages', function(Blueprint $table)
		{
			//
		});
	}

}
