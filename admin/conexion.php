<?php
$client = new MongoDB\Client(
    'mongodb+srv://pastolac:chavela29@cluster0.hqbt1.mongodb.net/pastolac?authSource=admin&replicaSet=atlas-kpd1h8-shard-0&w=majority&readPreference=primary&appname=MongoDB%20Compass&retryWrites=true&ssl=true'
);
$db = $client->test;
?>