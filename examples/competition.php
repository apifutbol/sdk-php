<?php

set_time_limit(0);
date_default_timezone_set('UTC');

require __DIR__ . '/../vendor/autoload.php';

$sdk = new \APIFutbolAPI\APIFutbol('token');

$competitionId = '';

try {
    $competition = $sdk->competition->getCompetition($competitionId)->getData()->getCompetition();

    print_r([
        'id' => $competition->getId(),
        'name' => $competition->getName(),
        'start' => $competition->getStart(),
        'end' => $competition->getEnd(),
        'table' => $competition->getTable(),
        'seasons' => $competition->getSeasons()
    ]);
} catch (\Exception $e) {
    echo 'Something went wrong: ' . $e->getMessage() . "\n";
    exit(0);
}
