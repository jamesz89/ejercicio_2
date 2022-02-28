<?php

abstract class Mammal extends Animal
{
  protected $thirst = false;
  protected $isVaccinated = false;

  public function getThrist()
  {
    return $this->thirst;
  }

  protected function makeThristy()
  {
    $this->thirst = true;
  }

  protected function satisfyThrist()
  {
    $this->thirst = false;
  }

  public function vaccinationStatus()
  {
    return $this->isVaccinated;
  }

  public function vaccinate()
  {
    $this->isVaccinated = true;
  }

  abstract function drink();
}
