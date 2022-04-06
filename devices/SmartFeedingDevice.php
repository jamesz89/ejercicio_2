<?php

include_once("Device.php");

class SmartFeedingDevice extends Device
{
  private $maxFoodCapacity;
  private $currentFoodQuantity;

  public function __construct($maxFoodCapacity)
  {
    $this->maxFoodCapacity = $maxFoodCapacity;
    $this->currentFoodQuantity = $maxFoodCapacity;
  }

  public function canServe(Animal $animal)
  {
    if ($this->currentFoodQuantity > $this->calculatedRationSize($animal) and $animal->isHungry()) {
      return true;
    } else {
      return false;
    }
  }

  private function calculatedRationSize(Animal $animal)
  {
    return $animal->getWeight() / 100;
  }

  public function doFunction(Animal $animal)
  {
    if ($this->canServe($animal)) {
      $animal->eat($this->calculatedRationSize($animal));
      $this->currentFoodQuantity - $this->calculatedRationSize($animal);
    }
  }

  protected function needsReloading()
  {
    return ($this->currentFoodQuantity < 15000);
  }

  public function reload()
  {
    if ($this->needsReloading()) {
      $this->currentFoodQuantity = $this->maxFoodCapacity;
    }
  }
}
