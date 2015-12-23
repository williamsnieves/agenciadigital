<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddedFieldsToContentPage extends Migration {

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
			$table->string('title_en')->nullable();
			$table->string('subtitle_en')->nullable();
			$table->string('summary_en')->nullable();
			$table->string('content_en')->nullable();	
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
