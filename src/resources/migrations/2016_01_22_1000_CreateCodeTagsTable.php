<?php

/**
 * Created by PhpStorm.
 * User: LuisCarlos
 * Date: 22/01/2016
 * Time: 22:37
 */

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCodeTagsTable
{
	public function up()
	{
		Schema::create('codepress_tags', function(Blueprint $table){
			$table->increments('id');
			$table->string('name');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('codepress_tags');
	}
}