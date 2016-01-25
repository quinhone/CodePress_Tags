<?php
/**
 * Created by PhpStorm.
 * User: LuisCarlos
 * Date: 22/01/2016
 * Time: 22:31
 */

namespace CodePress\CodeTag\Entities;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
	protected $table = 'codepress_tags';

	protected $fillable = [
		"name",
	];

	public function taggable()
	{
		return $this->morphTo();
	}


}