<?php

include_once("../devices/ServiceStation.php");
include_once("../devices/CommonFeedingDevice.php");
include_once("../devices/DrinkingDevice.php");
include_once("../devices/VaccinationDevice.php");
include_once("../animals/Cow.php");
include_once("../animals/Pig.php");
include_once("../animals/Chicken.php");


$cow1 = new Cow(300000);

$cow2 = new Cow(100000);

$chicken1 = new Chicken();

$pig1 = new Pig(100000);

$station1 = new ServiceStation(new CommonFeedingDevice(1000, 250000), new DrinkingDevice(), new VaccinationDevice());

$station1->serve($cow1);

$station1->serve($cow2);

$station1->serve($chicken1);

$station1->serve($pig1);

$station1->reload();