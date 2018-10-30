<?php

namespace Eduframe\Resources;

use Eduframe\Resource;
use Eduframe\Resources\Plugins\Data;
use Eduframe\Traits\FindAll;
use Eduframe\Traits\FindOne;
use Eduframe\Traits\HasPluginData;

class PlannedCourse extends Resource {

	use FindAll, FindOne, HasPluginData;

	/**
	 * @var array
	 */
	protected $fillable = [
		'id',
		'type',
		'course_id',
		'start_date',
		'end_date',
		'status',
		'duration_in_days',
		'duration_in_hours',
		'availability_state',
		'cost_scheme',
		'cost',
		'meetings',
		'teachers',
		'updated_at',
		'created_at',
		'plugin_data'
	];

	/**
	 * @var string
	 */
	protected $endpoint = 'planned_courses';

	/**
	 * @var string
	 */
	protected $namespace = 'planned_course';

	/**
	 * @var array
	 */
	protected $multipleNestedEntities = [
		'meetings'    => [
			'entity' => Meeting::class,
			'type'   => self::NESTING_TYPE_ARRAY_OF_OBJECTS,
		],
		'teachers'    => [
			'entity' => Teacher::class,
			'type'   => self::NESTING_TYPE_ARRAY_OF_OBJECTS,
		],
		'plugin_data' => [
			'entity' => Data::class,
			'type'   => self::NESTING_TYPE_NESTED_OBJECTS,
		]
	];
}
