<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class BoardGameCategory
 * 
 * @property int $id
 * @property int $board_game_id
 * @property int $category_id
 * 
 * @property BoardGame $board_game
 * @property Category $category
 *
 * @package App\Models
 */
class BoardGameCategory extends Model
{
	protected $table = 'board_game_category';
	public $timestamps = false;

	protected $casts = [
		'board_game_id' => 'int',
		'category_id' => 'int'
	];

	protected $fillable = [
		'board_game_id',
		'category_id'
	];

	public function board_game()
	{
		return $this->belongsTo(BoardGame::class);
	}

	public function category()
	{
		return $this->belongsTo(Category::class);
	}
}
