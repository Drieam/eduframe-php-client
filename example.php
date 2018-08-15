<?php

require __DIR__ . '/vendor/autoload.php';

$connection = new \Eduframe\Connection();
$connection->setTesting(true);

$connection->setAccessToken('f00c7fadeab67e69bc6e0f0dc0d1edf8');
$connection->setEducatorSlug('educator-with-canvas');

try {
    $connection->connect();
} catch (\Exception $e) {
    throw new Exception('Could not connect to Eduframe: ' . $e->getMessage());
}

$eduframe = new \Eduframe\Eduframe($connection);

$customers = $eduframe->customer()->all(['include' => 'address']);

header("Content-Type: application/json");

echo json_encode($customers);
