<?php

require "../ModelCrudRepository.php";
require "../Entities/plan.php";
$conn = new PDO("mysql:host=localhost;dbname=gym", 'root', "");

$plan= new plan();
$plan->setPlan_id("10");
$plan->setSport_num("9");
$plan->setPrice("900");
$plan->setDuration("356");

$PlanModel = new ModelCrudRepository($conn,plan::class);
$PlanModel->save($plan);


?>
