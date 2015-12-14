<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePortfoliosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('portfolios', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('url_thumb')->nullable();
			$table->string('url_main_image')->nullable();
			$table->string('external_link')->nullable();			
			$table->string('url_facebook')->nullable();
			$table->string('url_twitter')->nullable();
			$table->string('url_instagram')->nullable();
			$table->string('url_linkedin')->nullable();
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
		Schema::drop('portfolios');
	}

}
