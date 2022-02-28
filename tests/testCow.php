<?php

include_once("../animals/Animal.php");
include_once("../animals/Mammal.php");
include_once("../animals/Cow.php");

$aCow = new Cow(300000);

$aCow->eat(2000);

$aCow->drink();

$aCow->getHunger();

$aCow->walk();