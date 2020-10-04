<?php
use MongoDB\Client;

require 'vendor/autoload.php';

$client = new Client("mongodb://localhost:27017");

$collection = $client->mydb->profs;

$result = $collection->insertOne( [ 'email' => 'remy.girodon@telecom-st-etienne.fr', 'age' => 42 ] );

echo "Inserted with Object ID '{$result->getInsertedId()}'";

echo "<ul>";

$result = $collection->find();

foreach ($result as $entry) {
    echo "<li>".$entry['_id'].': '.$entry['email'].', '.$entry['age']."</li>";
}

echo "</ul";
