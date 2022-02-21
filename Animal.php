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

  protected function makeHungry()
  {
    $this->isHungry = true;
  }

  protected function satisfyHunger()
  {
    $this->isHungry = false;
  }
}
