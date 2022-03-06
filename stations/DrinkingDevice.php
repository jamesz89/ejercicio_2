<?php

class DrinkingDevice extends Device
{
  private $numberOfAnimalsServed;

  public function serveWater(Mammal $mammal)
  {
    if ($this->canServeWater($mammal)) {
      $mammal->drink();
      $this->numberOfAnimalsServed = $this->numberOfAnimalsServed + 1;
    }
  }

  public function canServeWater(Mammal $mammal)
  {
    if ($mammal->getThrist() and $this->numberOfAnimalsServed < 20) {
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
    $this->numberOfAnimalsServed = 0;
  }
}
