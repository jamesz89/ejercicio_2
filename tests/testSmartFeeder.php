<?php

include_once("../animals/Animal.php");
include_once("../animals/Mammal.php");
include_once("../animals/Cow.php");
include_once("../stations/Station.php");
include_once("../stations/FeedingStation.php");
include_once("../stations/SmartFeedingStation.php");

$feeder1 = new SmartFeedingStation(100000);

$cow1 = new Cow(250000);

$feeder1->feed($cow1);