<?php

set_time_limit(0);
date_default_timezone_set('UTC');

require __DIR__ . '/../vendor/autoload.php';

$sdk = new \APIFutbolAPI\APIFutbol('token');

$id = 'AAAAAAAA-BBBB-CCCC-EEEE-DDDDDDDDDDDD';

try {
	$competition = $sdk->competitions->getCompetition($id)->getData();

	print_r([$competition->getId()]);
} catch (\Exception $e) {
	echo 'Something went wrong: ' . $e->getMessage() . "\n";
	exit(0);
}
