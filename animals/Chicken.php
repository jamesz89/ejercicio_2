<?php

include_once("Animal.php");

class Chicken extends Animal
{
  private $timesHasEaten = 0;

  public function __construct()
  {
    $this->hunger = true;
    $this->weight = 4000;
  }

  public function eat($quantity)
  {
    $this->timesHasEaten = $this->timesHasEaten + 1;
    $this->gainWeight(0);
  }

  protected function gainWeight($quantity)
  {
    $this->weight = $this->weight + ($quantity * 0);
  }
}
