<?php

namespace Eduframe;

use Eduframe\Resources\Address;
use Eduframe\Resources\Course;
use Eduframe\Resources\Customer;
use Eduframe\Resources\CustomerEnrollment;
use Eduframe\Resources\Enrollment;
use Eduframe\Resources\Meeting;
use Eduframe\Resources\PlannedCourse;
use Eduframe\Resources\Teacher;


/**
 * Class Eduframe
 * @package Eduframe
 */
class Eduframe
{
    /**
     * The HTTP connection
     *
     * @var \Eduframe\Connection
     */
    protected $connection;

    /**
     * Eduframe constructor.
     * @param \Eduframe\Connection $connection
     */
    public function __construct(Connection $connection)
    {
        $this->connection = $connection;
    }

    /**
     * @param array $attributes
     * @return \Eduframe\Resources\Address
     */
    public function addresses($attributes = [])
    {
        return new Address($this->connection, $attributes);
    }

    /**
     * @param array $attributes
     * @return \Eduframe\Resources\Course
     */
    public function courses($attributes = [])
    {
        return new Course($this->connection, $attributes);
    }

    /**
     * @param array $attributes
     * @return \Eduframe\Resources\Customer
     */
    public function customers($attributes = [])
    {
        return new Customer($this->connection, $attributes);
    }

    /**
     * @param array $attributes
     * @return \Eduframe\Resources\CustomerEnrollment
     */
    public function customer_enrollment($attributes = [])
    {
        return new CustomerEnrollment($this->connection, $attributes);
    }

    /**
     * @param array $attributes
     * @return \Eduframe\Resources\Enrollment
     */
    public function enrollments($attributes = [])
    {
        return new Enrollment($this->connection, $attributes);
    }

    /**
     * @param array $attributes
     * @return \Eduframe\Resources\Meeting
     */
    public function meetings($attributes = [])
    {
        return new Meeting($this->connection, $attributes);
    }

    /**
     * @param array $attributes
     * @return \Eduframe\Resources\PlannedCourse
     */
    public function planned_courses($attributes = [])
    {
        return new PlannedCourse($this->connection, $attributes);
    }

    /**
     * @param array $attributes
     * @return \Eduframe\Resources\Teacher
     */
    public function teachers($attributes = [])
    {
        return new Teacher($this->connection, $attributes);
    }


    /**
     * @return \Eduframe\Connection
     */
    public function getConnection()
    {
        return $this->connection;
    }
}
