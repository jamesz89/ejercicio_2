<?php

include_once("../stations/ServiceStation.php");
include_once("../stations/CommonFeedingDevice.php");
include_once("../stations/DrinkingDevice.php");
include_once("../stations/VaccinationDevice.php");
include_once("../animals/Cow.php");
include_once("../animals/Pig.php");
include_once("../animals/Chicken.php");


$cow1 = new Cow(300000);

$cow2 = new Cow(100000);

$station1 = new ServiceStation(new CommonFeedingDevice(1000, 250000), new DrinkingDevice(), new VaccinationDevice());

$station1->canServe($cow1);

$station1->canServe($cow2);