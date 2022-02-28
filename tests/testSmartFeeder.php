<?php

include_once("../animals/Animal.php");
include_once("../animals/Mammal.php");
include_once("../animals/Cow.php");
include_once("../stations/Device.php");
include_once("../stations/FeedingDevice.php");
include_once("../stations/SmartFeedingDevice.php");

$feeder1 = new SmartFeedingDevice(100000);

$cow1 = new Cow(250000);

$feeder1->feed($cow1);