<?php

include_once("Device.php");

class VaccinationDevice extends Device
{
  private $numberOfVaccineDoses = 50;

  public function canServe(Animal $animal)
  {
    if ($animal instanceof Cow and $animal->vaccinationStatus() == false) {
      return true;
    } else if ($animal instanceof Pig) {
      return true;
    } else {
      return false;
    }
  }

  public function doFunction(Animal $animal)
  {
    if ($this->canServe($animal)) {
      $animal->vaccinate();
    }
  }

  protected function needsReloading()
  {
    return $this->numberOfVaccineDoses = 0;
  }

  public function reload()
  {
    if ($this->needsReloading()) {
      $this->numberOfVaccineDoses = 50;
    }
  }
}
