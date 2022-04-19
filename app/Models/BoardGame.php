<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


/**
 * Class BoardGame
 *
 * @property int $id
 * @property string $publisher
 * @property int $game_time
 * @property int $min_age
 * @property int $min_player
 * @property int $max_player
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 *
 * @property Collection|Category[] $categories
 * @property Collection|BoardGameTranslation[] $board_game_translations
 * @property Collection|Sale[] $sales
 *
 * @package App\Models
 */
class BoardGame extends Model
{
	use SoftDeletes;
    use Translatable;

    public $translatedAttributes = ['name', 'description'];

	protected $table = 'board_games';

	protected $casts = [
		'game_time' => 'int',
		'min_age' => 'int',
		'min_player' => 'int',
		'max_player' => 'int'
	];

	protected $fillable = [
		'publisher',
		'game_time',
		'min_age',
		'min_player',
		'max_player'
	];

	public function categories()
	{
		return $this->belongsToMany(Category::class)
					->withPivot('id');
	}

	public function board_game_translations()
	{
		return $this->hasMany(BoardGameTranslation::class);
	}

	public function sales()
	{
		return $this->hasMany(Sale::class);
	}
}
