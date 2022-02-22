<?php

class CommonFeedingStation extends FeedingStation
{
  private $rationSize;
  private $maxAnimalWeightSupport;
  private $numberOfRations = 30;

  public function __construct($rationSize, $maxAnimalWeightSupport)
  {
    $this->rationSize = $rationSize;
    $this->maxAnimalWeightSupport = $maxAnimalWeightSupport;
  }

  private function canFeed(Animal $animal)
  {
    if ($this->numberOfRations > 0 and $animal->getWeight() < $this->maxAnimalWeightSupport) {
      return true;
    } else {
      return false;
    }
  }

  public function feed(Animal $animal)
  {
    if ($this->canFeed($animal)) {
      $animal->eat($this->rationSize);
      $this->numberOfRations = $this->numberOfRations - 1;
      if ($this->numberOfRations < 10) {
        $this->needsReload = true;
      }
    }
  }

  public function reload()
  {
    if ($this->needsReload) {
      $this->numberOfRations = 30;
    }
  }
}
