<?php

abstract class Animal
{
  protected $weight;
  protected $hunger;
  protected $thrist = false;
  protected $isVaccinated = false;

  protected function __construct($weight)
  {
    $this->weight = $weight;
  }

  public function isHungry()
  {
    return $this->hunger;
  }

  public function getWeight()
  {
    return $this->weight;
  }

  abstract public function eat($quantity);

  protected function makeHungry()
  {
    $this->hunger = true;
  }

  protected function satisfyHunger()
  {
    $this->hunger = false;
  }

  abstract protected function gainWeight($quantity);

  abstract public function drink();

  public function getThrist()
  {
    return $this->thrist;
  }

  protected function makeThristy()
  {
    $this->thrist = true;
  }

  protected function satisfyThrist()
  {
    $this->thrist = false;
  }

  public function vaccinationStatus()
  {
    return $this->isVaccinated;
  }

  public function vaccinate()
  {
    $this->isVaccinated = true;
  }
}
