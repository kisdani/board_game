<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBoardGamesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('board_games', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->string('publisher', 191);
			$table->integer('game_time')->unsigned()->comment('minutes');
			$table->integer('min_age')->unsigned();
			$table->integer('min_player')->unsigned();
			$table->integer('max_player')->unsigned();
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
		Schema::drop('board_games');
	}

}
