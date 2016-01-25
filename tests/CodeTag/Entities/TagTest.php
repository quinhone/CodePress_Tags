<?php
/**
 * Created by PhpStorm.
 * User: LuisCarlos
 * Date: 18/12/2015
 * Time: 19:29
 */

namespace CodePress\CodeTag\Tests\Entities;


use CodePress\CodeTag\Entities\Tag;
use CodePress\CodeTag\Tests\AbstractTestCase;

class TagTest extends AbstractTestCase
{
	public function setUp()
	{
		parent::setUp();
		$this->migrate();
	}

	public function test_check_if_a_tag_can_be_persisted()
	{

		$tag = Tag::create(['name' => 'Tag Test']);
		$this->assertEquals('Tag Test', $tag->name);

		$tag = Tag::all()->first();
		$this->assertEquals('Tag Test', $tag->name);

	}

	/*public function tearDown()
	{
		parent::tearDown();
	}*/
}