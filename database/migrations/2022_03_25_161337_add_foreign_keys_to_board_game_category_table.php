<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToBoardGameCategoryTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('board_game_category', function(Blueprint $table)
		{
			$table->foreign('board_game_id', 'fk_board_game_category_board_games')->references('id')->on('board_games')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('category_id', 'fk_board_game_category_categories1')->references('id')->on('categories')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('board_game_category', function(Blueprint $table)
		{
			$table->dropForeign('fk_board_game_category_board_games');
			$table->dropForeign('fk_board_game_category_categories1');
		});
	}

}
