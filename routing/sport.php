<?php

require "../ModelCrudRepository.php";
require "../Entities/sport.php";
$conn = new PDO("mysql:host=localhost;dbname=gym", 'root', "");

$sport= new sport();
$sport->setSport_num("1");
$sport->setSport_type("test");
$sport->setPrice("50");
$sport->setMax_trainees("10");
$sport->setAvailable_seats("10");
$sport->setTrainnig_days("11");

$SportModel = new ModelCrudRepository($conn,sport::class);
$SportModel->save($sport);


?>