<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Sale
 *
 * @property int $id
 * @property Carbon $date
 * @property int $price
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * @property int $board_game_id
 *
 * @property BoardGame $board_game
 *
 * @package App\Models
 */
class Sale extends Model
{
	use SoftDeletes;
	protected $table = 'sales';

	protected $dates = [
		'date'
	];

	protected $fillable = [
		'date',
		'price',
		'board_game_id'
	];

	public function board_game()
	{
		return $this->belongsTo(BoardGame::class);
	}
}
