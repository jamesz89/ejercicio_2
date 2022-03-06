<?php

class CommonFeedingDevice extends FeedingDevice
{
  private $rationSize;
  private $maxAnimalWeightSupport;
  private $numberOfRations = 30;

  public function __construct($rationSize, $maxAnimalWeightSupport)
  {
    $this->rationSize = $rationSize;
    $this->maxAnimalWeightSupport = $maxAnimalWeightSupport;
  }

  public function canFeed(Animal $animal)
  {
    if ($this->numberOfRations > 0 and $animal->getWeight() < $this->maxAnimalWeightSupport and $animal->getHunger()) {
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
    }
  }

  protected function needsReloading()
  {
    return ($this->numberOfRations < 10);
  }

  public function reload()
  {
    if ($this->needsReloading()) {
      $this->numberOfRations = $this->numberOfRations + 30;
    }
  }
}
