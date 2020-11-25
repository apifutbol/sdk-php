<?php

set_time_limit(0);
date_default_timezone_set('UTC');

require __DIR__ . '/../vendor/autoload.php';

$sdk = new \APIFutbolAPI\APIFutbol('token');

try {
    $countries = $sdk->countries->getCountries();
    print_r($countries);
} catch (\Exception $e) {
    echo 'Something went wrong: ' . $e->getMessage() . "\n";
    exit(0);
}
