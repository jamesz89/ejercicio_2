<?php

abstract class Mammal extends Animal
{
  protected $isThirsty = false;
  protected $isVaccinated = false;

  protected function makeThristy()
  {
    $this->isThirsty = true;
  }

  protected function satisfyThrist()
  {
    $this->isThirsty = false;
  }

  public function vaccinate()
  {
    $this->isVaccinated = true;
  }

  abstract function drink();
}
