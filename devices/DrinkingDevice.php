<?php

include_once("Device.php");

class DrinkingDevice extends Device
{
  private $numberOfAnimalsServed = 0;

  public function doFunction(Animal $animal)
  {
    if ($this->canServe($animal)) {
      $animal->drink();
      $this->numberOfAnimalsServed = $this->numberOfAnimalsServed + 1;
    }
  }

  public function canServe(Animal $animal)
  {
    if ($animal->getThrist() and $this->numberOfAnimalsServed < 20) {
      return true;
    } else {
      return false;
    }
  }

  protected function needsReloading()
  {
    return $this->numberOfAnimalsServed >= 20;
  }

  public function reload()
  {
    if($this->needsReloading())
    $this->numberOfAnimalsServed = 0;
  }
}
