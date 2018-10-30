<?php

namespace Eduframe\Resources;

use Eduframe\Resource;
use Eduframe\Traits\FindAll;
use Eduframe\Traits\FindOne;


class Teacher extends Resource {

	use FindAll, FindOne;

	/**
	 * @var array
	 */
	protected $fillable = [
		'id',
		'teacher_description',
		'avatar_url',
		'slug',
		'updated_at',
		'created_at'
	];

	/**
	 * @var string
	 */
	protected $endpoint = 'teachers';

	/**
	 * @var string
	 */
	protected $namespace = 'teacher';

	/**
	 * @var array
	 */
	protected $multipleNestedEntities = [
		'plugin_data' => [
			'entity' => Data::class,
			'type'   => self::NESTING_TYPE_NESTED_OBJECTS,
		],
	];
}