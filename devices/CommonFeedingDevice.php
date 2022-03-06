<?php

include_once("Device.php");

class CommonFeedingDevice extends Device
{
  private $rationSize;
  private $maxAnimalWeightSupport;
  private $numberOfRations = 30;

  public function __construct($rationSize, $maxAnimalWeightSupport)
  {
    $this->rationSize = $rationSize;
    $this->maxAnimalWeightSupport = $maxAnimalWeightSupport;
  }

  public function canServe(Animal $animal)
  {
    if ($this->numberOfRations > 0 and $animal->getWeight() < $this->maxAnimalWeightSupport and $animal->getHunger()) {
      return true;
    } else {
      return false;
    }
  }

  public function doFunction(Animal $animal)
  {
    if ($this->canServe($animal)) {
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
