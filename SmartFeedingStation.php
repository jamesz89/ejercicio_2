<?php

class SmartFeedingStation extends FeedingStation
{
  private $maxFoodCapacity;
  private $currentFoodQuantity;

  public function __construct($maxFoodCapacity)
  {
    $this->maxFoodCapacity = $maxFoodCapacity;
    $this->currentFoodQuantity = $maxFoodCapacity;
  }

  private function canFeed(Animal $animal)
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

  public function feed(Animal $animal)
  {
    if ($this->canFeed($animal)) {
      $animal->eat($this->calculatedRationSize($animal));
      $this->currentFoodQuantity - $this->calculatedRationSize($animal);
      if ($this->currentFoodQuantity < 15000) {
        $this->needsReload = true;
      }
    }
  }

  public function reload()
  {
    if ($this->needsReload) {
      $this->currentFoodQuantity = $this->maxFoodCapacity;
    }
  }
}
