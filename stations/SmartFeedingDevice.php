<?php

include_once("FeedingDevice.php");

class SmartFeedingDevice extends FeedingDevice
{
  private $maxFoodCapacity;
  private $currentFoodQuantity;

  public function __construct($maxFoodCapacity)
  {
    $this->maxFoodCapacity = $maxFoodCapacity;
    $this->currentFoodQuantity = $maxFoodCapacity;
  }

  public function canFeed(Animal $animal)
  {
    if ($this->currentFoodQuantity > $this->calculatedRationSize($animal) and $animal->getHunger()) {
      return true;
    } else {
      return false;
    }
  }

  private function calculatedRationSize(Animal $animal)
  {
    return $animal->getWeight() / 100;
  }

  public function feed(Animal $animal)
  {
    if ($this->canFeed($animal)) {
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
