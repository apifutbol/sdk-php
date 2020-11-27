<?php

set_time_limit(0);
date_default_timezone_set('UTC');

require __DIR__ . '/../vendor/autoload.php';

$sdk = new \APIFutbolAPI\APIFutbol('token');

$countryId = '';

try {
    $competitions = $sdk->countries->getCompetitions($countryId)->getData();

    foreach ($competitions->getCompetitions() as $competition) {
        print_r([
            'id' => $competition->getId(),
            'name' => $competition->getName()
        ]);
    }
} catch (\Exception $e) {
    echo 'Something went wrong: ' . $e->getMessage() . "\n";
    exit(0);
}
