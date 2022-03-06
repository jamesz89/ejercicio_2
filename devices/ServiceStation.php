<?php

class ServiceStation
{
  private $device1;
  private $device2;
  private $device3;

  public function __construct(Device $device1, Device $device2, Device $device3)
  {
    $this->device1 = $device1;
    $this->device2 = $device2;
    $this->device3 = $device3;
  }

  public function canServe(Animal $animal)
  {
    if ($this->device1->canServe($animal) or $this->device2->canServe($animal) or $this->device3->canServe($animal)) {
      return true;
    }
  }

  private function pickRandomDevice()
  {
    $choice = rand(1, 3);

    if ($choice == 1) {
      return $this->device1;
    } else if ($choice == 2) {
      return $this->device2;
    } else if ($choice == 3) {
      return $this->device3;
    }
  }

  public function serve(Animal $animal)
  {
    $this->pickRandomDevice()->doFunction($animal);
  }
}
