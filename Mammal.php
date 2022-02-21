<?php

abstract class Mammal extends Animal
{
  protected $isThirsty;
  protected $isVaccinated;

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

  abstract function gainWeight($amount);

  abstract function drink();
}
