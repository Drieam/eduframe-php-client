<?php

require __DIR__ . '/vendor/autoload.php';

$educator_slug = 'programme-builder';
$access_token  = 'cd6395755d220afd2f11bdbe9d1b2dcf'; # testing program builder key

$connection = new \Eduframe\Connection();

//$connection->setAccessToken( $access_token );
$connection->setEducatorSlug( $educator_slug );
$connection->setTesting( true );


$client = new Eduframe\Client( $connection );

$data = [];
//$data = $client->courses()->all(['include' => 'plugin_data']);
//$data = $client->customers()->all(['include' => 'address']);
//$data = $client->customer_enrollmensts()->all();
//$data = $client->enrollments()->all();
//$data = $client->courses()->find( 434, [ 'include' => 'plugin_data.field' ] );
//$data = $client->planned_courses()->all(['include' => 'meetings']);
//$data = $client->teachers()->all();
//$data = $client->meetings()->all(['planned_course_id' ]);

//$data = $client->courses()->find( 240, [ 'include' => 'plugin_data.field' ] );
//$data = $client->categories()->all( [ 'include' => 'plugin_data.field' ] );
//$data = $client->courses()->all( [ 'include' => 'credit_definitions.type.category,course_tab_contents' ] );

header( "Content-Type: application/json" );

echo json_encode( $data );
