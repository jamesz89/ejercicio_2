<?php

abstract class FeedingDevice extends Device
{ 
  
  abstract public function canFeed(Animal $animal);

  abstract public function feed(Animal $animal);

}