<?php

set_time_limit(0);
date_default_timezone_set('UTC');

require __DIR__ . '/../vendor/autoload.php';

$sdk = new \APIFutbolAPI\APIFutbol('token');

try {
    $countries = $sdk->countries->getCountries()->getData();

    foreach ($countries->getCountries() as $country) {
        print_r([$country->getId()]);
    };
} catch (\Exception $e) {
    echo 'Something went wrong: ' . $e->getMessage() . "\n";
    exit(0);
}
