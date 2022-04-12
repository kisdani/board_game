<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToBoardGameTranslationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('board_game_translations', function(Blueprint $table)
		{
			$table->foreign('board_game_id', 'fk_board_game_translations_board_games1')->references('id')->on('board_games')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('board_game_translations', function(Blueprint $table)
		{
			$table->dropForeign('fk_board_game_translations_board_games1');
		});
	}

}
