<?php
use MongoDB\Client;

require 'vendor/autoload.php';

$client = new Client("mongodb://localhost:27017");

$collection = $client->myDb->users;

$result = $collection->insertOne( [ 'email' => 'remy.girodon@telecom-st-etienne.fr', 'age' => 41 ] );

echo "Inserted with Object ID '{$result->getInsertedId()}'";

$result = $collection->find();

foreach ($result as $entry) {
    echo $entry['_id'].': '.$entry['email'].', '.$entry['age']."<br>";
}
