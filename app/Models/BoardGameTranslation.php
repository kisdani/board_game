<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class BoardGameTranslation
 * 
 * @property int $id
 * @property int $board_game_id
 * @property string $locale
 * @property string $name
 * @property string $description
 * 
 * @property BoardGame $board_game
 *
 * @package App\Models
 */
class BoardGameTranslation extends Model
{
	protected $table = 'board_game_translations';
	public $timestamps = false;

	protected $casts = [
		'board_game_id' => 'int'
	];

	protected $fillable = [
		'board_game_id',
		'locale',
		'name',
		'description'
	];

	public function board_game()
	{
		return $this->belongsTo(BoardGame::class);
	}
}
