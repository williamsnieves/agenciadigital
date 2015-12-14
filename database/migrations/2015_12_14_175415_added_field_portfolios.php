<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddedFieldPortfolios extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('portfolios', function(Blueprint $table)
		{
			//
			$table->integer('categories_id')->unsigned()->nullable()->index();
            $table->foreign('categories_id')->references('id')->on('categories')->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('portfolios', function(Blueprint $table)
		{
			//
		});
	}

}
