<?php

include_once("../animals/Animal.php");
include_once("../animals/Mammal.php");
include_once("../animals/Cow.php");
include_once("../stations/Device.php");
include_once("../stations/FeedingDevice.php");
include_once("../stations/CommonFeedingDevice.php");

$feeder1 = new CommonFeedingDevice(1000, 300000);

$cow1 = new Cow(350000);

$feeder1->feed($cow1);

while ($cow1->getWeight() > 175000){
  $cow1->walk();
}

$feeder1->feed($cow1);
