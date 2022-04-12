<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSalesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('sales', function(Blueprint $table)
		{
			$table->bigInteger('id', true);
			$table->dateTime('date');
			$table->integer('price')->unsigned();
			$table->timestamps();
			$table->softDeletes();
			$table->bigInteger('board_game_id')->unsigned()->index('fk_sales_board_games1_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('sales');
	}

}
