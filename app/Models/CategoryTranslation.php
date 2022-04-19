<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CategoryTranslation
 * 
 * @property int $id
 * @property int $category_id
 * @property string $locale
 * @property string $name
 * @property string $description
 * 
 * @property Category $category
 *
 * @package App\Models
 */
class CategoryTranslation extends Model
{
	protected $table = 'category_translations';
	public $timestamps = false;

	protected $casts = [
		'category_id' => 'int'
	];

	protected $fillable = [
		'category_id',
		'locale',
		'name',
		'description'
	];

	public function category()
	{
		return $this->belongsTo(Category::class);
	}
}
