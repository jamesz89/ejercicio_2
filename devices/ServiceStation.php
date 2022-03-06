<?php

class ServiceStation
{
  private $feedingDevice;
  private $drinkingDevice;
  private $vaccinationDevice;

  public function __construct(FeedingDevice $feedingDevice, DrinkingDevice $drinkingDevice, VaccinationDevice $vaccinationDevice)
  {
    $this->feedingDevice = $feedingDevice;
    $this->drinkingDevice = $drinkingDevice;
    $this->vaccinationDevice = $vaccinationDevice;
  }

  public function canServe(Animal $animal)
  {
    if ($this->feedingDevice->canFeed($animal) or $this->drinkingDevice->canServeWater($animal) or $this->vaccinationDevice->canAdministerVaccince($animal)) {
      return true;
    } else {
      return false;
    }
  }
}
