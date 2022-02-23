<?php

include_once("../animals/Animal.php");
include_once("../animals/Mammal.php");
include_once("../animals/Pig.php");

$aPig = new Pig(200000);

$aPig->eat(500);