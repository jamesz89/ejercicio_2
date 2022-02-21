<?php

class Pig extends Mammal
{
  private $maxAmountEaten = 0;
  private $timesHasEatenWithoutDrinking = 0;

  public function eat($amount)
  {
    if ($amount > 1000) {
      $this->gainWeight($amount);
      $this->satisfyHunger();
    } else if ($amount > 200 < 999) {
      $this->gainWeight($amount);
    }
    if ($amount > $this->maxAmountEaten) {
      $this->maxAmountEaten = $amount;
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

  public function gainWeight($amount)
  {
    $this->weight = $this->weight + $amount - 200;
  }
}
