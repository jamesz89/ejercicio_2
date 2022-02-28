<?php

class Pig extends Mammal
{
  private $maxQuantityEaten = 0;
  private $timesHasEatenWithoutDrinking = 0;

  public function __construct($weight)
  {
    Animal::__construct($weight);
    $this->hunger = true;
  }
  public function eat($quantity)
  {
    if ($quantity > 200) {
      $this->gainWeight($quantity);
    }
    if ($quantity > 1000) {
      $this->satisfyHunger();
    }
    $this->updateMaxQuantityEaten($quantity);
    $this->updateTimesEatenWithoutDrinking();
  }

  private function updateTimesEatenWithoutDrinking()
  {
    $this->timesHasEatenWithoutDrinking = $this->timesHasEatenWithoutDrinking + 1;
    if ($this->timesHasEatenWithoutDrinking > 3) {
      $this->makeThristy();
    }
  }

  private function updateMaxQuantityEaten($quantity)
  {
    if ($quantity > $this->maxQuantityEaten) {
      $this->maxQuantityEaten = $quantity;
    }
  }

  public function drink()
  {
    $this->satisfyThrist();
    $this->timesHasEatenWithoutDrinking = 0;
  }

  protected function gainWeight($quantity)
  {
    $this->weight = $this->weight + $quantity - 200;
  }
}
