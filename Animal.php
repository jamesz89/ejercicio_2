<?php

abstract class Animal
{
  protected $weight;
  protected $isHungry;

  public function __construct($weight)
  {
    $this->weight = $weight;
  }

  public function getWeight()
  {
    return $this->weight;
  }

  abstract function eat($quantity);

  protected function makeHungry()
  {
    $this->isHungry = true;
  }

  protected function satisfyHunger()
  {
    $this->isHungry = false;
  }

  abstract function gainWeight($amount);
}
