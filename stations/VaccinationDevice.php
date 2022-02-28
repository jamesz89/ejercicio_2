<?php

class VaccinationDevice extends Device
{
  private $numberOfVaccineDoses = 50;

  private function canAdministerVaccince(Mammal $mammal)
  {
    if ($mammal instanceof Cow and $mammal->vaccinationStatus() == false) {
      return true;
    } else if ($mammal instanceof Pig) {
      return true;
    } else {
      return false;
    }
  }

  public function administerVaccine(Mammal $mammal)
  {
    if ($this->canAdministerVaccince($mammal)) {
      $mammal->vaccinate();
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
