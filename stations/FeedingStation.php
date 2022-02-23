<?php

abstract class FeedingStation extends Station
{
  abstract function reload();
  
  abstract function feed(Animal $animal);
}