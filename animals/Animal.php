<?php

abstract class Animal
{
  protected $weight;
  protected $hunger;
  protected $thirst;

  public function __construct($weight)
  {
    $this->weight = $weight;
  }

  public function getHunger()
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

  abstract protected function gainWeight($quantity);
}
