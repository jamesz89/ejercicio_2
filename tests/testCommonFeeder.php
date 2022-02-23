<?php

include_once("../animals/Animal.php");
include_once("../animals/Mammal.php");
include_once("../animals/Cow.php");
include_once("../stations/Station.php");
include_once("../stations/FeedingStation.php");
include_once("../stations/CommonFeedingStation.php");

$feeder1 = new CommonFeedingStation(1000, 300000);

$cow1 = new Cow(350000);

$feeder1->feed($cow1);

while ($cow1->getWeight() > 175000){
  $cow1->walk();
}

$feeder1->feed($cow1);
