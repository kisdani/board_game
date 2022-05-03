<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Category
 *
 * @property int $id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 *
 * @property Collection|BoardGame[] $board_games
 * @property Collection|CategoryTranslation[] $category_translations
 *
 * @package App\Models
 */
class Category extends Model
{
	use SoftDeletes;
    use Translatable;

    public $translatedAttributes = ['name', 'description', 'seo_name'];
	protected $table = 'categories';

	public function board_games()
	{
		return $this->belongsToMany(BoardGame::class)
					->withPivot('id');
	}

	public function category_translations()
	{
		return $this->hasMany(CategoryTranslation::class);
	}
}
