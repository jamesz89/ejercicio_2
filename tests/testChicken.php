<?php

include_once("../animals/Animal.php");
include_once("../animals/Mammal.php");
include_once("../animals/Chicken.php");

$aChicken = new Chicken();

$aChicken->eat(5000);

$aChicken->getWeight();