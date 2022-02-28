<?php

abstract class FeedingDevice extends Device
{ 
  
  abstract protected function canFeed(Animal $animal);

  abstract function feed(Animal $animal);

}