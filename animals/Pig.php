<?php

class Pig extends Mammal
{
  private $maxQuantityEaten = 0;
  private $timesHasEatenWithoutDrinking = 0;

  public function __construct($weight)
  {
    Animal::__construct($weight);
    $this->hunger = false;
  }
  public function eat($quantity)
  {
    if ($quantity > 1000) {
      $this->gainWeight($quantity);
      $this->satisfyHunger();
    } else if ($quantity > 200 and $quantity < 999) {
      $this->gainWeight($quantity);
    }
    if ($quantity > $this->maxQuantityEaten) {
      $this->maxQuantityEaten = $quantity;
    }
    $this->timesHasEatenWithoutDrinking = $this->timesHasEatenWithoutDrinking + 1;
    if ($this->timesHasEatenWithoutDrinking > 3) {
      $this->makeThristy();
    }
  }

  public function drink()
  {
    $this->satisfyThrist();
    $this->makeHungry();
    $this->timesHasEatenWithoutDrinking = 0;
  }

  protected function gainWeight($quantity)
  {
    $this->weight = $this->weight + $quantity - 200;
  }
}
