<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToCategoryTranslationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('category_translations', function(Blueprint $table)
		{
			$table->foreign('category_id', 'fk_category_translations_categories1')->references('id')->on('categories')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('category_translations', function(Blueprint $table)
		{
			$table->dropForeign('fk_category_translations_categories1');
		});
	}

}
