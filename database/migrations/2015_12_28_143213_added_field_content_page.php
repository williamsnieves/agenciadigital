<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddedFieldContentPage extends Migration {

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
			$table->string('speciatitle')->nullable();
			$table->string('speciatitle_en')->nullable();
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
