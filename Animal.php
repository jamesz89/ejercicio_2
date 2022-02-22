<?php

abstract class Animal
{
  protected $weight;
  protected $hunger;

  public function __construct($weight)
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

  abstract function eat($quantity);

  protected function makeHungry()
  {
    $this->hunger = true;
  }

  protected function satisfyHunger()
  {
    $this->hunger = false;
  }

  abstract function gainWeight($quantity);
}
