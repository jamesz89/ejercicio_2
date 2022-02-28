<?php

abstract class FeedingDevice
{
  abstract function reload();
  
  abstract function feed(Animal $animal);
}