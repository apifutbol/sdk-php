<?php

set_time_limit(0);
date_default_timezone_set('UTC');

require __DIR__ . '/../vendor/autoload.php';

$sdk = new \APIFutbolAPI\APIFutbol('token');

$countryId = '';

try {
    $competitions = $sdk->countries->getCompetitions($countryId)->getData();
    $competitionId = $competitions->getCompetitions()[0]->getId();
    $table = $sdk->competition->getCompetitionTable($competitionId)->getData();

    $teams = [];
    foreach ($table->getTable() as $team) {
        $teams[] = [
            'id' => $team->getId(),
            'name' => $team->getName(),
            'rank' => $team->getRank(),
            'points' => $team->getPoints(),
            'won' => $team->getWon(),
            'drawn' => $team->getDrawn(),
            'lost' => $team->getLost(),
            'scored' => $team->getScored(),
            'conceded' => $team->getConceded(),
            'difference' => $team->getDifference()
        ];
    }

    print_r([
        'competition' => $table->getCompetition(),
        'table' => $teams
    ]);
} catch (\Exception $e) {
    echo 'Something went wrong: ' . $e->getMessage() . "\n";
    exit(0);
}
