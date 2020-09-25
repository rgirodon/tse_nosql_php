<?php
use Predis\Client;

require 'vendor/autoload.php';

$client = new Client();

$firstName = $client->hget('fise3:prof:1', 'firstName');

$lastName = $client->hget('fise3:prof:1', 'lastName');

echo $firstName.' '.$lastName;

