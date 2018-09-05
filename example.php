<?php

require __DIR__ . '/vendor/autoload.php';

$connection = new \Eduframe\Connection();
$connection->setTesting(true);

$connection->setAccessToken('9545191cecf871e2a6d9487b4210c69e');
$connection->setEducatorSlug('drieam-test');

try {
    $connection->connect();
} catch (\Exception $e) {
    throw new Exception('Could not connect to Eduframe: ' . $e->getMessage());
}

$eduframe = new \Eduframe\Eduframe($connection);

//$courses = $eduframe->course()->all();
//$customers = $eduframe->customer()->all(['include' => 'address']);
//$customer_Enrollments = $eduframe->customer_enrollment()->all();
//$enrollments = $eduframe->enrollment()->all();
//$planned_Courses = $eduframe->planned_course()->all(['include' => 'meetings']);
$teachers = $eduframe->teacher()->all();


header("Content-Type: application/json");

echo json_encode($teachers);
