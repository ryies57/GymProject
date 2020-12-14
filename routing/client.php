<?php

require "../ModelCrudRepository.php";
require "../Entities/client.php";
$conn = new PDO("mysql:host=localhost;dbname=gym", 'root', "");

$client = new client();
$client->setNational_id("5165165");
$client->setPhone_number("0100200300");
$client->setEmail("test@gmail.com");
$client->setGender("male");
$client->setInbody("weight=loll , muscle=lol , tall=lol");
$client->setName("joo");
$client->setDate_of_sub("09-09-2009");
$client->setDate_of_birth("01-01-2001");
$client->setDate_of_register("08-08-2009");

$ClientModel = new ModelCrudRepository($conn,client::class);
$ClientModel->save($client);


?>